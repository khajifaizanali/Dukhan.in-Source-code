$(document).ready(function(){

	$('#formsubmit100').click(function(){
		$.post("submit100.php", 
			{fname: $('#fname100').val()}, 
			function(data){
				$('#response100').html(data);
			}
		);
		
	});

});