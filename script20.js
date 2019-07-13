$(document).ready(function(){

	$('#formsubmit20').click(function(){
		$.post("submit20.php", 
			{fname: $('#fname20').val()}, 
			function(data){
				$('#response20').html(data);
			}
		);
		
	});

});