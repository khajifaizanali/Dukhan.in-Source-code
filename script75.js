$(document).ready(function(){

	$('#formsubmit75').click(function(){
		$.post("submit75.php", 
			{fname: $('#fname75').val()}, 
			function(data){
				$('#response75').html(data);
			}
		);
		
	});

});