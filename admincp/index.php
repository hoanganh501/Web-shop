
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	<style>
		
       .clear{
	        clear: both;
        }
        h3.title_admin {
            text-align: center;
            font-size: 40px;
            color: black;
        }
		
        .wrapper{
	        border:1px solid #999;
	        height: auto;
	        width: 95%;
	        margin:0 auto;
			background-color:#999;
			box-shadow: 0px 0px 20px 0px black;
        }
	</style>
</head>
<?php
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:login.php');
 }
?>
<body>
	<h3 class="title_admin">Trang Admin đồ án web 2</h3>
	<div class="wrapper">
	<?php 
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
	</div>

</body>
</html>