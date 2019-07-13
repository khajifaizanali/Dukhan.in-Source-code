$(document).ready(function(){

	$('#formsubmit22').click(function(){
		$.post("submit22.php", 
			{fname: $('#fname22').val()}, 
			function(data){
				$('#response22').html(data);
			}
		);
		
	});

});