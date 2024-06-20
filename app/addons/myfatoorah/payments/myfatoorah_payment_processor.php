<?php

// Preventing direct access to the script, because it must be included by the "include" directive. The "BOOTSTRAP" constant is declared during system initialization.
defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

require_once 'MyfatoorahController.php';
$controller = new MyfatoorahController();
//-----------------------------------------------------------------------------------------------------------------------------------------
// Here are two different contexts for running the script.



if (defined('PAYMENT_NOTIFICATION')) {
    /**
     * Receiving and processing the answer
     * from third-party services and payment systems.
     *
     * Available variables:
     * @var string $mode The purpose of the request
     */
    if (empty($_REQUEST['paymentId']) || empty($_REQUEST['orid'])) {
        return; //it will return 404 Error
    }


    try {
        $orderId   = base64_decode($_REQUEST['orid']);
        $paymentId = $_REQUEST['paymentId'];

        $order_info = fn_get_order_info($orderId);
        if (!$order_info) {
            return;
        }

        $json = $controller->mf->getPaymentStatus($paymentId, 'PaymentId', $orderId);


        //get $succssTransaction obj
        foreach ($json->Data->InvoiceTransactions as $transaction) {
            if ($transaction->PaymentId == $paymentId) {
                break;
            }
        }


        $pp_response = [
            'order_status'   => Registry::get('addons.myfatoorah.orderStatus'),
            'invoice_id'     => $json->Data->InvoiceId,
            'transaction_id' => $paymentId,
            'gateway'        => $transaction->PaymentGateway,
        ];

        error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- Success", 3, 'var/myfatoorah.log');

        fn_finish_payment($orderId, $pp_response, true);
        fn_order_placement_routines('route', $orderId);
    } catch (Exception $ex) {
        $err = $ex->getMessage();
        error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- Faild with $err", 3, 'var/myfatoorah.log');

        fn_set_notification('E', __('Error'), $err);
        fn_change_order_status($orderId, 'F');
        fn_redirect('checkout.checkout');
    }
} else {

    /**
     * Running the necessary logic for payment acceptance
     * after the customer presses the "Submit my order" button.
     *
     * available variables:
     *
     * @var array $order_info     Full information about the order
     * @var array $processor_data Information about the payment processor
     */
    try {
        $curlData = $controller->getPayLoadData($order_info);
        $data     = $controller->mf->getInvoiceURL($order_info['order_id'], $curlData);

        header('Location:  ' . $data['invoiceURL']);
        exit;
    } catch (Exception $ex) {
        $err = $ex->getMessage();
        error_log(PHP_EOL . date('d.m.Y h:i:s') . ' - Order #' . $order_info['order_id'] . " ----- Faild with $err", 3, 'myfatoorah.log');

        fn_set_notification('E', __('Error'), $err);
        fn_redirect('checkout.checkout');
    }
}