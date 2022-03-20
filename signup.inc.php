<?php	
	include "db_conn.php";
//	$con = OpenCon();

	if ($conn)
	
//	$first = $_POST['first'];
//	$last = $_POST['last'];
//	$email = $_POST['email'];

    $name = $_POST['name'];
	$user = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql ="INSERT INTO users (user_name, password, name)  VALUES ('$user', '$pwd', '$name');";
	if (mysqli_query($conn, $sql)===true)
	header("Location: ../index.php?");
	else
	echo "no charcha";
	
//	header("Location: ../index.php?error=Error");
	
