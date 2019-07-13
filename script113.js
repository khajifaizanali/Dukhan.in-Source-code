
$(document).ready(function(){

	$('#formsubmit113').click(function(){
		$.post("submit113.php", 
			{fname: $('#fname113').val()}, 
			function(data){
				$('#response113').html(data);
			}
		);
		
	});

});