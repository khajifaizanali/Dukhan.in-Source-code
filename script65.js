$(document).ready(function(){

	$('#formsubmit65').click(function(){
		$.post("submit65.php", 
			{fname: $('#fname65').val()}, 
			function(data){
				$('#response65').html(data);
			}
		);
		
	});

});