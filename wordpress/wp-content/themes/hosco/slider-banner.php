<div id="owl-demo" class="owl-carousel">
	<?php 
	$args = array(
		'posts_per_page' => 5,
		'post_type'      => 'slider'
	);
	$the_query = new WP_Query( $args );
	?>
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" style="width: 100%">
			
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	
	
</div>