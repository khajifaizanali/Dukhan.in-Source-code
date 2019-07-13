$(document).ready(function(){

	$('#formsubmit131').click(function(){
		$.post("submit131.php", 
			{fname: $('#fname131').val()}, 
			function(data){
				$('#response131').html(data);
			}
		);
		
	});

});