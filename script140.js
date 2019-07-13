$(document).ready(function(){

	$('#formsubmit140').click(function(){
		$.post("submit140.php", 
			{fname: $('#fname140').val()}, 
			function(data){
				$('#response140').html(data);
			}
		);
		
	});

});