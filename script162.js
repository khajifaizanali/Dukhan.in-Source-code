$(document).ready(function(){

	$('#formsubmit162').click(function(){
		$.post("submit162.php", 
			{fname: $('#fname162').val()}, 
			function(data){
				$('#response162').html(data);
			}
		);
		
	});

});