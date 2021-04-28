<div class="container">
    <div class="headbox">
        <h2 class="title">Báo trí nói về HOSCO</h2>
    </div>
    <div class="customers_partner customers_partner_desktop" >
        <div id="jssor_3" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
               <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'slider-new'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div>
                            <img data-u="image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" />
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="customers_partner customers_partner_mobile">
        <div id="jssor_4" style="margin:auto;width:500px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:500px;height:100px;overflow:hidden;" class="slider-ads">
               <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'slider-new'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div>
                            <img data-u="image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" />
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>

    </div>
    <div class="tab-content-news" style="margin-top: 20px">
        <div id="tin-tuc" class="tab-pane fade in active show">
            <div class="row row-ibl">
             <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                <div class="news-item">
                    <a class="cnv-img-4x3" aria-label="text" href="index.html" target="_blank">
                        <img class="news-blog fade show lazy" data-src="storage/zalo/111.png" alt="social Loyalty" title="social Loyalty" >
                    </a>
                    <div class="title">
                        <a href="index.html" class="article-title">ZALO ZNS LÀ GÌ? ƯU ĐIỂM VÀ TÍNH NĂNG CỦA ZALO ZNS</a>
                    </div>
                    <div class="description">
                        ZNS xuất hiện như một vị cứu tinh giúp Doanh nghiệp giải quyết bài toán trên. Vậy Zalo ZNS là gì, ưu điểm và tính năng của ZNS đối với Doanh nghiệp?
                    </div>
                    <div class="continue">
                        <a href="index.html" class="article-title" target="_blank" title="">Đọc tiếp →</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                <div class="news-item">
                    <a class="cnv-img-4x3" aria-label="text" href="index.html" target="_blank">
                        <img class="news-blog fade show lazy" data-src="storage/loyalty.png" alt="zalo loyalty" title="" >
                    </a>
                    <div class="title">
                        <a href="index.html" class="article-title">ZALO LOYALTY - MẢNH ĐẤT VÀNG ĐỂ DOANH NGHIỆP CHĂM SÓC KHÁCH HÀNG</a>
                    </div>
                    <div class="description">
                        Zalo - Mảnh đất vàng sau khủng hoảng do dịch Covid19, nhưng đáng tiếc có nhiều doanh nghiệp vẫn chưa tận dụng được việc chăm sóc khách hàng cũng như bán hàng...
                    </div>
                    <div class="continue">
                        <a href="index.html" class="article-title" target="_blank" title="">Đọc tiếp →</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                <div class="news-item">
                    <a class="cnv-img-4x3" aria-label="text" href="index.html" target="_blank">
                        <img class="news-blog fade show lazy" data-src="storage/loyalty.png" alt="zalo loyalty" title="zalo loyalty" >
                    </a>
                    <div class="title">
                        <a href="index.html" class="article-title">ZALO LOYALTY LÀ GÌ? LỢI ÍCH ĐỐI VỚI DOANH NGHIỆP</a>
                    </div>
                    <div class="description">
                        Zalo Loyalty triển khai giúp Doanh nghiệp giải quyết bài toán về Automation, Commerce và tự động hóa trên Zalo, mảnh đất màu mỡ của Doanh nghiệp.
                    </div>
                    <div class="continue">
                        <a href="index.html" class="article-title" target="_blank" title="">Đọc tiếp →</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12 text-center load_more_new">
                <a href="index.html"> →Xem tất cả bài viết </a>
            </div>
        </div>
    </div>
</div>