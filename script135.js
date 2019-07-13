$(document).ready(function(){

	$('#formsubmit135').click(function(){
		$.post("submit135.php", 
			{fname: $('#fname135').val()}, 
			function(data){
				$('#response135').html(data);
			}
		);
		
	});

});