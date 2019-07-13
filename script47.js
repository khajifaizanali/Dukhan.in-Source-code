$(document).ready(function(){

	$('#formsubmit47').click(function(){
		$.post("submit47.php", 
			{fname: $('#fname47').val()}, 
			function(data){
				$('#response47').html(data);
			}
		);
		
	});

});