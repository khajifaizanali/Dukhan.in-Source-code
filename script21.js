$(document).ready(function(){

	$('#formsubmit21').click(function(){
		$.post("submit21.php", 
			{fname: $('#fname21').val()}, 
			function(data){
				$('#response21').html(data);
			}
		);
		
	});

});