<style>
    button{
		float:right;
		
		height: 20px;
		
	}
</style>

<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<button><a href="index.php?dangxuat=1">Đăng xuất<?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></button>