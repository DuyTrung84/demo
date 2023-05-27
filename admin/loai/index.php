<?php
require_once "../../global.php";
require "../../dao/loai.php";
extract($_REQUEST);
if(exist_param("btn_insert")){
$VIEW_NAME = "loai/in_loai.php";
}
else if(exist_param("btn_update")){
 $VIEW_NAME = "loai/ed_loai.php";
}
else if(exist_param("btn-delete")){
 $VIEW_NAME = "loai/loai.php";
}
else if(exist_param("btn_edit")){
 $VIEW_NAME = "loai/ed_loai.php";
}
else{
 $VIEW_NAME = "loai/loai.php";
}


if(exist_param("btn_insert")){
    $VIEW_NAME = "loai/in_loai.php";
    if(exist_param("btn-insert")){
        try {
        
            $ten_loai=$_POST['ten_loai'];
            loai_insert($ten_loai);
        
            unset($ten_loai,$ma_loai);
            $MESSAGE = "Thêm mới thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
        }
        $VIEW_NAME = "loai/loai.php";
    }
} 
else if(exist_param("btn_update")){
    try {
        $ma_loai=$_GET['ma_loai'];
        $ten_loai=$_POST['ten_loai'];
        loai_update($ma_loai, $ten_loai);
        
    $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "loai/loai.php";
}
else if(exist_param("btn_delete")){
    try {
       
    loai_delete($ma_loai);
    
    $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
    $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "loai/loai.php";
}
else if(exist_param("btn_edit")){
    $info_loai = loai_select_by_id($ma_loai);
    extract($info_loai);
     
    $VIEW_NAME = "loai/ed_loai.php";
}
else{
    $VIEW_NAME = "loai/loai.php";
}

require "./../layout.php";
?>