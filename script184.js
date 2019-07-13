$(document).ready(function(){

	$('#formsubmit184').click(function(){
		$.post("submit184.php", 
			{fname: $('#fname184').val()}, 
			function(data){
				$('#response184').html(data);
			}
		);
		
	});

});