$(document).ready(function(){

	$('#formsubmit52').click(function(){
		$.post("submit52.php", 
			{fname: $('#fname52').val()}, 
			function(data){
				$('#response52').html(data);
			}
		);
		
	});

});