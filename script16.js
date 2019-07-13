$(document).ready(function(){

	$('#formsubmit16').click(function(){
		$.post("submit16.php", 
			{fname: $('#fname16').val()}, 
			function(data){
				$('#response16').html(data);
			}
		);
		
	});

});