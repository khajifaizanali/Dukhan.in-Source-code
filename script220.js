$(document).ready(function(){

	$('#formsubmit220').click(function(){
		$.post("submit220.php", 
			{fname: $('#fname220').val()}, 
			function(data){
				$('#response220').html(data);
			}
		);
		
	});

});