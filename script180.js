$(document).ready(function(){

	$('#formsubmit180').click(function(){
		$.post("submit180.php", 
			{fname: $('#fname180').val()}, 
			function(data){
				$('#response180').html(data);
			}
		);
		
	});

});