$(document).ready(function(){

	$('#formsubmit159').click(function(){
		$.post("submit159.php", 
			{fname: $('#fname159').val()}, 
			function(data){
				$('#response159').html(data);
			}
		);
		
	});

});