$(document).ready(function(){

	$('#formsubmit166').click(function(){
		$.post("submit166.php", 
			{fname: $('#fname166').val()}, 
			function(data){
				$('#response166').html(data);
			}
		);
		
	});

});