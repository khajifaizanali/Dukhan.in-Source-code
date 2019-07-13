$(document).ready(function(){

	$('#formsubmit66').click(function(){
		$.post("submit66.php", 
			{fname: $('#fname66').val()}, 
			function(data){
				$('#response66').html(data);
			}
		);
		
	});

});