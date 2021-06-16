$(document).ready(function() {

	$('.product-variance').on('change', function(){

		window.location = $('option:selected', this).data('url');
	});
});