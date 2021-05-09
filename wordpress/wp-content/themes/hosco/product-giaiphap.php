    

<div class="gp-apbig" style="margin:0 auto; width: 100%; overflow:hidden; ">
    <div class="owl-carousel owl-theme" id="slider-product">
        <?php
        $sanpham = array();
        ?>
        <?php $args = array( 'post_type' => 'product'); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; 
            array_push($sanpham, get_post());

            ?>
            
            
        <?php endwhile; wp_reset_postdata(); 
      ?> 
        <?php foreach ($sanpham as $value): ?>

            <?php $args = array( 'post_type'=>'page','meta_key' => '_product_page','meta_value'=>$value->ID); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; 
                    // var_dump(get_post()); 
                   
                ?>
               <div class="owl-min owl-desktop" style="padding: 0 12px;">
                    <div class="item notify">
                        <div class="fh5co-blog" style="box-shadow: none;">
                            <img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($value->ID) );?>" />
                            <div class="blog-text"   style="padding: 5%;"  >
                                <h3 class="font-big"><a href="<?php echo get_post_permalink(); ?>"><?php echo $value->post_title ;?></a></h3>

                                <p class="aplly"><?php echo $value->post_content; ?></p>                    


                            </div>
                            <div class="continue">
                                <a href="<?php permalink_link(); ?>" title="">Xem Chi Tiết →</a>
                            </div>
                        </div>
                    </div>
                </div> 
            <?php endwhile; wp_reset_postdata(); ?> 
        <?php endforeach ?>
        
    </div>
</div>