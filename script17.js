$(document).ready(function(){

	$('#formsubmit17').click(function(){
		$.post("submit17.php", 
			{fname: $('#fname17').val()}, 
			function(data){
				$('#response17').html(data);
			}
		);
		
	});

});