{if isset($recent_posts) && count($recent_posts)}
    <section class="simpleblog" id="phblogrecentposts">
    <div class="container">
        <div class="row">
            <h3 class="h1">
                <a href="{$blogLink}">
                    {$blogTitle}
                </a>
                <!-- <a href="{$blogLink}">
                    {l s='See all articles' mod='phblogrecentposts'}
                </a> -->
            </h3>
            {foreach from=$recent_posts item=post}
                {include file="module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl"}
            {/foreach}
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section-news -->
{/if}
