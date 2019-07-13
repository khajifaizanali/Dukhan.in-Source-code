$(document).ready(function(){

	$('#formsubmit120').click(function(){
		$.post("submit120.php", 
			{fname: $('#fname120').val()}, 
			function(data){
				$('#response120').html(data);
			}
		);
		
	});

});