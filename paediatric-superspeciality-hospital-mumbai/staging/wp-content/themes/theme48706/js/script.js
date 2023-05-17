/*jQuery(".header").append("<div class='menubgbg'></div>");*/

jQuery(document).ready(function(e) {
	var width = jQuery(window).width();
	jQuery("._container_").width(width);
});

var html1 = '<div class="tooltipbutton"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>';
jQuery(".slider_text ul.services li").prepend(html1);

jQuery(document).on("click", ".tooltipbutton", function(){
	var li = jQuery(this).parent(".slider_text ul.services li");
	var i = jQuery(this).children("i");
	if( li.hasClass("tooltip_active") ){
		li.removeClass("tooltip_active");
		i.addClass("fa-plus-circle").removeClass("fa-minus-circle");
	} else {
		jQuery(".tooltipbutton i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
		jQuery(".slider_text ul.services li ").removeClass("tooltip_active");
		li.addClass("tooltip_active");
		i.addClass("fa-minus-circle").removeClass("fa-plus-circle");
	}
});

jQuery(window).load(function(e) {
	var slideheight = jQuery(".wpb_gallery_slides").height();
	jQuery(".videoslider iframe").height(slideheight);
});