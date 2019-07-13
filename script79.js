$(document).ready(function(){

	$('#formsubmit79').click(function(){
		$.post("submit79.php", 
			{fname: $('#fname79').val()}, 
			function(data){
				$('#response79').html(data);
			}
		);
		
	});

});