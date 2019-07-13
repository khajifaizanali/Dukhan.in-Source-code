$(document).ready(function(){

	$('#formsubmit181').click(function(){
		$.post("submit181.php", 
			{fname: $('#fname181').val()}, 
			function(data){
				$('#response181').html(data);
			}
		);
		
	});

});