$(document).ready(function(){

	$('#formsubmit158').click(function(){
		$.post("submit158.php", 
			{fname: $('#fname158').val()}, 
			function(data){
				$('#response158').html(data);
			}
		);
		
	});

});