<?php
require_once '../../global.php';
require '../../dao/hanghoa.php'; 
require '../../dao/loai.php';
extract($_REQUEST);
if(exist_param("btn_insert")){
    $VIEW_NAME = "hang-hoa/in_hanghoa.php";
}
else if(exist_param("btn_update")){
    $VIEW_NAME = "hang-hoa/ed_hanghoa.php";
}
else if(exist_param("btn-delete")){
 $VIEW_NAME = "hang-hoa/hanghoa.php";
}
else if(exist_param("btn_edit")){
 $VIEW_NAME = "hang-hoa/ed_hanghoa.php";
}
else{
 $VIEW_NAME = "hang-hoa/hanghoa.php";
}


if(exist_param("btn_insert")){
    $VIEW_NAME = "hang-hoa/in_hanghoa.php";
    if(exist_param("btn-insert")){
    try {
        $ten_hh=$_POST['ten_hh'];
        $don_gia=$_POST['don_gia'];
        $giam_gia=$_POST['giam_gia'];
        $so_luot_xem=$_POST['so_luot_xem'];
        $mo_ta=$_POST['mo_ta'];
        $ma_loai=$_POST['ma_loai'];
                 
        $up_hinh = save_file("img", "$IMAGE_DIR/");
        
        hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$up_hinh,$so_luot_xem,$mo_ta,$ma_loai);
       
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "hang-hoa/hanghoa.php";
    }
    
    
}
else if(exist_param("btn_update")){
    try {
        $ma_hh=$_POST['ma_hh'];
        $ten_hh=$_POST['ten_hh'];
        $don_gia=$_POST['don_gia'];
        $giam_gia=$_POST['giam_gia'];
        $so_luot_xem=$_POST['so_luot_xem'];
        $mo_ta=$_POST['mo_ta'];
        $ma_loai=$_POST['ma_loai'];
                 
        $up_hinh = save_file("img", "$IMAGE_DIR/");
        
        hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$up_hinh,$so_luot_xem,$mo_ta,$ma_loai);
        
    $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "hang-hoa/hanghoa.php";
}
else if(exist_param("btn_delete")){
    try {
        hang_hoa_delete($ma_hh);
    
    $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "hang-hoa/hanghoa.php";
}
else if(exist_param("btn_edit")){
    $info_hh=hang_hoa_select_by_id($ma_hh);
    extract($info_hh);
    $VIEW_NAME = "hang-hoa/ed_hanghoa.php";
    
    
}
else{
    $VIEW_NAME = "hang-hoa/hanghoa.php";
}
require "./../layout.php";
?>