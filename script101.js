$(document).ready(function(){

	$('#formsubmit101').click(function(){
		$.post("submit101.php", 
			{fname: $('#fname101').val()}, 
			function(data){
				$('#response101').html(data);
			}
		);
		
	});

});