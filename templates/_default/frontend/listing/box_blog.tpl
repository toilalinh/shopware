{extends file="frontend/listing/box_article.tpl"}

{* Description *}
{block name='frontend_listing_box_article_description'}
<p class="desc">
	{$sArticle.description_long|strip_tags|truncate:450}
</p>
{/block}