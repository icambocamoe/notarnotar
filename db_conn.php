<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = 'root';
     $db = "empresa";
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

/*$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);*/

if (!$conn) {
	echo "Connection failed!";
}
