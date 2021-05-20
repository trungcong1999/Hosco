<div class="container">
    <div class="headbox">
        <h2 class="title">Báo chí nói về HOSCO</h2>
    </div>
    <div class="customers_partner customers_partner_desktop" >
        <div id="jssor_3" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
                <?php 
                $args = array(
                    'posts_per_page' => 20,
                    'post_type'      => 'slider-new'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <div>
                        <img style="width: 200px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="customers_partner customers_partner_mobile">
    <div id="jssor_4" style="margin:auto;width:500px;height:100px;overflow:hidden;">        
        <div data-u="slides" class="slider-ads" style="cursor:default;width:500px;height:100px;overflow:hidden;">
            <?php 
            $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'slider-new'
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                   <div>
                    <img style="width: 150px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

</div>
</div>
<div class="container_group_post_talk_cnv">
    <div class="container container_post_talk_cnv">
        <div class="row">
            <?php $args = array( 'category_name' => 'bao-chi','posts_per_page' => 10,'ignore_sticky_posts' => 1,   'orderby' => 'date','order' => 'DESC',     ); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="cnv-md-post col-lg-6">
                    <div class="ct">
                        <h3 class="title_news">VNexpress</h3>
                        <h3 class="title"><a href="<?php echo permalink_link(); ?>" class="article-title"><?php the_title(); ?></a></h3>
                        <div class="description"> <?php echo get_post()->post_excerpt; ?></div>
                    </div>
                    <a class="img" href="index.html" title="">
                        <img class="news-blog fade show lazy" data-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="social Loyalty" title="social Loyalty" >
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<div class="container load_more_post_talk_cnv">
    <div class="row">
        <div class="col-lg-12 col-12 text-center">
            <a href="<?php echo get_post_permalink( ); ?>" class="article-title" target="_blank" title="">Xem chi tiết</a>
        </div>
    </div>
</div>
