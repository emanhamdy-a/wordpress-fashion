<?php 
  /**
 * Template Name: My Account
 */
get_header(); ?>
  <div class="container">
    <div class='row my_account_row'>
      <div class="">
        <!-- my account -->
      </div>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php echo the_content();?>
      <?php endwhile; else: endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
