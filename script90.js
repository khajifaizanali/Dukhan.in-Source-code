$(document).ready(function(){

	$('#formsubmit90').click(function(){
		$.post("submit90.php", 
			{fname: $('#fname90').val()}, 
			function(data){
				$('#response90').html(data);
			}
		);
		
	});

});