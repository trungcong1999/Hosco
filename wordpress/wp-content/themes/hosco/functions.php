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
      'editor','excerpt'


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
    return true;
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
    'post_type'      => 'product',
    'post_status' => array(           
      'publish'                     

    ),
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

  if(strpos(basename(get_page_template()), 'product-template')===0){
   $link_download = $_POST['hesinhthai'] ;
   update_post_meta( $post_id, '_he_sinh_thai', $link_download );
   $pr_id = $_POST['pr_ID'] ;
   update_post_meta( $post_id, '_product_page', $pr_id );
 }



}
add_action( 'save_post', 'he_sinh_thai_save' );



// metabox nghanh hang
function meta_box_nghanh_hang()
{
  if(get_post_type( )=='product'){
   add_meta_box( 'nghanh-hang', 'Lựa Chọn Nghành Hàng', 'nghanh_hang_box', 'product' );

 }
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
  if(get_post_type($post_id )=='product'){
    $list = array();
    foreach ($_POST as $key => $value) {

      if(strpos($key, 'prozzzzduct')===0){
        array_push($list, $value);
      }

    }


    update_post_meta( $post_id, '_product_nghanh_hang', $list );
  }
  

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


add_filter('upload_mimes','add_custom_mime_types');
function add_custom_mime_types($mimes) {
  return array_merge($mimes, array(
    'ac3' => 'audio/ac3',
    'mpa' => 'audio/MPA',
    'flv' => 'video/x-flv',
    'svg' => 'image/svg+xml',
    'svgz' => 'image/svgz+xml'
  ));
}
//==========================================
function showWidget(){
  register_sidebar(  array('name'=>'Sidebar1','id'=>'footer') );
  register_sidebar(  array('name'=>'menuFooter','id'=>'menuFooter') );
  register_sidebar(  array('name'=>'menuProduct','id'=>'menuProduct') );
  register_sidebar(  array('name'=>'trungtamhotro','id'=>'trungtamhotro') );
  register_sidebar(  array('name'=>'sidebarTinTUc','id'=>'sidebarTinTUc') );
  register_sidebar(  array('name'=>'formTuVan','id'=>'formTuVan') );
}
add_action( 'widgets_init', 'showWidget' );

//============phan trang
function html5wp_pagination($wp = null)
{
  global $wp_query;
    // var_dump($wp);
  $big = 999999999;
  $pages = paginate_links(array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp->max_num_pages,
    'type'  => 'array',
  ));
  if( is_array( $pages ) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<ul class="page-numbers">';
    foreach ( $pages as $page ) {
      // var_dump($page);
      echo "<li>$page</li>";
    }
    echo '</ul>';
  }
}
//=========metabox for page template tintuc
function meta_box_for_list_tintuc()
{
    // var_dump(get_post());
    // var_dump(basename(get_page_template()));
  if(strpos(basename(get_page_template()), 'news')===0){
   add_meta_box( 'list-danh-muc', 'Danh Mục Tin Tức ', 'list_danh_muc_box', 'page' );
 }
}
add_action( 'add_meta_boxes', 'meta_box_for_list_tintuc' );


function list_danh_muc_box( $post )
{
  $product_page = get_post_meta( $post->ID, '_page_category', true );
    // get_category();
  echo "<label for='product'>Chọn Danh Mục Cho Danh Sách Hiển Thị :</label>";
  echo "<select name='pr_ID' id='product'>";
  echo "<option value=''>Chưa Chọn Danh Mục</option> ";
  foreach (get_categories() as $value) {

    $kt = false;

    if($product_page ==$value->term_id){
      $kt=true;
    }
    if($kt==false){
      echo "<option value='".$value->term_id."'>".$value->name."</option> ";

    }else{
      echo "<option value='".$value->term_id."' selected>".$value->name."</option> ";
    }
  }




  echo "</select>";

}
function list_danh_muc_box_save( $post_id )
{

  if(strpos(basename(get_page_template()), 'news')===0){
   $link_download = $_POST['pr_ID'] ;
   update_post_meta( $post_id, '_page_category', $link_download );

 }



}
add_action( 'save_post', 'list_danh_muc_box_save' );
//widget baivietmoi theo chuyen muc
class Random_Post extends WP_Widget {

  function __construct() {
    parent::__construct(
      'random_post',
      'Bài Viết Mới Nhất[Tùy Chỉnh]',
      array( 'description'  =>  'Widget hiển thị bài viết mới nhất' )
    );
  }

  function form( $instance ) {

    $default = array(
      'title' => 'BÀI VIẾT MỚI',
      'post_number' => 3
    );
    $instance = wp_parse_args( (array) $instance, $default );
    $title = esc_attr($instance['title']);
    $post_number = esc_attr($instance['post_number']);

    echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
    echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';


  }

  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['post_number'] = strip_tags($new_instance['post_number']);
    return $instance;

  }

  function widget( $args, $instance ) {
    extract($args);
    $title = apply_filters( 'widget_title', $instance['title'] );
    $post_number = $instance['post_number'];

    echo '<div class="col-lg-12">';
    echo '<div class="sidebar-item recent-posts">';
    echo '<div class="sidebar-heading">';
    echo        '<h2>'.$title.'</h2>';
    echo '</div>';
    $random_query = new WP_Query(array('post_type'=>'post','posts_per_page'=>$post_number,'order' => 'DESC','orderby' => 'date',  ));

    if ($random_query->have_posts()):

      echo '<div class="content">';
      echo' <ul>';

      while( $random_query->have_posts() ) :
        $random_query->the_post();?>

        <li><a href="<?php the_permalink(); ?>">
          <p class="imagea">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
          </p>
          <h5><?php echo get_post()->post_title; ?></h5>
          <span><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></span>
        </a></li>

      <?php endwhile;

      echo '</ul>';
      echo '</div>';
      



    endif;
    wp_reset_postdata(); 
    echo '</div>';
    echo '</div>';
  }

}

add_action( 'widgets_init', 'create_randompost_widget' );
function create_randompost_widget() {
  register_widget('Random_Post');
}
//widget catagory
class categoryhienthi extends WP_Widget {

  function __construct() {
    parent::__construct(
      'categoryhienthi',
      'Catagory hiển thị',
      array( 'description'  =>  'Hiển thị catagory' )
    );
  }

  function form( $instance ) {

    $default = array(
      'title' => 'Danh Mục',
      
    );
    $instance = wp_parse_args( (array) $instance, $default );
    $title = esc_attr($instance['title']);
    $post_number = esc_attr($instance['category']);

    echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
    // var_dump(esc_attr($instance['check26']));

    
    foreach (get_categories() as $value) {
      $kt = false;
      foreach ($instance as $key =>  $value1) {
        if($value1 == $value->slug){

          echo '<input checked type="checkbox" id="'.$value->term_id.'" name="'.$this->get_field_name('check'.$value->term_id).'" value="'.$value->slug.'"><label for="'.$value->term_id.'">'.$value->name.'</label><br>';
          $kt = true;
          break;
        }
      }
      if($kt ==false)
        echo '<input type="checkbox" id="'.$value->term_id.'" name="'.$this->get_field_name('check'.$value->term_id).'" value="'.$value->slug.'"><label for="'.$value->term_id.'">'.$value->name.'</label><br>';
    }



  }

  function update( $new_instance, $old_instance ) {
    // var_dump($new_instance);
    $instance = $new_instance;
    
    return $instance;

  }

  function widget( $args, $instance ) {
    extract($args);
    $title = apply_filters( 'widget_title', $instance['title'] );
    

    echo '<div class="col-lg-12">';
    echo '<div class="sidebar-item categories">';
    echo '<div class="sidebar-heading">';
    echo   '<h2>'.$title.'</h2>';
    echo '</div>';
    echo '<div class="content">';
    echo '<ul>';
    foreach ($instance as $key => $value) {
      if($key!='title'){

        foreach (get_categories() as $value1) {
          if($value1->slug == $value){
            echo '<li><a href="#">- '.$value1->name.'</a></li>';
          }
        }
      }
    }
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';


  }

}

add_action( 'widgets_init', 'create_categoryhienthi_widget' );
function create_categoryhienthi_widget() {
  register_widget('categoryhienthi');
}

// ve hosco box
function meta_box_tab_ve_hosco()
{
  if(strpos(basename(get_page_template()), 'hosco')===0){

   add_meta_box( 've-hosco', 'Lựa Chọn tab giới thiệu', 'hosco_box', 'page' );
 }
}
add_action( 'add_meta_boxes', 'meta_box_tab_ve_hosco' );


function hosco_box( $post )
{

  wp_enqueue_script( 'nghanhhang.js', get_theme_file_uri( '/template/js/nghanhhang.js' ) , array(), '1.0', true );  
  // var_dump(get_pages( ));
  
  echo "<label for='product'>Chọn trang Hiển Thị trong tab :</label>";
  echo "<select name='pr_ID' id='hosco_tab' onchange='validateSelectBox(this)'>";
  echo "<option value=''>Chưa Chọn Sản Phẩm</option> ";
  foreach (get_pages( ) as  $value) {
   echo "<option value='".$value->ID."'>".$value->post_title."</option> ";
 }
 


 echo "</select>";
 echo "<h5>Danh Sách Trang Hiển Thị :</h5>";
 echo "<div id='choose-pr'>";
 $nghanh_hang_post = get_post_meta( $post->ID, 'hosco_box', true );
 if($nghanh_hang_post != ""){
  foreach ($nghanh_hang_post as  $value) {

    $args = array(

      'post_type'      => 'page',
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
function hosco_save( $post_id )
{
  if(strpos(basename(get_page_template()), 'hosco')===0){

    $list = array();
    foreach ($_POST as $key => $value) {

      if(strpos($key, 'prozzzzduct')===0){
        array_push($list, $value);
      }

    }


    update_post_meta( $post_id, 'hosco_box', $list );
  }
    // die();

}
add_action( 'save_post', 'hosco_save' );

// lien he box
function meta_box_lien_he()
{
  if(strpos(basename(get_page_template()), 'lienhe')===0){

   add_meta_box( 've-hosco', 'Lựa Chọn tab giới thiệu', 'lienhe_box', 'page' );
 }
}
add_action( 'add_meta_boxes', 'meta_box_lien_he' );


function lienhe_box( $post )
{


  $formVal = get_post_meta( $post->ID, 'lienhe_box', true );
  // var_dump($formVal);
  if($formVal==NULL || $formVal ==''){
    echo '<label for="shotcode">Nhập shotcode form</label>';
    
    echo '<textarea  id="shotcode" cols="70" name="shotcode"></textarea>';

  }else{
    echo '<label for="shotcode">Nhập shotcode form</label>';
    echo '<textarea  id="shotcode" cols="70" name="shotcode" >'.$formVal.'</textarea>';

  }
  $valueMienNam = get_post_meta( $post->ID, 'lienhe_map_mien_nam_box', true );

  echo '<h1>Chi Nhánh Miền Nam (iframe google)</h1>';
  if($formVal==NULL || $formVal ==''){    
    echo '<textarea  cols="70" name="mien_nam"></textarea>';

  }else{
    echo '<textarea  cols="70" name="mien_nam">'.$valueMienNam.'</textarea>';

  }
  // add_filter('user_can_richedit',true,999999);

  $valueMienBac = get_post_meta( $post->ID, 'lienhe_map_mien_bac_box', true );

  echo '<h1>Chi Nhánh Miền Bắc(iframe google) </h1>';
  if($formVal==NULL || $formVal ==''){    
    echo '<textarea  cols="70" name="mien_bac"></textarea>';

  }else{
    echo '<textarea  cols="70" name="mien_bac">'.$valueMienBac.'</textarea>';

  }



}
function lienhe_save( $post_id )
{
   // die();
  if(strpos(basename(get_page_template()), 'lienhe')===0){


    update_post_meta( $post_id, 'lienhe_box', $_POST['shotcode'] );
    update_post_meta( $post_id, 'lienhe_map_mien_nam_box', $_POST['mien_nam'] );
    update_post_meta( $post_id, 'lienhe_map_mien_bac_box', $_POST['mien_bac'] );
    
  }


}
add_action( 'save_post', 'lienhe_save' );
// anh tintuc

function aw_custom_meta_boxes( $post_type, $post ) {
  add_meta_box(
    'aw-meta-box',
    __( 'Custom Image' ),
    'render_aw_meta_box',
        array('post'), //post types here
        'normal',
        'high'
      );
}
add_action( 'add_meta_boxes', 'aw_custom_meta_boxes', 10, 2 );

function render_aw_meta_box($post) {
  $image = get_post_meta($post->ID, 'aw_custom_image', true);
  ?>
  <table>
    <tr>
      <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
      <td><input type="text" name="aw_custom_image" id="aw_custom_image" value="<?php echo $image; ?>" style="width:500px;" /></td>
    </tr>
  </table>
  <?php
}
function aw_include_script() {

  if ( ! did_action( 'wp_enqueue_media' ) ) {
    wp_enqueue_media();
  }
  
  wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/template/js/awscript.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'aw_include_script' );
function aw_save_postdata($post_id)
{
  if (array_key_exists('aw_custom_image', $_POST)) {
    update_post_meta(
      $post_id,
      'aw_custom_image',
      $_POST['aw_custom_image']
    );
  }
}
add_action('save_post', 'aw_save_postdata');
// ly do chon san pham
function meta_box_why_choose_pr()
{

  if(strpos(basename(get_page_template()), 'product-template')===0){
   add_meta_box( 'ly-do-chon', 'Lý do chọn sản phẩm', 'why_choose_box', 'page' );
 }
}
add_action( 'add_meta_boxes', 'meta_box_why_choose_pr' );


function why_choose_box( $post )
{
  $image = get_post_meta($post->ID, 'aw1_custom_image', true);
  ?>
  <table>
    <tr>
      <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
      <td><input type="text" name="aw1_custom_image" id="aw_custom_image" value="<?php echo $image; ?>" style="width:500px;" /></td>
    </tr>
  </table>
  <table>
    <caption><h1>Lý do chọn </h1></caption>
    <thead>
      <tr>
        <th>STT</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung Ngắn</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(get_post_meta( $post->ID, '_reason_choose', true )!=NULL || get_post_meta( $post->ID, '_reason_choose', true )!='')
        foreach (get_post_meta( $post->ID, '_reason_choose', true ) as $key => $value) {
          ?>
          <tr>
            <td><?php echo ($key+1); ?></td>
            <td><input type="text" name="titleLD<?php echo ($key+1); ?>" value="<?php echo $value->title; ?>" placeholder=""></td>
            <td><textarea name="txt<?php echo ($key+1); ?>" cols='70'><?php echo $value->content; ?></textarea></td>
          </tr>
          <?php
        }
        else{
          for($i = 1 ;$i<=6;$i++){
            ?>
            <tr>
              <td><?php echo ($i); ?></td>
              <td><input type="text" name="titleLD<?php echo ($i); ?>" value="" placeholder=""></td>
              <td><textarea name="txt<?php echo ($i); ?>" cols='70'></textarea></td>
            </tr>
            <?php
          }
        }
        ?>
      </tbody>
    </table>
    <?php
  }



  class reason {
    public $title;
    public $content;
    function __construct($title, $content){
      $this->title = $title;
      $this->content = $content;
    }
    
  }
  function why_choose_save( $post_id )
  {

    if(strpos(basename(get_page_template()), 'product-template')===0){
      $list = array();
      foreach ($_POST as $key => $value) {

        if(strpos($key, 'titleLD')===0){
          $strS = str_replace('titleLD', '', $key);
          $strTXT ='txt'.$strS;
          $obj = new reason($value,'');

          foreach ($_POST as $key1 => $value1) {  
            if($strTXT == $key1){
              $obj->content = $value1;
              break;
            }
          }
          array_push($list, $obj);
        }

      }


      update_post_meta( $post_id, '_reason_choose', $list );

    }
    if(strpos(basename(get_page_template()), 'product-template')===0){
      if (array_key_exists('aw1_custom_image', $_POST)) {
        update_post_meta(
          $post_id,
          'aw1_custom_image',
          $_POST['aw1_custom_image']
        );
      }
    }


  }
  add_action( 'save_post', 'why_choose_save' );

//tinh nang noi bat
  function meta_box_tinh_nang_noi_bat()
  {

    if(strpos(basename(get_page_template()), 'product-template')===0){
     add_meta_box( 'tinh-nang-noi-bat', 'Tính Năng Nổi Bật', 'tinh_nang_box', 'page' );
   }
 }
 add_action( 'add_meta_boxes', 'meta_box_tinh_nang_noi_bat' );


 function tinh_nang_box($post)
 {
  $image = get_post_meta($post->ID, 'aw2_custom_image', true);
  $linkBaiViet =get_post_meta($post->ID, '_LinkBaiViet', true);
  ?>
  <label for="BaiViet">Link Bài Viết</label>
  <textarea id="BaiViet" name="txtLinkBaiViet"><?php echo $linkBaiViet; ?></textarea>
  <table>
    <tr>
      <td><a href="#" class="aw2_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
      <td><input type="text" name="aw2_custom_image" id="aw2_custom_image" value="<?php echo $image; ?>" style="width:500px;" /></td>
    </tr>
  </table>
  <table>
    <caption><h1>Lý do chọn </h1></caption>
    <thead>
      <tr>
        <th>STT</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung Ngắn</th>
        <th>Ảnh</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(get_post_meta( $post->ID, '_tinhnang_noibat', true )!=NULL || get_post_meta( $post->ID, '_tinhnang_noibat', true )!='')
        foreach (get_post_meta( $post->ID, '_tinhnang_noibat', true ) as $key => $value) {
          ?>
          <tr>
            <td><?php echo ($key+1); ?></td>
            <td><input type="text" name="titleTN<?php echo ($key+1); ?>" value="<?php echo $value->title; ?>" placeholder=""></td>
            <td><textarea name="txtTN<?php echo ($key+1); ?>" cols='70'><?php echo $value->content; ?></textarea></td>
            <td><a href="#" class=" linkTinhNang button button-secondary"><?php _e('Upload Image'); ?></a><input type="text" class="linkIMG" name="aw_custom_image<?php echo ($key+1); ?>" id="linkTinhNang<?php echo ($key+1); ?>" value="<?php echo $value->linkImg; ?>" style="width:500px;" /></td>

          </tr>
          <?php
          if(($key+1)==4)
            break;
        }
        else{
          for($i = 1 ;$i<=4;$i++){
            ?>
            <tr>
              <td><?php echo ($i); ?></td>
              <td><input type="text" name="titleTN<?php echo ($i); ?>" value="" placeholder=""></td>
              <td><textarea name="txtTN<?php echo ($i); ?>" cols='70'></textarea></td>
              <td><a href="#" class="linkTinhNang button button-secondary"><?php _e('Upload Image'); ?></a><input type="text" class="linkIMG" name="aw_custom_image<?php echo ($i); ?>" id="linkTinhNang<?php echo ($i); ?>"  value="" style="width:500px;" /></td>

            </tr>
            <?php
          }
        }
        ?>
      </tbody>
    </table>
    <?php
  }



  class tinhnang {
    public $linkImg;
    public $title;
    public $content;
    function __construct($title, $content,$linkImg){
      $this->title = $title;
      $this->content = $content;
      $this->linkImg = $linkImg;
    }
    
  }
  function tinh_nang_save( $post_id )
  {

    if(strpos(basename(get_page_template()), 'product-template')===0){
      $list = array();
      foreach ($_POST as $key => $value) {

        if(strpos($key, 'titleTN')===0){
          $strS = str_replace('titleTN', '', $key);
          $strTXT ='txtTN'.$strS;
          $obj = new tinhnang($value,'','');
          $strIMG = 'aw_custom_image'.$strS;
          foreach ($_POST as $key1 => $value1) {  
            if($strTXT == $key1){
              $obj->content = $value1;
              break;
            }
          }
          foreach ($_POST as $key1 => $value1) {  
            if($strIMG == $key1){
              $obj->linkImg = $value1;
              break;
            }
          }
          array_push($list, $obj);
        }

      }


      update_post_meta( $post_id, '_tinhnang_noibat', $list );
      update_post_meta( $post_id, '_LinkBaiViet', $_POST['txtLinkBaiViet'] );

    }
    if(strpos(basename(get_page_template()), 'product-template')===0){
      if (array_key_exists('aw2_custom_image', $_POST)) {
        update_post_meta(
          $post_id,
          'aw2_custom_image',
          $_POST['aw2_custom_image']
        );
      }
    }


  }
  add_action( 'save_post', 'tinh_nang_save' );

  // widget do shotcode

  class do_shortcode_formTUVan extends WP_Widget {

    function __construct() {
      parent::__construct(
        'shortcodeTuVan',
        'doshortcode',
        array( 'description'  =>  'Hiển Thị Shortcode' )
      );
    }

    function form( $instance ) {

      $default = array(
        'title' => 'Thông Tin Của Bạn',
        'shortcodeTV'=>''
      );
      $instance = wp_parse_args( (array) $instance, $default );
      $title = esc_attr($instance['title']);
      $shortcodeTV = esc_attr($instance['shortcodeTV']);


      echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
      echo '<p>Nhập shortcode form: <textarea name="'.$this->get_field_name('shortcodeTV').'">'.$shortcodeTV.'</textarea>';




    }

    function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['shortcodeTV'] = strip_tags($new_instance['shortcodeTV']);
    return $instance;

    }

    function widget( $args, $instance ) {
      extract($args);
      $title = apply_filters( 'widget_title', $instance['title'] );


      echo '<button type="button" class="md-close" data-dismiss="modal"><i class="ic ic-close"></i></button>';
      echo '<h2 class="title">'.$title.'</h2>';
      echo do_shortcode( $instance['shortcodeTV']  );

    }

  }

  add_action( 'widgets_init', 'create_shortcode_widget' );
  function create_shortcode_widget() {
    register_widget('do_shortcode_formTUVan');
  }