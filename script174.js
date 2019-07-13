$(document).ready(function(){

	$('#formsubmit174').click(function(){
		$.post("submit174.php", 
			{fname: $('#fname174').val()}, 
			function(data){
				$('#response174').html(data);
			}
		);
		
	});

});