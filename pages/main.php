<div id="main">
            <div class="maincontent">
                  <?php
               if(isset($_GET['quanly'])){
                  $tam=$_GET['quanly'];
               }else{
                  $tam='';
               }
               if($tam=='camon'){
                  include("main/camon.php");
               }
               elseif($tam=='dangky'){
                  include("main/dangky.php");
               }
               else{
                  include("main/trangchu.php"); 
               }
               
               ?>
			</div>
</div>