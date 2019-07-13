$(document).ready(function(){

	$('#formsubmit240').click(function(){
		$.post("submit240.php", 
			{fname: $('#fname240').val()}, 
			function(data){
				$('#response240').html(data);
			}
		);
		
	});

});