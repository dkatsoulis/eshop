$(document).ready(function() {
	$('#example').DataTable();
	var $button = $('#gobutton');
	var $orderbutton = $('#orderbutton');
	
	$button.on('click', function(event) {
		window.location.href = 'app/controller/get-product-data.php';
	});
	
	$orderbutton.on('click', function(event) {
		window.location.href = 'app/controller/close-order.php';
	});
});