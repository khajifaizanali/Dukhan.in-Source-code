$(document).ready(function(){

	$('#formsubmit44').click(function(){
		$.post("submit44.php", 
			{fname: $('#fname44').val()}, 
			function(data){
				$('#response44').html(data);
			}
		);
		
	});

});