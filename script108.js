$(document).ready(function(){

	$('#formsubmit108').click(function(){
		$.post("submit108.php", 
			{fname: $('#fname108').val()}, 
			function(data){
				$('#response108').html(data);
			}
		);
		
	});

});