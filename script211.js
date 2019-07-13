$(document).ready(function(){

	$('#formsubmit211').click(function(){
		$.post("submit211.php", 
			{fname: $('#fname211').val()}, 
			function(data){
				$('#response211').html(data);
			}
		);
		
	});

});