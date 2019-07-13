$(document).ready(function(){

	$('#formsubmit216').click(function(){
		$.post("submit216.php", 
			{fname: $('#fname216').val()}, 
			function(data){
				$('#response216').html(data);
			}
		);
		
	});

});