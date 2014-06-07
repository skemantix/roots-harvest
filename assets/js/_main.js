/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

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


    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page

        var transSpeed = 1800;
        var duration = 4000;

        $('#leftSlider img:gt(0), #rightSlider img:gt(0)').hide();
        setInterval(function(){
                $('#leftSlider :first-child').fadeOut(transSpeed)
                    .next('img').fadeIn(transSpeed)
                    .end().appendTo('#leftSlider');},
            duration);

        setTimeout(function(){
            setInterval(function(){
                    $('#rightSlider :first-child').fadeOut(transSpeed)
                        .next('img').fadeIn(transSpeed)
                        .end().appendTo('#rightSlider');},
                duration);
        }, duration/2);

        /*
        $('#basicModal').modal({
            "backdrop": true,
            "keyboard": true,
            "show": true
        });
        */

    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  photos: {
    init: function() {

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
    }
  }

};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
