$(document).ready(function(){

	$('#formsubmit132').click(function(){
		$.post("submit132.php", 
			{fname: $('#fname132').val()}, 
			function(data){
				$('#response132').html(data);
			}
		);
		
	});

});