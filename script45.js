$(document).ready(function(){

	$('#formsubmit45').click(function(){
		$.post("submit45.php", 
			{fname: $('#fname45').val()}, 
			function(data){
				$('#response45').html(data);
			}
		);
		
	});

});