$(document).ready(function(){

	$('#formsubmit85').click(function(){
		$.post("submit.php", 
			{fname: $('#fname85').val()}, 
			function(data){
				$('#response85').html(data);
			}
		);
		
	});

});