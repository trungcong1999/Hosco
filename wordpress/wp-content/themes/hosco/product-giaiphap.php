    
<div class="container">
    <div class="col gp-apbig" style="margin:0 auto; width: 90%; overflow:hidden; ">
        <div class="owl-carousel owl-theme" id="slider-product">
            <?php
            $tax_query[] = array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => 'featured',
                'operator' => 'IN',
            );
            ?>
            <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="owl-min owl-desktop" style="padding: 0 12px;">
                    <div class="item notify" style="padding: 5%;">
                        <div class="fh5co-blog" style="box-shadow: none;">
                            <img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" />
                            <div class="blog-text"   style="padding: 5%;"  >
                                <h3 class="font-big"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_content(); ?>                
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?> 
        </div>
    </div>
</div>