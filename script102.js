$(document).ready(function(){

	$('#formsubmit102').click(function(){
		$.post("submit102.php", 
			{fname: $('#fname102').val()}, 
			function(data){
				$('#response102').html(data);
			}
		);
		
	});

});