$(document).ready(function(){

	$('#formsubmit36').click(function(){
		$.post("submit36.php", 
			{fname: $('#fname36').val()}, 
			function(data){
				$('#response36').html(data);
			}
		);
		
	});

});