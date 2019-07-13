$(document).ready(function(){

	$('#formsubmit39').click(function(){
		$.post("submit39.php", 
			{fname: $('#fname39').val()}, 
			function(data){
				$('#response39').html(data);
			}
		);
		
	});

});