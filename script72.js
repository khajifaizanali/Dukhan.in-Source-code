$(document).ready(function(){

	$('#formsubmit72').click(function(){
		$.post("submit72.php", 
			{fname: $('#fname72').val()}, 
			function(data){
				$('#response72').html(data);
			}
		);
		
	});

});