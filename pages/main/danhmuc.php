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
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC LIMIT $begin,8";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục sản phẩm : <?php echo $row_title['tendanhmuc'] ?></h3>
				<ul class="product_list">
					<?php
					while($row_pro = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row_pro['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
						</a>
					</li>
					<?php
					} 
					?>
					
				</ul>
				<div style="clear:both;"></div>

				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
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
			<a href="danhmuc.php?trang1=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
	<?php
	} 
	?>
	
</ul>