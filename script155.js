$(document).ready(function(){

	$('#formsubmit155').click(function(){
		$.post("submit155.php", 
			{fname: $('#fname155').val()}, 
			function(data){
				$('#response155').html(data);
			}
		);
		
	});

});