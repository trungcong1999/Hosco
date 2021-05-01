
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
						echo "<li><a data-toggle='tab' href='#".$navItem2->post_name."'>".$navItem2->title;
						echo "</a></li>";
						$kt = TRUE;

					}
				}

				echo "</ul>";?>
				<?php 
				foreach ( $primatyNav as $navItem2 ) { 
					$kt = FALSE;
					if($navItem2 -> menu_item_parent == $navItem ->ID){ ?>
						<div class="tab-content">
							<?php if($kt==FALSE) {?>
								<div id="<?php echo $navItem2->post_name; ?>" class="tab-pane fade in active show">
									<div class="tab-menu-mini">
										<ul class="row">
											<?php 
											foreach ( $primatyNav as $navItem3 ) { 
												if($navItem3 -> menu_item_parent == $navItem2 ->ID){
													?>

													<li class="col-lg-6 col-xs-6 list-sub">
														<div class="map-product-item">
															<div class="map-product-logo">
																<a class="smooth icon " href="pages_id_1.html" title="">
																	<img src="https://bahanto.net/wp-content/uploads/2021/04/ed5b9b3b3786c5d89c97.jpg" alt="" title="">
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	<p>Phần mềm quản lý bán hàng</p>
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
															<div class="map-product-item">
																<div class="map-product-logo">
																	<a class="smooth icon " href="pages_id_1.html" title="">
																		<img src="https://bahanto.net/wp-content/uploads/2021/04/ed5b9b3b3786c5d89c97.jpg" alt="" title="">
																	</a>
																</div>
																<div class="map-product-info">
																	<div class="content-sub-menu">
																		<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																		<p>Phần mềm quản lý bán hàng</p>
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
								}break; ?>
							</div>
							<?php 
						} 

					}

					?>

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
				<li><a href='#'>Về Hosco</a></li>
				<li class='sub-menu'><a href='#'>Sản phẩm<div class='fa fa-caret-down right'></div></a>
					<ul>
						<li class='sub-menu'><a href='#'>Phần mềm<div class='fa fa-caret-down right'></div></a>
							<ul>
								<li><a href='#'>MASTER PRO</a></li>
								<li><a href='#'>LOTUS PRO</a></li>
								<li><a href='#'>LOTUS DMS</a></li>
								<li><a href='#'>GYM MASTER</a></li>
								<li><a href='#'>NEXT FARM</a></li>
							</ul>
						</li>
						<li class='sub-menu'><a href='#'>Giải pháp<div class='fa fa-caret-down right'></div></a>
							<ul>
								<li><a href='#'>LOTUS ERP</a></li>
								<li><a href='#'>ERP</a></li>
								<li><a href='#'>BOFY</a></li>
								<li><a href='#'>SAP B1</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href='#'>Khách hàng</a></li>
				<li><a href='#'>Tuyển dụng</a></li>
				<li><a href='#'>Tin tức</a></li>
				<li><a href='#'>Liên hệ</a></li>
			</ul>
		</nav>
	</div>
	<span class="icon-menu-body" style="font-size:30px;cursor:pointer;position: fixed;right: 2%;" onclick="openNav()">&#9776; </span>