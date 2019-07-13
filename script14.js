$(document).ready(function(){

	$('#formsubmit14').click(function(){
		$.post("submit14.php", 
			{fname: $('#fname14').val()}, 
			function(data){
				$('#response14').html(data);
			}
		);
		
	});

});