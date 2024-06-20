<?php


use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (Registry::get('addons.seo.status') != 'A') {
    fn_set_notification('W', __('warning'), __('cp_seo_inactive'));
    return array(CONTROLLER_STATUS_REDIRECT, 'addons.manage');
}

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    if ($mode == 'delete') {
        fn_cp_seo_editor_delete_seo_name($_REQUEST);
    }
    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['selected_seo_names'])) {
            foreach ($_REQUEST['selected_seo_names'] as $seo_names) {
                $params = explode('_', $seo_names);
                if (count($params) == 5) {
                    $seo_name = array(
                        'object_id' => $params[0],
                        'type' => $params[1],
                        'seo_dispatch' => $params[2],
                        'lang_code' => $params[3],
                        'company_id' => $params[4]
                    );
                    fn_cp_seo_editor_delete_seo_name($seo_name);
                }
            }
        }
    }
    if ($mode == 'm_update') {
        if (!empty($_REQUEST['seo_names'])) {
            foreach ($_REQUEST['seo_names'] as $seo_name) {
                fn_cp_seo_editor_update_seo_name($seo_name);
            }
        }
    }
    return array(CONTROLLER_STATUS_OK, 'cp_seo_editor.manage&script_password=' . Registry::get('addons.cp_seo_editor.script_password'));
}

if ($mode == 'manage') {
    $script_password = Registry::get('addons.cp_seo_editor.script_password');

    if ((!isset($_REQUEST['script_password']) || $script_password != $_REQUEST['script_password']) && (!empty($script_password))) {
        die(__('access_denied'));
    }
    
    $params = $_REQUEST;
    list($seo_names, $search) = fn_cp_seo_editor_get_seo_names($params, Registry::get('settings.Appearance.elements_per_page'));
    list($companies, ) = fn_get_companies(array(), $auth, 0);
    
    Registry::get('view')->assign('seo_names', $seo_names);
    Registry::get('view')->assign('search', $search);
    
    $schema = fn_get_schema('seo', 'objects');
    
    $languages = fn_get_translation_languages();

    Registry::get('view')->assign('companies', $companies);
    Registry::get('view')->assign('types', $schema);
    Registry::get('view')->assign('languages', $languages);
} 