$(document).ready(function(){
	jQuery('#back_to_top_link').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 300);
    	return false;
	});
}); 