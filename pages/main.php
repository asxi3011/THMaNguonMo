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
               else{
                  include("main/index.php");
               }

               ?>
			</div>
</div>