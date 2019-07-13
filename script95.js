$(document).ready(function(){

	$('#formsubmit95').click(function(){
		$.post("submit95.php", 
			{fname: $('#fname95').val()}, 
			function(data){
				$('#response95').html(data);
			}
		);
		
	});

});