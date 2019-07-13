$(document).ready(function(){

	$('#formsubmit67').click(function(){
		$.post("submit67.php", 
			{fname: $('#fname67').val()}, 
			function(data){
				$('#response67').html(data);
			}
		);
		
	});

});