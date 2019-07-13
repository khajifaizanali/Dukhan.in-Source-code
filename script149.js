$(document).ready(function(){

	$('#formsubmit149').click(function(){
		$.post("submit149.php", 
			{fname: $('#fname149').val()}, 
			function(data){
				$('#response149').html(data);
			}
		);
		
	});

});