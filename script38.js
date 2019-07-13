$(document).ready(function(){

	$('#formsubmit38').click(function(){
		$.post("submit38.php", 
			{fname: $('#fname38').val()}, 
			function(data){
				$('#response38').html(data);
			}
		);
		
	});

});