<?php

	$db = new mysqli('localhost','root','','erp');

	if(!$db)
	{

			die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected Successfully"

?>