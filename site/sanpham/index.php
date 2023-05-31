<?php
require_once "../../global.php";
require "../inc/require.php";

extract($_REQUEST);
if(exist_param("chi-tiet")){
    if (isset($_GET['ma_hh'])) {
        $ma_sp=$_GET['ma_hh'];
    }
$VIEW_NAME = "sanpham/chi-tiet.php";

$product=hang_hoa_select_by_id($ma_hh);
}
else if(exist_param("categories")){
 $VIEW_NAME = "hang-hoa/categories.php";
}
else{
 $VIEW_NAME = "trang-chinh";
}
$i=0;



require "../layout.php";
?>