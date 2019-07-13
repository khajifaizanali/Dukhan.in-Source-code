$(document).ready(function(){

	$('#formsubmit18').click(function(){
		$.post("submit18.php", 
			{fname: $('#fname18').val()}, 
			function(data){
				$('#response18').html(data);
			}
		);
		
	});

});