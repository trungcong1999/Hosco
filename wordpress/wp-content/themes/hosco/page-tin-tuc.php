<?php get_header(); ?>
<section class="blog-pp">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="menu-tab-infor">
					<div class="sidenav-tt">
						<div class="main-left">
							<nav class="menu-left aside-left">
								<ul>
									<li>
										<a class="active" href="https://hosco.vn/tin-tuc" title="Tin Tức">Tin Tức</a>
									</li>
								</ul>
							</nav>           
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="tin-tuc">
					<div class="main-right">
						<div class="list-category">
							

							<?php 
							$args = array(
								'posts_per_page' => 20,
								'post_type'      => 'tin_tuc'
							);
							$the_query = new WP_Query( $args );
							?>
							<?php if( $the_query->have_posts() ): ?>
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="list-category-box">
										<div class="box-img">
											<a href="<?php echo get_post_permalink(); ?>" class="img">
												<img width="600px" height="350px" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">                    </a>
											</div>
											<div class="box-txt">
												<p class="title">
													<a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
												</p>
												<div class="summary"><p><?php echo get_post()->post_excerpt;  ?></p>
												</div>
											</div>
										</div>

									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>







							</div>
						</div>
					</div>
				</div>
			</div>
		</div>						
	</section>
	<?php get_footer(); ?>