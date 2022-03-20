<?php	

	include "db_conn.php";

    $abo = $_POST['abogadou'];
    $ope = $_POST['oper'];
    $name = $_POST['nome'];
	$last = $_POST['api'];
	$type = $_POST['type'];
	

	 $sql1 = "Select num_expediente from $abo ORDER BY num_expediente DESC LIMIT 1 ;";
        $res=mysqlI_query($conn,$sql1);
         $row = $res->fetch_assoc();
          $return= $row['num_expediente'];
          
          if ($return==NULL)
          $return = 1;
          else
          $return = $return +1;
	

$year = date("Y");  
$month = date("m"); 
$day = date("d"); 
	$sql ="INSERT INTO $abo (year,day,month) VALUES ($year,$day,$month);";
	$sql2 ="INSERT INTO operacion (num_expediente,abogado,operacion) VALUES ($return,'$abo','$ope');";
	$sql3 ="INSERT INTO otorgante (abogado,expediente,nombre,apellido,tipo) VALUES ('$abo',$return,'$name','$last','$type');";
	if (mysqli_query($conn, $sql)===true && mysqli_query($conn, $sql2)===true && mysqli_query($conn, $sql3)===true){
	
	    echo'<script type="text/javascript">
    alert("expediente Guardado");
    window.location.href="home.php";
    </script>';
    header("Location: ../home.php?");
	    
	}
	else
	echo "no charcha, $sql3";