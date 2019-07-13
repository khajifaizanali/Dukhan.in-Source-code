$(document).ready(function(){

	$('#formsubmit147').click(function(){
		$.post("submit147.php", 
			{fname: $('#fname147').val()}, 
			function(data){
				$('#response147').html(data);
			}
		);
		
	});

});