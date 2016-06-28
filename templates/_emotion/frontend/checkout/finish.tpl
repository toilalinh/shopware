{extends file='parent:frontend/checkout/finish.tpl'}

{block name='frontend_checkout_finish_teaser'}
	<div class="teaser">
		<h2 class="center">{se name="FinishHeaderThankYou"}{/se}{$sShopname}!</h2>

		{if $confirmMailDeliveryFailed}
			<p class="error">
				{se name="FinishInfoConfirmationMailFailed"}{/se}
			</p>
		{else}
			<p>
				{se name="FinishInfoConfirmationMail"}{/se}
			</p>
		{/if}
		<p>
			{s name="FinishInfoPrintOrder"}{/s}
		</p>

	    <div class="center">
		    <a href="#" class="button-right large" onclick="self.print()" title="{s name='FinishLinkPrint'}{/s}">
		    	{s name="FinishLinkPrint"}{/s}
		    </a>
	    </div>
	    <div class="clear">&nbsp;</div>
	</div>

	<div class="doublespace">&nbsp;</div>

	{* Trusted shops form *}
	{if {config name=TSID}}
		{include file="frontend/plugins/trusted_shops/form.tpl"}
	{/if}
{/block}
