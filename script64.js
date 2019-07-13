$(document).ready(function(){

	$('#formsubmit64').click(function(){
		$.post("submit64.php", 
			{fname: $('#fname64').val()}, 
			function(data){
				$('#response64').html(data);
			}
		);
		
	});

});