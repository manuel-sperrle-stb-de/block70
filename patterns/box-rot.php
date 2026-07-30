<?php

/**
 * Title: Box rot
 * Slug: block70/box-rot
 * Categories:
 * Keywords: box, rot
 * Viewport width: wide
 * Description:
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0","padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--300);padding-bottom:var(--wp--preset--spacing--300)">
    <!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>","dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem"><img
            class="wp-block-cover__image-background size-large" alt=""
            src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>"
            data-object-fit="cover" /><span aria-hidden="true"
            class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"placeholder":"Titel eingeben …","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300","left":"var:preset|spacing|175","right":"var:preset|spacing|175"},"blockGap":"var:preset|spacing|200"},"border":{"radius":{"bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","gradient":"gradient","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-white-color has-gradient-gradient-background has-text-color has-background has-link-color"
        style="border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:var(--wp--preset--spacing--300);padding-right:var(--wp--preset--spacing--175);padding-bottom:var(--wp--preset--spacing--300);padding-left:var(--wp--preset--spacing--175)">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <h5 class="wp-block-heading has-white-color has-text-color has-link-color">Überschrift (h5)</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. (p)</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:buttons {"style":{"css":"justify-content: center;\n"}} -->
            <div class="wp-block-buttons has-custom-css">
                <!-- wp:button {"className":"is-style-outline","style":{"typography":{"textAlign":"left"}}} -->
                <div class="wp-block-button is-style-outline"><a
                        class="wp-block-button__link has-text-align-left wp-element-button">Trappatoni entdecken</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
