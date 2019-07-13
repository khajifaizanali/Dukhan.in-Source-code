$(document).ready(function(){

	$('#formsubmit142').click(function(){
		$.post("submit142.php", 
			{fname: $('#fname142').val()}, 
			function(data){
				$('#response142').html(data);
			}
		);
		
	});

});