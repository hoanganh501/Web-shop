<h1 style="text-align:center;">Thống kê Doanh thu sản phẩm</h1>
<h2 style="text-align:center;">Theo sản phẩm</h2> 
  <form action="" method="POST" id="form1">
  <input type="date" name="from">
  <b>đến ngày</b>
  <input type="date" name="to">

  <select name="chonsp" class="csp">
  <option>Select</option>
  <?php 
  $sqlthongke1="SELECT * FROM tbl_sanpham";
  $querythongke1=mysqli_query($mysqli,$sqlthongke1);
  while($row1=mysqli_fetch_array($querythongke1)){
    ?>
    <option value="<?php echo $row1['id_sanpham'];?>"><?php echo $row1['tensanpham'];?></option>

    <?php
  }
  ?>
  </select>
  <button input type="submit" name="submit" class="submit">Filter</button>
</form>
 
  
 <table class="tablethongke1" border="1"style="width:100%" style="border-collapse: collapse;" >
    <tr>
      <th>Tên sản phẩm</th>
      <th>loại sản phẩm</th>
      <th>số lượng bán được</th>
      <th>tổng doanh thu</th>
    </tr>
  <?php
    if(isset($_POST['from']) && isset($_POST['to'])){
    $sanpham = $_POST['chonsp'];
    
    $fromday= $_POST['from'];
	  $today= $_POST['to'];

    
    $sqlthongke="SELECT *,sum(cart_thanhtien) AS doanhthu, SUM(soluongmua) AS soluongban FROM ((tbl_cart_details INNER JOIN tbl_cart ON tbl_cart_details.code_cart=tbl_cart.code_cart) INNER JOIN tbl_sanpham ON tbl_sanpham.id_sanpham=tbl_cart_details.id_sanpham) WHERE tbl_cart.cart_status='0' AND tbl_sanpham.id_sanpham='".$sanpham."' AND tbl_cart.ngaymua between'".$fromday."' and '".$today."'  ";
    $querythongke=mysqli_query($mysqli,$sqlthongke);
    $count=mysqli_num_rows($querythongke);
    if($count>0){
     
    foreach($querythongke as $row){
      ?>
      <tr>
      <td><?php echo $row['tensanpham']?></td>
      <td><?php echo $row['id_sanpham']?></td>
      <td><?php echo $row['soluongban']?></td>
     <td><?php echo $row['doanhthu']?></td>
     
 
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
  #form1{
    margin-left: 470px;
  }
  .csp{
    width:90px;

  }
  .submit{
    border-radius: 2px;
    background-color:brown;
    margin-right:460px ;
    color: white;
  
  }
  .tablethongke1 tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .tablethongke1 tr td{
    border-radius: 2px;
    text-align: center;
    color:brown;
    background-color:white;

  
  }
  
  </style>






