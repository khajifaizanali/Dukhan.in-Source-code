$(document).ready(function(){

	$('#formsubmit182').click(function(){
		$.post("submit182.php", 
			{fname: $('#fname182').val()}, 
			function(data){
				$('#response182').html(data);
			}
		);
		
	});

});