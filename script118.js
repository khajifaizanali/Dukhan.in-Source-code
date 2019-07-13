$(document).ready(function(){

	$('#formsubmit118').click(function(){
		$.post("submit118.php", 
			{fname: $('#fname118').val()}, 
			function(data){
				$('#response118').html(data);
			}
		);
		
	});

});