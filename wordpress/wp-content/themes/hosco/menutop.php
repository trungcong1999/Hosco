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
				echo "<ul class='cnv-submenu row'>";
				foreach ( $primatyNav as $navItem2 ) { 
					if($navItem2 -> menu_item_parent == $navItem ->ID){
						echo "<div class='col-lg-6 col-xs-6 lineTransition'>";

						echo "<li class='list-sub' style='padding: 0px 35px 0px 10px !important;'><h4 style='font-weight: bold;'>".$navItem2->title;
						echo "</h4><hr class='inline'/></li>";
						foreach ( $primatyNav as $navItem3 ) { 
							if($navItem3 -> menu_item_parent == $navItem2 ->ID){
								echo "<li class='list-sub'>";
								echo "<div class='content-sub-menu'>";
								echo "<a class='title' href='".$navItem3->url."'>".$navItem3->title;
								echo "</a>";
								echo "</div>";
								echo "</li>";

							} 
						}

						echo "</div>";

						
					} 
				}
				echo "</ul>";

				break;
			} 
			
		}
		
		
		
		echo '</li>';
	}

	
}
echo "</ul>";


?>
<!-- <ul class="list-unstyled nav navbar-nav primary-menu">
	<li>
		<a href="#">VỀ HOSCO</a>
	</li>
	<li>
		<a href="tinh-nang.html">SẢN PHẨM</a>
		<ul class="cnv-submenu row">
			<div class="col-lg-6 col-xs-6 lineTransition">
				<li class="list-sub" style="padding: 0px 35px 0px 10px !important;"><h4 style="font-weight: bold;">Hệ sinh thái phần mềm Hosco</h4><hr class="inline"/></li>

				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="<?php bloginfo("template_directory"); ?>/product.php" title="">Phần mềm bán hàng Master Pro</a>
					</div>
				</li>
				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="#" title="">Phần mềm quản lý nhân sự Lotus Pro</a>
					</div>
				</li>
				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="#" title="">Phần mềm quản lý phân phối Lotus DMS</a>
					</div>
				</li>
			</div>
			<div class="col-lg-6 col-xs-6 lineTransition">
				<li class="list-sub" style="padding: 0px 35px 0px 10px !important;"><h4 style="font-weight: bold;">Giải pháp quản lý doanh nghiệp</h4><hr class="inline"/></li>
				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="#" title="">Phần mềm bán hàng tích hợp Lotus ERP</a>
					</div>
				</li>
				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="#" title="">Giải pháp quản lý nhân sự Lotus ERP</a>
					</div>
				</li>
				<li class="list-sub">

					<div class="content-sub-menu">
						<a class="title" href="#" title="">Phần mềm bán hàng tích hợp SAP B1</a>
					</div>
				</li>
			</div>
		</ul>
	</li>
	<li>
		<a href="#nganh-hang">KHÁCH HÀNG</a>
	</li>
	<li>
		<a href="index.html">TUYỂN DỤNG</a>
	</li>
	<li>
		<a href="#">TIN TỨC</a>

	</li>
	<li>
		<a class="contact_animation" href="#lien-he">LIÊN HỆ</a>
	</li>
</ul> -->