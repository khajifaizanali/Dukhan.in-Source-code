$(document).ready(function(){

	$('#formsubmit94').click(function(){
		$.post("submit94.php", 
			{fname: $('#fname94').val()}, 
			function(data){
				$('#response94').html(data);
			}
		);
		
	});

});