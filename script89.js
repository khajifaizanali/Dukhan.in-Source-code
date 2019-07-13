$(document).ready(function(){

	$('#formsubmit89').click(function(){
		$.post("submit89.php", 
			{fname: $('#fname89').val()}, 
			function(data){
				$('#response89').html(data);
			}
		);
		
	});

});