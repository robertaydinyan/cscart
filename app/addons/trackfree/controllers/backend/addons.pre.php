<?php
defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($mode == 'update') {
		if (isset($_REQUEST['addon_data'])) {
			if ($_REQUEST['addon'] == 'trackfree' && isset($_REQUEST['addon_data']['options'])) {
                fn_post_trackfree_options($_REQUEST['addon_data']['options']);
			}
		}

        if ($_REQUEST['addon'] === 'trackfree' && !empty($_REQUEST['tf_settings'])) {
            $tf_settings = isset($_REQUEST['tf_settings']) ? $_REQUEST['tf_settings'] : [];
            fn_update_trackfree_settings($tf_settings);
        }
	}
    return [CONTROLLER_STATUS_OK];
}

if ($mode === 'update') {
    if ($_REQUEST['addon'] === 'trackfree') {
        Tygh::$app['view']->assign('tf_settings', fn_get_trackfree_settings());
    }
}

return [CONTROLLER_STATUS_OK];
