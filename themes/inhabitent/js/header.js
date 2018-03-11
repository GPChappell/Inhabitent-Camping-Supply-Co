(function ($) {

  //Show alternate header on selected pages
  if( $('body').hasClass('home') 
  || $('body').hasClass('page-template-about') 
  || $('body').hasClass('single-adventure') ) {

    //Display transparent header
    $('.site-header').addClass('reverse-header');
    
    var heroBannerHeight = $('.full-page-hero').height();
 
    $(window).scroll( function() {
      if( $(window).scrollTop() === 0 ) {
        $('.site-header').css('opacity','1');
        $('.site-header').addClass('reverse-header');
      }
      else if( $(window).scrollTop() > 0 && $(window).scrollTop() < heroBannerHeight ) {
          $('.site-header').css('opacity','0');
      }
      else if( $(window).scrollTop() > heroBannerHeight) {
        $('.site-header').css('opacity','1');
        $('.site-header').removeClass('reverse-header');
      }
    })
  }
} )(jQuery);