$(document).ready(function(){

	$('#formsubmit87').click(function(){
		$.post("submit87.php", 
			{fname: $('#fname87').val()}, 
			function(data){
				$('#response87').html(data);
			}
		);
		
	});

});