$(document).ready(function(){

	$('#formsubmit161').click(function(){
		$.post("submit161.php", 
			{fname: $('#fname161').val()}, 
			function(data){
				$('#response161').html(data);
			}
		);
		
	});

});