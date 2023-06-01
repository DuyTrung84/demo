<?php
require_once "../../global.php";
require "../inc/require.php";

extract($_REQUEST);
if(exist_param("chi-tiet-ui")){
    if (isset($_GET['ma_hh'])) {
        $ma_hh=$_GET['ma_hh'];
        $hang_hoa = hang_hoa_select_by_id($ma_hh);
        extract($hang_hoa);
        hang_hoa_tang_so_luot_xem($ma_hh);
        $VIEW_NAME = "sanpham/chi-tiet-ui.php";

        $product=hang_hoa_select_by_id($ma_hh);
    }
    
}
// else if(exist_param("categories")){
//  $VIEW_NAME = "hang-hoa/categories.php";
// }
else{
 $VIEW_NAME = "trang-chinh";
}
$i=0;



require_once "../layout.php";
?>
