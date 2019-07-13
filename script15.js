$(document).ready(function(){

	$('#formsubmit15').click(function(){
		$.post("submit15.php", 
			{fname: $('#fname15').val()}, 
			function(data){
				$('#response15').html(data);
			}
		);
		
	});

});