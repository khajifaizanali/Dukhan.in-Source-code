$(document).ready(function(){

	$('#formsubmit214').click(function(){
		$.post("submit214.php", 
			{fname: $('#fname214').val()}, 
			function(data){
				$('#response214').html(data);
			}
		);
		
	});

});