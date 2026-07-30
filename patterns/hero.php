<?php

/**
 * Title: Hero
 * Slug: block70/hero
 * Categories: header
 * Keywords: hero
 * Viewport width: full
 * Description:
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"sizeSlug":"large","align":"full","className":"text-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center text-shadow"
        style="padding-top:var(--wp--preset--spacing--300);padding-bottom:var(--wp--preset--spacing--300);min-height:50vh">
        <img class="wp-block-cover__image-background size-large" alt=""
            src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>"
            data-object-fit="cover" /><span aria-hidden="true"
            class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide"
                style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)">
                <!-- wp:heading {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <h2 class="wp-block-heading alignfull has-white-color has-text-color has-link-color">
                    Überschrift (h2)</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"placeholder":"Titel eingeben …","align":"full","style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"xl"} -->
                <p class="has-text-align-left alignfull has-white-color has-text-color has-link-color has-xl-font-size">
                    Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. (p)</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->
