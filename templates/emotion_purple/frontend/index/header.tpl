{extends file='parent:frontend/index/header.tpl'}

{block name='frontend_index_header_title'}
    {strip}
        {if $Controller == 'detail'}
            {$sArticle.articleName}
        {elseif $Controller == 'listing'}
            {$sCategoryInfo.name}
        {else}
            {if $sBreadcrumb}{foreach from=$sBreadcrumb|array_reverse item=breadcrumb}{$breadcrumb.name} | {/foreach}{else}{config name=sShopname}{/if}
        {/if}
    {/strip}
{/block}

{block name="frontend_index_header_css_screen" append}
    <link type="text/css" media="screen, projection" rel="stylesheet" href="{link file='frontend/_resources/styles/emotion_purple.css'}" />
{/block}