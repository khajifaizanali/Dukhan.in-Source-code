$(document).ready(function(){

	$('#formsubmit154').click(function(){
		$.post("submit154.php", 
			{fname: $('#fname154').val()}, 
			function(data){
				$('#response154').html(data);
			}
		);
		
	});

});