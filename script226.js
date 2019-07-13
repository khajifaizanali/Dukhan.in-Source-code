$(document).ready(function(){

	$('#formsubmit226').click(function(){
		$.post("submit226.php", 
			{fname: $('#fname226').val()}, 
			function(data){
				$('#response226').html(data);
			}
		);
		
	});

});