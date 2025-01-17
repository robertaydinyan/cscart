{capture name="mainbox"}

{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{$tags_statuses=""|fn_get_default_statuses:false}

{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}

<form class="form-horizontal form-edit" action="{""|fn_url}" method="post" name="tags_form">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true}

{if $tags}

    {capture name="tags_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-sort table-middle table--relative table-responsive">
            <thead 
                data-ca-bulkedit-default-object="true" 
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th class="left mobile-hide" width="6%">
                    {include file="common/check_items.tpl" check_statuses=$tags_statuses}

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="40%"><a class="cm-ajax{if $search.sort_by === "tag"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=tag&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("tag")}{if $search.sort_by === "tag"}{$c_icon nofilter}{/if}</a></th>
                {foreach from=$tag_objects item="o"}
                <th width="8%" class="center">&nbsp;&nbsp;{__($o.name)}&nbsp;&nbsp;</th>
                {/foreach}
                <th width="8%">&nbsp;</th>
                <th class="right" width="10%"><a class="cm-ajax{if $search.sort_by === "status"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{/if}</a></th>
            </tr>
            </thead>
            {foreach from=$tags item="tag"}
            <tbody>
                <tr class="cm-row-status-{$tag.status|lower} cm-longtap-target"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$tag.tag_id}"
                >
                    <td width="6%" class="left mobile-hide">
                        <input type="checkbox" class="cm-item cm-item-status-{$tag.status|lower} hide" value="{$tag.tag_id}" name="tag_ids[]"/>
                    </td>
                    <td width="40%" data-th="{__("tag")}">
                        <input type="text" name="tags_data[{$tag.tag_id}][tag]" value="{$tag.tag}" size="20" class="input-hidden">
                    </td>
                    {foreach from=$tag_objects key="k" item="o"}
                    <td class="center" width="8%" data-th="{__($o.name)}">
                        {if $tag.objects_count.$k}<a href="{$o.url|fn_link_attach:"tag=`$tag.tag`"|fn_url}" class="link--monochrome">{$tag.objects_count.$k}</a>{else}0{/if}
                    </td>
                    {/foreach}
                    <td width="8%" data-th="{__("tools")}">
                        <div class="hidden-tools">
                            {capture name="tools_list"}
                                <li>{btn type="list" class="cm-confirm" text=__("delete") href="tags.delete?tag_id=`$tag.tag_id`" method="POST"}</li>
                            {/capture}
                            {dropdown content=$smarty.capture.tools_list}
                        </div>
                    </td>
                    <td width="10%" class="right" data-th="{__("status")}">
                        {include file="common/select_popup.tpl" type="tags" id=$tag.tag_id status=$tag.status items_status="tags"|fn_get_predefined_statuses object_id_name="tag_id" table="tags"}
                    </td>
                </tr>
            {/foreach}
            </tbody>
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="tags_form"
        object="tags"
        items=$smarty.capture.tags_table
    }

{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl"}

</form>


{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $tags}
            {hook name="tags:list_extra_links"}
            {/hook}
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
    {if $tags}
        {include file="buttons/save.tpl" but_name="dispatch[tags.m_update]" but_role="submit-link" but_target_form="tags_form"}
    {/if}
{/capture}

{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="tags.manage" view_type="tags"}
    {include file="addons/tags/views/tags/components/tags_search_form.tpl" dispatch="tags.manage"}
{/capture}

{include file="common/mainbox.tpl" title=__("tags") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar}