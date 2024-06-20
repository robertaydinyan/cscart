<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }
fn_register_hooks(
    'create_shipment_post',
    'update_order_details_post',
    'change_order_status_post',
    'place_order_manually_post',
    'place_order_post',
);
