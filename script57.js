$(document).ready(function(){

	$('#formsubmit57').click(function(){
		$.post("submit57.php", 
			{fname: $('#fname57').val()}, 
			function(data){
				$('#response57').html(data);
			}
		);
		
	});

});