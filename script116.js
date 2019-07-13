$(document).ready(function(){

	$('#formsubmit116').click(function(){
		$.post("submit116.php", 
			{fname: $('#fname116').val()}, 
			function(data){
				$('#response116').html(data);
			}
		);
		
	});

});