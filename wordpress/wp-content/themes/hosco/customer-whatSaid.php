<div class="container">
    <div class="headbox" >
        <h2 class="title">KHÁCH HÀNG NÓI GÌ VỀ HOSCO</h2>
    </div>
    <div class="col" style="margin:0 auto; width: 80%; overflow:hidden; ">
        <div class="owl-carousel owl-theme" id="slider-cutomer" >

            
            
            <?php $args = array( 'post_type' => 'customer_whatSaid','posts_per_page' => 10,'ignore_sticky_posts' => 1,   'orderby' => 'date','order' => 'DESC',     ); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="item" style="margin:0 10%;" >
                <div class="testimony-slide active text-center">
                    <div class="user" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>);"></div>
                    <span><span style="text-transform: uppercase;"><b><?php the_title(); ?></b></span><br>
                    <?php the_content(); ?>
                </div>
            </div>
                




                
            <?php endwhile; wp_reset_postdata(); ?>


        </div>
        <div class="customNavigation" style="height: 50px;">
            <a class="btn prev" style="height: 100%;"><img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/arrow_left_circle.png" alt=""></a>
            <a class="btn next" style="height: 100%;"><img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/arrow_right_circle.png" alt=""></a>

        </div>
    </div>

</div>