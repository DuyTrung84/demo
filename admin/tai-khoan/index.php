<?php
require_once "../../global.php";
require "../../dao/taikhoan.php";
extract($_REQUEST);
if(exist_param("btn_update")){
 $VIEW_NAME = "tai-khoan/ed_taikhoan.php";
}
else if(exist_param("btn-delete")){
 $VIEW_NAME = "tai-khoan/taikhoan.php";
}
else if(exist_param("btn_edit")){
 $VIEW_NAME = "tai-khoan/ed_taikhoan.php";
}
else{
 $VIEW_NAME = "tai-khoan/taikhoan.php";
}

if(exist_param("btn_update")){
    try {
        $ma_tk=$_POST['ma_tk'];
        $email=$_POST['email'];
        $mat_khau=$_POST['mat_khau'];
        $ho_ten=$_POST['ho_ten'];
        $vai_tro=$_POST['vai_tro'];
                 
        $up_hinh = save_file("img", "$IMAGE_DIR/");
        
        tk_update($ma_tk,$email,$mat_khau,$ho_ten,$up_hinh,$vai_tro);
        
    $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "tai-khoan/taikhoan.php";
}
else if(exist_param("btn_delete")){
    try {
        tk_delete($ma_tk);
    $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "tai-khoan/taikhoan.php";
}
else if(exist_param("btn_edit")){
    $info_tk=tk_select_by_id($ma_tk);
    extract($info_tk);
    $VIEW_NAME = "tai-khoan/ed_taikhoan.php";
}
else{
    $VIEW_NAME = "tai-khoan/taikhoan.php";
}
require "./../layout.php";
?>