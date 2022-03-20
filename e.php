 <?php
        include "db_conn.php";
	$abo = $_POST['value'];
	/*echo $abo;*/

        
            $sql = "Select num_expediente from $abo ORDER BY num_expediente DESC LIMIT 1 ;";
        $res=mysqlI_query($conn,$sql);
         $row = $res->fetch_assoc();
          $return= $row['num_expediente'];
          
          if ($return==NULL)
          $return = 1;
          else
          $return = $return +1;
          
          echo $return;
          /*echo $sql;*/
 ?>