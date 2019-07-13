$(document).ready(function(){

	$('#formsubmit125').click(function(){
		$.post("submit125.php", 
			{fname: $('#fname125').val()}, 
			function(data){
				$('#response125').html(data);
			}
		);
		
	});

});