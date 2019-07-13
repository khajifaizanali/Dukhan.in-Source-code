$(document).ready(function(){

	$('#formsubmit227').click(function(){
		$.post("submit227.php", 
			{fname: $('#fname227').val()}, 
			function(data){
				$('#response227').html(data);
			}
		);
		
	});

});