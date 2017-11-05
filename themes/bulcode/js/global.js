/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {
		
		// Show menu dropdown on click start
		var clicked_element,
			hidden_dropdown;
		
		$(document).on('click', '.navbar-nav .nav-item', function(e) {
			clicked_element = $(this);
			hidden_dropdown = $(this).find('.dropdown-menu');
			
			$('.navbar-nav .nav-item').removeClass('focus');
			$('.navbar-nav .nav-item .dropdown-menu').removeClass('show');
			
            if (hidden_dropdown.length > 0 ){  
			  e.preventDefault();
			  if (hidden_dropdown.hasClass('show')) {
				  hidden_dropdown.removeClass('show');
				  clicked_element.removeClass('focus');
			  } else {
				  hidden_dropdown.addClass('show');
				  clicked_element.addClass('focus');
			  }
            }
        });
		
		$(document).mouseup(function(e) {
			var container = $('.navbar-nav .nav-item');
			var dropdown_container = $('.navbar-nav .nav-item .dropdown-menu');
			
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				container.removeClass('focus');
				dropdown_container.removeClass('show');
			}
		});
		
		// Show menu dropdown on hover end
		
		// Click on hamburger menu opens main navigation start
			var main_menu_el = $('.menu--main');
			
			$(document).on('click', '#hamburger-menu', function() {
				
				if(main_menu_el.hasClass('show')) {
					main_menu_el.removeClass('show');
				} else {
					main_menu_el.addClass('show');
				}
			});

		// Click on hamburger menu opens main navigation end

    }
  };

})(jQuery, Drupal);
