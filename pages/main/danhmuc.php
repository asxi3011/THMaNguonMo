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