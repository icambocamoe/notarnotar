<?php
function OpenCon()
     {
     $dbhost = 'localhost';
     $dbuser = 'id17453766_jeju';
     $dbpass = 'YJS!YekPbnoMG48^';
     $db = "id17453766_empresa";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>