<div class="clear"></div>
<div class="main">

	<?php

			
		if($tam=='quanlydanhmucsanpham' && $query=='them'){
			include("modules/quanlydanhmucsp/them.php");
			include("modules/quanlydanhmucsp/lietke.php");
		}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
			include("modules/quanlydanhmucsp/sua.php");
		else{
			include("modules/dashboard.php");
		}
				
	?> 
	
</div>