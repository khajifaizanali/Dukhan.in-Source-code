$(document).ready(function(){

	$('#formsubmit187').click(function(){
		$.post("submit187.php", 
			{fname: $('#fname187').val()}, 
			function(data){
				$('#response187').html(data);
			}
		);
		
	});

});