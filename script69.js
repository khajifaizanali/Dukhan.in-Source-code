$(document).ready(function(){

	$('#formsubmit69').click(function(){
		$.post("submit69.php", 
			{fname: $('#fname69').val()}, 
			function(data){
				$('#response69').html(data);
			}
		);
		
	});

});