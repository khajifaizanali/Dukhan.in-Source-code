$(document).ready(function(){

	$('#formsubmit62').click(function(){
		$.post("submit62.php", 
			{fname: $('#fname62').val()}, 
			function(data){
				$('#response62     ').html(data);
			}
		);
		
	});

});