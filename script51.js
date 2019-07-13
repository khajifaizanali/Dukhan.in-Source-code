$(document).ready(function(){

	$('#formsubmit51').click(function(){
		$.post("submit51.php", 
			{fname: $('#fname51').val()}, 
			function(data){
				$('#response51').html(data);
			}
		);
		
	});

});