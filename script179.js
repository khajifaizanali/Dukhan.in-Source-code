$(document).ready(function(){

	$('#formsubmit179').click(function(){
		$.post("submit179.php", 
			{fname: $('#fname179').val()}, 
			function(data){
				$('#response179').html(data);
			}
		);
		
	});

});