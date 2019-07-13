$(document).ready(function(){

	$('#formsubmit99').click(function(){
		$.post("submit99.php", 
			{fname: $('#fname99').val()}, 
			function(data){
				$('#response99').html(data);
			}
		);
		
	});

});