$(document).ready(function(){

	$('#formsubmit148').click(function(){
		$.post("submit148.php", 
			{fname: $('#fname148').val()}, 
			function(data){
				$('#response148').html(data);
			}
		);
		
	});

});
