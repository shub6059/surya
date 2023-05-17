$(document).ready(function(){
	jQuery("ul.services li:nth-child(1)").addClass("item_1");
	jQuery("ul.services li:nth-child(2)").addClass("item_2");
	jQuery("ul.services li:nth-child(3)").addClass("item_3");
	jQuery("ul.services li:nth-child(4)").addClass("item_4");
	jQuery("ul.services li:nth-child(5)").addClass("item_5");
	jQuery("ul.services li:nth-child(6)").addClass("item_6");
	jQuery("ul.services li:nth-child(7)").addClass("item_7");
});

jQuery(window).load(function() {
 jQuery('.wpcf7-not-valid-tip').live('mouseover', function(){
  jQuery(this).fadeOut();
 });

 jQuery('.wpcf7-form input[type="reset"]').live('click', function(){
  jQuery('.wpcf7-not-valid-tip, .wpcf7-response-output').fadeOut();
 });
});