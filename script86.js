$(document).ready(function(){

	$('#formsubmit86').click(function(){
		$.post("submit86.php", 
			{fname: $('#fname86').val()}, 
			function(data){
				$('#response86').html(data);
			}
		);
		
	});

});