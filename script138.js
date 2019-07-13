$(document).ready(function(){

	$('#formsubmit138').click(function(){
		$.post("submit138.php", 
			{fname: $('#fname138').val()}, 
			function(data){
				$('#response138').html(data);
			}
		);
		
	});

});