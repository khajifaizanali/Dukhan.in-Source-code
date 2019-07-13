$(document).ready(function(){

	$('#formsubmit139').click(function(){
		$.post("submit139.php", 
			{fname: $('#fname139').val()}, 
			function(data){
				$('#response139').html(data);
			}
		);
		
	});

});