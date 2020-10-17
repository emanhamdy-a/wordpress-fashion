$(document).ready(function(){
  $('.woocommerce-breadcrumb a:first-of-type').before('<i class="fa fa-home home-icon fa-large"></i>');
  
  $('.woocommerce-form-register').attr('id','w-f-register');
  
  $('.woocommerce-form-login .woocommerce-LostPassword').after(
    '</br><a style="cursor:pointer;" class="create_new_account">Create New Account <i class="fa fa-chevron-down fa-md text-danger"></i></a>'
  );
  
  $('.create_new_account').on('click',function(){
    $('html, body').animate({
      scrollTop: $("#w-f-register").parent().offset().top - 100
    }, 400);
  });

  var scroll = $(window).scrollTop();
  if(scroll > 200){
    $('#scrollspy').show();
  }

  var size = $(window).width();
  if(size > 800){
    $('#side_cart').show();
  }

  $(window).resize(function (event) {
    var size = $(window).width();
    if(size > 800){
      // alert(scroll);
      $('#side_cart').fadeIn(500);
    }else{
      $('#side_cart').fadeOut(500);
    }
  });
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll > 200){
      // alert(scroll);
      $('#scrollspy').fadeIn(500);
    }else{
      $('#scrollspy').fadeOut(500);
    }
});
})