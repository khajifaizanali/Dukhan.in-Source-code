$(document).ready(function(){

	$('#formsubmit172').click(function(){
		$.post("submit172.php", 
			{fname: $('#fname172').val()}, 
			function(data){
				$('#response172').html(data);
			}
		);
		
	});

});