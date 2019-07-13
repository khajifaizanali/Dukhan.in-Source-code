$(document).ready(function(){

	$('#formsubmit60').click(function(){
		$.post("submit60.php", 
			{fname: $('#fname60').val()}, 
			function(data){
				$('#response60').html(data);
			}
		);
		
	});

});