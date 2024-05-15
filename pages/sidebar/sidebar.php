
				<p class="list_sidebar">Loai</p>
				<ul>
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
					<?php

					} 
					?>
					
				</ul>
				<p class="list_sidebar">Hieu</p>
				<ul>
					<?php
	
						$sql_hieu = "SELECT * FROM tbl_hieu ORDER BY hieu_id DESC";
						$query_hieu = mysqli_query($mysqli,$sql_hieu);
						while($row = mysqli_fetch_array($query_hieu)){
						    		
					?>
					<li><a href="index.php?quanly=hieusp&id=<?php echo $row['hieu_id'] ?>"><?php echo $row['tenhieu'] ?></a></li>
					<?php

					} 
					?>
					
				</ul>
		