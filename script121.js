$(document).ready(function(){

	$('#formsubmit121').click(function(){
		$.post("submit121.php", 
			{fname: $('#fname121').val()}, 
			function(data){
				$('#response121').html(data);
			}
		);
		
	});

});