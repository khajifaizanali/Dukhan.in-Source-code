$(document).ready(function(){

	$('#formsubmit24').click(function(){
		$.post("submit24.php", 
			{fname: $('#fname24').val()}, 
			function(data){
				$('#response24').html(data);
			}
		);
		
	});

});