$(document).ready(function(){

	$('#formsubmit77').click(function(){
		$.post("submit77.php", 
			{fname: $('#fname77').val()}, 
			function(data){
				$('#response77').html(data);
			}
		);
		
	});

});