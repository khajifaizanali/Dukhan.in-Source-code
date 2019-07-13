$(document).ready(function(){

	$('#formsubmit127').click(function(){
		$.post("submit127.php", 
			{fname: $('#fname127').val()}, 
			function(data){
				$('#response127').html(data);
			}
		);
		
	});

});