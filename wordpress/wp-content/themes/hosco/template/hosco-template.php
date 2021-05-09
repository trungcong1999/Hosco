<?php
/*
 Template Name: hosco
 */
 ?>

 <?php get_header(); ?>
 <!-- cai nay la anh dau -->
 <div id="home" class="parallax-section">
 	<div class="container">
 		<?php the_content(); ?>
 	</div>
 </div>
 <div class="tab-navications">
 	<ul class="tab-group">
 		
 		
 		<?php $kt = false;
 		foreach (get_post_meta( get_post()->ID, 'hosco_box', true ) as  $value) {
 			if($kt==false){?>
 				<li class="tab is-active"><?php echo get_post($value)->post_title; ?></li>
 				<?php 
 				$kt= true;
 			}else{
 				?>
 				<li class="tab "><?php echo get_post($value)->post_title; ?></li>

 				<?php
 			}
 		}
 		?>
 	</ul>
 </div>
 <div class="panel-group">
 	<?php $kt = false;
 	foreach (get_post_meta( get_post()->ID, 'hosco_box', true ) as  $value) {
 		if($kt==false){?>
 			<div class="panel is-show">
 				<!-- bat dau section -->
 				<h2 class="main-text-pos"><?php echo get_post($value)->post_title; ?></h2>
 				<?php echo get_post($value)->post_content; ?>

 			</div>
 			<?php 
 			$kt= true;
 		}else{
 			?>
 			<div class="panel ">
 				<!-- bat dau section -->
 				<h2 class="main-text-pos"><?php echo get_post($value)->post_title; ?></h2> 				
 				<?php echo get_post($value)->post_content; ?>
 			</div>

 			<?php
 		}
 	}
 	?>


 </div>
 <?php get_footer(); ?>