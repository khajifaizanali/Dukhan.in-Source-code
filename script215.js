$(document).ready(function(){

	$('#formsubmit215').click(function(){
		$.post("submit215.php", 
			{fname: $('#fname215').val()}, 
			function(data){
				$('#response215').html(data);
			}
		);
		
	});

});