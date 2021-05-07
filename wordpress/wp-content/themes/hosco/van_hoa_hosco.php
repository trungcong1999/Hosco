<div class="container">
   <div class="headbox">
      <h2 class="title">VĂN HÓA HOSCO & TIN TỨC</h2>
   </div>
   <ul class="nav">
      <li><a class="smooth active show" data-toggle="tab" href="#vanhoa" title="">Văn hóa hosco</a></li>
      <li><a class="smooth" data-toggle="tab" href="#tintuc" title="">Tin Tức</a></li>
   </ul>
   <div class="tab-content tab-content-news">
      <div id="vanhoa" class="tab-pane fade in active show">
         <div class="row row-ibl">
            <?php $args = array( 'category_name' => 'van-hoa-hosco','posts_per_page' => 3,'ignore_sticky_posts' => 3,   'orderby' => 'date','order' => 'DESC',     ); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
             <?php global $product; ?>


             <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
               <div class="news-item">
                  <a class="cnv-img-4x3" aria-label="text" href="index.html" target="_blank">
                     <img class="news-blog fade show lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="social Loyalty" title="social Loyalty" />
                  </a>
                  <div class="title">
                     <a href="<?php echo get_post_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                  </div>
                  <div class="description">
                     <?php echo get_post()->post_excerpt; ?>
                  </div>
                  <div class="continue">
                     <a href="<?php echo get_post_permalink(); ?>" class="article-title" target="_blank" title="">Xem chi tiết</a>
                  </div>
               </div>
            </div>




         <?php endwhile; wp_reset_postdata(); ?>


      </div>
      <div class="col-lg-12 col-12 text-center load_more_new">
         
      </div>
   </div>
   <div id="tintuc" class="tab-pane fade">
   <div class="row row-ibl">
<?php $args = array( 'category_name' => 'tin-tuc','posts_per_page' => 3,'ignore_sticky_posts' => 3,   'orderby' => 'date','order' => 'DESC',     ); ?>
     <?php $getposts = new WP_query( $args);?>
     <?php global $wp_query; $wp_query->in_the_loop = true; ?>
     <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
       <?php global $product; ?>

      <div class="col-xl-4 col-lg-4 col-md-6 col-12 item ">
         <div class="news-item">
            <a class="cnv-img-4x3" aria-label="text" href="index.html" target="_blank">
               <img class="news-blog fade show lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" >
            </a>
            <div class="time">
               <i class="fa fa-clock-o"></i> <?php $date=date_create(get_post()->post_date);echo date_format($date,"Y/m/d");?>
            </div>
            <div class="title">
               <a href="<?php echo get_post_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
            </div>
            <div class="description">
               <?php echo get_post()->post_excerpt; ?>

            </div>
            <div class="continue">
               <a href="<?php echo get_post_permalink(); ?>" class="article-title" target="_blank" title="">Xem chi tiết</a>
            </div>
         </div>
      </div>

   <?php endwhile; wp_reset_postdata(); ?>

</div>
<div class="col-lg-12 col-12 text-center load_more_new">
   
</div>
</div>
</div>

</div>
</div>
</div>