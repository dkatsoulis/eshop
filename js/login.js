jQuery(document).ready(function($) {
	var $modal = $('.modal'),
	    $span = $modal.find('#close');

	// When the user clicks on <span> (x), close the modal
	$span.on('click', function() {
		$modal.css('display', 'none');
	});
}); 

$(".user").focusin(function() {
	$(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function() {
	$(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function() {
	$(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function() {
	$(".inputPassIcon").css("color", "white");
});