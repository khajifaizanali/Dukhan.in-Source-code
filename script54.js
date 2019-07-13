$(document).ready(function(){

	$('#formsubmit54').click(function(){
		$.post("submit54.php", 
			{fname: $('#fname54').val()}, 
			function(data){
				$('#response54').html(data);
			}
		);
		
	});

});