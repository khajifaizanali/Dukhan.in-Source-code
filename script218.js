$(document).ready(function(){

	$('#formsubmit218').click(function(){
		$.post("submit218.php", 
			{fname: $('#fname218').val()}, 
			function(data){
				$('#response218').html(data);
			}
		);
		
	});

});