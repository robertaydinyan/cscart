<?php

class FoloosipayPayment
{

    public function getSessionValue($key)
    {
        return $_SESSION[$key];
    }

    public function setSessionValues($sessionValues)
    {
        foreach($sessionValues as $key => $value)
        {
            $_SESSION[$key] = $value;
        }
    }

    public function getOrderData($orderId, $orderInfo, $processorData)
    {
        $data = array(
            'receipt'         => $orderId,
            'payment_capture' => 1
        );

        return $data;
    }

    public function generateHtmlForm($url, $fields)
    {        
        $json = json_encode($fields);
        $html;
        if($fields['redirection']){
            $html = <<<EOT
                <!DOCTYPE html>
                <body>
                <script type="text/javascript" src="https://www.foloosi.com/js/foloosipay.v2.js"></script>

                <script type="text/javascript">
                    var data = $json;

                    var options = {
                        "reference_token" : data.reference_token,
                        "merchant_key" : data.merchant_key,
                        "redirect" : true
                    }

                    var fp1 = new Foloosipay(options);
                    fp1.open();
                </script>
                <p id="payment-succ-para"></p>                   

                </body>
                </html>
EOT;
return $html;
        }else{
        $html = <<<EOT
                <!DOCTYPE html>
                <body>
                <script type="text/javascript" src="https://www.foloosi.com/js/foloosipay.v2.js"></script>

                <script type="text/javascript">
                    var data = $json;

                    var options = {
                        "reference_token" : data.reference_token,
                        "merchant_key" : data.merchant_key
                    }

                    var fp1 = new Foloosipay(options);
                    fp1.open();

                    foloosiHandler(response, function (e) {
                        if(e.data.status == 'success'){
                            document.getElementById('payment-succ-para').innerHTML = "Payment Successful...Redirecting...";
                            document.getElementById('foloosi_payment_id').value = e.data.data.transaction_no;
                            document.getElementById('foloosipay-form').submit();
                        }
                        if(e.data.status == 'error'){
                            document.getElementById('payment-succ-para').innerHTML = "Payment Failed...Redirecting...";
                            document.getElementById('foloosi_payment_id').value = e.data.data.transaction_no;
                            document.getElementById('foloosipay-form').submit();
                        }
                        if(e.data.status == 'closed'){
                            window.location.replace('$url');
                        }
                    });
                </script>
                <p id="payment-succ-para"></p>
                <form name="foloosipay-form" id="foloosipay-form" action="$url" target="_parent" method="POST">
                    <input type="hidden" name="foloosi_payment_id" id="foloosi_payment_id" />
                </form>                    

                </body>
                </html>
EOT;
return $html;
}
        

        
    }

    public function processFoloosipayResponse()
    {      
        $foloosipayPaymentId = null;
        if (isset($_POST['foloosi_payment_id']) === true)
        {
            $foloosipayPaymentId = $_POST['foloosi_payment_id']; /* Transaction ID returned after payment from FOLOOSI */
        }

        $merchantOrderId = $_SESSION['merchant_order_id'] ? $_SESSION['merchant_order_id'] : $_POST['optional1'];
        
        if ((empty($foloosipayPaymentId) === false))
        {
            if (fn_check_payment_script('foloosipay.php', $merchantOrderId, $processorData))
            {
                $merchantKey = $processorData['processor_params']['merchant_key'];

                $secretKey = $processorData['processor_params']['secret_key'];

                $orderInfo = fn_get_order_info($merchantOrderId);

                /*--- Getting Transaction Details from Foloosi ---*/
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,"https://api.foloosi.com/v1/api/transaction-detail/".$foloosipayPaymentId);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'secret_key:'.$secretKey,
                ]);
                $apiResponse = curl_exec($ch);
                curl_close($ch);
                /*--- Getting Transaction Details from Foloosi ---*/

                $jsonArrayResponse = json_decode($apiResponse);
                $transactionStatus = $jsonArrayResponse->data->status;

                if(!empty($transactionStatus) && $transactionStatus === "success"){
                    $success = true;
                } else {
                    $success = false;
                    $error = "PAYMENT_ERROR: Payment failed";
                }                
            }
            else
            {
                $error = 'FOLOOSI_ERROR: Invalid Response';

                $success = false;
            }

            if ($success === true)
            {
                $pp_response['order_status'] = 'P';
                $pp_response['reason_text'] = fn_get_lang_var('text_fp_success');
                $pp_response['transaction_id'] = $merchantOrderId;
                $pp_response['client_id'] = $foloosipayPaymentId;

                fn_finish_payment($merchantOrderId, $pp_response, false);
                if($orderInfo['user_id']!=0){
                  fn_login_user($orderInfo['user_id']);
                }
                fn_order_placement_routines('route', $merchantOrderId);
                exit;              
            }
            else
            {
                $this->handleFailedPayment($error, $foloosipayPaymentId, $merchantOrderId);
            }
        }
        else if (isset($_POST['error']) === true)
        {
            $error = $_POST['error'];
            $message = 'An error occured. Description : ' . $error['description'] . '. Code : ' . $error['code'];
            if (isset($error['field']) === true)
            {
                $message .= 'Field : ' . $error['field'];
            }

            $this->handleFailedPayment($message, $foloosipayPaymentId, $merchantOrderId);
        }
        else
        {
            fn_set_notification('E', __('error'), __('text_fp_failed_order').$merchantOrderId);
            fn_order_placement_routines('checkout_redirect');
        }
    }

    protected function handleFailedPayment($errorMessage, $foloosipayPaymentId, $merchantOrderId)
    {
        $pp_response['order_status'] = 'O';
        $pp_response['reason_text'] = fn_get_lang_var('text_fp_pending').$errorMessage;
        $pp_response['transaction_id'] = $merchantOrderId;
        $pp_response['client_id'] = $foloosipayPaymentId;

        
        fn_finish_payment($merchantOrderId, $pp_response, false);
        if($orderInfo['user_id']!=0){
          fn_login_user($orderInfo['user_id']);
        }
        fn_set_notification('E', __('error'), __('text_fp_failed_order').$merchantOrderId);
        fn_order_placement_routines('checkout_redirect');
        exit;
    }

    public function getButton()
    {
       $url = fn_url("index.php?dispatch=checkout.process_payment&clicked=true", AREA, 'current');

       $html = <<<EOT
<!DOCTYPE html>
<body>
<a href="$url">
    <button id="mybutton" type="button"
        style="background-color:#0EAC99;height:22px:width:150px;border: none;
        color: white;font-size: 16px;padding: 6px 7px;">SUBMIT MY ORDER
    </button>
</a>
</body>
</html>
EOT;
        return $html;
    }
}

?>
