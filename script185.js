$(document).ready(function(){

	$('#formsubmit185').click(function(){
		$.post("submit185.php", 
			{fname: $('#fname185').val()}, 
			function(data){
				$('#response185').html(data);
			}
		);
		
	});

});