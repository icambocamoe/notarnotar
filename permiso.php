<?php	

	include "db_conn.php";

    $user = $_POST['user'];
    $code = $_POST['code'];
	

	$sql ="UPDATE users SET permiso = '$code' WHERE user_name = '$user';";
	$r=mysqli_query($conn, $sql);
	if ($r){
	
             
	
    if(mysqli_fetch_array($r)!==NULL){
    echo'<script type="text/javascript">
    alert("usuario actualizado");
    window.location.href="home.php";
    </script>';}
   
   else{
	echo'<script type="text/javascript">
    alert("no such user");
    window.location.href="home.php";
    </script>';
   }
	
    header("Location: ../home.php?");
	    
	}
	else
	echo "no charcha, $sql";