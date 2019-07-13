$(document).ready(function(){

	$('#formsubmit112').click(function(){
		$.post("submit112.php", 
			{fname: $('#fname112').val()}, 
			function(data){
				$('#response112').html(data);
			}
		);
		
	});

});