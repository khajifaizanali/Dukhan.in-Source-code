$(document).ready(function(){

	$('#formsubmit40').click(function(){
		$.post("submit40.php", 
			{fname: $('#fname40').val()}, 
			function(data){
				$('#response40').html(data);
			}
		);
		
	});

});