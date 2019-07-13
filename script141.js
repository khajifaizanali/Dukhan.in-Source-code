$(document).ready(function(){

	$('#formsubmit141').click(function(){
		$.post("submit141.php", 
			{fname: $('#fname141').val()}, 
			function(data){
				$('#response141').html(data);
			}
		);
		
	});

});