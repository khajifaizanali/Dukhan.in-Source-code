$(document).ready(function(){

	$('#formsubmit130').click(function(){
		$.post("submit130.php", 
			{fname: $('#fname130').val()}, 
			function(data){
				$('#response130').html(data);
			}
		);
		
	});

});