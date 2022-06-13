<?php
/**
 * Custom colors and font sizes for block editor
 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
 * @package Fanagalo_underscores_core
 */

add_action( 'after_setup_theme', 'agk_fngl_2022_color_font_blocks' );

/* 
 * This action customizes colors (solids and gradients) and font sizes in the block editor.
 * 
 * Best practise is 
 * 1. make color variables in partial _colors.scss
 * 2. add the colors in this file
 * 3. add the colors in the core block partial _has-color.scss
 * 
 */

if ( ! function_exists( 'agk_fngl_2022_color_font_blocks' ) ) :
    function agk_fngl_2022_color_font_blocks() {

        // disable user generated colors
        add_theme_support( 'disable-custom-colors' );

		// customized color palette */
		add_theme_support( 'editor-color-palette', array(
            array('name' => __( 'tekstkleur',       'agk-fngl-2022' ), 'slug' => 'agk-tekstkleur',       'color' => 'var(--paragraph-color)',),
            array('name' => __( 'wit',              'agk-fngl-2022' ), 'slug' => 'wit',                  'color' => 'var(--white)',),
            array('name' => __( 'lichtgeel',        'agk-fngl-2022'),  'slug' => 'agk-lichtgeel',        'color' => 'var(--agk-bg)',),
            array('name' => __( 'geel-tekst',       'agk-fngl-2022' ), 'slug' => 'agk-geel-tekst',       'color' => 'var(--agk-geel-tekst)',),
            array('name' => __( 'rood',             'agk-fngl-2022' ), 'slug' => 'agk-rood',             'color' => 'var(--agk-rood)',),
            array('name' => __( 'blauw',            'agk-fngl-2022' ), 'slug' => 'agk-blauw',            'color' => 'var(--agk-blauw)',),
            array('name' => __( 'groen',            'agk-fngl-2022' ), 'slug' => 'agk-groen',            'color' => 'var(--agk-groen)',),
            array('name' => __( 'licht-groen',      'agk-fngl-2022' ), 'slug' => 'agk-licht-groen',      'color' => 'var(--agk-licht-groen)',),
            array('name' => __( 'geel-achtergrond', 'agk-fngl-2022' ), 'slug' => 'agk-geel-achtergrond', 'color' => 'var(--agk-geel-achtergrond)',),
        ) );

        // disable user generated gradients
        add_theme_support( 'disable-custom-gradients');

		// customized gradient palette */
        add_theme_support( 'editor-gradient-presets', array(
            array(
                'name'     => esc_attr__( 'Fanagalo gradient', 'agk-fngl-2022' ),
                'gradient' => 'linear-gradient(100deg, var(--fngl-dark-blue) 0%, var(--fngl-light-blue) 17%, var(--fngl-purple) 33%, var(--fngl-magenta) 50%, var(--fngl-dark-red) 67%, var(--fngl-red) 83%, var(--fngl-yellow) 100%)',
                'slug'     => 'fanagalo-gradient'
            ),
        ) );

		// Block Editor Font Sizes, from Twentytwenty theme
		add_theme_support( 'editor-font-sizes', array(
            array(
                'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'agk-fngl-2022' ),
                'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'agk-fngl-2022' ),
                'size'      => 18,
                'slug'      => 'small',
            ),
            array(
                'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'agk-fngl-2022' ),
                'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'agk-fngl-2022' ),
                'size'      => 21,
                'slug'      => 'normal',
            ),
            array(
                'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'agk-fngl-2022' ),
                'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'agk-fngl-2022' ),
                'size'      => 26.25,
                'slug'      => 'large',
            ),
            array(
                'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'agk-fngl-2022' ),
                'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'agk-fngl-2022' ),
                'size'      => 32,
                'slug'      => 'larger',
            ),
        ) );

    }
endif;

?>