$(document).ready(function(){

	$('#formsubmit35').click(function(){
		$.post("submit35.php", 
			{fname: $('#fname35').val()}, 
			function(data){
				$('#response35').html(data);
			}
		);
		
	});

});