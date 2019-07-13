$(document).ready(function(){

	$('#formsubmit74').click(function(){
		$.post("submit74.php", 
			{fname: $('#fname74').val()}, 
			function(data){
				$('#response74').html(data);
			}
		);
		
	});

});