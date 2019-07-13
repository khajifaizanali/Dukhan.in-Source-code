$(document).ready(function(){

	$('#formsubmit169').click(function(){
		$.post("submit169.php", 
			{fname: $('#fname169').val()}, 
			function(data){
				$('#response169').html(data);
			}
		);
		
	});

});