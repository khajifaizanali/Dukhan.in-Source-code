$(document).ready(function(){

	$('#formsubmit145').click(function(){
		$.post("submit145.php", 
			{fname: $('#fname145').val()}, 
			function(data){
				$('#response145').html(data);
			}
		);
		
	});

});