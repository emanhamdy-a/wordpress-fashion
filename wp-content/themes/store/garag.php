<?php if (have_posts()) : // (3) ?>
<?php while (have_posts()) : // (4)
  the_post(); // (4.1) ?>
<?php //wc_get_template_part( 'content', 'product' );?>
<?php $product = wc_get_product( get_the_ID() );?>
  <b> <?php echo $product->get_price_html();?></b>
  <b> <?php  $product->get_sale_price();?></b>
  <b> <?php //echo $product->get_tags();?></b>
  <b> <a href="<?php echo the_permalink();?>">link</a> </b>
  <b> <?php //echo $product->get_title();?></b>
  <b> <?php //echo $product->get_weight();?></b>
  <b> <?php //echo $product->get_total_stock();?></b>
  <b> <?php //echo $product->get_type();?></b>
  <b> <?php //echo $product->get_tag_ids();?></b>
  <b> <?php //echo $product->get_total_sales();?></b>
  <b> <?php //echo $product->get_rating_counts();?></b>
  <b> <?php //echo $product->get_parent_id();?></b>
  <b> <?php //echo $product->get_name();?></b>
  <b> <?php //echo $product->get_image_id();?></b>
  <b> <?php //echo $product->get_gallery_attachment_ids();?></b>
<?php endwhile; ?>
<?php wp_reset_postdata(); // (5) ?>
<?php else:  ?>
<p>
    <?php _e( 'No Products' ); // (6) ?>
</p>
<?php endif; ?>
<?php
  $add_to_cart = do_shortcode('[add_to_cart_url id="'. get_the_ID() .'"]');
  echo '<a href="'. $add_to_cart .'">crat</a>';
  echo do_shortcode('[top_rated_products]');

?>
[featured_products]
[best_selling_products]
[top_rated_products]
[sale_products]
[product_table]
[recent_products]
[products]

[products columns="3" attribute="season" terms="warm" orderby="date"]
[products columns='4' per_page='4' category='wommen' orderby="date" on_sale]’
[products tag="hoodie"]

[add_to_cart]
[woocommerce_cart] – shows the cart page
[woocommerce_checkout] – shows the checkout page
[woocommerce_my_account] – shows the user account page
[woocommerce_order_tracking] – shows the order tracking form
get_current_user_id() )

<?php echo"<pre>";?>
<?php print_r($product);?>
<?php echo"<pre/>";?>

<div class="col-lg-4 col-md-6">
  <div class="product__item sale">
      <div class="product__item__pic set-bg"
        data-setbg="<?php 
        the_post_thumbnail_url('post_image_lg');?>">
        <?php if ( $product->is_on_sale() ){
          echo "<div class='label'>Sale</div>";} ?>
      
      <div class="msg_cart"></div>
      <ul class="product__hover">
        <li><a href="<?php the_permalink(); ?>" class=""><span class="fa fa-eye"></span></a></li>
        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
        <li>
        <a 
          href="<?php echo $product->add_to_cart_url(); ?>"
          class="product_type_simple
          add_to_cart_button ajax_add_to_cart" 
          data-product_id="
          <?php echo get_the_ID();?>"
          data-product_sku="" 
          aria-label="Add “<?php echo 
            $product->get_name(); ?>” to your cart"
          rel="nofollow"
        >
          <span class="icon_bag_alt"></span>
        </a>
          <!-- <a href="#">
          </a> -->
        </li>
      </ul>
    </div>
    <div class="product__item__text">
      <h6>
        <a href="#">
          <?php echo $product->get_name();?>
        </a>
      </h6>

      <div class="clearfix"></div>
    
      <div class="rating text">
      <?php
        $rating  = $product->get_average_rating();
        $count   = $product->get_rating_count();
        $average = number_format($rating / $count, 2);
        // echo'<div class="row">
        // <div class="col-4"></div>
        // <div class="col-4 text-center border" ">';


          echo '<div class="starwrapper">';
          echo '<span class="star-rating" title="'.sprintf(__('Rated %s out of 5', 'woocommerce'), $average).'"><span style="width:'.($average*16).'px"><span itemprop="ratingValue" class="rating">'.$average.'</span> </span></span>';
          echo '</div>';
        // </div>
        // <div class="col-4"></div>
        // </div>';
        //echo wc_get_rating_html( $rating, $count );
        //  echo woocommerce_template_loop_rating() ;
      ?>  
      </div>

      <div class="clearfix"></div>

      <div class="product__price">E£ 
        <?php echo $product->get_price();?>.0
        <?php if($product->get_sale_price()){?>
        <span>E£ <?php echo $product->get_sale_price();?>
        </span>
        <?php }?>
      </div>
      
    </div>
  </div>
</div>


<div class="sidebar__categories">
  <?php echo do_shortcode('[br_filter_single filter_id=88]
      ');?>
  </div>
  <div class="sidebar__filter">
    <?php echo do_shortcode('[br_filter_single filter_id=87]
      ');?>
  </div>
  <div class="sidebar__sizes">
    <?php echo do_shortcode('[br_filter_single filter_id=84]
    ');?>
  </div>
  <div class="sidebar__color">
    <?php echo do_shortcode('[br_filter_single filter_id=85]
    ');?>
  </div>



<?php
  if (is_shop()) {
      if (have_posts()) : 
      //  while (have_posts()) : 
        //the_post(); ?>
        <?php //$product = wc_get_product( get_the_ID() );?>
        <?php echo do_shortcode(
          '[products columns="3" per_page="15"]');
          // woocommerce_content();
        ?>

      <?php //endwhile; ?>
      <?php wp_reset_postdata(); // (5) ?>
      <?php else:  ?>
      <p>
          <?php _e( 'No Products' ); // (6) ?>
      </p>
      <?php endif; ?>
      <?php
  } else  {  
    //woocommerce_content();
      // echo do_shortcode(
      // '[products columns="3" per_page="15"]');
        woocommerce_content();
  }
?>



<script>

  $('document').ready(function(){

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul) > ul').css('color','green');
  ////////////
  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul) > ul').hide();

  $('.bapf_sfilter[data-name="category"] > .bapf_body > ul > li:has(ul)').addClass('main_li_collapse');

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul)').addClass('li_collapse');

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul) > ul').before('<a class="li_arrow arrow_carrot-down"><a>');

  // .insertBefore() 

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul) > .li_arrow').on('click',function(){
    

    $(this).next().next().slideToggle();
    // alert($(this).next().next().html());

  });

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul)').css('border','1px solid gray');

  $('.bapf_sfilter[data-name="category"] > .bapf_body li:has(ul) > label').css('color','red');

  $('.bapf_sfilter[data-name="category"] > .bapf_body > ul > li:not(:has(ul)) > label').css('color','blue');

  // $('.bapf_sfilter[data-name="category"] > .bapf_body li:not(:has(ul)) > label:only-child').css('color','blue');

  // $('.bapf_sfilter[data-name="category"] > .bapf_body li:not(:has(ul)) > label:only-child').css('color','blue');

  });
</script>



/* create collapse for category filter start*/
  .li_collapse{
    border: #111111 solid 1px;
  }
  .li_arrow{
  position: absolute;
  right: 0px;
  height:100%;
  line-height:inherit;
  font-size: 20px;
  font-weight: 600;
  color: black;
  padding-right:20px;
  padding-left:20px;
  cursor: pointer;
  padding-top: 5px;

  }
/* create collapse for category filter*/

/* a[title="View cart"] {
  display: none;
} */
/* a[href="https://css-tricks.com"] {
  color: #E18728;
} */
/* [data-value] {
  /* Attribute exists */

/* [data-value="foo"] { */
  /* Attribute has this exact value */
/* }  */
<p id="demo"><?php echo strtotime(get_field("discount_date")) ?></p>
<script>
  var countDownDate = <?php echo strtotime('Sep 5, 2022 15:37:25') ?> * 1000;
  var now = <?php echo time() ?> * 1000;
  var x = setInterval(function() {

      now = now + 1000;
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
          minutes + "m " + seconds + "s ";

      if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
      }
  }, 1000);
</script>
<?php
  $today = time();
  // $event = mktime(0,0,0,12,25,2006);
  $event = mktime(get_field("discount_value"));
  $event = strtotime(get_field("discount_value"));
  $countdown = round(($event - $today)/86400);
  echo "$countdown days until Christmas";
?>

<div class="col-12 mix women">
  <?php $new=get_field("new_proucdts");?>
  <?php print_r($new['wommen'][0]); ?>
  <?php print_r($new['wommen'][0]->ID); ?>
  <?php print_r($new['wommen'][0]->price); ?>
  <?php print_r($new['wommen'][0]->post_name); ?>
  <?php //foreach($new['wommen'] as $producut){ ?>
    <?php //$product = wc_get_product( $id );?>
    <?php //echo $product->get_name();?>
  <?php //} ?>
</div>

<?php 
  $my_account_page_id  = 
  wc_get_page_id( 'myaccount' );
  $my_account_page_url = 
  $my_account_page_id ? 
  get_permalink( $my_account_page_id ) : ''; 
?>
<?php if(!is_user_logged_in()){ ?>
  <a href="<?php echo $my_account_page_url;?>"><span class="fa fa-login"></span></a>
  <!-- <a href="<?php echo $my_account_page_url;?>">Register
  </a> -->
<?php }else{ ?>
  <a href="<?php
    echo $my_account_page_url;?>">
    <span class="fa fa-user"></span>
  </a>
  <a href="<?php echo wc_logout_url();?>">
    <span class="fa fa-sign-out"></span>
  </a>
<?php } ?>

<div class="header__right__auth">
  <?php 
    $my_account_page_id  = 
    wc_get_page_id( 'myaccount' );
    $my_account_page_url = 
    $my_account_page_id ? 
    get_permalink( $my_account_page_id ) : ''; 
  ?>
  <?php if(!is_user_logged_in()){ ?>
    <a href="<?php echo $my_account_page_url;?>">Login</a>
    <a href="<?php echo $my_account_page_url;?>">Register
    </a>
  <?php }else{ ?>
    <a href="<?php
      echo $my_account_page_url;?>">My ccount
    </a>
    <a href="<?php echo wc_logout_url();?>">Logout</a>
  <?php } ?>
</div>
<?php
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
add_shortcode ('woo_cart_but', 'woo_cart_but' );
function woo_cart_but() {
  ob_start();
  // Set variable for cart item count
  $cart_count = WC()->cart->cart_contents_count; 
  // Set Cart URL
  $cart_url = wc_get_cart_url();  
    if ( $cart_count > 0 ) {
      echo $cart_count; 
    }
  return ob_get_clean();
}
?>