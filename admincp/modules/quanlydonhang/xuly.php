<?php
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE tbl_cart,tbl_sanpham,tbl_cart_details SET tbl_cart.cart_status=0, tbl_sanpham.soluong=(tbl_sanpham.soluong-tbl_cart_details.soluongmua) WHERE tbl_cart.code_cart='".$code_cart."' AND tbl_cart_details.code_cart=tbl_cart.code_cart AND tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham";
		$query = mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	} 
?>