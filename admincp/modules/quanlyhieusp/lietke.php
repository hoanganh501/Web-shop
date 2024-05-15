<?php
	$sql_lietke_hieusp = "SELECT * FROM tbl_hieu ORDER BY hieu_id DESC";
	$query_lietke_hieusp = mysqli_query($mysqli,$sql_lietke_hieusp);
?>
<p>Liệt kê hieu san pham</p>
<table style="width:100%" border="1" style="border-collapse: collapse;" class="hieu">
  <tr>
  	<th>Id</th>
    <th>Tên hieu</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_hieusp)){
  	$i++;
  ?>
  <tr>
  
    <td><?php echo $row['hieu_id'] ?></td>
    <td><?php echo $row['tenhieu'] ?></td>
   	<td>
   		<a href="modules/quanlyhieusp/xuly.php?hieuid=<?php echo $row['hieu_id'] ?> ">Xoá</a> | <a href="?action=quanlyhieusp&query=sua&hieuid=<?php echo $row['hieu_id'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<style>
  p{
    margin-left:20px;
    padding: 5px;
    margin-top: 60px;
    border:none;
  }
  .hieu tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .hieu tr td{
    border-radius: 6px;
    text-align: center;
    color:brown;
    background-color:white;

  }
</style>
