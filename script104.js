$(document).ready(function(){

	$('#formsubmit104').click(function(){
		$.post("submit104.php", 
			{fname: $('#fname104').val()}, 
			function(data){
				$('#response104').html(data);
			}
		);
		
	});

});