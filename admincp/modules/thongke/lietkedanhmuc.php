
  

  
<h1 style="text-align:center;">Thống kê Danh mục</h1>
<h2 style="text-align:center;">Theo Danh mục</h2> 
  <form action="" method="POST" id="form2">
  <input type="date" name="from2">
  <b>đến ngày</b>
  <input type="date" name="to2">

  <select name="chondanhmuc" class="cdm">
  <option>Select</option>
  <?php 
  $sqlthongke2="SELECT * FROM tbl_danhmuc";
  $querythongke2=mysqli_query($mysqli,$sqlthongke2);
  while($row2=mysqli_fetch_array($querythongke2)){
    ?>
    <option value="<?php echo $row2['id_danhmuc'];?>"><?php echo $row2['tendanhmuc'];?></option>

    <?php
  }
  ?>
  </select>
  <button input type="submit" name="submit2" class="submit2">Filter</button>
</form>
 
  
 <table class="tablethongke2" border="1" style="width:100%" style="border-collapse: collapse;">
    <tr>
      <th>Tên danh mục</th>
      <th>Tên sản phẩm</th>
      <th>số lượng bán được</th>
      <th>tổng doanh thu</th>
      <th>số lượng còn lại</th>
    </tr>
  <?php
    if(isset($_POST['from2']) && isset($_POST['to2'])){
    $danhmuc = $_POST['chondanhmuc'];
    
    $fromday2= $_POST['from2'];
	  $today2= $_POST['to2'];

    
    $sqlthongke2="SELECT *,sum(cart_thanhtien) AS doanhthu, SUM(soluongmua) AS soluongban FROM ((tbl_cart_details INNER JOIN tbl_cart ON tbl_cart_details.code_cart=tbl_cart.code_cart) INNER JOIN tbl_danhmuc ON tbl_danhmuc.id_danhmuc=tbl_cart_details.id_danhmuc) WHERE tbl_cart.cart_status='0' AND tbl_danhmuc.id_danhmuc='".$danhmuc."' AND tbl_cart.ngaymua between'".$fromday2."' and '".$today2."'  ";
    $querythongke2=mysqli_query($mysqli,$sqlthongke2);
    $count=mysqli_num_rows($querythongke2);
    if($count>0){
     
    foreach($querythongke2 as $row2){
      ?>
      <tr>
      <td><?php echo $row2['tendanhmuc']?></td>
      <td><?php echo $row2['id_danhmuc']?></td>
      <td><?php echo $row2['soluongban']?></td>
     <td><?php echo $row2['doanhthu']?></td>
     <td><?php echo $row2['soluong']?></td>
     
 
      </tr>
     <?php
    }
    }else{
      echo'không có kết quả';
    }
  }
    ?>
  </table>


  <style>
  h1{
    margin-top:40px;
  
    font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
  }
  h2{
    margin-top:40px;
   
    font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
  }
  #form2{
    margin-left: 470px;
  }
  .cdm{
    width:90px;

  }
  .submit2{
    margin-right:460px ;
    border-radius: 2px;
    background-color:brown;
    color: white;
  
  }
  .tablethongke2 tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .tablethongke2 tr td{
    border-radius: 2px;
    text-align: center;
    color:brown;
    background-color:white;

  
  }
  
  </style>





