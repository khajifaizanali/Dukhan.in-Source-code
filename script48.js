$(document).ready(function(){

	$('#formsubmit48').click(function(){
		$.post("submit48.php", 
			{fname: $('#fname48').val()}, 
			function(data){
				$('#response48').html(data);
			}
		);
		
	});

});