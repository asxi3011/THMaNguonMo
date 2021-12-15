<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdministratorCP</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<body>
    <h3 class="title_admin">Welcom to Admincp</h3>
    <div class="wrapper">
    <?php
			// session_start();
			include("config/connect.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
    </div>    
</body>
</html>