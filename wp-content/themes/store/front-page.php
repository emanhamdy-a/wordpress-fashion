<?php 
 /**
 * Template Name: Front Page
 */
get_header(); ?>
<style>
  .breadcrumb-option{
    display:none !important;
  }
  @media only screen and (max-width: 767px){
    /* .offcanvas-menu-wrapper {
        position: fixed;
        top:0px;
    } */
  }
</style>
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container-fluid p-0 m-0">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="categories__item categories__large__item set-bg"
          
          data-setbg="<?php bloginfo('template_directory'); ?>/img/categories/category-1.jpg">
          <div class="categories__text">
            <h1>Women’s fashion</h1>
            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
            edolore magna aliquapendisse ultrices gravida.</p>
            <a href="<?php bloginfo('url');?>/product-category/women/">Shop now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="categories__item set-bg" 
            data-setbg="<?php bloginfo('template_directory'); ?>/img/categories/category-2.jpg">
              <div class="categories__text">
                <h4>Men’s fashion</h4>
                <p>358 items</p>
                <a href="<?php bloginfo('url');?>/product-category/men/">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="categories__item set-bg" 
            data-setbg="<?php bloginfo('template_directory'); ?>/img/categories/category-3.jpg">
              <div class="categories__text">
                <h4>Kid’s fashion</h4>
                <p>273 items</p>
                <a href="<?php bloginfo('url');?>/product-category/kids/">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="categories__item set-bg" 
            data-setbg="<?php bloginfo('template_directory'); ?>/img/categories/category-4.jpg">
              <div class="categories__text">
                <h4>Cosmetics</h4>
                <p>159 items</p>
                <a href="<?php bloginfo('url');?>/product-category/cosmetics/">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 p-0">
            <div class="categories__item set-bg" 
            data-setbg="<?php bloginfo('template_directory'); ?>/img/categories/category-5.jpg">
              <div class="categories__text">
                <h4>Accessories</h4>
                <p>792 items</p>
                <a href="<?php bloginfo('url');?>/product-category/accessories/">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="section-title">
          <h4>New product</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8">
        <ul class="filter__controls">
          <li class="active" data-filter="*">All</li>
          <li data-filter=".women">Women’s</li>
          <li data-filter=".men">Men’s</li>
          <li data-filter=".kid">Kid’s</li>
          <li data-filter=".accessories">Accessories</li>
        </ul>
      </div>
    </div>
    <div class="row property__gallery">
      <div class="col-12 mix women">
        <?php echo do_shortcode("[products columns='4' per_page='4' 
          category='women' orderby='date']");
        ?>
      </div>
      <div class="col-12 mix men">
        <?php echo do_shortcode("[products columns='4' per_page='4' 
          category='men' orderby='date']");
        ?>
      </div>
      <div class="col-12 mix kid">
        <?php echo do_shortcode("[products columns='4' per_page='4' 
          category='kids' orderby='date']");
          ?>
      </div>
      <div class="col-12 mix accessories">
        <?php echo do_shortcode("[products columns='4' per_page='4' 
          category='accessories' orderby='date']");
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Product Section End -->


<!-- Discount Section Begin -->
<?php if(get_field("display_discount") == 'show discount'){?>
  <section class="discount">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="discount__pic">
            <!-- width='585' height='390'  -->
            <img src="
              <?php if(get_field("discount_image")){
                echo get_field("discount_image");
              }else{
                echo bloginfo('template_directory') . '/img/discount.jpg';
              }?>"
            alt="">
            <!-- src="" alt=""> -->
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="discount__text">
            <div class="discount__text__title">
              <span><?php echo get_field("discount_title");?></span>
              <h2><?php echo get_field("discount_season");?></h2>
              <h5><span>
                Sale 
              </span><?php echo get_field("discount_value");?>%</h5>
            </div>
            
            <div class="discount__countdown" id="">
              <?php
                $now = time(); // or your date as well
                $your_date = strtotime(get_field("discount_date"));
                $datediff = $your_date - $now;
                echo  round($datediff / (60 * 60 * 24)) .
                  ' Day left at this discount';
              ?>
            </div>
            <a href="
              <?php echo bloginfo('url') .
              '/shop'; ?>
            ">Shop now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }?>
<!-- Discount Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <div class="trend__content">
          <div class="section-title">
            <h4>Hot Trend</h4>
          </div>
          <?php echo do_shortcode("[top_rated_products columns='4' per_page='4' 
          orderby='date']");
          ?>
        </div>
      </div>
      <div class="col-12 ">
        <div class="trend__content">
          <div class="section-title">
            <h4>Best seller</h4>
          </div>
          <?php echo do_shortcode("[best_selling_products
           columns='4' per_page='4' 
           orderby='date']");
          ?>
        </div>
      </div>
      <div class="col-12 ">
        <div class="trend__content">
          <div class="section-title">
            <h4>Feature</h4>
          </div>
          <?php echo do_shortcode("[featured_products
           columns='4' per_page='4' 
           orderby='date']");
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Trend Section End -->


<!-- Services Section Begin -->
<!-- <section class="services spad"> -->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="services__item">
          <i class="fa fa-car"></i>
          <h6>Free Shipping</h6>
          <p>For all oder over $99</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="services__item">
          <i class="fa fa-money"></i>
          <h6>Money Back Guarantee</h6>
          <p>If good have Problems</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="services__item">
          <i class="fa fa-support"></i>
          <h6>Online Support 24/7</h6>
          <p>Dedicated support</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="services__item">
          <i class="fa fa-headphones"></i>
          <h6>Payment Secure</h6>
          <p>100% secure payment</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-1.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-2.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-3.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-4.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-5.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 p-0">
        <div class="instagram__item set-bg" 
        data-setbg="<?php bloginfo('template_directory'); ?>/img/instagram/insta-6.jpg">
          <div class="instagram__text">
            <i class="fa fa-instagram"></i>
            <a href="#">@ ashion_shop</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Instagram End -->
<?php get_footer(); ?>