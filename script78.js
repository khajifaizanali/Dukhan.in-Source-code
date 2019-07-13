$(document).ready(function(){

	$('#formsubmit78').click(function(){
		$.post("submit78.php", 
			{fname: $('#fname78').val()}, 
			function(data){
				$('#response78').html(data);
			}
		);
		
	});

});