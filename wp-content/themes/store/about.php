<?php
  /**
 * Template Name: About Us
 */
  get_header(); ?>

  <!-- Blog Details Section Begin -->
  <section class="blog-details spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="blog__details__content">
            <div class="blog__details__item">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php if(has_post_thumbnail()):?>
              <img src="
              <?php the_post_thumbnail_url('post_image_md'); ?>" alt=""
              class=''>
            <?php  else: endif; ?>

              <div class="blog__details__item__title">
                <h4>
                  <?php the_title(); ?>
                </h4>
              </div>
            </div>
            <div class=" blog__details__desc">
              <p class=''>
                <?php echo the_content();?>
              </p>
            </div>

          <?php endwhile; else: endif; ?>

          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="blog__sidebar">
            <?php dynamic_sidebar('main-sidebar');?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Section End -->
  <?php get_footer(); ?>