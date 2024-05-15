	<div class="main">
		<div class="content-left">
			<?php
			include("sidebar/sidebar.php"); 
			?>
		</div>
			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='hieusp'){
					include("main/hieusp.php");
				}elseif($tam=='giohang'){
					include("main/giohang.php");
				}elseif($tam=='tintuc'){
					include("main/tintuc.php");
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='sanpham'){
					include("main/sanpham.php");	
				}elseif($tam=='dangky'){
					include("main/dangky.php");
				}elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='xulydangnhap'){
					include("main/xulydangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='camon'){
					include("main/camon.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}else{
					include("main/index.php");
				}
				?>
			</div>

		</div>

		<style>
			#main{
				height:600px;
			}
			.maincontent{
				height:400px;
			}
		</style>