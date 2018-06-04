<?php
$con = mysqli_connect("mysql://mysql:3306/","test_db_connection","test_db_connection_pwd","test_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	else {
		echo 'connected';
	}
?>