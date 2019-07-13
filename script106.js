$(document).ready(function(){

	$('#formsubmit106').click(function(){
		$.post("submit106.php", 
			{fname: $('#fname106').val()}, 
			function(data){
				$('#response106').html(data);
			}
		);
		
	});

});