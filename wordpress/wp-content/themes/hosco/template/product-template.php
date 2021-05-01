<?php
/*
 Template Name: detail-product
 */
 ?>
 
 <?php get_header(); ?>

 <section class="event_banner_area" style="background: #257dff !important;min-height: 100vh;">
   <?php 
   $title_product = '';
   $args = array(
    'posts_per_page' => 20,
    'post_type'      => 'product',
    'p'=>get_post_meta( get_post()->ID,'_product_page', $single = true )
);
   $the_query = new WP_Query( $args );
             // var_dump($the_query); 

   ?>

   <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); $title_product = get_post()->post_title; ?>

        <div class="parallax-effect"></div>
        <div class="container">
            <div class="row banner_main" style="
            padding-bottom: 10%;
            ">
            <div class="col-lg-6 event_banner_content">
                <h6 class=""><?php the_title(); ?></h6>

                <h2 class=""><?php the_content(); ?></h2>
                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/calling.png" alt="" />Đăng ký tư vấn</a> <a class="event_btn event_btn_two btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a></div>
                <div class="col-lg-6 banner_main_img"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" /></div>
            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


</section>
<section class="four_post_bottom_banner" style="margin-top: 0px;position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/dichvuphanmem.svg" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Dịch vụ phần mềm</a></h3>
                        <p>Doanh nghiệp sở hữu app chăm sóc khách hàng riêng, với tất cả tính năng tích điểm, ưu đãi, đẩy tin nhắn...</p>
                        <a class="smooth more" href="#nganh-hang" title="">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/giaiphapdoanhnghiep.svg" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Giải pháp doanh nghiệp</a></h3>
                        <p>(Sắp ra mắt) Nền tảng dữ liệu khách hàng, giúp DN thấu hiểu hành vi theo thời gian thực.</p>
                        <a class="smooth more" href="javascript:void(0)" title="">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/Nong-nghiep-thog-minh-chot.png" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Nông nghiệp thông minh</a></h3>
                        <p>App cho nhân viên, hoàn toàn miễn phí. Quản lý tập trung và khoa học, chỉ có tại CNV Loyalty.</p>
                        <a class="smooth more" href="#app-nen-tang" title="">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/Thuong-mai-dien-tu.png" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Thương mại</a></h3>
                        <p>Ứng dụng booking (trên IPAD) cho chủ doanh nghiệp, giúp quản lý đặt bàn, đặt chỗ của khách hàng</p>
                        <a class="smooth more" href="#app-nen-tang" title="">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="four_post_bottom_banner_mobile col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/dichvuphanmem.svg" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Dịch vụ phần mềm</a></h3>
                        <p>Doanh nghiệp sở hữu app chăm sóc khách hàng riêng, với tất cả tính năng tích điểm, ưu đãi, đẩy tin nhắn...</p>
                        <a class="smooth more" href="#nganh-hang" title="">Xem thêm</a>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/giaiphapdoanhnghiep.svg" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Giải pháp doanh nghiệp</a></h3>
                        <p>(Sắp ra mắt) Nền tảng dữ liệu khách hàng, giúp DN thấu hiểu hành vi theo thời gian thực.</p>
                        <a class="smooth more" href="javascript:void(0)" title="">Xem thêm</a>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/Nong-nghiep-thog-minh-chot.png" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Nông nghiệp thông minh</a></h3>
                        <p>App cho nhân viên, hoàn toàn miễn phí. Quản lý tập trung và khoa học, chỉ có tại CNV Loyalty.</p>
                        <a class="smooth more" href="#app-nen-tang" title="">Xem thêm</a>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo("template_directory"); ?>/storage/news/Thuong-mai-dien-tu.png" alt="" title="">
                    </div>
                    <div class="ct">
                        <h3 class="title"><a class="smooth" href="#" title="">Thương mại</a></h3>
                        <p>Ứng dụng booking (trên IPAD) cho chủ doanh nghiệp, giúp quản lý đặt bàn, đặt chỗ của khách hàng</p>
                        <a class="smooth more" href="#app-nen-tang" title="">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partner" id="khach-hang">
    <div class="container">
    <div class="headbox">
        <h2 class="title">Khách hàng - Đối tác</h2>
        <p><span style="font-family: arial, helvetica, sans-serif;">Để xây dựng chương trình khách hàng trung thành, hiệu quả, tiết kiệm</span></p>
    </div>
    <div class="customers_partner customers_partner_desktop" >
        <div id="jssor_1" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
                <?php 
                $args = array(
                    'posts_per_page' => 20,
                    'post_type'      => 'slider-partner'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                       <div>
                        <img style="width: 100px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div>
    </div>
</div>


<div class="customers_partner customers_partner_mobile">
    <div id="jssor_2" style="margin:auto;width:500px;height:100px;overflow:hidden;">        
        <div data-u="slides" class="slider-ads" style="cursor:default;width:500px;height:100px;overflow:hidden;">
            <?php 
            $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'slider-partner'
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  
                     <div>
                        <img style="width: 100px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

</div>
 
</section>
<section class="you_choose_cnv">
    <div class="container">
        <div class="headbox">
            <h2 class="title">Lý do bạn nên chọn LOTUS ERP</h2>
        </div>
        <div class="row">
            <div class="portfolio_choose_cnv">
                <div class="img">
                    <a data-toggle="modal" data-target="#informationForm" href="#information-form"><img data-src="<?php bloginfo("template_directory"); ?>/storage/ly-do-chon/anh1.jpg" class="lazy" alt="" width="676" height="598" /></a>
                </div>
                <div class="items">
                    <div class="item">
                        <h2>Độc quyền</h2>
                        <span>Đơn vị đầu tiên và duy nhất tại thị trường Việt Nam tạo ra App chăm sóc khách hàng.</span></div>
                        <div class="item">
                            <h2 class="title smooth">Chi phí thấp</h2>
                            <span>Chỉ từ 25.000.000đ, bạn sở hữu ngay giải pháp công nghệ toàn diện để chăm sóc khách hàng</span></div>
                            <div class="item">
                                <h2 class="title smooth">Triển khai nhanh</h2>
                                <span>Chỉ 14 ngày từ thiết kế và xây dựng, thay vì mất 1-2 năm để có thể ra mắt app của bạn.</span></div>
                                <div class="item">
                                    <h2 class="title smooth">Luôn cập nhật tính năng mới</h2>
                                    <span>Hosco liên tục ra mắt những tính năng mới cho App phục vụ hoạt động chăm sóc khách hàng.</span></div>
                                    <div class="item">
                                        <h2 class="title smooth">Nhiều kịch bản tự động</h2>
                                        <span>Hệ thống gợi ý nhiều kịch bản chăm sóc khách hàng trung thành</span></div>
                                        <div class="item">
                                            <h2 class="title smooth">Nền tảng và hệ sinh thái</h2>
                                            <span>Hosco là nền tảng “không giới hạn”, bao gồm: App Khách hàng, App Nhân viên</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="app_nen_tang" id="app-nen-tang">
                            <div class="container">
                                <div class="headbox">
                                    <h2 class="title">Hệ sinh thái  <?php echo $title_product; ?></h2>
                                    <p>Nền tảng #1 giúp doanh nghiệp tạo app chăm sóc khách hàng chuyên nghiệp.</p>
                                </div>
                                <div class="row">
                                   <div class="col-lg-9 offset-lg-3 group_tab_app_nen_tang">
                                    <ul class="nav_app nav">
                                        <?php $kt = FALSE; ?>
                                        <?php foreach (get_post_meta( get_post()->ID,'_he_sinh_thai', $single = true ) as  $value) {

                                            if($kt ==FALSE){
                                                echo "<li><a data-toggle='tab' class='smooth active' href='#".get_post($value)->post_name."' title=''>".get_post($value)->post_title."</a></li>";
                                                $kt = TRUE;
                                            }
                                            else{
                                                echo "<li><a data-toggle='tab' class='smooth ' href='#".get_post($value)->post_name."' title=''>".get_post($value)->post_title."</a></li>";
                                            }
                                        } ?>



                                    </ul>
                                </div>
                                <div class="row group_content_he_sinh_thai">
                                   <div class="col-lg-3 thumbnail_app">
                                       <img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/he_sinh_thai_cong_ty.png" alt="">
                                       <p class="title_he_sinh_thai">Hệ sinh thái  <?php echo $post_title; ?></p>
                                   </div>
                                   <div class="col-lg-9">
                                    <div class="tab-content">
                                        <?php $kt = FALSE;?>
                                        <?php foreach (get_post_meta( get_post()->ID,'_he_sinh_thai', $single = true ) as  $value) {

                                // var_dump(get_post($value));
                                            $hesinhthai = get_post($value);
                                            if($kt ==FALSE){
                                                echo "<div class='item_tab tab-pane fade active show' id='".$hesinhthai->post_name."'>";
                                                echo "<div class='row'>";
                                                echo "<div class='col-lg-5 thumbnail_app_img'>";
                                                echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID))."' alt=''>";
                                                echo "</div>";
                                                echo "<div class='col-lg-7 group_content_app'>";
                                                echo "<div class='content'>";
                                                echo $hesinhthai->post_content;
                                                echo "</div>";
                                                echo "</div>";
                                                echo "</div>";
                                                echo "</div>";
                                                $kt=TRUE;
                                            }
                                            else{
                                              echo "<div class='item_tab tab-pane fade' id='".$hesinhthai->post_name."'>";
                                              echo "<div class='row'>";
                                              echo "<div class='col-lg-5 thumbnail_app_img'>";
                                              echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID))."' alt=''>";
                                              echo "</div>";
                                              echo "<div class='col-lg-7 group_content_app'>";
                                              echo "<div class='content'>";
                                              echo $hesinhthai->post_content;
                                              echo "</div>";
                                              echo "</div>";
                                              echo "</div>";
                                              echo "</div>";
                                          }
                                      } ?>


                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="app_nghanh_hang" id="nganh-hang">
                <div class="container">
                    <div class="headbox">
                        <h2 class="title">LOTUS ERP - Tối ưu từng ngành hàng</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav_app nav">
                                <?php $kt = FALSE;

                                $dem=get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true );
                                if($dem=="" ||$dem==NULL)
                                    $dem = 0;
                                else
                                    $dem =count($dem);



                                ?>

                                <?php if($dem>0)
                                foreach (get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true ) as  $value) {
                                    $hesinhthai = get_post($value);

                                    if($kt ==FALSE){?>
                                        <li>
                                            <a data-toggle="tab" class="smooth " href="#<?php echo get_post($value)->post_name; ?>" title="">
                                             <img class="icon_app lazy" data-src="<?php echo get_post_meta( get_post($value)->ID, '_nghanh-hang-icon', $single = true ); ?>" alt="">
                                             <?php echo get_post($value)->post_title; ?>
                                         </a>
                                     </li>
                                     <?php
                                     $kt = TRUE;
                                 }
                                 else{?>
                                   <li>
                                    <a data-toggle="tab" class="smooth " href="#<?php echo get_post($value)->post_name; ?>" title="">
                                     <img class="icon_app lazy" data-src="<?php echo get_post_meta( get_post($value)->ID, '_nghanh-hang-icon', $single = true ) ?>" alt="">
                                     <?php echo get_post($value)->post_title; ?>
                                 </a>
                             </li>
                         <?php }
                     } ?>       

                 </ul>
             </div>
             <div class="col-lg-9">
                <div class="tab-content">

                   <?php $kt = FALSE;?>
                   <?php if($dem>0)
                   foreach (get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true ) as  $value) {

                                // var_dump(get_post($value));
                    $hesinhthai = get_post($value);
                    if($kt ==FALSE){?>

                        <div class="item_tab tab-pane fade active show" id="<?php echo $hesinhthai->post_name; ?>">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID)) ?>" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">
                                 <?php echo $hesinhthai->post_content; ?>

                             </div>
                         </div>
                     </div>

                     <?php $kt=TRUE;
                 }
                 else{?>
                  <div class="item_tab tab-pane fade " id="<?php echo $hesinhthai->post_name; ?>">
                    <div class="row">
                        <div class="col-lg-5 thumbnail_app">
                            <img class="lazy" data-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID)) ?>" alt="">
                        </div>
                        <div class="col-lg-7 group_content_app">
                         <?php echo $hesinhthai->post_content; ?>

                     </div>
                 </div>
             </div>
             <?php
         }
     } ?>







</div>
</div>
<div class="col-lg-12 group_link_dang_ky">
    <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/calling.png" alt="" />Đăng ký tư vấn</a> <a class="event_btn event_btn_two btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a>
</div>
</div>
</div>
</section>
<section class="enterprise_solutions">
    <div class="container">
        <div class="headbox">
            <h2 class="title">Những tính năng nổi bật</h2>
        </div>
        <div class="row">
            <div class="portfolio">
                <div class="img">
                    <img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giap-phap-so-1/giai-phap-doanh-nghiep.png" alt="" width="591" height="679" />
                </div>
                <div class="items solution_app_desktop">
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-tich-diem.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Tích điểm, tạo ưu đãi, đổi thưởng</a></h3>
                        <span>Tự động hoá quá trình thông báo ưu đãi đến khách hàng, sử dụng ưu đãi và tích điểm. ...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-marketing-0-dong.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Marketing 0 đồng</a></h3>
                        <span>Đẩy thông báo đến user những người phù hợp, đúng nhu cầu từ những hành vi...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-ca-nhan-hoa.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Cá nhân hóa từng khách hàng</a></h3>
                        <span>Có sẵn mẫu kịch bản để doanh nghiệp cá nhân hóa khách hàng, xây dựng ...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-bao-cao-du-lieu.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Báo cáo dữ liệu theo tuần, tháng, chiến dịch</a></h3>
                        <span>Hỗ trợ doanh nghiệp nhìn nhận đúng, đúc kết kinh nghiệm qua những số liệu thực tế...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                </div>
                <div class="items solution_app_mobile">
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-tich-diem.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Tích điểm, tạo ưu đãi, đổi thưởng</a></h3>
                        <span>Tự động hoá quá trình thông báo ưu đãi đến khách hàng, sử dụng ưu đãi và tích điểm. ...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-marketing-0-dong.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Marketing 0 đồng</a></h3>
                        <span>Đẩy thông báo đến user những người phù hợp, đúng nhu cầu từ những hành vi...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-ca-nhan-hoa.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Cá nhân hóa từng khách hàng</a></h3>
                        <span>Có sẵn mẫu kịch bản để doanh nghiệp cá nhân hóa khách hàng, xây dựng ...</span>
                        <p  class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                    </div>
                    <div class="item">
                        <a href="index.html"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/storage/giai-phap-so-1-tao-app/icon-bao-cao-du-lieu.png" alt=""></a>
                        <h3 class="title smooth"><a href="index.html">Báo cáo dữ liệu theo tuần, tháng, chiến dịch</a></h3>
                        <span>Hỗ trợ doanh nghiệp nhìn nhận đúng, đúc kết kinh nghiệm qua những số liệu thực tế...</span>
                        <p  class="more_details"><a class="more" href="">Xem thêm</a></p>
                    </div>
                </div>
            </div>
            <a href="tinh-nang.html" class="load_all">Xem tất cả</a>
        </div>
    </div>
</section>
<section class="group_case_study">
     <div class="container">
    <div class="headbox">
        <h2 class="title">Dự án tiêu biểu</h2>
    </div>
    <div class="row row_group">
        <div class="case_study col-lg-12">
            
            <?php $args = array( 'post_type' => 'typical_project','posts_per_page' => 10,'ignore_sticky_posts' => 1,'tax_query'=>$tax_query); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="item" style="height: 100%;">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 raw-center">
                        <div class="t-icon">
                            <img class="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>"  alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-5 group_content_case_study">
                        <div class="headbox headbox_case">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="group_post_case">
                            <p><?php echo get_post()->post_content; ?></p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>    
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>