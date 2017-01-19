$(document).ready(function() {
	$('#example').DataTable();
	var $button = $('#gobutton');
	$button.on('click', function(event) {
		window.location.href = 'app/controller/get-product-data.php';
	});
});