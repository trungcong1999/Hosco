<?php
/*
 Template Name: news
 */
 ?>
 <?php get_header(); ?>
 <!-- cai nay la anh dau -->

 <div class="heading-page header-text">
 	<section class="page-heading">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="text-content">
 						<h4><?php echo get_post()->post_title; ?></h4>
 						<h2><?php echo get_post()->post_content; ?></h2>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </div> 

 <!-- cai nay la thong tin tin tuc -->
 <section class="blog-posts grid-system">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8">
 				<div class="all-blog-posts">
 					<div class="row">
 						
 						<?php 

 						$slugCategory = get_category(get_post_meta( get_post()->ID,'_page_category', true ))->slug;
 						$nameCategory = get_category(get_post_meta( get_post()->ID,'_page_category', true ))->name;
 						?>
 						<?php 
 						$args = array(

 							'category_name' => $slugCategory,
 							'nopaging' => false,
 							'posts_per_page' => 6,  
 							'paged' => get_query_var('paged'),

 						);
 						$the_query = new WP_Query( $args );
 						?>
 						<?php if( $the_query->have_posts() ): ?>
 							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
 								
 								<div class="col-lg-6">
 									<div class="blog-post">
 										<div class="blog-thumb">
 											<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
 										</div>
 										<div class="down-content">
 											<span><?php echo $nameCategory; ?></span>
 											<a href="<?php echo get_post_permalink(); ?>"><h4><?php echo get_post()->post_title; ?></h4></a>
 											<ul class="post-info">
 												<li><a href="#"><?php echo get_author_name(get_post()->post_author); ?></a></li>
 												<li><a href="#"><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></a></li>
 												
 											</ul>
 											<p><?php echo get_post()->post_excerpt; ?></p>
 											
 										</div>
 									</div>
 								</div>

 							<?php endwhile; ?>
 						<?php endif; ?>
 						<?php wp_reset_query(); ?>
 						
 						<div class="col-lg-12">
 							<?php html5wp_pagination($the_query); ?>
 							
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4">
 				<div class="sidebar">
 					<div class="row">
 						
 						<?php  if ( dynamic_sidebar('sidebarTinTUc') ) : else : endif;  ?>

 						
 						
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <br>
 <?php get_footer(); ?>