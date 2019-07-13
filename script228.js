$(document).ready(function(){

	$('#formsubmit228').click(function(){
		$.post("submit228.php", 
			{fname: $('#fname228').val()}, 
			function(data){
				$('#response228').html(data);
			}
		);
		
	});

});