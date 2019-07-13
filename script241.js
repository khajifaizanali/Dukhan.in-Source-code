$(document).ready(function(){

	$('#formsubmit241').click(function(){
		$.post("submit241.php", 
			{fname: $('#fname241').val()}, 
			function(data){
				$('#response241').html(data);
			}
		);
		
	});

});