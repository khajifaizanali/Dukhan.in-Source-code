$(document).ready(function(){

	$('#formsubmit124').click(function(){
		$.post("submit124.php", 
			{fname: $('#fname124').val()}, 
			function(data){
				$('#response124').html(data);
			}
		);
		
	});

});