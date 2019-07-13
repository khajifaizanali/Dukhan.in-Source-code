$(document).ready(function(){

	$('#formsubmit164').click(function(){
		$.post("submit164.php", 
			{fname: $('#fname164').val()}, 
			function(data){
				$('#response164').html(data);
			}
		);
		
	});

});