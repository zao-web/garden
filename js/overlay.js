/**
 * overlay.js
 *
 * Handles toggling the whole screen overlay when nav button is clicked.
 */

jQuery( document ).ready( function( $ ) {
	$("#menu-btn").toggle(function() {
		$('#page-overlay').css('display','block');
		$('.menu-main-menu-container').css('display','block');
	}, function(){
		$('#page-overlay').css('display','none');
		$('.menu-main-menu-container').css('display','none');
	});
});