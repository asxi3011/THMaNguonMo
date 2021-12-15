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
			if($tam=='quanlydonhang' && $query=='lietke'){
				include("modules/quanlydonhang/lietke.php");
			}elseif($tam=='donhang' && $query=='xemdonhang'){
				include("modules/quanlydonhang/xemdonhang.php");
			}
			else{
				include("modules/dashboard.php");
			}
	?> 
	
</div>