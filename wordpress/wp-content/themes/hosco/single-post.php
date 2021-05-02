<?php get_header();?>


<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <?php 

                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'tin_tuc',
                        'name'=>$_GET['tin_tuc']
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                    <?php if( $the_query->have_posts() ): ?>
                        <?php while( $the_query->have_posts() ) : $the_query->the_post();  ?>

                            <div class="blog-title-area text-center">
                                <h3><?php the_title(); ?> </h3>
                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title=""><?php $date=date_create(get_post()->post_date);
echo date_format($date,"Y/m/d"); ?></a></small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end title -->

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                    <div class="single-post-media">
                        <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                    </div><!-- end media -->
                    <div class="blog-content">  
                        <?php the_content(); ?>
                    </div><!-- end content -->

                    
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Tin Hosco</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">

                                <?php 
                                $args = array(

                                    'category_name' => 'van-hoa-hosco'
                                );
                                $the_query = new WP_Query( $args );
                                ?>
                                <?php if( $the_query->have_posts() ): ?>
                                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                        <a href="<?php echo get_post_permalink(); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php the_title(); ?></h5>
                                                <small><?php $date=date_create(get_post()->post_date);
echo date_format($date,"Y/m/d"); ?></small>
                                            </div>
                                        </a>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>

                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Bài viết mới</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">


                                    <?php $args = array( 'category_name' => 'tin-tuc','posts_per_page' => 3,'ignore_sticky_posts' => 3,   'orderby' => 'date','order' => 'DESC',     ); ?>
                                    <?php $getposts = new WP_query( $args);?>
                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                     <?php global $product; ?>

                                     <a href="<?php echo get_post_permalink(); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php the_title(); ?></h5>
                                                <small><?php $date=date_create(get_post()->post_date);
echo date_format($date,"Y/m/d"); ?></small>
                                            </div>
                                        </a>

                                 <?php endwhile; wp_reset_postdata(); ?>
                             </div>
                         </div><!-- end blog-list -->
                     </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php get_footer(); ?>