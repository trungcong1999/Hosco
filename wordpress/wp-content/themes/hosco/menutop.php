
<?php 
$menuLocations =get_nav_menu_locations();
$menuId = $menuLocations['main-nav'];

$primatyNav = wp_get_nav_menu_items($menuId);
$id_parent =0;
// var_dump($primatyNav[1]);
echo "<ul class='list-unstyled nav navbar-nav primary-menu'>";
foreach ( $primatyNav as $navItem ) {
	// var_dump($navItem);
	if($navItem -> menu_item_parent == $id_parent){
		echo '<li> <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 
		foreach ( $primatyNav as $navItem2 ) { 
			if($navItem2 -> menu_item_parent == $navItem ->ID){
				echo "<div class='swap'>";
				echo "<div class='show-swap'>";
				echo "<ul class='nav nav-tabs'>";
				$kt =FALSE;
				foreach ( $primatyNav as $navItem2 ) { 

					if($navItem2 -> menu_item_parent == $navItem ->ID && $kt ==FALSE){
						// var_dump($navItem2);
						echo "<li class='active'><a data-toggle='tab' href='#".$navItem2->post_name."'>".$navItem2->title;
						echo "</a></li>";
						$kt = TRUE;

					} else if($navItem2 -> menu_item_parent == $navItem ->ID && $kt ==TRUE){
						// var_dump($navItem2);
						echo "<li><a data-toggle='tab'  href='#".$navItem2->post_name."'>".$navItem2->title;
						echo "</a></li>";
						$kt = TRUE;

					}
				}

				echo "</ul>";?>
				<div class="tab-content">
					<?php $kt = FALSE;
					foreach ( $primatyNav as $navItem2 ) { 

						if($navItem2 -> menu_item_parent == $navItem ->ID){ ?>

							<?php if($kt==FALSE) {?>
								<div id="<?php echo $navItem2->post_name; ?>" class="tab-pane fade in active show">
									<div class="tab-menu-mini">
										<ul class="row">
											<?php 
											foreach ( $primatyNav as $navItem3 ) { 
												if($navItem3 -> menu_item_parent == $navItem2 ->ID){
													?>

													<li class="col-lg-6 col-xs-6 list-sub">
														
														<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
															<div class="map-product-logo">
																<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($navItem3->ID-1) );?>" alt="" title="">
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	<p><?php echo get_post($navItem3->ID-1)->post_content; ?></p>
																</div>
															</div>
														</div>																	
													</li>
													<?php  
												} 
												$kt=TRUE;}?>
											</ul>
										</div>
									</div>
								<?php }else{
									?>
									<div id="<?php echo $navItem2->post_name; ?>" class="tab-pane fade ">
										<div class="tab-menu-mini">
											<ul class="row">
												<?php 
												foreach ( $primatyNav as $navItem3 ) { 
													if($navItem3 -> menu_item_parent == $navItem2 ->ID){
														?>
														<li class="col-lg-6 col-xs-6 list-sub">
															<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
															<div class="map-product-logo">
																<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($navItem3->ID-1) );?>" alt="" title="">
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	<p><?php echo get_post($navItem3->ID-1)->post_content; ?></p>
																</div>
															</div>
														</div>
														</li>
														<?php  
													} 
												}?>
											</ul>
										</div>
									</div>
									<?php
								}?>
								<?php 
							} 
						}
						?>
					</div>
					<?php
					echo "</div>";
					echo "</div>";
					break;
				} 
			}
			echo '</li>';
		}
	}
	echo "</ul>";
	?>
	<!-- ---------------------menumobile-------------------- -->
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" style="position: absolute;top: -20px;" class="closebtn" onclick="closeNav()">&times;</a>
		<nav class='menu-mobile-in'>
			<ul>
				<?php
				foreach ( $primatyNav as $navItem ) {
					if($navItem -> menu_item_parent == $id_parent){
						$kt = FALSE;
						foreach ( $primatyNav as $navItem2 ) { 
							if($navItem2 -> menu_item_parent == $navItem ->ID){
								$kt=TRUE;
								break;
							}
						}
						if($kt == FALSE)
							echo '<li> <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 
						else {
							echo '<li class="sub-menu"> <a href="#" title="'.$navItem->title.'">'.$navItem->title.'<div class="fa fa-caret-down right"></div></a>'; 
							?>
							<ul>
								<?php
								foreach ( $primatyNav as $navItem2 ) {
									if($navItem2 -> menu_item_parent == $navItem->ID){
										$kt = FALSE;
										foreach ( $primatyNav as $navItem3 ) { 
											if($navItem3 -> menu_item_parent == $navItem2 ->ID){
												$kt=TRUE;
												break;
											}
										}
										if($kt == FALSE)
											echo '<li> <a href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>'; 
										else {
											echo '<li class="sub-menu"> <a href="#" title="'.$navItem2->title.'">'.$navItem2->title.'<div class="fa fa-caret-down right"></div></a>'; 
											?>
											<ul>

												<?php
												foreach ( $primatyNav as $navItem3 ) {
													if($navItem3 -> menu_item_parent == $navItem2->ID){
														$kt = FALSE;
														foreach ( $primatyNav as $navItem4 ) { 
															if($navItem4 -> menu_item_parent == $navItem3 ->ID){
																$kt=TRUE;
																break;
															}
														}
														if($kt == FALSE)
															echo '<li> <a href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a>'; 
														else {
															echo '<li class="sub-menu"> <a href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'<div class="fa fa-caret-down right"></div></a>'; 
															?>
															<?php
														}
														echo '</li>';
													}
												}
												?>
											</ul>
											
											<?php
										}
										echo '</li>';
									}
								}
								?>
							</ul>
							<?php 
							?>
							<?php
						}
						echo '</li>';
					}
				}
				?>
			</ul>
		</nav>
	</div>
	<span class="icon-menu-body" style="font-size:30px;cursor:pointer;position: fixed;right: 2%;" onclick="openNav()">&#9776; </span>