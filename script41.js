$(document).ready(function(){

	$('#formsubmit41').click(function(){
		$.post("submit41.php", 
			{fname: $('#fname41').val()}, 
			function(data){
				$('#response41').html(data);
			}
		);
		
	});

});