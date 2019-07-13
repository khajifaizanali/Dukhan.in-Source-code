$(document).ready(function(){

	$('#formsubmit175').click(function(){
		$.post("submit175.php", 
			{fname: $('#fname175').val()}, 
			function(data){
				$('#response175').html(data);
			}
		);
		
	});

});