<?php
@session_start();
	
	//include('dbcon.php');
if(@strtolower($_POST['code']) == strtolower($_SESSION['random_number']))
			{
				
				echo 1;// submitted 
				$sub = 1;
			}
		else
			{
				echo 0; // invalid code
				$sub = 0;
			}
?>