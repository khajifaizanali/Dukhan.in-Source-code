$(document).ready(function(){

	$('#formsubmit42').click(function(){
		$.post("submit42.php", 
			{fname: $('#fname42').val()}, 
			function(data){
				$('#response42').html(data);
			}
		);
		
	});

});