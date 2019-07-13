$(document).ready(function(){

	$('#formsubmit223').click(function(){
		$.post("submit223.php", 
			{fname: $('#fname223').val()}, 
			function(data){
				$('#response223').html(data);
			}
		);
		
	});

});