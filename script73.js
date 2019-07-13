$(document).ready(function(){

	$('#formsubmit73').click(function(){
		$.post("submit73.php", 
			{fname: $('#fname73').val()}, 
			function(data){
				$('#response73').html(data);
			}
		);
		
	});

});