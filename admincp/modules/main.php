<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlydanhmucsanpham' && $query=='them'){
					include("modules/quanlydanhmucsp/them.php");
					include("modules/quanlydanhmucsp/lietke.php");
				}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
					include("modules/quanlydanhmucsp/sua.php");
				}if($tam=='quanlyhieusp' && $query=='them'){
					include("modules/quanlyhieusp/them.php");
					include("modules/quanlyhieusp/lietke.php");
				}elseif ($tam=='quanlyhieusp' && $query=='sua') {
					include("modules/quanlyhieusp/sua.php");
				}
				
				
				elseif ($tam=='quanlysp' && $query=='them') {
					include("modules/quanlysp/them.php");
					include("modules/quanlysp/lietke.php");
				}elseif($tam=='quanlysp' && $query=='sua'){
					include("modules/quanlysp/sua.php");
				}
				elseif($tam=='thongke' && $query=='lietke'){
					include("modules/thongke/lietke.php");
					include("modules/thongke/lietkedanhmuc.php");
				
					include("modules/thongke/lietkesanpham.php");
				}
				elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/mainlietke.php");
				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");
				}elseif($tam=='quanlyuser' && $query=='them'){
					include("modules/quanlyuser/them.php");
					include("modules/quanlyuser/lietke.php");
				}elseif($tam=='quanlyuser' && $query=='sua'){
					include("modules/quanlyuser/sua.php");
				}elseif(($tam=='timkiem')&&($query=='sp')){
						
					include('modules/timkiem/timkiem.php');
				}
				elseif(($tam=='timkiemdh')&&($query=='spdh')){
						
					include('modules/quanlydonhang/lietke.php');
				}
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>