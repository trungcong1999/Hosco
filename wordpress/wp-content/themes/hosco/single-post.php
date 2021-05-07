<?php get_header(); ?>

<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Post Details</h4>
            <h2>Single blog post</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- dau la thong tin chi tiet -->
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
                </div>
                <div class="down-content">
                  
                  <!--  chỗ này điền link -->
                  <a href="#"><h4><?php the_title(); ?></h4></a>
                  <ul class="post-info">
                    <li><a href=""><?php echo get_author_name(get_post()->post_author); ?></a></li>
                    <li><a href=""><?php $date=date_create(get_post( )->post_date); echo date_format($date,"d F, Y");?></a></li>
                  </ul>
                  <!-- cho nay dien link -->
                  <?php the_content( ); ?>

                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- phần này bên tay phải  -->
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