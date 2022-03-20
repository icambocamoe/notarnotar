<?php
     $dbhost = 'localhost';
     $dbuser = 'id17453766_jeju';
     $dbpass = 'YJS!YekPbnoMG48^';
     $db = "id17453766_empresa";
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
     
/*$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);*/

if (!$conn) {
	echo "Connection failed!";
}