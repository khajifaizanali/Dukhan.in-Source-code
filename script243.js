$(document).ready(function(){

	$('#formsubmit243').click(function(){
		$.post("submit243.php", 
			{fname: $('#fname243').val()}, 
			function(data){
				$('#response243').html(data);
			}
		);
		
	});

});