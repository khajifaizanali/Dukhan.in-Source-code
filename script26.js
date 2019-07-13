$(document).ready(function(){

	$('#formsubmit26').click(function(){
		$.post("submit26.php", 
			{fname: $('#fname26').val()}, 
			function(data){
				$('#response26').html(data);
			}
		);
		
	});

});