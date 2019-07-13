$(document).ready(function(){

	$('#formsubmit168').click(function(){
		$.post("submit168.php", 
			{fname: $('#fname168').val()}, 
			function(data){
				$('#response168').html(data);
			}
		);
		
	});

});