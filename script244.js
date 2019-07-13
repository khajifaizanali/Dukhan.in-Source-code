$(document).ready(function(){

	$('#formsubmit244').click(function(){
		$.post("submit244.php", 
			{fname: $('#fname244').val()}, 
			function(data){
				$('#response244').html(data);
			}
		);
		
	});

});