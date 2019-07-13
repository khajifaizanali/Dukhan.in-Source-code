$(document).ready(function(){

	$('#formsubmit19').click(function(){
		$.post("submit19.php", 
			{fname: $('#fname19').val()}, 
			function(data){
				$('#response19').html(data);
			}
		);
		
	});

});