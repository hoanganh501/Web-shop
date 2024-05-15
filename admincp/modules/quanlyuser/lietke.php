<h3 id="lk5">Liệt kê Danh sách người dùng</h3>
<?php
	$sql_lietkeuser_dh = "SELECT * FROM tbl_dangky";
	$query_lietkeuser_dh = mysqli_query($mysqli,$sql_lietkeuser_dh);
?>

<table style="width:100%" border="1" style="border-collapse: collapse;" class="nd">
  <tr>
  	<th>Id</th>
    <th>username</th>
    <th>Tên khách hàng</th>
    <th>password</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>ROLE</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  while($row = mysqli_fetch_array($query_lietkeuser_dh)){
  
  ?>
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['matkhau'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    <?php if($row['Status']==0){
    		echo 'banned';
    	}else{
    		echo 'ACtive';
    	}
    	?>
    </td>
    <td>
    <?php if($row['ROLE']=='user'){
    		echo 'user';
    	}else{
    		echo 'admin';
    	}
    	?>
    </td>
    <td>
   		<a href="modules/quanlyuser/xuly.php?iduser=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlyuser&query=sua&iduser=<?php echo $row['id'] ?>">Sửa</a> 
   	</td>
   
   
  </tr>
  <?php
  } 
  ?>
 
</table>

<style>
    #lk5{
    margin-left:20px;
    padding: 5px;
    margin-top: 100px;
    border:none;
  }
  .nd tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .nd tr td{
    border-radius: 2px;
    text-align: center;
    color:brown;
    background-color:white;

  }
</style>
</style>