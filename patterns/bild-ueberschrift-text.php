<?php

/**
 * Title: Bild, Überschrift, Text
 * Slug: block70/bild-ueberschrift-text
 * Categories:
 * Keywords: bild, ueberschrift, text
 * Viewport width: wide
 * Description:
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--300);padding-bottom:var(--wp--preset--spacing--300)">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img
            src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" />
        <figcaption class="wp-element-caption">Bild-Beschriftung</figcaption>
    </figure>
    <!-- /wp:image -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|0","padding":{"top":"var:preset|spacing|0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--0)">
        <!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|150","bottom":"var:preset|spacing|150"}}}} -->
        <h3 class="wp-block-heading alignwide"
            style="padding-top:var(--wp--preset--spacing--150);padding-bottom:var(--wp--preset--spacing--150)">Bild,
            Überschrift, Text (h3)</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"wide"} -->
        <p class="alignwide">Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie
            sind. (p)</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
