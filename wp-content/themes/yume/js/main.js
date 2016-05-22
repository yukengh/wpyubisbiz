jQuery(document).ready(function(){
	jQuery('.menu .current').children('a').addClass('current');
	jQuery('.sidebar .post .menu').addClass('menuwidget');
	jQuery('.sidebar .post .menuwidget').removeClass('menu');	
	
	// Dropdown Menu
	jQuery('.menu li').hover(function(){
		jQuery(this).children('a').addClass('hover');
		jQuery(this).children('.sub-menu').css({'display':'block'});
	}, function(){
		jQuery(this).children('a').removeClass('hover');
		jQuery(this).children('.sub-menu').css({'display':'none'});
	});	
	
	
	// Input Focus
	jQuery("#search").focus(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery("#s label").css({"display":"none"});
	});
	jQuery("#search").blur(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery("#s label").css({"display":"block"});
	});	
	jQuery(".newslform .formailaddr").focus(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parents('.newslform').children('label').css({"display":"none"});
	});
	jQuery(".newslform .formailaddr").blur(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parents('.newslform').children('label').css({"display":"block"});
	});	
	jQuery('#commentform input:text, #commentform input:password, #commentform textarea').focus(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parent('p').children('label').css({"display":"none"});
	});
	jQuery('#commentform input:text, #commentform input:password, #commentform textarea').blur(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parent('p').children('label').css({"display":"block"});
	});
	
	// Mobile
	jQuery('.mobilemenu_toggle').click(function(eventObject) {
		eventObject.preventDefault();
	}).toggle(function(){
		jQuery(this).parents('.menuwrapp_mobile').find('.menu_mobile').slideDown(200);
	}, function(){
		jQuery(this).parents('.menuwrapp_mobile').find('.menu_mobile').slideUp(200);
	});	

	// Topbarnav
	jQuery('.topbarnav li:first-child').addClass('first');
	jQuery('.topbarnav li:last-child').addClass('last');
	
	// ScrollTop
	jQuery('#gotop').click(function(eventObject) {
		eventObject.preventDefault();
		jQuery('html,body').animate({scrollTop: jQuery("#header").offset().top}, 500);
	}); //Final eventObject
	
}); //Final ready