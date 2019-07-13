$(document).ready(function(){

	$('#formsubmit98').click(function(){
		$.post("submit98.php", 
			{fname: $('#fname98').val()}, 
			function(data){
				$('#response98').html(data);
			}
		);
		
	});

});