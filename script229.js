$(document).ready(function(){

	$('#formsubmit229').click(function(){
		$.post("submit229.php", 
			{fname: $('#fname229').val()}, 
			function(data){
				$('#response229').html(data);
			}
		);
		
	});

});