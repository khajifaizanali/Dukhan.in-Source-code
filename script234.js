$(document).ready(function(){

	$('#formsubmit234').click(function(){
		$.post("submit226.php", 
			{fname: $('#fname234').val()}, 
			function(data){
				$('#response234').html(data);
			}
		);
		
	});

});