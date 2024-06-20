<?php
use Tygh\Registry;
use Tygh\Storage;
use Tygh\Session;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

Registry::get('view')->assign('by_order_num', Registry::get('addons.trackfree.look_up_options.by_order_num') == 'Y' ? true : false);
Registry::get('view')->assign('by_track_num', Registry::get('addons.trackfree.look_up_options.by_track_num') == 'Y' ? true : false);

if (isset($_GET['preview']) && isset($_GET['nums']) && $_GET['preview'] == 'trackfree') {
    if ($mode == 'track') {
        $nums = $_GET['nums'];
        $track_data = fn_trackfree_tracking($nums, true);
        Registry::get('view')->assign('nums', $nums);
        Registry::get('view')->assign('track_data', $track_data);
    }
} else {
    if ($mode == 'track') {
        if (isset($_GET['nums'])) {
            $nums = $_GET['nums'];
            $track_data = fn_trackfree_tracking($nums, false);
            Registry::get('view')->assign('nums', $nums);
			Registry::get('view')->assign('track_data', $track_data);
		}

        if (isset($_GET['order_number']) && isset($_GET['order_email'])) {
            $order_number = $_GET['order_number'];
            $order_email = $_GET['order_email'];
            $track_data = fn_trackfree_order_tracking($order_number, $order_email);
            Registry::get('view')->assign('order_number', $order_number);
            Registry::get('view')->assign('order_email', $order_email);
			Registry::get('view')->assign('track_data', $track_data);
		}
    }
}
