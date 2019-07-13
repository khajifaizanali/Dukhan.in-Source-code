$(document).ready(function(){

	$('#formsubmit212').click(function(){
		$.post("submit212.php", 
			{fname: $('#fname212').val()}, 
			function(data){
				$('#response212').html(data);
			}
		);
		
	});

});