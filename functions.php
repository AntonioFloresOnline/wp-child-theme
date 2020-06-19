<?php

// Including custom classes
// include 'includes/Classes/PostGetter.php';

// Antonio's functions Yeah
// Debugging Helper
function dd($text = '')
{

    if ($text != '') {
        echo "<pre>";
        var_dump($text);
        echo "</pre>";
    } else {

        echo "No Text";

    }

    die();

}

define('child_theme_folder', 'TestingZone');

define('theme_url', '/wp-content/themes/' . child_theme_folder . '/');

define('theme_assets', '/wp-content/themes/' . child_theme_folder . '/assets/');

// Adding costum logo
add_theme_support('custom-logo');

function theme_prefix_setup()
{

    add_theme_support(

        'custom-logo',

        [

            'height'     => 100,

            'width'      => 100,

            'flex-width' => true,

        ]

    );

}
// Antonio's functions Yeah

/*Adding Styles and Scripts*/
function theme_assets()
{

    wp_enqueue_style(

        'bootstrap4',

        get_stylesheet_directory_uri() . '/assets/bootstrap_4/css/bootstrap.min.css'

    );

    wp_enqueue_script(

        'tether',

        get_stylesheet_directory_uri() . '/assets/bootstrap_4/js/tether.min.js',

        ['jquery']

    );

    wp_enqueue_script(

        'bootstrap4',

        get_stylesheet_directory_uri() . '/assets/bootstrap_4/js/bootstrap.min.js',

        ['jquery']

    );

    wp_enqueue_style(

        'styles',

        get_stylesheet_directory_uri() . '/assets/css/styles.css'

    );

    wp_enqueue_script(

        'main',

        get_stylesheet_directory_uri() . '/assets/js/main.js',

        ['jquery']

    );

}

add_action('wp_enqueue_scripts', 'theme_assets');

// Add Custom fields in the rest api enable only if advance custom fields is being used. 
// add_action('rest_api_init', 'slug_register_acf');
// function slug_register_acf()
// {
//     $post_types = get_post_types(['public' => true], 'names');
//     foreach ($post_types as $type) {
//         register_rest_field($type,
//             'acf',
//             array(
//                 'get_callback'    => 'slug_get_acf',
//                 'update_callback' => null,
//                 'schema'          => null,
//             )
//         );
//     }
// }
// function slug_get_acf($object, $field_name, $request)
// {
//     return get_fields($object['id']);
// }

// Call custom widgets only if the elementor plugin is activated
// include 'elementor-custom-widgets/My_Widgets_Registry.php';