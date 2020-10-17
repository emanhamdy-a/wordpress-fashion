<?php  get_header();  ?>

  <!-- Shop Section Begin -->
  <section class="shop spad">
    <div class="container">
      <div class="row">
        <!-- filters -->
        <?php if ( !is_single() ){ ?>
          <div class="col-lg-3 col-md-3">
            <!-- woocommerce.php -->
            <div class="shop__sidebar">
              <?php dynamic_sidebar('filter-sidebar');?>
            </div>
          </div>
          <div class="col-lg-9 col-md-9">
            <!-- <div class="row"> -->
            <?php  woocommerce_content();?>
            <!-- </div> -->
          </div>
        <?php }else{ ?>
          <div class="col-lg-9 p-4 col-md-12 m-auto">
            <div class="row single_product">
              <?php  woocommerce_content();?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Shop Section End -->

<?php get_footer();?>