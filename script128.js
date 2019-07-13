$(document).ready(function(){

	$('#formsubmit128').click(function(){
		$.post("submit128.php", 
			{fname: $('#fname128').val()}, 
			function(data){
				$('#response128').html(data);
			}
		);
		
	});

});