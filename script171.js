$(document).ready(function(){

	$('#formsubmit171').click(function(){
		$.post("submit171.php", 
			{fname: $('#fname171').val()}, 
			function(data){
				$('#response171').html(data);
			}
		);
		
	});

});