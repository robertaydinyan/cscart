<?php
use Tygh\Registry;

include_once ('foloosipay/foloosipay_common.inc');
require_once ('foloosipay/FoloosipayPayment.php');

if ( !defined('AREA') ) { die('Access denied'); }

// Return from payment
if (defined('PAYMENT_NOTIFICATION'))
{
    if ($mode == 'return') {
        if (isset($view) === false)
        {
            $view = Registry::get('view');
        }

        $view->assign('order_action', __('placing_order'));
        $view->display('views/orders/components/placing_order.tpl');
        fn_flush();

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if (isset($_POST['foloosi_payment_id']) === true){
                $foloosipayPayment = new FoloosipayPayment();
                $foloosipayPayment->processFoloosipayResponse();
                exit;
            }
        } else {     
            fn_set_notification('E', __('error'), __('text_fp_cancelled'));
            fn_order_placement_routines('checkout_redirect');
        } 
    }
}
else 
{
    $foloosipayPayment = new FoloosipayPayment();

    if ((defined('IFRAME_MODE') === true) and (empty($_GET['clicked']) === true))
    {
        echo $foloosipayPayment->getButton();
    }
    else
    {
        $url = fn_url("payment_notification.return?payment=foloosipay", AREA, 'current');
        $data = $foloosipayPayment->getOrderData($order_id, $order_info, $processor_data);
        $merchantKey = $processor_data['processor_params']['merchant_key'];
        $secretKey   = $processor_data['processor_params']['secret_key'];
        $redirection = $processor_data['processor_params']['Redirection'];
        $savedCard = $processor_data['processor_params']['SavedCard'];

        try
        {
            /*---  Initialize API Setup ---*/
            $customerFirstName = !empty($order_info['firstname']) ? $order_info['firstname'] : ""; 
            $customerLastName  = !empty($order_info['lastname']) ? $order_info['lastname'] : ""; 
            $billing_country_code =  fn_fp_iso_country_code($order_info['b_country']);

            $user_info = $_SESSION['cart']['user_data'];
            $postRequest = [
                'redirect_url'         => '',
                'transaction_amount'   => fn_fp_adjust_amount($order_info['total'], $order_info['secondary_currency']),
                'source'               => 'cscart marketplace',
                'currency'             => $order_info['secondary_currency'],
                'customer_name'        => $customerFirstName. " " . $customerLastName,
                'customer_email'       => !empty($order_info['email']) ? $order_info['email'] : "",
                'customer_mobile'      => !empty($order_info['phone']) ? $order_info['phone'] : "",
                'customer_address'     => !empty($order_info['s_address']) ? $order_info['s_address'] : "",
                'customer_city'        => !empty($order_info['s_city']) ? $order_info['s_city'] : "",
                'billing_country'      => !empty($billing_country_code) ? $billing_country_code : "",
                'billing_state'        => !empty($order_info['b_state']) ? $order_info['b_state'] : "",
                'billing_postal_code'  => !empty($order_info['b_zipcode']) ? $order_info['b_zipcode'] : "",
                'optional1'            => $order_id
            ];
            if($redirection == 1){
                $postRequest['site_return_url'] =  $url;
            }
            
            if($user_info['user_id'] && $savedCard == 1){
                $postRequest['customer_unique_identifier'] = !empty($user_info['email']) ? $user_info['email'].$user_info['user_id'] :$order_info['email'].$user_info['user_id'];
            }
            
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://api.foloosi.com/aggregatorapi/web/initialize-setup");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$postRequest);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'merchant_key:'.$merchantKey,
            ]);

            $apiResponse = curl_exec($ch);
            curl_close($ch);
            $jsonArrayResponse = json_decode($apiResponse);
            $referenceToken = $jsonArrayResponse->data->reference_token;
            /*---  Initialize API Setup ---*/

        }
        catch (\Exception $e)
        {
            echo 'CS Cart Error : ' . $e->getMessage();
        }

        if (!$referenceToken || empty($referenceToken))
        {
            echo __('Foloosi Payment Token error...Please Contact Administrator!');
            exit;
        }
        
        $sessionValues = array(
            'merchant_order_id' => $order_id
        );

        $foloosipayPayment->setSessionValues($sessionValues);

        $fields = array(
            'merchant_key'         => $merchantKey,
            'amount'      => fn_fp_adjust_amount($order_info['total'], $order_info['secondary_currency']),
            'currency'    => $order_info['secondary_currency'],
            'description' => "Order# ".$order_id,
            'name'        => Registry::get('settings.Company.company_name'),
            'reference_token' => $referenceToken,
            'prefill'     => array(
                'name'    => $order_info['b_firstname'] . " " . $order_info['b_lastname'],
                'email'   => $order_info['email'],
                'contact' => $order_info['phone']
            ),
            'notes'       => array(
                'cs_order_id' => $order_id,
            ),
            'callback_url' => $url,
            '_' => array(
              'integration' => 'cscart',
              'integration_parent_version' => PRODUCT_VERSION
            )
        );
        if($redirection == 1){
            $fields['redirection'] =  true;
        }

        if (!$fields['amount'])
        {
            echo __('text_unsupported_currency');
            exit;
        }

        echo $foloosipayPayment->generateHtmlForm($url, $fields);
    }
    exit;
}
die;
?>
