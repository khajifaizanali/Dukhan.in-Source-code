$(document).ready(function(){

	$('#formsubmit32').click(function(){
		$.post("submit32.php", 
			{fname: $('#fname32').val()}, 
			function(data){
				$('#response32').html(data);
			}
		);
		
	});

});