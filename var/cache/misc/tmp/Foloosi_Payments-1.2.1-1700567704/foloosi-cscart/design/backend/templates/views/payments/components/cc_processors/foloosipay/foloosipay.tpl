{* $Id$ *}

<div class="control-group">
    <label class="control-label" for="merchant_key">{__("fp_merchant_key")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_key]" id="merchant_key" value="{$processor_params.merchant_key}" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="secret_key">{__("fp_secret_key")}:</label>
    <div class="controls">
    <input type="text" name="payment_data[processor_params][secret_key]" id="secret_key" value="{$processor_params.secret_key}" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="Redirection">{__("redirection")}:</label>
    <div class="controls">
        <input type="hidden" name="payment_data[processor_params][Redirection]" value="0"/>
        <input type="checkbox" name="payment_data[processor_params][Redirection]" value="1" {if $processor_params.Redirection == 1} checked="checked" {/if}/>Enable
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="SavedCard">{__("saved_card")}:</label>
    <div class="controls">
        <input type="hidden" name="payment_data[processor_params][SavedCard]" value="0"/>
        <input type="checkbox" name="payment_data[processor_params][SavedCard]" value="1" {if $processor_params.SavedCard == 1} checked="checked" {/if}/>Enable
    </div>
</div>