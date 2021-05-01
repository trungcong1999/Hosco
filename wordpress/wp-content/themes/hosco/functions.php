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
function he_sinh_thai(){

    $label = array(
        'name' => 'Hệ Sinh Thái', 
        'singular_name' => 'Hệ Sinh Thái'
    );


    $args = array(
        'labels' => $label, 
        'description' => 'Hệ Sinh Thái',
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

    register_post_type('he_sinh_thai', $args); 

}
add_action('init', 'he_sinh_thai');
function ban_hang_thoi_trang(){

    $label = array(
        'name' => 'Nghành Hàng', 
        'singular_name' => 'Nghành Hàng'
    );


    $args = array(
        'labels' => $label, 
        'description' => 'Nghành Hàng',
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

    register_post_type('ban_hang_thoi_trang', $args); 

}
add_action('init', 'ban_hang_thoi_trang');
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

add_post_type_support( 'page', 'excerpt' );
add_filter( 'widget_text', 'do_shortcode' );
add_filter('use_block_editor_for_post_type', 'd4p_32752_completly_disable_block_editor');
function d4p_32752_completly_disable_block_editor($use_block_editor) {
  return false;
}
function meta_box_detail_san_pham_hst()
{
   add_meta_box( 'he-sinh-thai', 'Hệ Sinh Thái Sản Phẩm', 'he_sinh_thai_box', 'page' );
}
add_action( 'add_meta_boxes', 'meta_box_detail_san_pham_hst' );

/**
 Khai báo callback
 @param $post là đối tượng WP_Post để nhận thông tin của post
 **/
 function he_sinh_thai_box( $post )
 {
    $product_page = get_post_meta( $post->ID, '_product_page', true );
    $args = array(
        'post_type'      => 'product'
    );
    $the_query = new WP_Query( $args );
    echo "<label for='product'>Chọn Sản Phẩm Hiển Thị :</label>";
    echo "<select name='pr_ID' id='product'>";
    echo "<option value=''>Chưa Chọn Sản Phẩm</option> ";

    if( $the_query->have_posts() ): 
     while( $the_query->have_posts() ) : $the_query->the_post(); 
        $kt = false;
        
        if($product_page ==get_post()->ID){
            $kt=true;
        }
     if($kt==false){
      echo "<option value='".get_post()->ID."'>".get_post()->post_title."</option> ";

  }else{
    echo "<option value='".get_post()->ID."' selected>".get_post()->post_title."</option> ";
  }
endwhile; 
endif;
wp_reset_query();
echo "</select>";
$link_download = get_post_meta( $post->ID, '_he_sinh_thai', true );
// var_dump($link_download);
echo "<h2>Hệ Sinh Thái Của Sản Phẩm</h2>";
$args = array(

    'post_type'      => 'he_sinh_thai'
);
$the_query = new WP_Query( $args );
echo "<div style='border:1px;'>";
if( $the_query->have_posts() ): 
 while( $the_query->have_posts() ) : $the_query->the_post(); 
    $kt = false;
    if($link_download!=NULL){
        foreach ($link_download as $value) {
        if($value ==get_post()->ID){

            echo "<input type='checkbox' id='".get_post()->post_name."' name='hesinhthai[]' value='".get_post()->ID."' checked>";
            echo "<label for='".get_post()->post_name."'>".the_title()."</label>"; 
            $kt=true;
            break;
        }     
    }
    }
    
    if($kt==false){
     echo "<input type='checkbox' id='".get_post()->post_name."' name='hesinhthai[]' value='".get_post()->ID."' >";
     echo "<label for='".get_post()->post_name."'>".the_title()."</label>"; 
 }

endwhile; 
endif;
wp_reset_query();

echo "</div>";
}
function he_sinh_thai_save( $post_id )
{
    $link_download = $_POST['hesinhthai'] ;
    update_post_meta( $post_id, '_he_sinh_thai', $link_download );
    $pr_id = $_POST['pr_ID'] ;
    update_post_meta( $post_id, '_product_page', $pr_id );


}
add_action( 'save_post', 'he_sinh_thai_save' );