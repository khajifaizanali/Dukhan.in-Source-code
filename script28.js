$(document).ready(function(){

	$('#formsubmit28').click(function(){
		$.post("submit28.php", 
			{fname: $('#fname28').val()}, 
			function(data){
				$('#response28').html(data);
			}
		);
		
	});

});