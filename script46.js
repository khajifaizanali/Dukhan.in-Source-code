$(document).ready(function(){

	$('#formsubmit46').click(function(){
		$.post("submit46.php", 
			{fname: $('#fname46').val()}, 
			function(data){
				$('#response46').html(data);
			}
		);
		
	});

});