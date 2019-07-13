$(document).ready(function(){

	$('#formsubmit230').click(function(){
		$.post("submit230.php", 
			{fname: $('#fname230').val()}, 
			function(data){
				$('#response230').html(data);
			}
		);
		
	});

});