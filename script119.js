$(document).ready(function(){

	$('#formsubmit119').click(function(){
		$.post("submit119.php", 
			{fname: $('#fname119').val()}, 
			function(data){
				$('#response119').html(data);
			}
		);
		
	});

});