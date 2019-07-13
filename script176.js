$(document).ready(function(){

	$('#formsubmit176').click(function(){
		$.post("submit176.php", 
			{fname: $('#fname176').val()}, 
			function(data){
				$('#response176').html(data);
			}
		);
		
	});

});