<?php

use Tygh\Registry;


if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_cp_seo_editor_url_info()
{
    if (Registry::get('addons.seo.status') == 'A') {
        $cron_url = fn_url('cp_seo_editor.manage&script_password=' . Registry::get('addons.cp_seo_editor.script_password'), 'A');
        return __('cp_seo_editor_url', array(
            '[http_location]' => $cron_url
            )
        );
    }
}

function fn_cp_seo_editor_get_seo_names($params = array(), $items_per_page = 0, $lang_code = DESCR_SL )
{
    $default_params = array (
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    $fields = array(
        '?:seo_names.*',
        '?:companies.company',
    );

    $sortings = array (
        'name' => '?:seo_names.name',
        'object_id' => '?:seo_names.object_id',
        'company' => '?:companies.company',
        'type' => '?:seo_names.type',
        'dispatch' => '?:seo_names.dispatch',
        'path' => '?:seo_names.path',
        'lang_code' => '?:seo_names.lang_code',
    );
    
    $condition = '';
    
    if (!empty($params['name'])) {
        $condition .= db_quote(" AND ?:seo_names.name LIKE ?l", '%' . $params['name'] . '%');
    }

    if (!empty($params['object_id'])) {
        $condition .= db_quote(" AND ?:seo_names.object_id = ?i", $params['object_id']);
    }
    
    if (!empty($params['company_id'])) {
        $condition .= db_quote(" AND ?:seo_names.company_id = ?i", $params['company_id']);
    }
    
    if (!empty($params['type'])) {
        $condition .= db_quote(" AND ?:seo_names.type = ?s", $params['type']);
    }
    
    if (!empty($params['seo_dispatch'])) {
        $condition .= db_quote(" AND ?:seo_names.dispatch LIKE ?l", '%' . $params['seo_dispatch'] . '%');
    }
    
    if (!empty($params['lang_code'])) {
        $condition .= db_quote(" AND ?:seo_names.lang_code = ?s", $params['lang_code']);
    }
    
    $join = db_quote("LEFT JOIN ?:companies ON ?:seo_names.company_id = ?:companies.company_id");

    $limit = '';
    
    if (empty($params['sort_by'])) {
        $params['sort_by'] = 'name';
    }
    if (empty($params['sort_order'])) {
        $params['sort_order'] = 'asc';
    }
    
    $sorting = db_sort($params, $sortings);

    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT count(*) FROM ?:seo_names $join WHERE 1 ?p", $condition);
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }

    $seo_names = db_get_array("SELECT " . implode(', ', $fields) . " FROM ?:seo_names $join WHERE 1 ?p $sorting $limit", $condition);
    
    return array($seo_names, $params);
}

function fn_cp_seo_editor_delete_seo_name($params)
{
    $condition = array();
    
    if (isset($params['type'])) {
        $condition[] = db_quote("type = ?s", $params['type']);
    }
    
    if (isset($params['seo_dispatch'])) {
        $condition[] = db_quote("dispatch = ?s", $params['seo_dispatch']);
    }
    
    if (isset($params['object_id'])) {
        $condition[] = db_quote("object_id = ?i", $params['object_id']);
    }
    
    if (isset($params['lang_code'])) {
        $condition[] = db_quote("lang_code = ?s", $params['lang_code']);
    }
    
    if (isset($params['company_id'])) {
        $condition[] = db_quote("company_id = ?i", $params['company_id']);
    }
    if (!empty($condition)) {
        $condition = implode(" AND ", $condition);
        db_query("DELETE FROM ?:seo_names WHERE $condition");
    }
    return true;
}

function fn_cp_seo_editor_update_seo_name($params)
{
    $condition = array();
    
    if (isset($params['old_type'])) {
        $condition[] = db_quote("type = ?s", $params['old_type']);
    }
    
    if (isset($params['old_dispatch'])) {
        $condition[] = db_quote("dispatch = ?s", $params['old_dispatch']);
    }
    
    if (isset($params['old_object_id'])) {
        $condition[] = db_quote("object_id = ?i", $params['old_object_id']);
    }
    
    if (isset($params['old_lang_code'])) {
        $condition[] = db_quote("lang_code = ?s", $params['old_lang_code']);
    }
    
    if (isset($params['old_company_id'])) {
        $condition[] = db_quote("company_id = ?i", $params['old_company_id']);
    }
    if (count($condition) == 5) {
        $condition = implode(" AND ", $condition);
        
        $check_condition = array();
        $keys = array();
        if (isset($params['object_id'])) {
            $check_condition[] = db_quote("object_id = ?i", $params['object_id']);
            $keys[] = $params['object_id'];
        }
        
        if (isset($params['type'])) {
            $check_condition[] = db_quote("type = ?s", $params['type']);
            $keys[] = $params['type'];
        }
        
        if (isset($params['dispatch'])) {
            $check_condition[] = db_quote("dispatch = ?s", $params['dispatch']);
            $keys[] = $params['dispatch'];
        }
        
        if (isset($params['lang_code'])) {
            $check_condition[] = db_quote("lang_code = ?s", $params['lang_code']);
            $keys[] = $params['lang_code'];
        }
        
        if (isset($params['company_id'])) {
            $check_condition[] = db_quote("company_id = ?i", $params['company_id']);
            $keys[] = $params['company_id'];
        }
        if ($params['type'] != $params['old_type'] 
            || $params['dispatch'] != $params['old_dispatch'] 
            || $params['object_id'] != $params['old_object_id'] 
            || $params['lang_code'] != $params['old_lang_code'] 
            || $params['company_id'] != $params['old_company_id']) {
            
            $row = db_get_row("SELECT * FROM ?:seo_names WHERE ?p", implode(' AND ', $check_condition));
            if (!empty($row)) {
                fn_set_notification('E', __('error'), __('cp_duplicate_entry', array('[key]' => implode('-', $keys))));
            } else {
                db_query("UPDATE ?:seo_names SET ?u WHERE $condition", $params);
            }
        } else {
            db_query("UPDATE ?:seo_names SET ?u WHERE $condition", $params);
        }
    }
    return true;
}