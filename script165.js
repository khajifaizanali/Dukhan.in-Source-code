$(document).ready(function(){

	$('#formsubmit165').click(function(){
		$.post("submit165.php", 
			{fname: $('#fname165').val()}, 
			function(data){
				$('#response165').html(data);
			}
		);
		
	});

});