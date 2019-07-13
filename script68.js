$(document).ready(function(){

	$('#formsubmit68').click(function(){
		$.post("submit68.php", 
			{fname: $('#fname68').val()}, 
			function(data){
				$('#response68').html(data);
			}
		);
		
	});

});