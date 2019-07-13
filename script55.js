$(document).ready(function(){

	$('#formsubmit55').click(function(){
		$.post("submit55.php", 
			{fname: $('#fname55').val()}, 
			function(data){
				$('#response55').html(data);
			}
		);
		
	});

});