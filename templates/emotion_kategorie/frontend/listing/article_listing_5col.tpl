{* inherit from index.tpl *}
{extends file='parent:frontend/index/index.tpl'}

{* Main content *}
{block name='frontend_index_content'}
    <div id="center" class="grid_13">
        {* Banner *}

        {block name="frontend_listing_index_banner"}
            {if !$sLive shopping}
                {include file='frontend/listing/banner.tpl' sLiveShopping=$sLiveShopping}
            {/if}
        {/block}

        {* Live shopping *}
        {block name="frontend_listing_index_liveshopping"}
            {include file='frontend/listing/liveshopping.tpl'}
        {/block}

        {* Category headline *}
        {block name="frontend_listing_index_text"}
            {include file='frontend/listing/text.tpl'}
        {/block}

        {* Change / Logic move to controller *}

        {if $sCategoryContent.template eq "article_listing_1col.tpl"}
            {assign var="sTemplate" value="listing-1col"}
            {assign var="sBoxMode" value="list"}
        {elseif $sCategoryContent.template eq "article_listing_2col.tpl"}
            {assign var="sTemplate" value="listing-2col"}
            {assign var="sBoxMode" value="table"}
        {elseif $sCategoryContent.template eq "article_listing_3col.tpl"}
            {assign var="sTemplate" value="listing-3col"}
            {assign var="sBoxMode" value="table"}
        {elseif $sCategoryContent.template eq "article_listing_4col.tpl"}
            {assign var="sTemplate" value="listing"}
            {assign var="sBoxMode" value="table"}

        {* Add created template to existing template *}
        {elseif $sCategoryContent.template eq "article_listing_5col.tpl"}
            {assign var="sTemplate" value="listing-5col"}
            {assign var="sBoxMode" value="table"}
        {else}
            {assign var="sTemplate" value="listing-3col"}
            {assign var="sBoxMode" value="table"}
        {/if}


        {* Listing *}
        {block name="frontend_listing_index_listing"}
            {include file='frontend/listing/listing.tpl' sTemplate=$sTemplate}
        {/block}


        {* Tagcloud *}
        {block name="frontend_listing_index_tagcloud"}
            {include file='frontend/plugins/index/tagcloud.tpl'}
        {/block}
    </div>
{/block}