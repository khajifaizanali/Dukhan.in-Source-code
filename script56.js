$(document).ready(function(){

	$('#formsubmit56').click(function(){
		$.post("submit56.php", 
			{fname: $('#fname56').val()}, 
			function(data){
				$('#response56').html(data);
			}
		);
		
	});

});