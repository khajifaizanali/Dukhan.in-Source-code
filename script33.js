$(document).ready(function(){

	$('#formsubmit33').click(function(){
		$.post("submit33.php", 
			{fname: $('#fname33').val()}, 
			function(data){
				$('#response33').html(data);
			}
		);
		
	});

});