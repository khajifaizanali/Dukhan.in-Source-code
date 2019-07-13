$(document).ready(function(){

	$('#formsubmit126').click(function(){
		$.post("submit126.php", 
			{fname: $('#fname126').val()}, 
			function(data){
				$('#response126').html(data);
			}
		);
		
	});

});