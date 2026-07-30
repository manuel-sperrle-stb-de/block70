<?php

# enqueue css
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('style', get_stylesheet_uri());
});

# add stylesheet to editor style
add_editor_style(get_stylesheet_uri());

# set new image sizes (srcset will be adjusted automagically)
add_action('init', function () {
	remove_image_size('1536x1536');
	remove_image_size('2048x2048');
	add_image_size('192', 192, 192, false);
	add_image_size('256', 256, 256, false);
	add_image_size('360', 360, 360, false);
	add_image_size('512', 512, 512, false);
	add_image_size('720', 720, 720, false);
	add_image_size('1080', 1080, 1080, false);
	add_image_size('1440', 1440, 1440, false);
	add_image_size('1920', 1920, 1920, false);
	add_image_size('2560', 2560, 2560, false);
	add_image_size('3840', 3840, 3840, false);
});

# remove the "medium_large" size
add_filter('intermediate_image_sizes', function ($sizes) {
	return array_diff($sizes, ['medium_large']);
});

# core Patterns entfernen
add_action( 'after_setup_theme', function () {
    remove_theme_support( 'core-block-patterns' );
});

# weitere core Styles implementieren
add_action('init', function () {

	register_block_style(
        'core/button',
        [
            'name'  => 'sprungmarke',
            'label' => 'Sprungmarke'
        ]
    );

});


function enqueue_scripts() {

    wp_enqueue_script(
        'navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(), // dependencies
        filemtime( get_template_directory() . '/assets/js/navigation.js' ), // cache busting
        true // load in footer
    );

    wp_enqueue_script(
        'scroll-top',
        get_template_directory_uri() . '/assets/js/scroll-top.js',
        array(), // dependencies
        filemtime( get_template_directory() . '/assets/js/scroll-top.js' ), // cache busting
        true // load in footer
    );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
