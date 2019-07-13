$(document).ready(function(){

	$('#formsubmit213').click(function(){
		$.post("submit213.php", 
			{fname: $('#fname213').val()}, 
			function(data){
				$('#response213').html(data);
			}
		);
		
	});

});