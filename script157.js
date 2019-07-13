$(document).ready(function(){

	$('#formsubmit157').click(function(){
		$.post("submit157.php", 
			{fname: $('#fname157').val()}, 
			function(data){
				$('#response157').html(data);
			}
		);
		
	});

});