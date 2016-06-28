
<div class="alternative_shipping">
	<h2 class="headingbox_dark largesize">{s name='RegisterShippingHeadline'}{/s}</h2>
	{* Salutation *}
	{block name='frontend_register_shipping_fieldset_input_salutation'}
		<div>
		    <label for="salutation2">{se name='RegisterShippingLabelSalutation'}{/se}</label>
		    <select name="register[shipping][salutation]" id="salutation2" class="normal {if $error_flags.salutation}instyle_error{/if}">
				<option value="mr" {if $form_data.salutation eq "mr"}selected="selected"{/if}>{s name='RegisterShippingLabelMr'}{/s}</option>
				<option value="ms" {if $form_data.salutation eq "ms"}selected="selected"{/if}>{s name='RegisterShippingLabelMrs'}{/s}</option>
		    </select>
		</div>
	{/block}

	{* Company *}
	{block name="frontend_register_shipping_fieldset_input_company"}
		<div>
		    <label for="company2" class="normal">{se name='RegisterShippingLabelCompany'}{/se}</label>
		    <input name="register[shipping][company]" type="text"  id="company2" value="{$form_data.company|escape}" class="text {if $error_flags.company}instyle_error{/if}" />
		</div>
	{/block}

	{* Department *}
	{block name='frontend_register_shipping_fieldset_input_department'}
		<div>
		    <label for="department2" class="normal">{se name='RegisterShippingLabelDepartment'}{/se}</label>
		    <input name="register[shipping][department]" type="text" id="department2" value="{$form_data.department|escape}" class="text" />
		</div>
	{/block}

	{* Firstname *}
	{block name='frontend_register_shipping_fieldset_input_firstname'}
		<div>
		    <label for="firstname2">{se name='RegisterShippingLabelFirstname'}{/se}</label>
		    <input name="register[shipping][firstname]" type="text"  id="firstname2" value="{$form_data.firstname|escape}" class="text required {if $error_flags.firstname}instyle_error{/if}" />
		</div>
	{/block}

	{* Lastname *}
	{block name='frontend_register_shipping_fieldset_input_lastname'}
		<div>
		    <label for="lastname2">{se name='RegisterShippingLabelLastname'}{/se}</label>
		    <input name="register[shipping][lastname]" type="text"  id="lastname2" value="{$form_data.lastname|escape}" class="text required {if $error_flags.lastname}instyle_error{/if}" />
		</div>
	{/block}

	{* Street *}
	{block name='frontend_register_shipping_fieldset_input_street'}
		<div>
		    <label for="street2">{se name='RegisterShippingLabelStreet'}{/se}</label>
		    <input name="register[shipping][street]" type="text"  id="street2" value="{$form_data.street|escape}" class="street text required {if $error_flags.street}instyle_error{/if}" />
		    <input name="register[shipping][streetnumber]" type="text"  id="streetnumber2" value="{$form_data.streetnumber|escape}" class="number text required {if $error_flags.streetnumber}instyle_error{/if}" />
		</div>
	{/block}

	{* Zip + City *}
	{block name='frontend_register_shipping_fieldset_input_zip_and_city'}
		<div>
		    <label for="zipcode2">{se name='RegisterShippingLabelCity'}{/se}</label>
		    <input name="register[shipping][zipcode]" type="text" id="zipcode2" value="{$form_data.zipcode|escape}"  class="zipcode text required {if $error_flags.zipcode}instyle_error{/if}" />
		    <input name="register[shipping][city]" type="text"  id="city2" value="{$form_data.city|escape}" size="25" class="city text required {if $error_flags.city}instyle_error{/if}" />
		</div>
	{/block}

	{* Country and state fields *}
	{if {config name=CountryShipping}}

        {* Country *}
		{block name='frontend_register_shipping_fieldset_input_country'}
			<div>
				<label for="country2">{se name='RegisterShippingLabelCountry'}{/se} </label>
				<select name="register[shipping][country]" id="country2" class="text required {if $error_flags.country}instyle_error{/if}">
					<option value="" selected="selected">{s name='RegisterShippingLabelSelect'}{/s}</option>
					{foreach from=$country_list item=country}
						<option value="{$country.id}"{if $country.id eq $form_data.country} selected="selected"{/if}>
						{$country.countryname}
						</option>
					{/foreach}
				</select>
			</div>
		{/block}

        {* Country state *}
        {block name='frontend_register_shipping_fieldset_input_country_states'}
            <div class="country-area-state-selection">
                {foreach $country_list as $country}
                    {if $country.states}
                        <div class="selection{if $country.id != $form_data.country} hidden{/if}">
                            <label for="country_{$country.id}_states">{se name='RegisterShippingLabelState'}Bundesstaat:{/se} </label>
                            <select {if $country.id != $form_data.country}disabled="disabled"{/if} name="register[shipping][country_shipping_state_{$country.id}]" id="country_{$country.id}_states" class="text {if $country.force_state_in_registration}required{/if} {if $error_flags.stateID}instyle_error{/if}">
                                <option value="" selected="selected">{s name='RegisterShippingLabelSelect'}{/s}</option>
                                {assign var="stateID" value="country_shipping_state_`$country.id`"}
                                {foreach from=$country.states item=state}
                                    <option value="{$state.id}" {if $state.id eq $form_data[$stateID]}selected="selected"{/if}>{$state.name}</option>
                                {/foreach}
                            </select>
                        </div>
                    {/if}
                {/foreach}
            </div>
        {/block}
	{/if}
</div>
