$(document).ready(function(){

	$('#formsubmit30').click(function(){
		$.post("submit30.php", 
			{fname: $('#fname30').val()}, 
			function(data){
				$('#response30').html(data);
			}
		);
		
	});

});