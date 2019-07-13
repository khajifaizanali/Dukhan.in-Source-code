$(document).ready(function(){

	$('#formsubmit23').click(function(){
		$.post("submit23.php", 
			{fname: $('#fname23').val()}, 
			function(data){
				$('#response23').html(data);
			}
		);
		
	});

});