$(document).ready(function(){

	$('#formsubmit170').click(function(){
		$.post("submit170.php", 
			{fname: $('#fname170').val()}, 
			function(data){
				$('#response170').html(data);
			}
		);
		
	});

});