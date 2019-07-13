$(document).ready(function(){

	$('#formsubmit137').click(function(){
		$.post("submit137.php", 
			{fname: $('#fname137').val()}, 
			function(data){
				$('#response137').html(data);
			}
		);
		
	});

});