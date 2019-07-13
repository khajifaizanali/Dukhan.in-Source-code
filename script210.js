$(document).ready(function(){

	$('#formsubmit210').click(function(){
		$.post("submit210.php", 
			{fname: $('#fname210').val()}, 
			function(data){
				$('#response210').html(data);
			}
		);
		
	});

});