$(document).ready(function(){

	$('#formsubmit63').click(function(){
		$.post("submit63.php", 
			{fname: $('#fname63').val()}, 
			function(data){
				$('#response63').html(data);
			}
		);
		
	});

});