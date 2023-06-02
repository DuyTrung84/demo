<?php
require_once "../../global.php";
require_once "../../dao/thongke.php";

extract($_REQUEST);

if(exist_param("chart", $_REQUEST)){
    $items=thong_ke_hang_hoa();
    $VIEW_NAME = "chart.php";
}
else{
    $items=thong_ke_hang_hoa();
    $VIEW_NAME = "thongke.php";
}
require "./../layout.php";
?>
