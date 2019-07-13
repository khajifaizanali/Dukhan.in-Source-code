$(document).ready(function(){

	$('#formsubmit245').click(function(){
		$.post("submit245.php", 
			{fname: $('#fname245').val()}, 
			function(data){
				$('#response245').html(data);
			}
		);
		
	});

});