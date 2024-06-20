<?php

use Tygh\Registry;

require_once dirname(__FILE__) . '/../library/PaymentMyfatoorahApiV2.php';

/**
 * Myfatoorah V2 Payment Gateway class.
 *
 * used by individual payment gateways to handle payments.
 *
 * @class       MyfatoorahController
 * @version     2.0.0
 */
class MyfatoorahController {
//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Constructor
     */
    public function __construct() {
        
        $apiKey   = Registry::get('addons.myfatoorah.apiKey');
        $testMode = Registry::get('addons.myfatoorah.testMode');
        

        $debugMode = Registry::get('addons.myfatoorah.debugMode');
        $debugFile = ($debugMode === 'Y') ? 'var/myfatoorah.log' : '';

        
        $this->mf = new PaymentMyfatoorahApiV2($apiKey, ($testMode === 'Y'), $debugFile);
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
    function getPayLoadData($order_info) {

        $name     = $order_info['firstname'] . ' ' . $order_info['lastname'];
        $phoneArr = $this->mf->getPhone($order_info['phone']);


        //todo $returnUrl = $this->url->link($this->path . '/callback') . '&orid=' . base64_encode($order_info['order_id']);
        $urlParam     = 'payment=myfatoorah_payment_processor&orid=' . base64_encode($order_info['order_id']);
        $callBackURL = fn_url("payment_notification?$urlParam");

        $address         = $order_info['s_address'] . ' ' . $order_info['s_address_2'];
        $customerAddress = array(
            'Block'               => '',
            'Street'              => '',
            'HouseBuildingNo'     => '',
            'Address'             => $address,
            'AddressInstructions' => ''
        );

//    $shippingConsignee = array(
//        'PersonName'   => $name,
//        'Mobile'       => $phoneArr[1],
//        'EmailAddress' => $order_info['email'],
//        'LineAddress'  => $address,
//        'CityName'     => $order_info['s_city'],
//        'PostalCode'   => $order_info['s_zipcode'],
//        'CountryCode'  => $order_info['s_country']
//    );


        $amount       = $order_info['total'];
        $invoiceItems = [['ItemName' => 'Total Amount of Order #' . $order_info['order_id'], 'Quantity' => 1, 'UnitPrice' => "$amount"]];

//    $amount       = 0;
//    $invoiceItems  = getInvoiceItems();
//todo see if there is an default expiretime
//todo 'CustomerCivilId'    => $civilId
//todo check for ar lang
//todo diff bet $order_info['secondary_currency']  CART_PRIMARY_CURRENCY   CART_SECONDARY_CURRENCY if thr total not the current convert use fn_format_price_by_currency($price
//todo $phoneArr[1] in the $shippingConsignee


        $curl_data = [
            'CustomerName'       => $name,
            'DisplayCurrencyIso' => $order_info['secondary_currency'],
            'MobileCountryCode'  => $phoneArr[0],
            'CustomerMobile'     => $phoneArr[1],
            'CustomerEmail'      => $order_info['email'],
            'InvoiceValue'       => $amount,
            'CallBackUrl'        => $callBackURL,
            'ErrorUrl'           => $callBackURL,
            'Language'           => Registry::get('settings.Appearance.frontend_default_language'),
            'CustomerReference'  => $order_info['order_id'],
            'UserDefinedField'   => $order_info['order_id'],
            'ExpiryDate'         => '',
            'SourceInfo'         => 'CS-Cart ' . PRODUCT_VERSION . ' - ' . 'Myfatoorah v2',
            'CustomerAddress'    => $customerAddress,
//            'ShippingConsignee'  => ($shipingMethod) ? $shippingConsignee : null,
//            'ShippingMethod'     => $shipingMethod,
            'InvoiceItems'       => $invoiceItems,
        ];

        return $curl_data;
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
//function getInvoiceItems($order, &$amount, $shipingMethod) {
    function getInvoiceItems($order_info) {
        $items           = array();
        $product_options = array();

        $auth = \Tygh::$app['session']['auth'];

        $description_mode = Registry::get('addons.myfatoorah.description_mode');
        foreach ($order_info['products'] as $product) {

            if ($description_mode == "short_description") {
                $product_data = fn_get_product_data($product['product_id'], $auth, CART_LANGUAGE, '', true, true, true, false, false, true, false, true);
            } else {
                if (!empty($product['product_options'])) {

                    foreach ($product['product_options'] as $opt) {
                        array_push($product_options, $opt['option_name'] . ": " . $opt['variant_name']);
                    }
                } else {
                    $product_options = array();
                }
            }

            if (!empty($product_options)) {
                $attributes = implode(", ", $product_options);
            } else {
                $attributes = "";
            }

            if (!empty($product_data['short_description'])) {
                $short_description = $product_data['short_description'];
            } else {
                $short_description = "";
            }
            array_push($items, $product['price'] . "|" .
                    $product['amount'] . "|" .
                    $product['product'] . "|" . $short_description . "|" . $attributes);
        }

        $order_name        = "";
        $order_description = "";

        $taxes = 0;

        foreach ($order_info['taxes'] as $v) {
            foreach ($v['applies']['items']['P'] as $k1 => $v1) {
                $taxes += $v['tax_subtotal'];
            }
        }
        $shipping = 0;
        foreach ($order_info['shipping'] as $v) {
            $shipping += $v['rate'];
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
}
