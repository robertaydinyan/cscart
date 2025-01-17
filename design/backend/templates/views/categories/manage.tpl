{if $language_direction == "rtl"}
    {$direction = "right"}
{else}
    {$direction = "left"}
{/if}

{if "ULTIMATE"|fn_allowed_for}
    {$storefront_id=$app.storefront->storefront_id}
{else}
    {$storefront_id=$smarty.request.s_storefront|default:0}
{/if}

{capture name="mainbox"}
{$hide_inputs = ""|fn_check_form_permissions}
<form action="{""|fn_url}" method="post" name="category_tree_form" id="category_tree_form">
    <div class="items-container">
    {if $categories_tree}
        <div data-ca-longtap>
            {hook name="categories:context_menu"}
                {component
                    name="context_menu.context_menu"
                    object="categories"
                    form="category_tree_form"
                }{/component}
            {/hook}

            <div class="table-wrapper">
                {include file="views/categories/components/categories_tree.tpl"
                    header="1"
                    parent_id=$category_id
                    st_result_ids="categories_stats"
                    st_return_url=$config.current_url
                    direction=$direction
                }
            </div>
        </div>
    {else}
        <p class="no-items">{__("no_items")}</p>
    {/if}
</div>

{capture name="select_fields_to_edit"}

    <p>{__("text_select_fields2edit_note")}</p>
    {include file="views/categories/components/categories_select_fields.tpl"}

    <div class="buttons-container">
        <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged">{__("cancel")}</a>

        {include file="buttons/button.tpl" 
            but_text=__("modify_selected") 
            but_name="dispatch[categories.store_selection]"
            but_role="submit-button"
            but_disabled=true
            but_meta="bulkedit-disable-edit-button"
            but_target_form="category_tree_form"
        }
    </div>
{/capture}

{include file="common/popupbox.tpl" id="select_fields_to_edit" text=__("select_fields_to_edit") content=$smarty.capture.select_fields_to_edit}

{capture name="buttons"}
    {capture name="tools_list"}
        {$href="categories.m_add"}
        {if "MULTIVENDOR"|fn_allowed_for}
            {$href="`$href`?s_storefront=`$storefront_id`"}
        {/if}
        <li>{btn type="list" text=__("bulk_category_addition") href=$href}</li>
    {/capture}
    {dropdown content=$smarty.capture.tools_list}

    {if $categories_tree}
        {include file="buttons/save.tpl" 
            but_name="dispatch[categories.m_update]" 
            but_role="submit-button" 
            but_target_form="category_tree_form"
            but_meta="bulkedit-disable-save-button"
            is_btn_primary=false
        }
    {/if}
{/capture}

{capture name="adv_buttons"}
    {$tool_href="categories.add"}
    {if "MULTIVENDOR"|fn_allowed_for}
        {$tool_href="`$tool_href`?s_storefront=`$storefront_id`"}
    {/if}
    {include file="common/tools.tpl"
        tool_href=$tool_href
        tool_override_meta="btn btn-primary"
        prefix="top"
        hide_tools="true"
        title=__("add_category")
        link_text=__("add_category")
        icon="icon-plus"
    }
{/capture}

{capture name="sidebar"}
    {hook name="categories:manage_sidebar"}
    <div class="sidebar-row" id="categories_stats">
        <h6>{__("total")}</h6>
        <ul class="unstyled sidebar-stat">
            <li>{__("categories")} <span>{$categories_stats.categories_total}</span></li>
            <li>{__("products")} <span>{$categories_stats.products_total}</span></li>
            <li>{__("active_categories")} <span>{$categories_stats.categories_active}</span></li>
            <li>{__("hidden_categories")} <span>{$categories_stats.categories_hidden}</span></li>
            <li>{__("disabled_categories")} <span>{$categories_stats.categories_disabled}</span></li>
        </ul>
    <!--categories_stats--></div>
    {/hook}
{/capture}

</form>
{/capture}
{include file="common/mainbox.tpl"
    title=__("categories")
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    sidebar=$smarty.capture.sidebar
    adv_buttons=$smarty.capture.adv_buttons
    select_languages=true
    select_storefront=true
    selected_storefront_id=$storefront_id
}
