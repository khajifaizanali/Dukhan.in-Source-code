$(document).ready(function(){

	$('#formsubmit107').click(function(){
		$.post("submit107.php", 
			{fname: $('#fname107').val()}, 
			function(data){
				$('#response107').html(data);
			}
		);
		
	});

});