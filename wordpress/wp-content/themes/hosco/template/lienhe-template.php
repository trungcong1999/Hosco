<?php
/*
 Template Name: lienhe
 */
 ?>
 <?php get_header(); ?>
 <!-- cai nay la anh dau -->
 <section class="lien-he-map">
 	<div class="cintent-mid">
 		<h2>THÔNG TIN LIÊN HỆ</h2>
 	</div>
 	<div class="container">   	
 		<div class="row addd">
 			<div class="col-md-6 col-sm-12" style="padding-left: 50px;background: #007bff;color: #fff;border-radius: 15px;">
 				<div class="wpb_column">
 					<div class="vc_column-inner ">
 						<div class="wpb_wrapper">
 							<div class="icon_element">
 								<div class="wpb_text_column wpb_content_element ">
 									<?php the_content(); ?>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>

 			<div class="col-md-6 col-sm-12 col-xs-12">
 				<div class="container contact-form">
 					<?php echo do_shortcode(get_post_meta(get_post()->ID,'lienhe_box',true)); ?>
 				</div>
 			</div>

 		</div>
 	</div>
 	<div class="container">
 		<div class="header">
 			
 			<input type="radio" name="tab" id="tab1" value="tab1">
 			<input type="radio" name="tab" id="tab2" value="tab2">
 			<div class="tabs">
 				<label for="tab1">
 					<div class="tab-hosco c-active">
 						<p>Miền Bắc</p>
 					</div>
 				</label>
 				<label for="tab2">
 					<div class="tab-hosco">
 						<p>Miền Nam</p>
 					</div>
 				</label>
 			</div>
 		</div>
 		<div class="tab-container">
 			<div class="content">
 				<div class="wpb_map_wraper">
 					<?php   $valueMienNam = get_post_meta( $post->ID, 'lienhe_map_mien_nam_box', true );
echo $valueMienNam; ?>
 				</div>
 			</div>
 			<div class="content">
 				<div class="wpb_map_wraper">
 					<?php   $valueMienBac = get_post_meta( $post->ID, 'lienhe_map_mien_bac_box', true );
echo $valueMienBac; ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
</div>
</section>
<?php get_footer(); ?>