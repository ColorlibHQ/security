/**
 * Notice for Elementor
 *
 * @package Security
 */

/* global securityElementorNotice */

jQuery( document ).ready(
	function () {

			var style = '<style>.security-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.security-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.security-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.security-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.security-elementor-notice-buttons{border-top:1px solid #e6e9ec}.security-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.security-elementor-notice-buttons>a.security-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.security-elementor-notice-buttons>a.security-disable-default-styles{color:#9b0a46}</style>';

			var dialog = style + '<div class="security-disable-elementor-styling">' +
				'<div class="security-elementor-notice-wrapper">' +
					'<div class="security-elementor-notice-header">Security supports default styling for Elementor widgets</div>' +
					'<div class="security-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
					'<div class="security-elementor-notice-buttons">' +
						'<a href="#" class="security-do-nothing" data-reply="no">No</a>' +
						'<a href="#" class="security-disable-default-styles" data-reply="yes">Yes</a>' +
					'</div>' +
				'</div>' +
			'</div>';

			jQuery( 'body' ).prepend( dialog );
			jQuery( '.security-elementor-notice-buttons > a' ).on(
				'click', function() {

					var reply = jQuery( this ).data( 'reply' );

					jQuery.ajax(
						{
							url: securityElementorNotice.ajaxurl,
							data: {
								reply: reply,
								nonce: securityElementorNotice.nonce,
								action: 'elementor_desiable_default_style'
							},
							type: 'post',
							success: function () {

								if ( reply === 'yes' ) {
									parent.location.reload();
								} else {
									jQuery( '.security-disable-elementor-styling' ).fadeOut( 500, function() { jQuery( this ).remove(); } );
								}
							}
						}
					);
				}
			);
	}
);
