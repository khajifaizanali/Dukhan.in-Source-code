$(document).ready(function(){

	$('#formsubmit167').click(function(){
		$.post("submit167.php", 
			{fname: $('#fname167').val()}, 
			function(data){
				$('#response167').html(data);
			}
		);
		
	});

});