$(document).ready(function(){

	$('#formsubmit71').click(function(){
		$.post("submit71.php", 
			{fname: $('#fname71').val()}, 
			function(data){
				$('#response71').html(data);
			}
		);
		
	});

});