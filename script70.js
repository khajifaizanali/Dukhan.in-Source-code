$(document).ready(function(){

	$('#formsubmit70').click(function(){
		$.post("submit70.php", 
			{fname: $('#fname70').val()}, 
			function(data){
				$('#response70').html(data);
			}
		);
		
	});

});