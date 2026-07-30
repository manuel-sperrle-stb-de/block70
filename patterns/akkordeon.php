<?php

/**
 * Title: Akkordeon
 * Slug: block70/akkordeon
 * Categories:
 * Keywords: akkordeon
 * Viewport width: wide
 * Description:
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|300"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--300)">
    <!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|300","bottom":"var:preset|spacing|300"}}}} -->
    <h3 class="wp-block-heading alignwide"
        style="padding-top:var(--wp--preset--spacing--300);padding-bottom:var(--wp--preset--spacing--300)">Überschrift
        (h3)</h3>
    <!-- /wp:heading -->

    <!-- wp:accordion {"headingLevel":6,"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|100"}}} -->
    <div role="group" class="wp-block-accordion alignwide">
        <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}}} -->
        <div class="wp-block-accordion-item">
            <!-- wp:accordion-heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"right":"var:preset|spacing|100","left":"var:preset|spacing|100","top":"var:preset|spacing|050","bottom":"var:preset|spacing|050"}},"border":{"width":"1px","radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}}},"textColor":"black","fontSize":"l","fontFamily":"league-spartan"} -->
            <h6 class="wp-block-accordion-heading has-black-color has-text-color has-link-color has-league-spartan-font-family has-l-font-size"
                style="border-width:1px;border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem">
                <button type="button" class="wp-block-accordion-heading__toggle"
                    style="padding-top:var(--wp--preset--spacing--050);padding-right:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--050);padding-left:var(--wp--preset--spacing--100)"><span
                        class="wp-block-accordion-heading__toggle-title">Akkordeon (h6)</span><span
                        class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h6>
            <!-- /wp:accordion-heading -->

            <!-- wp:accordion-panel {"style":{"spacing":{"padding":{"right":"var:preset|spacing|100","left":"var:preset|spacing|100","top":"var:preset|spacing|075","bottom":"var:preset|spacing|075"}}}} -->
            <div role="region" class="wp-block-accordion-panel"
                style="padding-top:var(--wp--preset--spacing--075);padding-right:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--075);padding-left:var(--wp--preset--spacing--100)">
                <!-- wp:paragraph -->
                <p>Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie<br>sind. (p)
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:accordion-panel -->
        </div>
        <!-- /wp:accordion-item -->
    </div>
    <!-- /wp:accordion -->
</div>
<!-- /wp:group -->
