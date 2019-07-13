$(document).ready(function(){

	$('#formsubmit115').click(function(){
		$.post("submit115.php", 
			{fname: $('#fname115').val()}, 
			function(data){
				$('#response115').html(data);
			}
		);
		
	});

});