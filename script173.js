$(document).ready(function(){

	$('#formsubmit173').click(function(){
		$.post("submit173.php", 
			{fname: $('#fname173').val()}, 
			function(data){
				$('#response173').html(data);
			}
		);
		
	});

});