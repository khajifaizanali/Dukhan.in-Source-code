$(document).ready(function(){

	$('#formsubmit81').click(function(){
		$.post("submit81.php", 
			{fname: $('#fname81').val()}, 
			function(data){
				$('#response81').html(data);
			}
		);
		
	});

});