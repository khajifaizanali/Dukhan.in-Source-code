$(document).ready(function(){

	$('#formsubmit183').click(function(){
		$.post("submit183.php", 
			{fname: $('#fname183').val()}, 
			function(data){
				$('#response183').html(data);
			}
		);
		
	});

});