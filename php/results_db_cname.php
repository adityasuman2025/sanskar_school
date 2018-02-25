<?php
	$mysql_host= "localhost";
	$mysql_user = "sanska14_mngo";
	$mysql_pass = "palabi125.";

	$mysql_db = "sanska14_result";

	//taking from ajax from result.js
	$table_name = htmlentities($_POST['table_name']);
	
	if(@mysql_connect($mysql_host, $mysql_user, $mysql_pass) && @mysql_select_db($mysql_db))
	{
		//echo 'data not available! please enter correct information <br>';	

		$query_column= "SELECT column_name AS cname FROM information_schema.Columns WHERE table_name =  '$table_name'";
		
		if($query_run_cname = @mysql_query($query_column))
		{
			while($query_row_cname = @mysql_fetch_assoc($query_run_cname))
			{
				$column_name = $query_row_cname['cname'];
				echo $column_name ."<br>";
			}

		}
		else
		{
			echo 'failed <br>';
		}
	}
	else
	{
		echo 'failed to connect';
	}

?>