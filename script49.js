$(document).ready(function(){

	$('#formsubmit49').click(function(){
		$.post("submit49.php", 
			{fname: $('#fname49').val()}, 
			function(data){
				$('#response49').html(data);
			}
		);
		
	});

});