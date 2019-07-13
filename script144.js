$(document).ready(function(){

	$('#formsubmit144').click(function(){
		$.post("submit144.php", 
			{fname: $('#fname144').val()}, 
			function(data){
				$('#response144').html(data);
			}
		);
		
	});

});