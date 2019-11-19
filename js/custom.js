jQuery(document).ready(function() {

//menu open / close
  jQuery('#menu-open').on('click', function(){
    jQuery('#event-overlay').addClass('slide');
    jQuery('#menu-overlay').addClass('slide');
  });
  jQuery('#menu-close').on('click', function(){;
    console.log('closing')
    jQuery('#event-overlay').removeClass('slide');
    jQuery('#menu-overlay').removeClass('slide');
  });


//header scroll

  window.addEventListener('scroll', function() {
    const scrollTop = jQuery(window).scrollTop();
    if(scrollTop < 40) {
    if(jQuery('header').hasClass('white')) {
        jQuery('header').removeClass('white');
      }
    } else {
      jQuery('header').addClass('white');
    };
  });

});
