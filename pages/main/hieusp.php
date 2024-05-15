<?php
	if(isset($_GET['trang1'])){
		$page = $_GET['trang1'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*8)-8;
	}
	
	
?>

<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.brand='$_GET[id]' ORDER BY id_sanpham DESC LIMIT $begin,8";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	$sql_cate = "SELECT * FROM tbl_hieu WHERE tbl_hieu.hieu_id='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<h3>Hiệu sản phẩm : <?php echo $row_title['tenhieu'] ?></h3>
				<ul class="brand_list">
					<?php
					while($row_pro = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
							<p class="title_brand">Tên sản phẩm : <?php echo $row_pro['tensanpham'] ?></p>
							<p class="price_brand">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
						</a>
					</li>
					<?php
					} 
					?>
					
				</ul>
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_hieu");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/8);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>   

                 
<ul class="list_trang">
	<?php
	for($i=1;$i<=$trang;$i++){ 
	?>
		<li <?php if($i==$page){
					  //  comment
				  }
			 ?>>
			<a href="hieusp.php?trang1=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
	<?php
	} 
	?>
	
</ul>
<style>				ul.product_list {
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