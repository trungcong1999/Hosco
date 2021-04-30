<?php 

add_theme_support( 'menus' );
register_nav_menus( array(
'main-nav'=>'Menu chính'
) );
function slider_post_type(){

    $label = array(
        'name' => 'Ảnh slider', 
        'singular_name' => 'Ảnh slider',

    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Ảnh slider',
        'supports' => array(
            'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider', $args); 
 
}
add_action('init', 'slider_post_type');
function slider_post_type1(){

    $label = array(
        'name' => 'Slider đối tác', 
        'singular_name' => 'Slider đối tác'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Slider đối tác',
        'supports' => array(
            'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider-partner', $args); 
 
}
add_action('init', 'slider_post_type1');
function slider_post_type2(){

    $label = array(
        'name' => 'Slider báo trí', 
        'singular_name' => 'Slider báo trí'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Slider báo trí',
        'supports' => array(
            'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider-new', $args); 
 
}
add_action('init', 'slider_post_type2');
function typical_projects(){

    $label = array(
        'name' => 'Dự án tiêu biểu', 
        'singular_name' => 'Dự án tiêu biểu'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Dự án tiêu biểu',
        'supports' => array(
            'title',
            'thumbnail',
            'editor'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('typical_project', $args); 
 
}
add_action('init', 'typical_projects');
function Press_talk(){

    $label = array(
        'name' => 'Báo Chí', 
        'singular_name' => 'Thông Tin Báo Chí'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Báo Chí',
        'supports' => array(
             'title', 'editor', 'thumbnail', 'excerpt'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        // 'show_in_menu' => true, 
        // 'show_in_nav_menus' => true, 
        // 'show_in_admin_bar' => true,
        // 'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('Press_talk', $args); 
 
}
add_action('init', 'Press_talk');
function van_hoa_hosco(){

    $label = array(
        'name' => 'Văn Hóa Hosco', 
        'singular_name' => 'Văn Hóa Hosco'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Văn Hóa Hosco',
        'supports' => array(
             'title', 'editor', 'thumbnail', 'excerpt'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        // 'show_in_menu' => true, 
        // 'show_in_nav_menus' => true, 
        // 'show_in_admin_bar' => true,
        // 'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('van_hoa_hosco', $args); 
 
}
add_action('init', 'van_hoa_hosco');
function tin_tuc(){

    $label = array(
        'name' => 'Tin Tức', 
        'singular_name' => 'Tin Tức'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Tin Tức',
        'supports' => array(
             'title', 'editor', 'thumbnail', 'excerpt'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        // 'show_in_menu' => true, 
        // 'show_in_nav_menus' => true, 
        // 'show_in_admin_bar' => true,
        // 'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('tin_tuc', $args); 
 
}
add_action('init', 'tin_tuc');
function customer_whatSaid(){

    $label = array(
        'name' => 'The Customer Says', 
        'singular_name' => 'The Customer Says'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'the customer says',
        'supports' => array(
             'title', 'editor', 'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        // 'show_in_menu' => true, 
        // 'show_in_nav_menus' => true, 
        // 'show_in_admin_bar' => true,
        // 'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('customer_whatSaid', $args); 
 
}
add_action('init', 'customer_whatSaid');
add_action( 'add_meta_boxes', array ( 'T5_Richtext_Excerpt', 'switch_boxes' ) );

/**
 * Replaces the default excerpt editor with TinyMCE.
 */
class T5_Richtext_Excerpt
{
    /**
     * Replaces the meta boxes.
     *
     * @return void
     */
    public static function switch_boxes()
    {
        if ( ! post_type_supports( $GLOBALS['post']->post_type, 'excerpt' ) )
        {

            return;
        }

        remove_meta_box(
            'postexcerpt' // ID
        ,   ''            // Screen, empty to support all post types
        ,   'normal'      // Context
        );

        add_meta_box(
            'postexcerpt2'     // Reusing just 'postexcerpt' doesn't work.
        ,   __( 'Mô tả ngắn' )    // Title
        ,   array ( __CLASS__, 'show' ) // Display function
        ,   null              // Screen, we use all screens with meta boxes.
        ,   'normal'          // Context
        ,   'core'            // Priority
        );
    }

    /**
     * Output for the meta box.
     *
     * @param  object $post
     * @return void
     */
    public static function show( $post )
    {
    ?>
        <label class="screen-reader-text" for="excerpt"><?php
        _e( 'Excerpt' )
        ?></label>
        <?php
        // var_dump($post);
        // We use the default name, 'excerpt', so we don’t have to care about
        // saving, other filters etc.
        wp_editor(
            self::unescape( $post->post_excerpt ),
            'excerpt',
            array (
            // 'textarea_rows' => 15
          'media_buttons' => FALSE,
           'teeny'         => TRUE,
           'tinymce'       => TRUE
            )
        );
    }

    /**
     * The excerpt is escaped usually. This breaks the HTML editor.
     *
     * @param  string $str
     * @return string
     */
    public static function unescape( $str )
    {
        return str_replace(
            array ( '&lt;', '&gt;', '&quot;', '&amp;', '&nbsp;', '&amp;nbsp;' )
        ,   array ( '<',    '>',    '"',      '&',     ' ', ' ' )
        ,   $str
        );
    }
}

// add_filter('manage_posts_columns', 'ST4_columns_head');
// add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);
 ?>