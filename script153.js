$(document).ready(function(){

	$('#formsubmit153').click(function(){
		$.post("submit153.php", 
			{fname: $('#fname153').val()}, 
			function(data){
				$('#response153').html(data);
			}
		);
		
	});

});