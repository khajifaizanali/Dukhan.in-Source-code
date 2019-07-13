$(document).ready(function(){

	$('#formsubmit217').click(function(){
		$.post("submit217.php", 
			{fname: $('#fname217').val()}, 
			function(data){
				$('#response217').html(data);
			}
		);
		
	});

});