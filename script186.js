$(document).ready(function(){

	$('#formsubmit186').click(function(){
		$.post("submit186.php", 
			{fname: $('#fname186').val()}, 
			function(data){
				$('#response186').html(data);
			}
		);
		
	});

});