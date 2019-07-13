$(document).ready(function(){

	$('#formsubmit34').click(function(){
		$.post("submit34.php", 
			{fname: $('#fname34').val()}, 
			function(data){
				$('#response34').html(data);
			}
		);
		
	});

});