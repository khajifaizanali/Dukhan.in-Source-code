$(document).ready(function(){

	$('#formsubmit25').click(function(){
		$.post("submit25.php", 
			{fname: $('#fname25').val()}, 
			function(data){
				$('#response25').html(data);
			}
		);
		
	});

});