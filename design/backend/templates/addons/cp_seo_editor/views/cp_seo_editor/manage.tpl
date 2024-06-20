{capture name="mainbox"}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}


<form action="{""|fn_url}" method="post" name="cp_seo_names_form" class="{if $runtime.company_id} cm-hide-inputs{/if}">

    <input type="hidden" name="script_password" value="{$addons.cp_seo_editor.script_password}" />
    {include file="common/pagination.tpl" save_current_page=true save_current_url=true}
    {assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}
    {assign var="c_icon" value="<i class=\"exicon-`$search.sort_order_rev`\"></i>"}
    {assign var="c_dummy" value="<i class=\"exicon-dummy\"></i>"}

    {if $seo_names}
        <table width="100%" class="table table-middle">
        <thead>
            <tr>
                <th width="1%">{include file="common/check_items.tpl"}</th>
                <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=object_id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("cp_object_id")}{if $search.sort_by == "object_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=company&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("company")}{if $search.sort_by == "company"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="8%"><a class="cm-ajax" href="{"`$c_url`&sort_by=type&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("type")}{if $search.sort_by == "type"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=dispatch&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("dispatch")}{if $search.sort_by == "dispatch"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=path&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("cp_path")}{if $search.sort_by == "path"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=lang_code&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("cp_lang_code")}{if $search.sort_by == "lang_code"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="5%">&nbsp;</th>
            </tr>
        </thead>
        {foreach from=$seo_names item=seo_name key="key"}
            <tr class="">
                <td>
                    <input type="checkbox" name="selected_seo_names[]" value="{$seo_name.object_id}_{$seo_name.type}_{$seo_name.dispatch}_{$seo_name.lang_code}_{$seo_name.company_id}" class="checkbox cm-item" />
                </td>
                <td class="left ">
                    <input type="text" name="seo_names[{$key}][name]" size="8" value="{$seo_name.name}" class="input-medium" />
                </td>
                <td class="left ">
                    <input type="hidden" name="seo_names[{$key}][old_object_id]" value="{$seo_name.object_id}" />
                    <input type="text" name="seo_names[{$key}][object_id]" size="8" value="{$seo_name.object_id}" class="input-mini" />
                </td>
                <td class="left ">
                    <input type="hidden" name="seo_names[{$key}][old_company_id]" value="{$seo_name.company_id}" />
                    <select name="seo_names[{$key}][company_id]" class="span2">
                        <option value="0" {if $seo_name.company_id == 0} selected="selected" {/if}>-</option>                    
                        {foreach from=$companies item="company"}
                            <option value="{$company.company_id}" {if $company.company_id == $seo_name.company_id} selected="selected" {/if}>{$company.company}</option>
                        {/foreach}
                    </select>
                </td>
                <td class="left ">
                    <input type="hidden" name="seo_names[{$key}][old_type]" value="{$seo_name.type}" />
                    {$seo_types = array_keys($types)}
                    <select name="seo_names[{$key}][type]" class="span1">
                        {foreach from=$types item="type" key="seo_type"}
                            <option value="{$seo_type}" {if $seo_type == $seo_name.type} selected="selected" {/if}>{$type.name}</option>
                        {/foreach}
                        {if !in_array($seo_name.type, $seo_types)}
                            <option value="{$seo_name.type}" selected="selected">{__('unknown')} ({$seo_name.type})</option>
                        {/if}
                    </select>
                </td>
                <td class="left ">
                    <input type="hidden" name="seo_names[{$key}][old_dispatch]" value="{$seo_name.dispatch}" />
                    <input type="text" name="seo_names[{$key}][dispatch]" size="8" value="{$seo_name.dispatch}" class="input-small" />
                </td>
                <td class="left ">
                    <input type="text" name="seo_names[{$key}][path]" size="8" value="{$seo_name.path}" class="input-mini" />
                </td>
                <td class="left">
                    <input type="hidden" name="seo_names[{$key}][old_lang_code]" value="{$seo_name.lang_code}" />
                    <select name="seo_names[{$key}][lang_code]" class="span1">
                        {foreach from=$languages item="language"}
                            <option value="{$language.lang_code}" {if $language.lang_code == $seo_name.lang_code} selected="selected" {/if}>{$language.lang_code}</option>
                        {/foreach}
                    </select>
                </td>
                <td class="nowrap">
                    {capture name="tools_list"}
                        <li>{btn type="list" class="cm-confirm cm-post" text=__("delete") href="cp_seo_editor.delete?type=`$seo_name.type`&seo_dispatch=`$seo_name.dispatch`&object_id=`$seo_name.object_id`&lang_code=`$seo_name.lang_code`&company_id=`$seo_name.company_id`"}</li>
                    {/capture}
                    <div class="hidden-tools">
                        {dropdown content=$smarty.capture.tools_list}
                    </div>
                </td>
            </tr>
        {/foreach}
        </table>
    {else}
        <p class="no-items">{__("no_data")}</p>
    {/if}
    {include file="common/pagination.tpl"}

</form>

{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $seo_names}
            <li>{btn type="delete_selected" dispatch="dispatch[cp_seo_editor.m_delete]" form="cp_seo_names_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}

    {if $seo_names}
        {include file="buttons/save.tpl" but_name="dispatch[cp_seo_editor.m_update]" but_role="submit-link" but_target_form="cp_seo_names_form"}
    {/if}
{/capture}


{capture name="sidebar"}
<div class="sidebar-row">
    <h6>{__("search")}</h6>

    <form action="{""|fn_url}" name="cp_seo_names_filter_form" method="get">
    
    <div class="sidebar-field">
        <input type="hidden" name="script_password" value="{$addons.cp_seo_editor.script_password}" />
        <label>{__("name")}:</label>
        <input type="text" name="name" size="32" maxlength="64" value="{$search.name}" class="input-large"/>

        <label>{__("cp_object_id")}:</label>
        <input type="text" name="object_id" size="32" maxlength="64" value="{$search.object_id}" class="input-large"/>

        <label>{__("company")}:</label>
        <select name="company_id">
            <option value="0" {if $search.company_id == 0} selected="selected" {/if}>-</option>                    
            {foreach from=$companies item="company"}
                <option value="{$company.company_id}" {if $company.company_id == $search.company_id} selected="selected" {/if}>{$company.company}</option>
            {/foreach}
        </select>

        <label>{__("type")}:</label>
        <select name="type" class="span2">
            <option value="0" {if $search.type == 0} selected="selected" {/if}>-</option>                            
            {foreach from=$types item="type" key="seo_type"}
                <option value="{$seo_type}" {if $seo_type == $search.type} selected="selected" {/if}>{$type.name}</option>
            {/foreach}
        </select>

        <label>{__("dispatch")}:</label>
        <input type="text" name="dispatch" size="32" maxlength="64" value="{$search.seo_dispatch}" class="input-large"/>

        <label>{__("cp_path")}:</label>
        <input type="text" name="path" size="32" maxlength="64" value="{$search.path}" class="input-large"/>

        <label>{__("cp_lang_code")}:</label>
        <select name="lang_code" class="span2">
            <option value="" {if empty($search.lang_code)} selected="selected" {/if}>-</option>
            {foreach from=$languages item="language"}
                <option value="{$language.lang_code}" {if $language.lang_code == $search.lang_code} selected="selected" {/if}>{$language.name}</option>
            {/foreach}
        </select>

    {include file="buttons/search.tpl" but_name="dispatch[cp_seo_editor.manage]"}
    </form>
</div>

{/capture}

{include file="common/mainbox.tpl" title=__("cp_seo_names") content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar select_languages=true}