$(document).ready(function(){

	$('#formsubmit80').click(function(){
		$.post("submit80.php", 
			{fname: $('#fname80').val()}, 
			function(data){
				$('#response80').html(data);
			}
		);
		
	});

});