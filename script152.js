$(document).ready(function(){

	$('#formsubmit152').click(function(){
		$.post("submit152.php", 
			{fname: $('#fname152').val()}, 
			function(data){
				$('#response152').html(data);
			}
		);
		
	});

});