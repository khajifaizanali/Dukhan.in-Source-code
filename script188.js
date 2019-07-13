$(document).ready(function(){

	$('#formsubmit188').click(function(){
		$.post("submit188.php", 
			{fname: $('#fname188').val()}, 
			function(data){
				$('#response188').html(data);
			}
		);
		
	});

});