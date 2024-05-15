

<p>Tài Khoản của bạn</p>
<style type="text/css">
	 
</style>
<?php 
$sql = mysqli_query($mysqli,"SELECT * FROM tbl_dangky WHERE id='$_SESSION[id_khachhang]' LIMIT 1");
while($row=mysqli_fetch_array($sql)){

?>
<form action="" method="POST" class="dangky">

    
		<label><b>username</b></label>
		<input type="text" size="50" name="username" style="" value="<?php echo $row['username'] ?>">
	
	
		<label><b>Họ và tên</b></label>
		<input type="text" size="50" name="hovaten" value="<?php echo $row['hoten'] ?>">
	
	
		<label><b>Mật khẩu</b></label>
		<input type="password" size="50" name="matkhau" value="<?php echo $row['matkhau'] ?>">
	
	
		<label><b>Email</b></label>
		<input type="text" size="50" name="email" value="<?php echo $row['email'] ?>">

	
		<label><b>Điện thoại</b></label>
		<input type="text" size="50" name="dienthoai" value="<?php echo $row['dienthoai'] ?>">
	
	
		
		<input type="submit" name="thaydoi" value="Thay đổi">
	


</form>
<?php 
}
?>


<?php
	if(isset($_POST['thaydoi'])) {
		$regisuser = ($_POST['username']);
		$regishoten = ($_POST['hovaten']);
		$regispass =md5($_POST['matkhau']);
		$regisemail =($_POST['email']);
		$regissdt =($_POST['dienthoai']);
		$trangthai=1;
		$regispass=md5($regispass);
		$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
		$role = 'user';
		if($regisuser==""){
			echo '<p style="color:red">Bạn chưa nhập tên tài khoản</p>';
		}
		elseif($regishoten==""){
			echo '<p style="color:red">Bạn chưa nhập tên</p>';
		}
		elseif($regispass==""){
			echo '<p style="color:red">Bạn chưa nhập password</p>';
		}
		elseif($regisemail==""){
			echo '<p style="color:red">Bạn chưa nhập email</p>';
		}
		elseif(!preg_match($regex,$regisemail)){
			echo '<p style="color:red">email chưa đúng định dạng</p>';
		}
		elseif($regissdt==""){
			echo '<p style="color:red">Bạn chưa nhập số diện thoại</p>';
		
		}
		elseif(preg_match("((09|03|07|08|05)+([0-9]{8})\b)",$regissdt)==false) {
			echo '<p style="color:red">số diện thoại chưa đúng định dạng</p>';
		  }
		else{
			$sql2="select * from tbl_dangky where username='$regisuser'";
				$kt=mysqli_query($mysqli, $sql2);

				if(mysqli_num_rows($kt)>0){
					echo '<p style="color:red">username đã tồn tại</p>';
				}
		
		else{
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET username='".$regisuser."',hoten='".$regishoten."',matkhau='".$regispass."',email='".$regisemail."',dienthoai='".$regissdt."' WHERE id='$_SESSION[id_khachhang]'");
			
			echo '<p style="color:green">Tài khoản đã được thay đổi.</p>';
		}
		}
		
	}
?>



<p>Lịch sử mua hàng</p>
<?php
if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_lietkeuser_dh = "SELECT tbl_dangky.username,tbl_dangky.hoten,tbl_sanpham.tensanpham,tbl_cart.id_khachhang,tbl_cart.cart_status,tbl_cart.code_cart,tbl_cart_details.soluongmua,tbl_cart_details.cart_thanhtien,tbl_cart_details.cart_date FROM tbl_dangky,tbl_sanpham,tbl_cart,tbl_cart_details WHERE tbl_cart.id_khachhang='$_SESSION[id_khachhang]' AND tbl_cart.id_khachhang=tbl_dangky.id AND tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart.code_cart=tbl_cart_details.code_cart ORDER BY tbl_cart_details.cart_date DESC";
	$query_lietkeuser_dh = mysqli_query($mysqli,$sql_lietkeuser_dh);
?>

<table class="lichsumuahang" style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>username</th>
    <th>Tên khách hàng</th>
    <th>tên sản phẩm</th>
    <th>số lượng mua</th>
    <th>giá tiền</th>
    <th>ngày mua</th>
	<th>tinh trang</th>
    
  
  </tr>
  <?php
  while($row = mysqli_fetch_array($query_lietkeuser_dh)){
  
  ?>
  <tr>
    
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo $row['cart_thanhtien'] ?></td>
	<td><?php echo $row['cart_date'] ?></td>
	<td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="pages/main/xoadonhang.php?xoadon='.$row['code_cart'].'" style="color:red"><p style="color:red"> Xóa Đơn hàng</p> </a>';
    	}else{
    		echo '<p style="color:green">Đã xử lý</p>';
    	}
    	?>
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>

<style>
	.lichsumuahang {
		margin-top:15px;
		text-align: center;
	}
	.lichsumuahang tr th {
		
		background-color:darkgray;
	}
	.dangky input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;

	
	cursor: pointer;
	background: linear-gradient(#751700, #1b1717);
	color: antiquewhite;
}
    .dangky input[type='submit'] :hover {
	cursor: pointer;
	color: black;
}
.dangky label {
	display: block;
	font-weight: lighter;
}
.dangky input[name='username'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: antiquewhite;
}
.dangky input[name='username'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: antiquewhite;
}
.dangky input[name='hovaten'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: antiquewhite;
}
.dangky input[name='email'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	
	background-color: antiquewhite;
}
.dangky input[name='matkhau'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	padding: 5px;
	width: 30%;
	background-color: antiquewhite;
}
.dangky input[name='dienthoai'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: antiquewhite;
}
.dangky input[type='text'] {
	padding: 5px;
	width: 30%;
}

     
</style>