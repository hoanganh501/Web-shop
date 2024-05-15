<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*8)-8;
	}
	
	
?>
<h3>Tất cả sản phẩm</h3>
				<ul class="product_list" id="listsp">
					<?php
					$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_hieu WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc and tbl_sanpham.brand=tbl_hieu.hieu_id AND tbl_sanpham.soluong>0 AND tbl_sanpham.tinhtrang>0 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
	                $query_pro = mysqli_query($mysqli,$sql_pro);
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="title_product">Thương hiệu : <?php echo $row['tenhieu'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
				
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
			<a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
	<?php
	} 
	?>
	
</ul>
	