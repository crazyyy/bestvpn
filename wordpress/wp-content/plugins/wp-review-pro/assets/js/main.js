/*
* Plugin Name: WP Review Pro
* Plugin URI: http://mythemeshop.com/plugins/wp-review-pro/
* Version: 1.0
* Description: Create reviews! Choose from Stars, Percentages, Circles or Points for review scores. Supports Retina Display, WPMU & Unlimited Color Schemes.
* Author: MyThemesShop
* Author URI: http://mythemeshop.com/
*/

jQuery(document).ready(function($){
	$('.review-total-star.allowed-to-rate.has-not-rated-yet a').hover(function(){
		$(this).addClass( "hovered" ).prevAll().addClass( "hovered" );
		$('#mts-review-user-rate').val($(this).attr('data-input-value'));
	},
	function(){
		$(this).removeClass( "hovered" ).prevAll().removeClass( "hovered" );
		$('#mts-review-user-rate').val('');
	});
	
	$('.review-total-star.allowed-to-rate.has-not-rated-yet a').on('click', function(){
		$('.review-total-star.allowed-to-rate .review-result-wrapper').hide();
		$('.mts-review-wait-msg').show();
		var blogID = $('#blog_id').val();
		var token = $('#token').val();
		var post_id = $('#post_id').val();
		var user_id = $('#user_id').val();		
		var review = $(this).attr('data-input-value');
		$.ajax ({
			data: {action: 'mts_review_get_review', post_id: post_id, user_id: user_id, nonce: token, review: review},
			type: 'post',
			url: ajaxurl,
			success: function( response ){								
				if( response != 'MTS_REVIEW_DB_ERROR' ){						
					response = response.split('|');
					$('#mts-user-reviews-total').html(response[0]);
					$('#mts-user-reviews-counter').html(response[1]);					
					$('.mts-review-wait-msg').hide();
					$('.review-total-star.allowed-to-rate .review-result-wrapper').show();					
					$('.review-total-star.allowed-to-rate').removeClass('has-not-rated-yet');
					$('.review-total-star.allowed-to-rate a, .review-total-star.allowed-to-rate a').off();
					$('.review-total-wrapper span.review-total-box.hidden').removeClass('hidden').show();
					var starsWidth = response[0] *20;
					$('.user-review-area .review-result').css('width', starsWidth+'%');

					$('.wp-review-comment-field.allowed-to-rate').removeClass('allowed-to-rate has-not-rated-yet').find('.review-result').css('width', starsWidth+'%');
					$('#wp_review_comment_rating').val(review);
				}				
			}
		});
		
	});
	$('.wp-review-comment-field.allowed-to-rate a').on('click', function() {
		var $this = $(this),
			$elem = $this.closest('.wp-review-comment-field');
		if ($elem.hasClass('allowed-to-rate')) {
			$elem.removeClass('has-not-rated-yet');
			$elem.find('.review-result').css('width', parseInt($this.data('input-value'))*20+'%');
			$('#wp_review_comment_rating').val($this.data('input-value'));
		}
	});
	
	/*
	$('.review-total-box .wp-review-circle-rating').attr('data-width', function(i, attr) {
		return Math.min(Math.max(Math.round(parseInt($(this).closest('.review-wrapper').width() * 0.20)), 60), 140);
	});
	*/

	if ($('.wp-review-circle-rating').length) {
		$('.wp-review-circle-rating').each(function(index, el) {
			// Mega Menu compatibility
			if ( ! $(this).closest('.wpmm-posts').length )
				$(this).knob();
		});
		$('.review-wrapper .wp-review-circle-rating').each(function() {
			var $this = $(this);
			$this.css('font-size', parseInt($this.css('font-size'))*1.4+'px').data('initial_value', $this.val()).val('0').trigger('change');
		});
	}
	// animate
	if ($('.review-wrapper').length) {
		$('.review-wrapper').appear().on('appear', function(event) {
	      // this element is now inside browser viewport
	      var $this = $(this);
	      if ($this.hasClass('delay-animation')) {
		      $this.removeClass('delay-animation');
		      if ($this.find('.wp-review-circle-rating').length) {
		      	$this.find('.wp-review-circle-rating').each(function(index, el) {
		      		var initial_value = $(el).data('initial_value');
		      		$({value: 0}).animate({value: initial_value}, {
					    duration: 2000,
					    easing:'swing',
					    step: function() 
					    {
					        $(el).val(Math.floor(this.value)).trigger('change');
					    },
					    complete: function() {
					    	$(el).val(initial_value).trigger('change');
					    }
					});
		      	});
	      	}
	      }
	    });
	    $.force_appear(); // if it's right there on document.ready
	}

	// AJAX content
	$( document ).ajaxComplete(function(event, xhr, settings) {
		$('.wp-review-circle-rating').each(function(index, el) {
			if ( ! $(this).closest('.wpmm-posts').length )
				$(this).knob();
		});
	});

	// Mega Menu compatibility
	if (typeof wpmm != 'undefined') {
		$('.menu-item-' + wpmm.css_class + '-taxonomy a').mouseenter(function(event) {
			$('.wpmm-visible .wp-review-circle-rating').knob();
		});
		$( document ).ajaxComplete(function(event, xhr, settings) {
			if (settings.data && settings.data.indexOf('action=get_megamenu') > -1 && settings.data.indexOf('wpreview_support') == -1) {
		  		$('.wpmm-visible .wp-review-circle-rating').knob();
		  	}
		});
	}
});