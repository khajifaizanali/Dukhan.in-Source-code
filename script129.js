$(document).ready(function(){

	$('#formsubmit129').click(function(){
		$.post("submit129.php", 
			{fname: $('#fname129').val()}, 
			function(data){
				$('#response129').html(data);
			}
		);
		
	});

});