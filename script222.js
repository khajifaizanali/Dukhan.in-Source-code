$(document).ready(function(){

	$('#formsubmit222').click(function(){
		$.post("submit222.php", 
			{fname: $('#fname222').val()}, 
			function(data){
				$('#response222').html(data);
			}
		);
		
	});

});