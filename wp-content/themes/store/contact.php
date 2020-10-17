<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>
<?php $contact_us=get_field('contact-us'); ?>
<!-- Contact Section Begin -->
<section class="contact spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="contact__content">
          <div class="contact__address">
            <h5>Contact info</h5>
            <ul>
              <?php if($contact_us['address']){ ?>
              <li>
                <h6><i class="fa fa-map-marker"></i> Address</h6>
                <p><?php  echo $contact_us['address']?></p>
              </li>
              <?php } ?>
              <?php if($contact_us['phone']){ ?>
              <li>
                <h6><i class="fa fa-phone"></i> Phone</h6>
                <p><span><?php echo $contact_us['phone']?></span></p>
              </li>
              <?php } ?>
              <?php if($contact_us['e_mail']){ ?>
              <li>
                <h6><i class="fa fa-headphones"></i> Support</h6>
                <p><?php echo $contact_us['e_mail']?></p>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <?php if($contact_us['map_src']){ ?>
      <div class="col-12">
        <div class="contact__map" 
          style='height:550px important;'>
        <!--  -->
          <iframe
            src="<?php echo $contact_us['map_src']?>"
            height="550" style="border:0" allowfullscreen="">
          </iframe>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>