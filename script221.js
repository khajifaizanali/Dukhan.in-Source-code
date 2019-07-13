$(document).ready(function(){

	$('#formsubmit221').click(function(){
		$.post("submit221.php", 
			{fname: $('#fname221').val()}, 
			function(data){
				$('#response221').html(data);
			}
		);
		
	});

});