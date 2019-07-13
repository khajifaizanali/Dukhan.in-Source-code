$(document).ready(function(){

	$('#formsubmit160').click(function(){
		$.post("submit160.php", 
			{fname: $('#fname160').val()}, 
			function(data){
				$('#response160').html(data);
			}
		);
		
	});

});