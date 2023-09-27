<div class="clear"></div>
<div class="main">
<?php
            if(isset($_GET['action'])){
                $tam = $_GET['action'];
                if($tam == "quanlydanhmucsanpham"){
                    include("modules/quanlydanhmucsp/them.php");
                }
            }else{
                $tam = '';
                include("modules/dashboard.php");
            }           
        ?>   
</div>