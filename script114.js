$(document).ready(function(){

	$('#formsubmit114').click(function(){
		$.post("submit114.php", 
			{fname: $('#fname114').val()}, 
			function(data){
				$('#response114').html(data);
			}
		);
		
	});

});