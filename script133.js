$(document).ready(function(){

	$('#formsubmit133').click(function(){
		$.post("submit133.php", 
			{fname: $('#fname133').val()}, 
			function(data){
				$('#response133').html(data);
			}
		);
		
	});

});