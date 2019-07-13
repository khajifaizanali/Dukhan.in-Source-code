$(document).ready(function(){

	$('#formsubmit146').click(function(){
		$.post("submit146.php", 
			{fname: $('#fname146').val()}, 
			function(data){
				$('#response146').html(data);
			}
		);
		
	});

});