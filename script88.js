$(document).ready(function(){

	$('#formsubmit').click(function(){
		$88.post("submit88.php", 
			{fname: $('#fname88').val()}, 
			function(data){
				$('#response88').html(data);
			}
		);
		
	});

});