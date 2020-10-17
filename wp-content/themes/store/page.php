<?php get_header(); ?>
<div class='p-5 m-5'>
  <div class="container">
    <div class='col-10 m-auto'>
      any page
      <!-- force regenertate thumbnail -->
      <?php //the_post_thumbnail_url('post_image_lg');?>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php echo the_content();?>
      <?php endwhile; else: endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
