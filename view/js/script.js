$(function(){
	
	$('#btn_ajax').click(function(){

		var url = "/ajax/php/function.php";
		$.ajax({
		url: url,
		type: 'POST',
		
		data: $("#form_ajax").serialize(),
		success: function(data)
		{
			$("#mostrar").stop(true).slideDown('fast', function() {
				$(this).html(data);
			}).delay(1000).slideUp(500);
		}
	});
		return false;
	});

	
	
	
});