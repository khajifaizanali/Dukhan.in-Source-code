$(document).ready(function(){

	$('#formsubmit91').click(function(){
		$.post("submit91.php", 
			{fname: $('#fname91').val()}, 
			function(data){
				$('#response91').html(data);
			}
		);
		
	});

});