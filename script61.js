$(document).ready(function(){

	$('#formsubmit61').click(function(){
		$.post("submit61.php", 
			{fname: $('#fname61').val()}, 
			function(data){
				$('#response61').html(data);
			}
		);
		
	});

});