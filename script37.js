$(document).ready(function(){

	$('#formsubmit37').click(function(){
		$.post("submit37.php", 
			{fname: $('#fname37').val()}, 
			function(data){
				$('#response37').html(data);
			}
		);
		
	});

});