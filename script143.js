$(document).ready(function(){

	$('#formsubmit143').click(function(){
		$.post("submit143.php", 
			{fname: $('#fname143').val()}, 
			function(data){
				$('#response143').html(data);
			}
		);
		
	});

});