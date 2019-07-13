$(document).ready(function(){

	$('#formsubmit82').click(function(){
		$.post("submit82.php", 
			{fname: $('#fname82').val()}, 
			function(data){
				$('#response82').html(data);
			}
		);
		
	});

});