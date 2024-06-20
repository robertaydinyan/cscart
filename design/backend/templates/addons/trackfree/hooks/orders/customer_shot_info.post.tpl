{$shipment_data = fn_trackfree_shipment_info($order_info.order_id)}
{if $shipment_data['status'] == 'success'}
<div class="well orders-right-pane form-horizontal">
    <h4>{__("trackfree_delivery_tracker")}</h4>
    <div style="margin-top: 16px;">
        <div class="orders-right-pane">
            <div style="text-align: center;">
                <img src="{$shipment_data['courierLogo']}" alt="{$shipment_data['courierCaption']}" width="40px" height="40px" />
            </div>
            <div style="text-align: center; margin-top: 16px;">
                <a href="index.php?dispatch=track.track&nums={$shipment_data['trackingNum']}" target="_blank">{$shipment_data['trackingNum']}</a>
            </div>
            <table style="width:100%; margin: 16px 0;">
                <tbody>
                    <tr>
                        <td style="width: 50%; border-right: solid 1px #ddd;" align="center">
                            <span><b>{__("status")}</b></span>
                            <br />
                            <span>{$shipment_data['shipmentStatus']}</span>
                        </td>
                        <td style="width: 50%" align="center">
                            <span><b>{__("feedback")}</b></span>
                            <br />
                            {if $shipment_data['feedback'] == 0}
                                <span>N/A</span>
                            {else if $shipment_data['feedback'] == 1}
                                <span>{__("satisfied")}</span>
                            {else if $shipment_data['feedback'] == 2}
                                <span>{__("not_satisfied")}</span>
                            {/if}
                        </td>
                    </tr>
                </tbody>
            </table>
            {if $shipment_data['currentStatus'] == 4}
                <div class="alert alert-success" style="margin-top: 32px;">
                    <div>{__("delivered_on")} {$shipment_data['deliveredDate']}</div>
                </div>
            {else if $shipment_data['estimateDeliveryDate']}
                <div class="alert alert-warning" style="margin-top: 32px;">
                    <div>{__("estimated_delivery_on")} {$shipment_data['estimateDeliveryDate']}</div>
                </div>
            {/if}
            {if sizeof($shipment_data['trackDetails']) > 0}
                <p class="strong">{__("shipping_activity")}</p>
                <div style="margin-top: 16px;" id="trackfree_first_ship_activity">
                    <table class="table" width="100%">
                        <tbody>
                            <tr class="cm-longtap-target">
                                <td>
                                    <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">{$shipment_data['trackDetails'][0]['date']}</span>
                                    <br />
                                    <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">{$shipment_data['trackDetails'][0]['time']}</span>
                                </td>
                                <td>
                                    {$shipment_data['trackDetails'][0]['statusDescription']}
                                    <br />
                                    <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">
                                        {$shipment_data['trackDetails'][0]['location']}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            {/if}

            {if sizeof($shipment_data['trackDetails']) > 1}
                <div style="margin-top: 16px;">
                    <a class="btn" href="javascript:void(0)" id="trackfree_view_ship_activity">{__("see_all_shipping_activity")}</a>
                </div>
                <div id="trackfree_shipping_activity" style="display: none;">
                    <div style="margin-top: 16px;">
                        <table class="table" width="100%">
                            <tbody>
                                {foreach $shipment_data['trackDetails'] as $data}
                                    <tr class="cm-longtap-target">
                                        <td>
                                            <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">{$data['date']}</span>
                                            <br />
                                            <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">{$data['time']}</span>
                                        </td>
                                        <td>
                                            {$data['statusDescription']}
                                            <br />
                                            <span style="color: #a5a5a5; font-weight: normal; font-size: 13px;">
                                                {$data['location']}
                                            </span>
                                        </td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="margin-top: 16px;">
                    <a class="btn" style="display: none;" href="javascript:void(0)" id="trackfree_hide_ship_activity">{__("hide_all_shipping_activity")}</a>
                </div>
            {/if}
        </div>
        <div style="padding: 16px 0;">
            <a href="admin.php?dispatch=addons.update&addon=trackfree" style="float: right;" target="_blank">{__("manage_trackfree_settings")}</a>
        </div>
    </div>
</div>
{/if}
<script>
    (function(_, $) {
        $('#trackfree_view_ship_activity').on('click', function () {
            $(this).hide();
            $('#trackfree_shipping_activity').show();
            $('#trackfree_hide_ship_activity').show();
            $('#trackfree_first_ship_activity').hide();
        });
        $('#trackfree_hide_ship_activity').on('click', function () {
            $(this).hide();
            $('#trackfree_shipping_activity').hide();
            $('#trackfree_view_ship_activity').show();
            $('#trackfree_first_ship_activity').show();
        });
    })(Tygh, Tygh.$);
</script>
