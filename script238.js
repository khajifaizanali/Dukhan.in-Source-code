$(document).ready(function(){

	$('#formsubmit238').click(function(){
		$.post("submit238.php", 
			{fname: $('#fname238').val()}, 
			function(data){
				$('#response238').html(data);
			}
		);
		
	});

});