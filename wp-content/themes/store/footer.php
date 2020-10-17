
<!-- Footer Section Begin -->
  <a id='side_cart' href="<?php bloginfo('url'); ?>/cart/">
    <span class="icon_bag_alt cart_icon">
    </span>
  </a>
  <a class="smooth-scroll"
    style='display:none;' 
    id="scrollspy"
    href="#navbar"> 
    <i class='fa fa-chevron-up fa-md'></i>
  </a>
</div>
<footer class="footer border-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-7">
        <div class="footer__about">
          <div class="footer__logo">
            <a href="<?php bloginfo('url');?>"><img src="<?php echo bloginfo('template_directory') . '/img/logo.png'?>" alt=""></a>
          </div>
          <p><?php bloginfo('description'); ?>.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-8 col-sm-8">
        <div class="footer__payment">
          <div class="footer__widget">
            <?php dynamic_sidebar('footer-widget1');?>
          </div>
          <a href="#"><img src="<?php bloginfo(
            'template_url'); ?>/img/payment/payment-1.png" alt=""></a>
          <a href="#"><img src="<?php bloginfo(
            'template_url'); ?>/img/payment/payment-2.png" alt=""></a>
          <a href="#"><img src="<?php bloginfo(
            'template_url'); ?>/img/payment/payment-3.png" alt=""></a>
          <a href="#"><img src="<?php bloginfo(
            'template_url'); ?>/img/payment/payment-4.png" alt=""></a>
          <a href="#"><img src="<?php bloginfo(
            'template_url'); ?>/img/payment/payment-5.png" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-8 col-sm-8">
        <div class="footer__newslatter">
          <div class="footer__social">
            <div class="footer__widget">
              <?php dynamic_sidebar('footer-widget2');?>
            </div>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <div class="footer__copyright__text">
          <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </div>
    </div>
  </div>
</footer>
<!-- Footer Section End -->

<?php wp_footer();?>
</body>

</html>