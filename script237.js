$(document).ready(function(){

	$('#formsubmit237').click(function(){
		$.post("submit237.php", 
			{fname: $('#fname237').val()}, 
			function(data){
				$('#response237').html(data);
			}
		);
		
	});

});