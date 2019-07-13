$(document).ready(function(){

	$('#formsubmit92').click(function(){
		$.post("submit92.php", 
			{fname: $('#fname92').val()}, 
			function(data){
				$('#response92').html(data);
			}
		);
		
	});

});