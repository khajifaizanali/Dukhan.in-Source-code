$(document).ready(function(){

	$('#formsubmit93').click(function(){
		$.post("submit93.php", 
			{fname: $('#fname93').val()}, 
			function(data){
				$('#response93').html(data);
			}
		);
		
	});

});