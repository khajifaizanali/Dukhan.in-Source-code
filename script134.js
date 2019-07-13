$(document).ready(function(){

	$('#formsubmit134').click(function(){
		$.post("submit134.php", 
			{fname: $('#fname134').val()}, 
			function(data){
				$('#response134').html(data);
			}
		);
		
	});

});