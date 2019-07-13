$(document).ready(function(){

	$('#formsubmit123').click(function(){
		$.post("submit123.php", 
			{fname: $('#fname123').val()}, 
			function(data){
				$('#response123').html(data);
			}
		);
		
	});

});