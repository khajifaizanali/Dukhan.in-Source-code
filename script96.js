$(document).ready(function(){

	$('#formsubmit96').click(function(){
		$.post("submit96.php", 
			{fname: $('#fname96').val()}, 
			function(data){
				$('#response96').html(data);
			}
		);
		
	});

});