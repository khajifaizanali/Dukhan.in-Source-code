$(document).ready(function(){

	$('#formsubmit97').click(function(){
		$.post("submit97.php", 
			{fname: $('#fname97').val()}, 
			function(data){
				$('#response97').html(data);
			}
		);
		
	});

});