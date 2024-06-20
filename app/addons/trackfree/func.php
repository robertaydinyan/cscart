<?php
use Tygh\Registry;
use Tygh\Mailer;
use Tygh\Navigation\LastView;
use Tygh\Settings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_get_trackfree_settings($storefront_id = null)
{
    $tf_settings = Settings::instance()->getValues('trackfree', 'ADDON', false);
    if (!empty($tf_settings['tf_statuses'])) {
        $tf_settings['tf_statuses'] = unserialize($tf_settings['tf_statuses']);
    } else {
        $tf_settings['tf_statuses'] = [];
    }

    return $tf_settings;
}

function fn_update_trackfree_settings(array $settings, $storefront_id = null)
{
    if (isset($settings['tf_statuses'])) {
        $settings['tf_statuses'] = serialize($settings['tf_statuses']);
    }
    $settings['trackfree_auto_order_status'] = $settings['trackfree_auto_order_status'] ? $settings['trackfree_auto_order_status'] : 'N';
    $settings['trackfree_email'] = $settings['trackfree_email'];
    $settings['trackfree_api_key'] = $settings['trackfree_api_key'];

    $settings_manager = Settings::instance(['storefront_id' => $storefront_id]);
    foreach ($settings as $setting_name => $setting_value) {
        $settings_manager->updateValue($setting_name, $setting_value);
    }

    $trackfree_api_key = fn_get_trackfree_api_key();
    $data_string = array(
        'api_key' => $trackfree_api_key,
        'settings' => $settings
    );

    $url = "https://trackfree.io/api/cs_order_status_settings";

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
    curl_close($curl);
}

function fn_trackfree_place_order_post(array $cart, array $auth, $action, $issuer_id, $parent_order_id, $order_id)
{
    $order_info = fn_get_order_info($order_id, false, false);

    $push_order = array();
    $push_order['order_id'] = $order_info['order_id'];
    $push_order['email'] = $order_info['email'];
    $push_order['firstname'] = $order_info['firstname'];
    $push_order['lastname'] = $order_info['lastname'];
    $push_order['phone'] = $order_info['phone'];
    $push_order['status'] = $order_info['status'];
    $push_order['payment_method'] = $order_info['payment_method']['payment'];
    $push_order['shipping_method'] = $order_info['shipping'][0]['shipping'];
    $push_order['total'] = $order_info['total'];
    $push_order['timestamp'] = $order_info['timestamp'];
    $push_order['notes'] = $order_info['notes'];
    $push_order['s_firstname'] = $order_info['s_firstname'];
    $push_order['s_lastname'] = $order_info['s_lastname'];
    $push_order['s_address'] = $order_info['s_address'];
    $push_order['s_address_2'] = $order_info['s_address_2'];
    $push_order['s_city'] = $order_info['s_city'];
    $push_order['s_state'] = $order_info['s_state'];
    $push_order['s_country'] = $order_info['s_country'];
    $push_order['s_zipcode'] = $order_info['s_zipcode'];
    $push_order['subtotal'] = $order_info['subtotal'];
    $push_order['discount'] = $order_info['discount'];
    $push_order['shipping_cost'] = $order_info['shipping_cost'];
    $push_order['taxes'] = $order_info['taxes'];

    $products = [];
    foreach ($order_info['products'] as $product) {
        $product_image = fn_get_cart_product_icon($product['product_id'], $product);
        $product_options = [];
        if (sizeof($product['variation_features'])) {
            foreach ($product['variation_features'] as $variants) {
                $product_option['name'] =  $variants['description'];
                $product_options['value'] = $variants['variant'];
                $product_options['id'] = $variants['variant_id'];
            }
        }
        $products[] = [
            'product_id' => $product['product_id'],
            'name' => $product['product'],
            'price' => $product['price'],
            'quantity' => $product['amount'],
            'total' => $product['subtotal'],
            'product_url' => $product['product_url'],
            'image_url' => $product_image['detailed']['image_path'],
            'product_options' => $product_options
        ];
    }
    $push_order['products'] = $products;
    $push_order['order_statuses'] = fn_get_statuses(STATUSES_ORDER);

    $url = "https://trackfree.io/api/cs_order_create";
    $trackfree_api_key = fn_get_trackfree_api_key();

    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order" => $push_order
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($curl);
    curl_close($curl);
}

function fn_trackfree_place_order_manually_post($cart, $params, $order_info) {
    $push_order = array();
    $push_order['order_id'] = $order_info['order_id'];
    $push_order['email'] = $order_info['email'];
    $push_order['firstname'] = $order_info['firstname'];
    $push_order['lastname'] = $order_info['lastname'];
    $push_order['phone'] = $order_info['phone'];
    $push_order['status'] = $order_info['status'];
    $push_order['payment_method'] = $order_info['payment_method']['payment'];
    $push_order['shipping_method'] = $order_info['shipping'][0]['shipping'];
    $push_order['total'] = $order_info['total'];
    $push_order['timestamp'] = $order_info['timestamp'];
    $push_order['notes'] = $order_info['notes'];
    $push_order['s_firstname'] = $order_info['s_firstname'];
    $push_order['s_lastname'] = $order_info['s_lastname'];
    $push_order['s_address'] = $order_info['s_address'];
    $push_order['s_address_2'] = $order_info['s_address_2'];
    $push_order['s_city'] = $order_info['s_city'];
    $push_order['s_state'] = $order_info['s_state'];
    $push_order['s_country'] = $order_info['s_country'];
    $push_order['s_zipcode'] = $order_info['s_zipcode'];
    $push_order['subtotal'] = $order_info['subtotal'];
    $push_order['discount'] = $order_info['discount'];
    $push_order['shipping_cost'] = $order_info['shipping_cost'];
    $push_order['taxes'] = $order_info['taxes'];

    $products = [];
    foreach ($order_info['products'] as $product) {
        $product_image = fn_get_cart_product_icon($product['product_id'], $product);
        $product_options = [];
        if (sizeof($product['variation_features'])) {
            foreach ($product['variation_features'] as $variants) {
                $product_option['name'] =  $variants['description'];
                $product_options['value'] = $variants['variant'];
                $product_options['id'] = $variants['variant_id'];
            }
        }
        $products[] = [
            'product_id' => $product['product_id'],
            'name' => $product['product'],
            'price' => $product['price'],
            'quantity' => $product['amount'],
            'total' => $product['subtotal'],
            'product_url' => $product['product_url'],
            'image_url' => $product_image['detailed']['image_path'],
            'product_options' => $product_options
        ];
    }
    $push_order['products'] = $products;
    $push_order['order_statuses'] = fn_get_statuses(STATUSES_ORDER);

    $url = "https://trackfree.io/api/cs_order_update";
    $trackfree_api_key = fn_get_trackfree_api_key();

    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order" => $push_order
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($curl);
    curl_close($curl);
}

function fn_trackfree_change_order_status_post($order_id, $status_to, $status_from, $force_notification, $place_order, $order_info, $edp_data)
{
    $trackfree_api_key = fn_get_trackfree_api_key();
    $url = "https://trackfree.io/api/cs_update_order_status";

    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order_id" => $order_id,
        "status_to" => $status_to,
        "status_from" => $status_from,
        "order_statuses" => fn_get_statuses(STATUSES_ORDER)
    );

    $data_string = json_encode($data_string);

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type:application/json'
	));
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$output = curl_exec($curl);

	$output = json_decode($output);
	curl_close($curl);
}

function fn_trackfree_update_order_details_post($params, $order_info)
{
    $push_order = array();
    $push_order['order_id'] = $order_info['order_id'];
    $push_order['email'] = $order_info['email'];
    $push_order['firstname'] = $order_info['firstname'];
    $push_order['lastname'] = $order_info['lastname'];
    $push_order['phone'] = $order_info['phone'];
    $push_order['status'] = $order_info['status'];
    $push_order['payment_method'] = $order_info['payment_method']['payment'];
    $push_order['shipping_method'] = $order_info['shipping'][0]['shipping'];
    $push_order['total'] = $order_info['total'];
    $push_order['timestamp'] = $order_info['timestamp'];
    $push_order['notes'] = $order_info['notes'];
    $push_order['s_firstname'] = $order_info['s_firstname'];
    $push_order['s_lastname'] = $order_info['s_lastname'];
    $push_order['s_address'] = $order_info['s_address'];
    $push_order['s_address_2'] = $order_info['s_address_2'];
    $push_order['s_city'] = $order_info['s_city'];
    $push_order['s_state'] = $order_info['s_state'];
    $push_order['s_country'] = $order_info['s_country'];
    $push_order['s_zipcode'] = $order_info['s_zipcode'];
    $push_order['subtotal'] = $order_info['subtotal'];
    $push_order['discount'] = $order_info['discount'];
    $push_order['shipping_cost'] = $order_info['shipping_cost'];
    $push_order['taxes'] = $order_info['taxes'];

    $products = [];
    foreach ($order_info['products'] as $product) {
        $product_image = fn_get_cart_product_icon($product['product_id'], $product);
        $product_options = [];
        if (sizeof($product['variation_features'])) {
            foreach ($product['variation_features'] as $variants) {
                $product_option['name'] =  $variants['description'];
                $product_options['value'] = $variants['variant'];
                $product_options['id'] = $variants['variant_id'];
            }
        }
        $products[] = [
            'product_id' => $product['product_id'],
            'name' => $product['product'],
            'price' => $product['price'],
            'quantity' => $product['amount'],
            'total' => $product['subtotal'],
            'product_url' => $product['product_url'],
            'image_url' => $product_image['detailed']['image_path'],
            'product_options' => $product_options
        ];
    }
    $push_order['products'] = $products;
    $push_order['order_statuses'] = fn_get_statuses(STATUSES_ORDER);

    $url = "https://trackfree.io/api/cs_order_update";
    $trackfree_api_key = fn_get_trackfree_api_key();

    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order" => $push_order
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($curl);
    curl_close($curl);
}

function fn_trackfree_create_shipment_post($shipment_data, $order_info)
{
    $trackfree_api_key = fn_get_trackfree_api_key();
	$tracking_number = (isset($shipment_data['tracking_number'])) ? $shipment_data['tracking_number'] : 0;
    $carrier = (isset($shipment_data['carrier'])) ? $shipment_data['carrier'] : '';
	$order_id = (isset($shipment_data['order_id'])) ? $shipment_data['order_id'] : '';

	$order_info = fn_get_order_info($order_id);

	$push_order = array();

	$push_order['order_id'] = $order_id;
	$push_order['firstname'] = $order_info['firstname'];
	$push_order['lastname'] = $order_info['lastname'];
	$push_order['email'] = $order_info['email'];
	$push_order['phone'] = $order_info['phone'];
	$push_order['address'] = $order_info['s_address'] . ' ' . $order_info['s_address_2'];
	$push_order['city'] = $order_info['s_city'];
	$push_order['state'] = $order_info['s_state'];
	$push_order['country'] = $order_info['s_country'];
	$push_order['zipcode'] = $order_info['s_zipcode'];
	$push_order['amount'] = $order_info['total'];
	$push_order['order_date'] = date("Y-m-d H:i:s", $order_info['timestamp']);

	$products = array();
	$key = 0;
	foreach ($order_info['products'] as $product) {
		$products[$key]['product_id'] = $product['product_id'];
		$products[$key]['name'] = addslashes(strip_tags($product['product']));
		$products[$key]['price'] = $product['base_price'] ;
		$products[$key]['quantity'] = $product['amount'] ;
		$products[$key]['url'] = fn_url('products.view?product_id=' . $product['product_id'], 'C', 'http', 'en', true);
		$key++;
	}
	$push_order['products'] = $products;

	if ($tracking_number && $order_id && $trackfree_api_key) {
        $data = array(
            'order_id' => $order_id,
            'tracking_number' => $tracking_number,
            'carrier' => $carrier,
            'api_key' => $trackfree_api_key,
            'order' => $push_order
        );

        fn_push_order($data);
	}
}

function fn_trackfree_tracking($tracking_num, $preview = false)
{
    $recommended_products = db_get_array("SELECT * FROM ?:products ORDER BY RAND() LIMIT 4");
    $products = [];
    foreach ($recommended_products as $product) {
        $product_image = fn_get_cart_product_icon($product['product_id'], $product);
        $product_price_data = db_get_field('SELECT price FROM ?:product_prices WHERE product_id = ?i', $product['product_id']);
        $product_price = fn_storefront_rest_api_format_price($product_price_data);
        $products[] = [
            'name' => fn_get_product_name($product['product_id']),
            'price' => $product_price['price'],
            'image' => $product_image['detailed']['image_path'],
            'handle' => fn_url('products.view?product_id=' . $product['product_id'])
        ];
    }

    $trackfree_api_key = fn_get_trackfree_api_key();

    $url = "https://trackfree.io/api/cs_get_shipment";
    $data_string = array(
        "api_key" => $trackfree_api_key,
        "tracking_num" => $tracking_num,
        "products" => $products,
        "preview" => $preview
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($curl);
    curl_close($curl);

    return $output;
}

function fn_trackfree_order_tracking($order_number, $order_email)
{
    $recommended_products = db_get_array("SELECT * FROM ?:products ORDER BY RAND() LIMIT 4");
    $products = [];
    foreach ($recommended_products as $product) {
        $product_image = fn_get_cart_product_icon($product['product_id'], $product);
        $product_price_data = db_get_field('SELECT price FROM ?:product_prices WHERE product_id = ?i', $product['product_id']);
        $product_price = fn_storefront_rest_api_format_price($product_price_data);
        $products[] = [
            'name' => fn_get_product_name($product['product_id']),
            'price' => $product_price['price'],
            'image' => $product_image['detailed']['image_path'],
            'handle' => fn_url('products.view?product_id=' . $product['product_id'])
        ];
    }

    $trackfree_api_key = fn_get_trackfree_api_key();

    $order_info = fn_get_order_info($order_number);

    $url = "https://trackfree.io/api/cs_get_shipment";
    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order_number" => $order_number,
        'email' => $order_email,
        "products" => $products,
        "order_info" => $order_info
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($curl);
    curl_close($curl);

    return $output;
}

function fn_push_order($data)
{
	$url = "https://trackfree.io/api/cs_order_data";

	$data_string = json_encode($data);

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type:application/json'
	));
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$output = curl_exec($curl);

	$output = json_decode($output);
	curl_close($curl);

	if (isset($output->status) && strtolower($output->status) == 'success') {
		fn_set_notification('N',__('notice'), 'Order has been pushed to TrackFree.');
	} else {
		fn_set_notification('W', __('warning'), 'Tracking number is not pushed to trackfree.');
	}
}

function fn_post_trackfree_options($options)
{
    $trackfree_api_key = fn_get_trackfree_api_key();
    $data_string = array(
        'api_key' => $trackfree_api_key,
        'options' => $options
    );

    $url = "https://trackfree.io/api/cs_addon_options";

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
    curl_close($curl);
}

function fn_get_trackfree_api_key()
{
    $trackfree_api_key = Registry::get('addons.trackfree.trackfree_api_key');
    if (!$trackfree_api_key) {
        $url = "https://trackfree.io/api/cs_get_api_key";
        $data_string = array(
            "email" => db_get_field('SELECT email FROM ?:users WHERE user_id = ?i', 1),
            "store_url" => Registry::get('config.http_host'),
        );

        $data_string = json_encode($data_string);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type:application/json'
        ));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        if (isset($response->status) && $response->status == 'success') {
            Registry::set('addons.trackfree.trackfree_api_key', $response->api_key);
        }
    }
    return Registry::get('addons.trackfree.trackfree_api_key');
}

function fn_trackfree_install()
{
    $url = "https://trackfree.io/api/cs_addon_install";
    $data_string = array(
		"email" => db_get_field('SELECT email FROM ?:users WHERE user_id = ?i', 1),
        "full_name" => db_get_field('SELECT firstname FROM ?:users WHERE user_id = ?i', 1) . ' ' . db_get_field('SELECT lastname FROM ?:users WHERE user_id = ?i', 1),
        "store_url" => Registry::get('config.http_host'),
        "store_name" => Registry::get('settings.Company.company_name'),
        "currency" => CART_PRIMARY_CURRENCY,
        "store_address" => Registry::get('settings.Company.company_address'),
        "store_city" => Registry::get('settings.Company.company_city'),
        "store_country" => Registry::get('settings.Company.company_country'),
        "store_state" => Registry::get('settings.Company.company_state'),
        "store_zipcode" => Registry::get('settings.Company.company_zipcode'),
        'ip_address' => $_SERVER['REMOTE_ADDR'],
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
    $response = json_decode($response);
    curl_close($curl);

    if (isset($response->status) && $response->status == 'success') {
        Registry::set('addons.trackfree.trackfree_api_key', $response->api_key);
    }
}

function fn_trackfree_uninstall()
{
    $url = "https://trackfree.io/api/cs_addon_uninstall";
    $data_string = array(
        "email" => db_get_field('SELECT email FROM ?:users WHERE user_id = ?i', 1),
        "store_url" => Registry::get('config.http_host'),
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
    curl_close($curl);
}

function fn_get_trackfree_tracking_info()
{
    return __('trackfree_tracking_info');
}

function fn_trackfree_shipment_info($order_number)
{
    $trackfree_api_key = fn_get_trackfree_api_key();

    $url = "https://trackfree.io/api/cs_order_shipment";
    $data_string = array(
        "api_key" => $trackfree_api_key,
        "order_number" => $order_number
    );

    $data_string = json_encode($data_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
    ));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($curl);
    $output = json_decode($output, true);
    curl_close($curl);

    return $output;
}
