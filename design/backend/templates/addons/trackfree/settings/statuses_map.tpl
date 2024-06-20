<div class="control-group setting-wide">
    <label for="trackfree_auto_order_status" class="control-label">{__("auto_order_status")}:</label>
    <div class="controls">
        <input
          id="trackfree_auto_order_status"
          name="tf_settings[trackfree_auto_order_status]"
          type="checkbox"
          value="Y"
          {if (isset($tf_settings.trackfree_auto_order_status) && $tf_settings.trackfree_auto_order_status == 'Y')}checked="checked"{/if}>
    </div>
</div>
<div
id="trackfree_order_status_container"
{if (isset($tf_settings.trackfree_auto_order_status) && $tf_settings.trackfree_auto_order_status == 'Y')}
    style="display: block;"
{else}
    style="display: none;"
{/if}>
    <div>{__("trackfree_order_status_update_info")}</div>
    <div class="control-group setting-wide" style="margin-top: 16px;">
        <label for="trackfree_email" class="control-label">{__("email")}:</label>
        <div class="controls">
            <input
            id="trackfree_email"
            type="text"
            name="tf_settings[trackfree_email]"
            size="30"
            class=""
            placeholder=""
            value="{$tf_settings.trackfree_email}">
        </div>
    </div>
    <div class="control-group setting-wide">
        <label for="trackfree_api_key" class="control-label">{__("api_key")}:</label>
        <div class="controls">
            <input
            id="trackfree_api_key"
            type="text"
            name="tf_settings[trackfree_api_key]"
            size="30"
            class=""
            placeholder=""
            value="{$tf_settings.trackfree_api_key}">
        </div>
    </div>

    <h5 class="subheader hand">{__("select_delivery_status")}</h4>
    {assign var="statuses" value=$smarty.const.STATUSES_ORDER|fn_get_simple_statuses}

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_info_received">{__("info_received")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][info_received][status]" id="elm_trackfree_info_received">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.info_received.status) && $tf_settings.tf_statuses.info_received.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_ir_notify_customer">
                <input
                  type="checkbox"
                  id="elm_ir_notify_customer"
                  name="tf_settings[tf_statuses][info_received][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.info_received.notify_customer) && $tf_settings.tf_statuses.info_received.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ir_notify_department">
                <input
                  type="checkbox"
                  id="elm_ir_notify_department"
                  name="tf_settings[tf_statuses][info_received][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.info_received.notify_department) && $tf_settings.tf_statuses.info_received.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ir_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_ir_notify_vendor"
                  name="tf_settings[tf_statuses][info_received][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.info_received.notify_vendor) && $tf_settings.tf_statuses.info_received.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_in_transit">{__("in_transit")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][in_transit][status]" id="elm_trackfree_in_transit">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.in_transit.status) && $tf_settings.tf_statuses.in_transit.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_in_notify_customer">
                <input
                  type="checkbox"
                  id="elm_in_notify_customer"
                  name="tf_settings[tf_statuses][in_transit][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.in_transit.notify_customer) && $tf_settings.tf_statuses.in_transit.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_in_notify_department">
                <input
                  type="checkbox"
                  id="elm_in_notify_department"
                  name="tf_settings[tf_statuses][in_transit][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.in_transit.notify_department) && $tf_settings.tf_statuses.in_transit.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_in_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_in_notify_vendor"
                  name="tf_settings[tf_statuses][in_transit][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.in_transit.notify_vendor) && $tf_settings.tf_statuses.in_transit.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_out_for_delivery">{__("out_for_delivery")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][out_for_delivery][status]" id="elm_trackfree_out_for_delivery">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.out_for_delivery.status) && $tf_settings.tf_statuses.out_for_delivery.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_ot_notify_customer">
                <input
                  type="checkbox"
                  id="elm_ot_notify_customer"
                  name="tf_settings[tf_statuses][out_for_delivery][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.out_for_delivery.notify_customer) && $tf_settings.tf_statuses.out_for_delivery.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ot_notify_department">
                <input
                  type="checkbox"
                  id="elm_ot_notify_department"
                  name="tf_settings[tf_statuses][out_for_delivery][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.out_for_delivery.notify_department) && $tf_settings.tf_statuses.out_for_delivery.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ot_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_ot_notify_vendor"
                  name="tf_settings[tf_statuses][out_for_delivery][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.out_for_delivery.notify_vendor) && $tf_settings.tf_statuses.out_for_delivery.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_delivered">{__("delivered")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][delivered][status]" id="elm_trackfree_delivered">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.delivered.status) && $tf_settings.tf_statuses.delivered.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_dl_notify_customer">
                <input
                  type="checkbox"
                  id="elm_dl_notify_customer"
                  name="tf_settings[tf_statuses][delivered][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.delivered.notify_customer) && $tf_settings.tf_statuses.delivered.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_dl_notify_department">
                <input
                  type="checkbox"
                  id="elm_dl_notify_department"
                  name="tf_settings[tf_statuses][delivered][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.delivered.notify_department) && $tf_settings.tf_statuses.delivered.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_dl_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_dl_notify_vendor"
                  name="tf_settings[tf_statuses][delivered][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.delivered.notify_vendor) && $tf_settings.tf_statuses.delivered.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_exception">{__("exception")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][exception][status]" id="elm_trackfree_exception">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.exception.status) && $tf_settings.tf_statuses.exception.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_ex_notify_customer">
                <input
                  type="checkbox"
                  id="elm_ex_notify_customer"
                  name="tf_settings[tf_statuses][exception][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.exception.notify_customer) && $tf_settings.tf_statuses.exception.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ex_notify_department">
                <input
                  type="checkbox"
                  id="elm_ex_notify_department"
                  name="tf_settings[tf_statuses][exception][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.exception.notify_department) && $tf_settings.tf_statuses.exception.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ex_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_ex_notify_vendor"
                  name="tf_settings[tf_statuses][exception][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.exception.notify_vendor) && $tf_settings.tf_statuses.exception.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_failed_attempt">{__("failed_attempt")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][failed_attempt][status]" id="elm_trackfree_failed_attempt">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.failed_attempt.status) && $tf_settings.tf_statuses.failed_attempt.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_fa_notify_customer">
                <input
                  type="checkbox"
                  id="elm_fa_notify_customer"
                  name="tf_settings[tf_statuses][failed_attempt][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.failed_attempt.notify_customer) && $tf_settings.tf_statuses.failed_attempt.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_fa_notify_department">
                <input
                  type="checkbox"
                  id="elm_fa_notify_department"
                  name="tf_settings[tf_statuses][failed_attempt][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.failed_attempt.notify_department) && $tf_settings.tf_statuses.failed_attempt.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_fa_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_fa_notify_vendor"
                  name="tf_settings[tf_statuses][failed_attempt][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.failed_attempt.notify_vendor) && $tf_settings.tf_statuses.failed_attempt.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label" for="elm_trackfree_expired">{__("expired")}:</label>
        <div class="controls">
            <select name="tf_settings[tf_statuses][expired][status]" id="elm_trackfree_expired">
                <option value="">{__("select_status")}</option>
                {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($tf_settings.tf_statuses.expired.status) && $tf_settings.tf_statuses.expired.status == $k)}selected="selected"{/if}>{$s}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group setting-wide">
        <label class="control-label">{__("set_notifications")}:</label>
        <div class="controls">
            <label class="checkbox" for="elm_ep_notify_customer">
                <input
                  type="checkbox"
                  id="elm_ep_notify_customer"
                  name="tf_settings[tf_statuses][expired][notify_customer]" value="Y" {if (isset($tf_settings.tf_statuses.expired.notify_customer) && $tf_settings.tf_statuses.expired.notify_customer == 'Y')}checked="checked"{/if} />
                {__("notify_customer")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ep_notify_department">
                <input
                  type="checkbox"
                  id="elm_ep_notify_department"
                  name="tf_settings[tf_statuses][expired][notify_department]" value="Y" {if (isset($tf_settings.tf_statuses.expired.notify_department) && $tf_settings.tf_statuses.expired.notify_department == 'Y')}checked="checked"{/if} />
                {__("notify_department")}
            </label>
        </div>
        <div class="controls" style="margin-top: 10px;">
            <label class="checkbox" for="elm_ep_notify_vendor">
                <input
                  type="checkbox"
                  id="elm_ep_notify_vendor"
                  name="tf_settings[tf_statuses][expired][notify_vendor]" value="Y" {if (isset($tf_settings.tf_statuses.expired.notify_vendor) && $tf_settings.tf_statuses.expired.notify_vendor == 'Y')}checked="checked"{/if} />
                {__("notify_vendor")}
            </label>
        </div>
    </div>
</div>
<script>
$('#trackfree_auto_order_status').change(function() {
    if (this.checked) {
        $('#trackfree_order_status_container').show();
    } else {
        $('#trackfree_order_status_container').hide();
    }
});
</script>
