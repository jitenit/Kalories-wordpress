<?php
/*
 * Plugin Name: faq in minute
 * Plugin URI: https://twitter.com/jitendra_popat
 * Description: Create your Faq in just minute. active plugin.go to admin. add new FAQ. and just simple paste this [showallfaq] in your page or in post. use [showallfaq] or [faq-in-minute] to display list of all FAQ. FAQ with modern Design. And for category base [showallfaq category="categoryname"]
 * Version: 2.1
 * Author: Jiten IT - Jitendra
 * Author URI: https://twitter.com/jitendra_popat
 */

if (!function_exists('faq_details')) {

// Register faq Post Type
    function faq_in_minute_cat() {
        $labels = array(
            'name' => _x('FAQ', 'Post Type General Name', 'text_domain'),
            'singular_name' => _x('FAQ', 'Post Type Singular Name', 'text_domain'),
            'menu_name' => __('Faq in minute', 'text_domain'),
            'name_admin_bar' => __('Faq in minute', 'text_domain'),
            'parent_item_colon' => __('Parent Item:', 'text_domain'),
            'all_items' => __('All Items', 'text_domain'),
            'add_new_item' => __('Add New Item', 'text_domain'),
            'add_new' => __('Add New', 'text_domain'),
            'new_item' => __('New Item', 'text_domain'),
            'edit_item' => __('Edit Item', 'text_domain'),
            'update_item' => __('Update Item', 'text_domain'),
            'view_item' => __('View Item', 'text_domain'),
            'search_items' => __('Search Item', 'text_domain'),
            'not_found' => __('Not found', 'text_domain'),
            'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
            );
        $args = array(
            'label' => __('faq_in_minute_cat', 'text_domain'),
            'description' => __('Create Your FAQ in Minute With Best Desing', 'text_domain'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats',),
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-heart',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            );
        register_post_type('faq_in_minute_cat', $args);

        $labels = array(
            'name' => _x('faqcategory', 'taxonomy general name'),
            'singular_name' => _x('faqcategory', 'taxonomy singular name'),
            'search_items' => __('Search faqcategory'),
            'all_items' => __('All faqcategory'),
            'parent_item' => __('Parent faqcategory'),
            'parent_item_colon' => __('Parent faqcategory:'),
            'edit_item' => __('Edit faqcategory'),
            'update_item' => __('Update faqcategory'),
            'add_new_item' => __('Add New faqcategory'),
            'new_item_name' => __('New faqcategory Name'),
            'menu_name' => __('faqcategory'),
            );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'faqcategory'),
            );
        register_taxonomy('faqcategory', array('faq_in_minute_cat'), $args);
    }
    add_action('init', 'faq_in_minute_cat', 0);
}

add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('js/mycolorj.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}
?>
<?php
add_action( 'admin_menu', 'faq_in_minute_cat_add_admin_menu' );
add_action( 'admin_init', 'faq_in_minute_cat_settings_init' );

function faq_in_minute_cat_add_admin_menu(  ) { 
    add_submenu_page( 'edit.php?post_type=faq_in_minute_cat', 'Settings of FAQ', 'FAQ Settings', 'manage_options', 'faq_in_minute_cat', 'faq_in_minute_cat_options_page' );
}

function faq_in_minute_cat_settings_init(  ) { 
    register_setting( 'pluginPage', 'faq_in_minute_cat_settings' );
    add_settings_section(
        'faq_in_minute_cat_pluginPage_section', 
        __( 'Faq Settings For Your website', 'text_domain' ), 
        'faq_in_minute_cat_settings_section_callback', 
        'pluginPage'
        );
    add_settings_field( 
        'faq_in_minute_cat_text_field_0', 
        __( 'Background Color of Tab', 'text_domain' ), 
        'faq_in_minute_cat_text_field_0_render', 
        'pluginPage', 
        'faq_in_minute_cat_pluginPage_section' 
        );
    add_settings_field( 
        'faq_in_minute_cat_text_field_2', 
        __( 'Font color (Text Color)', 'text_domain' ), 
        'faq_in_minute_cat_text_field_2_render', 
        'pluginPage', 
        'faq_in_minute_cat_pluginPage_section' 
        );

}
function faq_in_minute_cat_text_field_0_render(  ) { 
    $options = get_option( 'faq_in_minute_cat_settings' );
    
    $faq_tab_bg =  $options['faq_in_minute_cat_text_field_0'];   ?> 
    <input type='text' name='faq_in_minute_cat_settings[faq_in_minute_cat_text_field_0]' class="my-color-field" value='<?php echo $faq_tab_bg; ?>'>
    <?php

}
function faq_in_minute_cat_text_field_2_render(  ) { 

    $options = get_option( 'faq_in_minute_cat_settings' );
    
    $faq_tab_text =  $options['faq_in_minute_cat_text_field_2'];  ?>
    <input type='text' name='faq_in_minute_cat_settings[faq_in_minute_cat_text_field_2]' class="my-color-field" value='<?php echo $faq_tab_text; ?>'>
    <?php 
}

function faq_in_minute_cat_settings_section_callback(  ) { 
    echo __( 'Display your faq in wordpress page or post using [faq-in-minute] or [showallfaq] shortcodes. From here you can change settings for faq. background color,text color,font family etc. ', 'text_domain' );
}
function faq_in_minute_cat_options_page(  ) { 
    ?>
    <form action='options.php' method='post'>

        <h2>Faq In Minute</h2>
        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>
    </form>
    <?php
}
function faq_in_minute_shortcut($atts) {

    //print_r($atts); die();
    $_SESSION['path'] = ABSPATH;

    extract(shortcode_atts(array(
        "limit" => '',
        "category" => '',
        "faqcategory"=>'',
        "order"=> '',
        ), $atts));

   // Define limit
    if (!empty($limit)) {
        $posts_per_page = $limit;
    } else {
        $posts_per_page = '-1';
    }
    // Define category
     if (!empty($category)) {
        $cat = $category;
    } else {
        $cat = '';
    }

     if (!empty($order)) {
        $ord = $order;
    } else {
        $ord = 'DESC';
    }

     if (!empty($faqcategory)) {
        $faqcat = $faqcategory;
    } else {
        $faqcat = '';
    }
    include('faq.php');

    $args = array(
        'posts_per_page' => $limit,
        'category_name' => $cat,
        'faqcategory'=>$faqcat,
        'orderby' => 'post_date',
        'order' => $ord,
        'post_type' => 'faq_in_minute_cat',
       // 'post_parent' => 0,
        'post_status' => 'publish',
        );

    $output='<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

    global $post;
    $the_query = new WP_Query($args);
    $i = 1;
    while ($the_query->have_posts()):
        $the_query->the_post();

    $output .= '<div class="panel panel-default">
    <div class="panel-heading faq_heading" role="tab" id="headingOne' . $i .$post->ID. '" data-toggle="collapse" href="#collapseOne' . $i .$post->ID. '">
        <h4 class="panel-title">
            <a data-parent="#accordion"  class="accordion-toggle" aria-expanded="true" aria-controls="collapseOne' . $i . $post->ID.'">'
                . get_the_title() . '</a></h4>
            </div>
            <div class="panel-collapse collapse" id="collapseOne' . $i . $post->ID.'" aria-labelledby="headingOne' . $i . $post->ID.'" role="tabpanel">
                <div class="panel-body">' . get_the_content() . '</div>
            </div>
        </div>';
        $i++;
        endwhile;
        wp_reset_postdata();
        $output .= '</div>';
        return $output;
} 


add_shortcode('showallfaq', 'faq_in_minute_shortcut');

add_shortcode('faq-in-minute', 'faq_in_minute_shortcut');

function faq_im_scripts() {

    wp_register_style('bootstrapmin', plugin_dir_url(__FILE__) . 'css/bootstrapmin.css');

    wp_enqueue_style('bootstrapmin');

    wp_enqueue_script('myjs', plugins_url( 'js/bootstrap.min.js' , __FILE__), array( 'jquery' ) , true);
}

add_action('wp_enqueue_scripts', 'faq_im_scripts');

function faq_in_minute_script() {
    ?>
    <?php
}
add_action('wp_footer', 'faq_in_minute_script');