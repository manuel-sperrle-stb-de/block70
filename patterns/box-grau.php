<?php

/**
 * Title: Box grau
 * Slug: block70/box-grau
 * Categories:
 * Keywords: box, grau
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
        <div class="wp-block-cover__inner-container"></div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"spacing":{"padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300","left":"var:preset|spacing|175","right":"var:preset|spacing|175"},"blockGap":"var:preset|spacing|200"},"border":{"radius":{"bottomLeft":"0.5rem","bottomRight":"0.5rem"}}},"backgroundColor":"medium","textColor":"dark","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-dark-color has-medium-background-color has-text-color has-background has-link-color"
        style="border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:var(--wp--preset--spacing--300);padding-right:var(--wp--preset--spacing--175);padding-bottom:var(--wp--preset--spacing--300);padding-left:var(--wp--preset--spacing--175)">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"spacing":{"padding":{"top":"var:preset|spacing|150","bottom":"var:preset|spacing|150"}}},"textColor":"dark"} -->
            <h5 class="wp-block-heading has-dark-color has-text-color has-link-color"
                style="padding-top:var(--wp--preset--spacing--150);padding-bottom:var(--wp--preset--spacing--150)">
                Überschrift (h5)</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. (p)</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|keycolor"}}}},"textColor":"keycolor","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-keycolor-color has-text-color has-link-color">
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
