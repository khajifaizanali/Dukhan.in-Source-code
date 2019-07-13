$(document).ready(function(){

	$('#formsubmit163').click(function(){
		$.post("submit163.php", 
			{fname: $('#fname163').val()}, 
			function(data){
				$('#response163').html(data);
			}
		);
		
	});

});