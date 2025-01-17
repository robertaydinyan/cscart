{script src="js/tygh/backend/products_manage.js"}
{script src="js/tygh/backend/products_bulk_edit.js"}
{$delete_redirect_url=$delete_redirect_url|default:{$config.current_url|escape:url}}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="manage_products_form" id="manage_products_form" data-ca-main-content-selector="[data-ca-main-content]">
<input type="hidden" name="category_id" value="{$search.cid}" />

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{$c_url = $config.current_url|fn_query_remove:"sort_by":"sort_order"}
{$rev = $smarty.request.content_id|default:"pagination_contents,content_top_navigation"}
{$has_available_products = empty($runtime.company_id) || in_array($runtime.company_id, array_column($products, 'company_id'))}
{$image_width = $settings.Thumbnails.product_admin_mini_icon_width}
{$image_height = $settings.Thumbnails.product_admin_mini_icon_height}
{$show_list_price_column = $show_list_price_column|default:true}

{if $products}
    {capture name="products_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden table--show-checkbox products-table" data-ca-main-content>
            <thead data-ca-bulkedit-default-object="true" data-target=".products-table" data-ca-bulkedit-component="defaultObject">
            <tr>
                {hook name="products:manage_head"}
                <th width="3%" class="left mobile-hide table__check-items-column table__check-items-column--show-checkbox {if !$has_available_products} table__check-items-column--disabled{/if}">
                    {include file="common/check_items.tpl"
                        show_checkbox=true
                        check_statuses=''|fn_get_default_status_filters:true
                        is_check_disabled=!$has_select_permission
                        meta="table__check-items table__check-items--show-checkbox"
                        class="check-items--show-checkbox"
                    }

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th class="table__column-without-title"></th>
                {if $search.cid && $search.subcats !== "Y"}
                <th width="7%" class="nowrap">
                    {include file="common/table_col_head.tpl"
                        type="position"
                        text=__("position_short")
                    }
                </th>
                {/if}
                <th width="48%">
                    <div class="th-text-overflow th-text-overflow-wrapper">
                        {include file="common/table_col_head.tpl" type="product" text=__("name")}
                        {include file="common/table_col_head.tpl" type="code" text=__("sku")}
                    </div>
                </th>
                <th width="{if $show_update_for_all}16%{else}13%{/if}">
                    {include file="common/table_col_head.tpl"
                        type="price"
                        text="{__("price")} ({$currencies.$primary_currency.symbol nofilter})"
                    }
                </th>
                {if $show_list_price_column}
                <th width="12%" class="mobile-hide">
                    {include file="common/table_col_head.tpl"
                        type="list_price"
                        text="{__("list_price_short_2")} ({$currencies.$primary_currency.symbol nofilter})"
                        title=__("list_price")
                    }
                </th>
                {/if}
                {if $search.order_ids}
                <th width="9%">
                    {include file="common/table_col_head.tpl" type="p_qty" text=__("purchased_qty")}
                </th>
                <th width="9%">
                    {include file="common/table_col_head.tpl"
                        type="p_subtotal"
                        text="{__("subtotal_sum")} ({$currencies.$primary_currency.symbol nofilter})"
                    }
                </th>
                {/if}
                    {hook name="products:manage_head_amount"}
                    <th width="9%" class="nowrap">
                        {include file="common/table_col_head.tpl"
                            type="amount"
                            text=__("quantity")
                            title=__("quantity_long")
                        }
                    </th>
                    {/hook}
                {/hook}
                <th width="9%" class="mobile-hide">&nbsp;</th>
                <th width="9%" class="right">
                    {include file="common/table_col_head.tpl" type="status"}
                </th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$products item=product}
            {hook name="products:manage_table_body"}

            {$is_use_context_menu = true}

            {if "ULTIMATE"|fn_allowed_for}
                {if $runtime.company_id && $product.is_shared_product == "Y" && $product.company_id != $runtime.company_id}
                    {assign var="hide_inputs_if_shared_product" value="cm-hide-inputs"}
                    {assign var="no_hide_input_if_shared_product" value="cm-no-hide-input"}
                {else}
                    {assign var="hide_inputs_if_shared_product" value=""}
                    {assign var="no_hide_input_if_shared_product" value=""}
                {/if}
                {if !$runtime.company_id && $product.is_shared_product == "Y"}
                    {assign var="show_update_for_all" value=true}
                {else}
                    {assign var="show_update_for_all" value=false}
                {/if}

                {$is_use_context_menu = !$runtime.company_id || ($product.company_id|intval === $runtime.company_id|intval)}
            {/if}

            <tr class="cm-row-status-{$product.status|lower} cm-longtap-target {$hide_inputs_if_shared_product} {if !$is_use_context_menu}longtap-selection-disable{/if}"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$product.product_id}"
                    data-ca-category-ids="{$product.category_ids|to_json}"
                    {if !$is_use_context_menu}data-ca-bulkedit-disabled-notice="{__("products_are_not_selectable_for_context_menu")}"{/if}
                >
                    {hook name="products:manage_body"}
                    <td width="3%" class="left mobile-hide table__check-items-cell table__check-items-cell--show-checkbox">
                    <input type="checkbox" name="product_ids[]" value="{$product.product_id}" class="cm-item cm-item-status-{$product.status|lower}" /></td>
                    <td class="products-list__image">
                        {include
                                file="common/image.tpl"
                                image=$product.main_pair.icon|default:$product.main_pair.detailed
                                image_id=$product.main_pair.image_id
                                image_width=$image_width
                                image_height=$image_height
                                href="products.update?product_id=`$product.product_id`"|fn_url
                                image_css_class="products-list__image--img"
                                link_css_class="products-list__image--link"
                        }
                    </td>
                    {if $search.cid && $search.subcats != "Y"}
                    <td width="7%" class="{if $no_hide_input_if_shared_product}{$no_hide_input_if_shared_product}{/if}">
                        <input type="text" name="products_data[{$product.product_id}][position]" size="3" value="{$product.position}" class="input-micro" /></td>
                    {/if}
                    <td width="34%" class="product-name-column wrap-word" data-th="{__("name")}">
                        <input type="hidden" name="products_data[{$product.product_id}][product]" value="{$product.product}" {if $no_hide_input_if_shared_product} class="{$no_hide_input_if_shared_product}"{/if} />
                        <a class="row-status link--monochrome" href="{"products.update?product_id=`$product.product_id`"|fn_url}">{$product.product nofilter}</a>
                        <div class="product-list__labels muted">
                            {hook name="products:product_additional_info"}
                                {if $product.product_code}
                                    <div class="product-code">
                                        <span class="product-code__label">{$product.product_code}</span>
                                    </div>
                                {/if}
                            {/hook}
                            <div class="product-list__company-name-wrapper inline-block-basic">
                                {include file="views/companies/components/company_name.tpl"
                                    object=$product
                                    class="inline-block-basic"
                                    assign="company_name"
                                }
                                {if $show_company_name}
                                    <span>•</span>
                                    {$company_name nofilter}
                                {/if}
                            </div>
                        </div>
                    </td>
                    <td width="{if $show_update_for_all}16%{else}13%{/if}" class="{if $no_hide_input_if_shared_product}{$no_hide_input_if_shared_product}{/if} products-list__list-price" data-th="{__("price")}">
                        {hook name="products:list_price"}
                            {include file="buttons/update_for_all.tpl"
                                display=$show_update_for_all
                                object_id="price_`$product.product_id`"
                                name="update_all_vendors[price][`$product.product_id`]"
                                component="products.price_`$product.product_id`"
                            }

                            <input type="text" name="products_data[{$product.product_id}][price]" size="6" value="{$product.price|fn_format_price:$primary_currency:null:false}" class="input-small input-hidden cm-numeric" data-a-sep/>
                        {/hook}
                    </td>
                    {if $show_list_price_column}
                    <td width="12%" class="mobile-hide" data-th="{__("list_price")}">
                        {hook name="products:list_list_price"}
                            <input type="text" name="products_data[{$product.product_id}][list_price]" size="6" value="{$product.list_price|fn_format_price:$primary_currency:null:false}" class="input-small input-hidden cm-numeric" data-a-sep />
                        {/hook}
                    </td>
                    {/if}
                    {if $search.order_ids}
                    <td width="9%" data-th="{__("purchased_qty")}">{$product.purchased_qty}</td>
                    <td width="9%" data-th="{__("subtotal_sum")}">{$product.purchased_subtotal}</td>
                    {/if}
                    <td width="9%" data-th="{__("quantity")}">
                        {hook name="products:list_quantity"}
                            <input type="text" name="products_data[{$product.product_id}][amount]" size="6" value="{$product.inventory_amount|default:$product.amount}" class="input-mini input-hidden cm-value-decimal" />
                        {/hook}
                    </td>
                    {/hook}
                    <td width="9%" class="nowrap mobile-hide">
                        <div class="hidden-tools">
                            {capture name="tools_list"}
                                {hook name="products:list_extra_links"}
                                    <li>{btn type="list" text=__("edit") href="products.update?product_id=`$product.product_id`"}</li>
                                    {if !$hide_inputs_if_shared_product}
                                        <li>{btn
                                                type="list"
                                                text=__("delete")
                                                class="cm-confirm"
                                                href="products.delete?product_id=`$product.product_id`{if $delete_redirect_url}&redirect_url={$delete_redirect_url}{/if}"
                                                method="POST"
                                            }
                                        </li>
                                    {/if}
                                {/hook}
                            {/capture}
                            {dropdown content=$smarty.capture.tools_list}
                        </div>
                    </td>
                    <td width="9%" class="right nowrap" data-th="{__("status")}">
                        {include file="views/products/components/status_on_manage.tpl"
                            id=$product.product_id
                            status=$product.status
                            hidden=true
                            object_id_name="product_id"
                            table="products"
                            non_editable_status=!fn_check_permissions("tools", "update_status", "admin", "POST", ["table" => "products"])
                        }
                    </td>
                </tr>
                {/hook}
                {/foreach}
            </tbody>
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="manage_products_form"
        object="products"
        items=$smarty.capture.products_table
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{capture name="select_fields_to_edit"}

<p>{__("text_select_fields2edit_note")}</p>
{include file="views/products/components/products_select_fields.tpl"}

<div class="buttons-container">
    <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged">{__("cancel")}</a>

    {include file="buttons/button.tpl"
        but_text=__("modify_selected")
        but_role="submit"
        but_name="dispatch[products.store_selection]"
        but_meta="btn-primary"
    }
</div>
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {hook name="products:action_buttons"}
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
    {if $products}
        {include file="buttons/save.tpl" but_name="dispatch[products.m_update]" but_role="action" but_target_form="manage_products_form" but_meta="cm-submit"}
    {/if}
{/capture}

{capture name="adv_buttons"}
    {hook name="products:manage_tools"}
        {$allow_create_product = $allow_create_product|default:true}
        {if $allow_create_product}
            {include file="common/tools.tpl"
                tool_href="products.add"
                tool_override_meta="btn btn-primary"
                prefix="top"
                title=__("add_product")
                link_text=__("add_product")
                hide_tools=true
                icon="icon-plus"
            }
        {/if}
    {/hook}
{/capture}

{include file="common/popupbox.tpl" id="select_fields_to_edit" text=__("select_fields_to_edit") content=$smarty.capture.select_fields_to_edit}

<div class="clearfix">
    {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
</div>

</form>

{/capture}

{$search_form_dispatch = $dispatch|default:"products.manage"}
{$saved_search = [
    dispatch => $search_form_dispatch,
    view_type => "products"
]}

{* Get advanced search *}
{include file="views/products/components/products_search_form.tpl"
    search=$search
    dispatch=$search_form_dispatch
    type="search_filters"
    autofocus=false
    form_meta="search-filters-advanced-search__form"
    show_search_button=false
    advanced_search_button_class="btn"
    show_advanced_search_button_icon=true
    show_advanced_search_button_text=false
    assign="products_advanced_search"
}

{* Get $search_filters, and $context_search *}
{include file="views/products/components/search_filters/get_product_search_filters.tpl"
    search=$search
    dispatch=$search_form_dispatch
    form_id="`$product_search_form_prefix`search_filters_form"
    type="search_filters"
    advanced_search=$products_advanced_search
}

{capture name="sidebar"}
    {hook name="products:manage_sidebar"}
    {/hook}
{/capture}

{capture name="mainbox_title"}
    {hook name="products:manage_mainbox_title"}
        {__("products")}
    {/hook}
{/capture}

{include file="common/mainbox.tpl"
    title=$smarty.capture.mainbox_title
    content=$smarty.capture.mainbox
    title_extra=$smarty.capture.title_extra
    adv_buttons=$smarty.capture.adv_buttons
    select_languages=true
    buttons=$smarty.capture.buttons
    sidebar=$smarty.capture.sidebar
    content_id="manage_products"
    saved_search=$saved_search
    search_filters=$search_filters
    context_search=$context_search
}
