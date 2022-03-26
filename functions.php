<?php
include(__DIR__ . '/inc/afc.php');
// Remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// globals
$GLOBALS['enkidu_global'] = array();

function enkidu_text_domain() {
    load_theme_textdomain( 'enkidu-v2', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'enkidu_text_domain' );


// disable editor on pages
function disable_editor_pages()
{
    $post_types = array(
        'page',
    );

    foreach ($post_types as $post_type) :
        remove_post_type_support($post_type, 'editor');
    endforeach;
}

# add_action('init', 'disable_editor_pages');

// disable admin bar
show_admin_bar(false);

// add menu
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('automatic-feed-links');

// post thumbnail
add_theme_support('post-thumbnails');

// jquery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue()
{
    $dir = get_template_directory_uri();
    wp_deregister_script('jquery');
    wp_register_script('jquery', $dir . '/assets/js/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
}

// get css and js
function get_scripts()
{
    $dir = get_template_directory_uri();
    wp_enqueue_style('tailwind', $dir . '/assets/css/tailwind.css');
    wp_enqueue_style('style', $dir . '/style.css');

    wp_enqueue_script('vendors', $dir . '/assets/js/vendors.js', '', false, true);
    wp_enqueue_script('main', $dir . '/assets/js/main.js', '', false, true);
}

add_action('wp_enqueue_scripts', 'get_scripts');

add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src)
{
    // if not your script, do nothing and return original $tag
    if ('main' !== $handle) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    return $tag;
}

// ACF
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}

function get_current_template()
{
    global $template;
    return basename($template, '.php');
}

function render_img($obj, $classes = '', $size = 'medium_large')
{
    $url = $obj['sizes'][$size];
    echo '<img
			class="' . $classes . '"	
			src="' . $url . '"	
			alt="' . $obj['alt'] . '"	
		>';
}


function get_menu($id, $post = '', $classes = '')
{
    wp_nav_menu(array(
        'menu' => $id,
        'menu_class' => 'flex'
    ));
}

function clog($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

// limit excerpt length
function custom_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);
function wpdocs_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

add_theme_support( 'social-links', array(
    'facebook', 'twitter', 'linkedin', 'google_plus', 'instagram',
) );

//add_action('after_switch_theme', 'setup_theme_options');

function setup_theme_options () {
    if(get_option('first_theme_activation') === false){
        // Set a flag if the theme activation happened
        add_option('first_theme_activation', true, '', false);
        // afc_en_init();
    }
}
// add custom shortcode
function make_button($atts)
{
    $a = shortcode_atts(array(
        'text' => 'Default text',
        'href' => 'Default URL',
        'style' => 'primary',
        'align' => 'left'
    ), $atts);

    return '
		<div class="button-wrapper" style="text-align: ' . $a['align'] . '">
			<a class="button ' . $a['style'] . '" href="' . $a['href'] . '">
				<span class="text">' . $a['text'] . '</span>
			</a>
		</div>';
}

add_shortcode('sbutton', 'make_button');

function my_google_fonts() {
    wp_enqueue_style(
        'my-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700&display=swap',
        false
    );

}
add_action( 'wp_enqueue_scripts', 'my_google_fonts' );