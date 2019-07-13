$(document).ready(function(){

	$('#formsubmit136').click(function(){
		$.post("submit136.php", 
			{fname: $('#fname136').val()}, 
			function(data){
				$('#response136').html(data);
			}
		);
		
	});

});