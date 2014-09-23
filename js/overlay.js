/**
 * overlay.js
 *
 * Handles toggling the whole screen overlay when nav button is clicked.
 */

jQuery( document ).ready( function( $ ) {
	$("#menu-btn").toggle(function() {
		$('#page-overlay').fadeIn("slow");
		$('.menu-main-menu-container').slideDown(800);
	}, function(){
		$('#page-overlay').fadeOut("slow");
		$('.menu-main-menu-container').slideUp(300);
	});
});