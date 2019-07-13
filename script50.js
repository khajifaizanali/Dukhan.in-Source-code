$(document).ready(function(){

	$('#formsubmit50').click(function(){
		$.post("submit50.php", 
			{fname: $('#fname50').val()}, 
			function(data){
				$('#response50').html(data);
			}
		);
		
	});

});