$(document).ready(function(){

	$('#formsubmit58').click(function(){
		$.post("submit58.php", 
			{fname: $('#fname58').val()}, 
			function(data){
				$('#response58').html(data);
			}
		);
		
	});

});