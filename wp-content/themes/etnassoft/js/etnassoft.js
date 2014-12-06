jQuery(document).ready(function () {

  // Hover en las imagenes
  jQuery('.portfolio').hover(function () {
    jQuery(this).children('img').stop().animate({
      opacity: 0.3
    }, 500)
  }, function () {
    jQuery(this).children('img').stop().animate({
      opacity: 1
    }, 500)
  })

  // Bot�n para ir a la parte superior de la p�gina
  jQuery('#back_to_top_link').click(function(){
	  jQuery('html, body').animate({scrollTop: '0px'}, 300);
    return false;
	});

});
