$(document).ready(function(){

	$('#formsubmit178').click(function(){
		$.post("submit178.php", 
			{fname: $('#fname178').val()}, 
			function(data){
				$('#response178').html(data);
			}
		);
		
	});

});