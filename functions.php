<?php

/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
use SavelendGroupTheme\AutoLoader;
use SavelendGroupTheme\AssetResolver;

require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace('SavelendGroupTheme', get_stylesheet_directory() . '/app');

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

function register_custom_widget_areas()
{
    register_sidebar(
        array(
            'id' => 'footer-area-1',
            'name' => esc_html__('Footer area 1', 'savelendgroup'),
            'description' => esc_html__('A new widget area made for testing purposes', 'savelendgroup'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-area-2',
            'name' => esc_html__('Footer area 2', 'savelendgroup'),
            'description' => esc_html__('A new widget area made for testing purposes', 'savelendgroup'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-area-3',
            'name' => esc_html__('Footer area 3', 'savelendgroup'),
            'description' => esc_html__('A new widget area made for testing purposes', 'savelendgroup'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-area-4',
            'name' => esc_html__('Footer area 4', 'savelendgroup'),
            'description' => esc_html__('A new widget area made for testing purposes', 'savelendgroup'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>',
        )
    );
}
add_action('widgets_init', 'register_custom_widget_areas');



function callAPI($method, $url, $data)
{
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }

            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }

            break;
        default:
            if ($data) {
                $url = sprintf("%s?%s", $url, http_build_query($data));
            }

    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer 1|Go2hefbVoXwsnme8TCsMVS9Idxmiu3FbJ5Hd0O78',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if (!$result) {die("Connection Failure");}
    curl_close($curl);
    return $result;
}
