<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	    body{
	        background-image: url('reinassence.jpg');
	    }
	</style>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

     <a href="notar.php">Expediente</a>
     <p><br></p>
     <a href="consulta.php">Consulta</a>
     <p><br></p>
     <a href="modificar.php">Modificar</a>
     <p><br></p>
     <a href="admin.user.php">Administrar usuarios</a>
     <p><br></p>
     <a href="logout.php">Logout</a> 
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>