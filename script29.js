$(document).ready(function(){

	$('#formsubmit29').click(function(){
		$.post("submit.php", 
			{fname: $('#fname29').val()}, 
			function(data){
				$('#response29').html(data);
			}
		);
		
	});

});