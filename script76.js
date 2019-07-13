$(document).ready(function(){

	$('#formsubmit76').click(function(){
		$.post("submit76.php", 
			{fname: $('#fname76').val()}, 
			function(data){
				$('#response76').html(data);
			}
		);
		
	});

});