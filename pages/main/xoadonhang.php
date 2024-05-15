<?php
include('../../admincp/config/config.php');
if(isset($_GET['xoadon'])){
$id=$_GET['xoadon'];
$sql = "SELECT * FROM tbl_cart WHERE code_cart = '$id' LIMIT 1";
$query = mysqli_query($mysqli,$sql);

$sql_xoa = "DELETE FROM tbl_cart WHERE code_cart='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header('Location:../../index.php?quanly=thaydoimatkhau');

}
?>