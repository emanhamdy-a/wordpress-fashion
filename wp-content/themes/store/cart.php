<?php
/**
 * Template Name: Cart Page
 */
  get_header();  ?>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 m-auto pl-4 cart_page">
          <h1><?php the_title(); ?></h1>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php echo the_content();?>
          <?php endwhile; else: endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>