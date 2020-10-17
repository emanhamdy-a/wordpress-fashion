<?php  
/**
 * Template Name: Single
*/
get_header();  ?>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="sticky-top" style='top:50px;'>
            <?php dynamic_sidebar('main-sidebar');?>
          </div>
        </div>
        <div class="col-lg-9">
          <?php if(has_post_thumbnail()):?>
            <img 
              src="<?php the_post_thumbnail_url('post_image'); ?>"
              alt="">
          <?php endif; ?>
          <h1><?php the_title(); ?></h1>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php echo the_content();?>
            <?php the_tags();?>
          <?php endwhile; else: endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>