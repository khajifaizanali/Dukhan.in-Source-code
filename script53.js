$(document).ready(function(){

	$('#formsubmit53').click(function(){
		$.post("submit53.php", 
			{fname: $('#fname53').val()}, 
			function(data){
				$('#response53').html(data);
			}
		);
		
	});

});