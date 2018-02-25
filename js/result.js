$('#res_show').click(function()
{
	var res_class = $('#res_class option:selected').val();
	var res_sec = $('#res_sec option:selected').val();

	var table_name= res_class + "_"+res_sec;
	alert(table_name);
	
	$.ajax(
	{
		type: 'post',
		url: '../php/result_db.php',
		data: {table_name: table_name},
		success: function()
		{
			//$('#msg_status').hide().fadeIn(1000).html("thanks " + name + ", for contacting us.<br>Your feedback/review has been submitted in our database.<br>We will respond to you soon. ");
		}
	});

});
			
		