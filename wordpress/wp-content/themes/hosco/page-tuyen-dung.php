<?php get_header(); ?>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                     <div class="blog-top clearfix">
                        <h4 class="pull-left">Tuyển Dụng <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->
                    <div class="blog-list clearfix">


                        <?php 
                        $args = array(

                            'category_name' => 'tuyen-dung'
                        );
                        $the_query = new WP_Query( $args );
                        ?>
                        <?php if( $the_query->have_posts() ): ?>
                            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="<?php echo get_post_permalink(); ?>" title="">
                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="<?php echo get_post_permalink(); ?>" title=""><?php the_title(); ?></a></h4>
                                        <p><?php echo get_post()->post_excerpt;  ?></p>
										   <small><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>



                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">


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
                                                <small><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></small>
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
                                                <small><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></small>
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