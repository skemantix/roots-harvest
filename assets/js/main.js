/* Author: skemantix

*/


$(document).ready(function(){

	$('.mailingList').css({'cursor':'pointer'}).click(function(e){
		$.fancybox({
	        href: '#contactForm'
	    });
	});

	$('.performers').css({'cursor':'pointer'}).click(function(e){
		window.location.href = '/performers/dj-lineup';
	});
	
	$('.location').css({'cursor':'pointer'}).click(function(e){
		window.location.href = '/location';
	});
	
	$('.tickets').css({'cursor':'pointer'}).click(function(e){
		window.location.href = '/costs';
	});
	
	$('.menu-ride-share-board a, .menu-videos a').attr('target','_blank');

	
	$("a.fancybox").fancybox({
			'padding'			: 	20,
			'transitionIn'		:	'elastic',
			'transitionOut'		:	'elastic',
			'speedIn'			:	666, 
			'speedOut'			:	444, 
			'centerOnScroll'	:	true,
			'overlayOpacity'	:	0.8,
			'overlayColor'		: 	'#333',
			'titleShow'			: 	false, 
		});
		
	$('.gallery a.thumbnail').attr('rel', 'gallery').fancybox({
		'padding'			: 	20,
		'transitionIn'		:	'elastic',
		'transitionOut'		:	'elastic',
		'speedIn'			:	666, 
		'speedOut'			:	444, 
		'centerOnScroll'	:	true,
		'overlayOpacity'	:	0.8,
		'overlayColor'		: 	'#333',
		'titleShow'			: 	false,
	});

});
