$(document).ready(function(){

	$('#formsubmit84').click(function(){
		$.post("submit84.php", 
			{fname: $('#fname84').val()}, 
			function(data){
				$('#response84').html(data);
			}
		);
		
	});

});