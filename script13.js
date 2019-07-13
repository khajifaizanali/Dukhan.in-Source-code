$(document).ready(function(){

	$('#formsubmit13').click(function(){
		$.post("submit13.php", 
			{fname: $('#fname13').val()}, 
			function(data){
				$('#response13').html(data);
			}
		);
		
	});

});