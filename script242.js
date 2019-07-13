$(document).ready(function(){

	$('#formsubmit242').click(function(){
		$.post("submit242.php", 
			{fname: $('#fname242').val()}, 
			function(data){
				$('#response242').html(data);
			}
		);
		
	});

});