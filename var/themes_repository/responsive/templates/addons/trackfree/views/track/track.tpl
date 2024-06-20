<div class="ty-company-fields">
    <h1 class="ty-mainbox-title">{__("track_your_order")}</h1>

    <div id="track_shipment">
        {if $by_order_num && $by_track_num}
            <div class="tf-ct-tb">
                <div id="tf_od_tb" class="tf-tb-cn tf-sl-tb">
                    {__("order_number")}
                </div>
                <div id="tf_tn_tb" class="tf-tb-cn">
                    {__("tracking_number")}
                </div>
            </div>
        {/if}

        {if $by_order_num}
            <div class="tf-tf-cl" id="tf_od_ct">
                <form action="{"track.track"|fn_url}" method="get" name="track_shipment_form">
                    <div class="ty-control-group">
                        <label for="order_number" class="ty-control-group__title cm-required">{__("order_number")}</label>
                        <input type="text" name="order_number" id="track_order_number" value="{$order_number}" class="ty-input-text" />
                    </div>

                    <div class="ty-control-group">
                        <label for="order_email" class="ty-control-group__title cm-required">{__("email")}</label>
                        <input type="text" name="order_email" id="track_order_email" value="{$order_email}" class="ty-input-text" />
                    </div>

                    <div class="buttons-container">
                        {include file="buttons/button.tpl" but_text=__("track") but_name="dispatch[track.track]" but_meta="ty-btn__primary"}
                    </div>
                </form>
            </div>
        {/if}

        {if $by_track_num}
            <div class="tf-tf-cl" id="tf_tk_ct" {if $by_order_num && $by_track_num} style="display: none;" {/if}>
                <form action="{"track.track"|fn_url}" method="get" name="track_shipment_form">
                    <div class="ty-control-group">
                        <label for="nums" class="ty-control-group__title cm-required">{__("tracking_number")}</label>
                        <input type="text" name="nums" id="nums" value="{$nums}" class="ty-input-text" />
                    </div>

                    <div class="buttons-container">
                        {include file="buttons/button.tpl" but_text=__("track") but_name="dispatch[track.track]" but_meta="ty-btn__primary"}
                    </div>
                </form>
            </div>
        {/if}
    </div>
	{if isset($track_data)}
		<div id="track_data">
			{$track_data nofilter}
		</div>
	{/if}
</div>
{literal}
<style>
    #track_shipment{width :40%;margin:0 auto;}
    #track_data{width: 80%;margin: 0 auto;}
    .tf-tb-cn {width: 50%;text-align: center;border-bottom: 1px solid #e8e9eb;cursor: pointer;font-size: 16px;color: #6a6767;}
    .tf-sl-tb {color: #1D2328;padding-bottom: 8px;border-bottom: 2px solid #1E88E5;}
    .tf-ct-tb {display: flex;padding-bottom: 32px;user-select: none;}
</style>
{/literal}
<script>
$('#tf_od_tb').click(function() {
    $(this).removeClass('tf-tb-cn').addClass('tf-tb-cn tf-sl-tb');
    $('#tf_tn_tb').removeClass('tf-tb-cn tf-sl-tb').addClass('tf-tb-cn');
    $('#tf_od_ct').show();
    $('#tf_tk_ct').hide();
});
$('#tf_tn_tb').click(function() {
    $(this).removeClass('tf-tb-cn').addClass('tf-tb-cn tf-sl-tb');
    $('#tf_od_tb').removeClass('tf-tb-cn tf-sl-tb').addClass('tf-tb-cn');
    $('#tf_od_ct').hide();
    $('#tf_tk_ct').show();
});

{if $nums}
    $('#tf_tn_tb').removeClass('tf-tb-cn').addClass('tf-tb-cn tf-sl-tb');
    $('#tf_od_tb').removeClass('tf-tb-cn tf-sl-tb').addClass('tf-tb-cn');
    $('#tf_od_ct').hide();
    $('#tf_tk_ct').show();
{/if}
</script>
