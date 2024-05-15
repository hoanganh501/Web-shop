<p>Liệt kê đơn hàng</p>
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_cart,tbl_dangky,tbl_sanpham WHERE tbl_cart.id_khachhang=tbl_dangky.id AND tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart=tbl_cart.code_cart ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<form action="index.php?action=timkiemdh&query=spdh" method="POST" id="tim">
          <input type="date" name="day1">
          <b>đến ngày</b>
          <input type="date" name="day2">
					<input type="submit" name="timkiemdonhang" value="Tìm kiếm">
				</form>
<table style="width:100%" border="1" style="border-collapse: collapse;" class="donhang2">
  <tr>
  	
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>username</th>
    <th>Tên khách hàng</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng chờ xử lý</a>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
    </td>
   	<td>
   		<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<style>
  #lk21{
    margin-left:20px;
    padding: 5px;
    margin-top: 100px;
    border:none;
  }
  .donhang2 tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .donhang2 tr td{
    border-radius: 6px;
    text-align: center;
    color:brown;
    background-color:white;

  }
</style>