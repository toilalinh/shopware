{* Basket informations *}
{block name='frontend_checkout_error_messages_basket_error'}
{if $sBasketInfo}
	<div class="error center bold">
		{$sBasketInfo}
	</div>
{/if}
{/block}

{block name='frontend_checkout_error_messages_voucher_error'}
{* Voucher error *}
{if $sVoucherError}
	<div class="error center bold"> 
		{foreach from=$sVoucherError item=error_item}
			{$error_item}<br />
		{/foreach}
	</div>
{/if}
{/block}

{block name="frontend_checkout_error_messages_esd_note"}
{if $sShowEsdNote}
<div class="notice center bold">
	{s name="ConfirmInfoPaymentNotCompatibleWithESD"}{/s}
</div>
{/if}
{/block}

{block name='frontend_checkout_error_messages_no_shipping'}
{if $sDispatchNoOrder}
	<div class="notice center bold">
		{se name="ConfirmInfoNoDispatch"}{/se}
	</div>
{/if}
{/block}
	
{* Minimum sum not reached *}
{block name='frontend_checkout_error_messages_minimum_not_reached'}
{if $sMinimumSurcharge}
	<div class="error center bold">
		{se name="ConfirmInfoMinimumSurcharge"}{/se}
	</div>
{/if}
{/block}