$(document).ready(function(){

	$('#formsubmit122').click(function(){
		$.post("submit122.php", 
			{fname: $('#fname122').val()}, 
			function(data){
				$('#response122').html(data);
			}
		);
		
	});

});