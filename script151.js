$(document).ready(function(){

	$('#formsubmit151').click(function(){
		$.post("submit151.php", 
			{fname: $('#fname151').val()}, 
			function(data){
				$('#response151').html(data);
			}
		);
		
	});

});