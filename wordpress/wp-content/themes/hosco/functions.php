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
            'postexcerpt' 
            ,   ''           
            ,   'normal'      
        );

        add_meta_box(
            'postexcerpt2'     
            ,   __( 'Mô tả ngắn' )    
            ,   array ( __CLASS__, 'show' ) 
            ,   null             
            ,   'normal'          
            ,   'core'            
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

        wp_editor(
            self::unescape( $post->post_excerpt ),
            'excerpt',
            array (

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

add_filter( 'widget_text', 'do_shortcode' );
add_filter('use_block_editor_for_post_type', 'd4p_32752_completly_disable_block_editor');
function d4p_32752_completly_disable_block_editor($use_block_editor) {
  return false;
}
function meta_box_detail_san_pham_hst()
{
    // var_dump(get_post());
    // var_dump(basename(get_page_template()));
    if(strpos(basename(get_page_template()), 'product-template')===0){
     add_meta_box( 'he-sinh-thai', 'Hệ Sinh Thái Sản Phẩm', 'he_sinh_thai_box', 'page' );
 }
}
add_action( 'add_meta_boxes', 'meta_box_detail_san_pham_hst' );


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



// metabox nghanh hang
function meta_box_nghanh_hang()
{
 add_meta_box( 'nghanh-hang', 'Lựa Chọn Nghành Hàng', 'nghanh_hang_box', 'product' );
}
add_action( 'add_meta_boxes', 'meta_box_nghanh_hang' );


function nghanh_hang_box( $post )
{

    wp_enqueue_script( 'nghanhhang.js', get_theme_file_uri( '/template/js/nghanhhang.js' ) , array(), '1.0', true );

    $product_page = get_post_meta( $post->ID, '_product_page', true );
    $args = array(
        'post_type'      => 'ban_hang_thoi_trang'
    );
    $the_query = new WP_Query( $args );
    echo "<label for='product'>Chọn Sản Phẩm Hiển Thị :</label>";
    echo "<select name='pr_ID' id='product_nghanh_hang' onchange='validateSelectBox(this)'>";
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
        echo "<option value='".get_post()->ID."'>".get_post()->post_title."</option> ";
    }
endwhile; 
endif;
wp_reset_query();
echo "</select>";
echo "<h5>Danh Sách Sản Phẩm Hiển Thị :</h5>";
echo "<div id='choose-pr'>";
$nghanh_hang_post = get_post_meta( $post->ID, '_product_nghanh_hang', true );
if($nghanh_hang_post != ""){
    foreach ($nghanh_hang_post as  $value) {

        $args = array(

            'post_type'      => 'ban_hang_thoi_trang',
            'p'=> $value
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ): 
           while( $the_query->have_posts() ) : $the_query->the_post(); 
               echo "<div style='display:inline-block;''>";
               echo "<p style='display:inline-block;box-shadow: 0px 0px 10px 2px inset gray ;'>".get_post()->post_title."</p>";
               echo "<button type='button' style='width: 16.2px;padding: 0;border: 1px solid #c56565;'' onclick='remove(this)''><img src='../wp-content/themes/hosco/template/image/remove-image.png' alt='' width='100%'' height='100%''></button>";
               echo "<input type='hidden' name='prozzzzduct-".$value."' value='".$value."'>";
               echo "</div>";

           endwhile; 
       endif;
       wp_reset_query();

   }
}

echo "</div>";
}
function nghanh_hang_save( $post_id )
{
    $list = array();
    foreach ($_POST as $key => $value) {

        if(strpos($key, 'prozzzzduct')===0){
            array_push($list, $value);
        }
        
    }
    var_dump($list);

    update_post_meta( $post_id, '_product_nghanh_hang', $list );
    
    // die();
    
}
add_action( 'save_post', 'nghanh_hang_save' );


add_action(
  'add_meta_boxes',
  function(){
    add_meta_box(
      'my-metaboxx1', 
      'Thêm Icon Cho Nghành Hàng', 
      'func99999', 
      'ban_hang_thoi_trang', 
      'normal'
  );
},
9
);
function func99999($post){
  $url = get_post_meta($post->ID, '_nghanh-hang-icon', true); ?>
  <input id="my_image_URL" name="my_image_URL" type="text"
  value="<?php echo $url;?>" style="width:400px;" />
  <input id="my_upl_button" type="button" value="Upload Image" /><br/>
  <img src="<?php echo $url;?>" style="width:200px;" id="picsrc" />
  <script>
      jQuery(document).ready( function($) {
        jQuery('#my_upl_button').click(function() {
          window.send_to_editor = function(html) {
            imgurl = jQuery(html).attr('src')
            jQuery('#my_image_URL').val(imgurl);
            jQuery('#picsrc').attr("src", imgurl);
            tb_remove();
        }

        formfield = jQuery('#my_image_URL').attr('name');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
        return false;
    }); 
    });
</script>
<?php
}

add_action('save_post', function ($post_id) {
  if (isset($_POST['my_image_URL'])){
    update_post_meta($post_id, '_nghanh-hang-icon', $_POST['my_image_URL']);
}
});

add_action('plugins_loaded', function(){
  if($GLOBALS['pagenow']=='post.php'){
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles',  'my_admin_styles');
}
});

function my_admin_scripts(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
}



function my_admin_styles(){
  wp_enqueue_style('thickbox');
}