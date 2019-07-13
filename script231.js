$(document).ready(function(){

	$('#formsubmit231').click(function(){
		$.post("submit231.php", 
			{fname: $('#fname231').val()}, 
			function(data){
				$('#response231').html(data);
			}
		);
		
	});

});