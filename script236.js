$(document).ready(function(){

	$('#formsubmit236').click(function(){
		$.post("submit236.php", 
			{fname: $('#fname236').val()}, 
			function(data){
				$('#response236').html(data);
			}
		);
		
	});

});