$(document).ready(function(){

	$('#formsubmit59').click(function(){
		$.post("submit59.php", 
			{fname: $('#fname59').val()}, 
			function(data){
				$('#response59').html(data);
			}
		);
		
	});

});