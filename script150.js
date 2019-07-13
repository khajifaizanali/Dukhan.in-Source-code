$(document).ready(function(){

	$('#formsubmit150').click(function(){
		$.post("submit150.php", 
			{fname: $('#fname150').val()}, 
			function(data){
				$('#response150').html(data);
			}
		);
		
	});

});