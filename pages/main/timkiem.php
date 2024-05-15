<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
				<ul class="product_list">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
							<p style="text-align: center;color:#d1d1d1"><?php echo $row['tendanhmuc'] ?></p>
						</a>
					</li>
					<?php
					} 
					?>
				</ul>

				<style>
				</style>
				<style type="text/css">
								ul.product_list {
    padding: 0;
    margin: 4px ;
    list-style: none;
    width: 100%;
}
ul.product_list li img {
    height: 190px;

}
ul.product_list li {
    width: 20%;
    border: 1px solid #000;
    margin: 20px;
    margin-right:30px;
    float: left;
    box-shadow: 0px 2px 10px 0px black;
    background-color: #ddd;
    height: 350px;
}
ul.product_list li a {
    text-decoration: none;
}
ul.product_list li img {
    width: 100%;
}
p.price_product {
    text-align: center;
    color: red;
    font-size: 16px;
    font-weight: bold;
}
p.title_product {
    text-align: center;
    color: #000;
    font-size: 16px;
    font-weight: bold;
}
						ul.list_trang {
						float: center;
					    padding: 0;
					    margin: 0;
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: burlywood;
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					}
					 


				</style>