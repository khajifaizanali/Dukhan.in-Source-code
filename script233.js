$(document).ready(function(){

	$('#formsubmit233').click(function(){
		$.post("submit233.php", 
			{fname: $('#fname233').val()}, 
			function(data){
				$('#response233').html(data);
			}
		);
		
	});

});