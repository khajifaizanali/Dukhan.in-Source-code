$(document).ready(function(){

	$('#formsubmit105').click(function(){
		$.post("submit105.php", 
			{fname: $('#fname105').val()}, 
			function(data){
				$('#response105').html(data);
			}
		);
		
	});

});