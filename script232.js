$(document).ready(function(){

	$('#formsubmit232').click(function(){
		$.post("submit232.php", 
			{fname: $('#fname232').val()}, 
			function(data){
				$('#response232').html(data);
			}
		);
		
	});

});