$(document).ready(function() {
	$("#delete-image").click(function() {
		$('#product-image').fadeOut();
		$("#delete-image").fadeOut();
		var id = $('#product-image').attr('src');

		$.post("../app/controller/delete-product-image.php", //Required URL of the page on server
		{
			// Data Sending With Request To Server
			image : id
		}, function(response, status) {
			$('.image-file').fadeIn();
		});
	});
});
