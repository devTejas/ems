<?php
DEFINE ('DB_USER', 'EmployeeDB');
DEFINE ('DB_PASSWORD', 'employee');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'employees');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>