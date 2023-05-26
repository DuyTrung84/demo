<?php
require_once "../../global.php";
require "../../dao/binhluan.php";
extract($_REQUEST);
if(exist_param("btn-delete")){
 $VIEW_NAME = "binh-luan/binhluan.php";
}
else{
 $VIEW_NAME = "binh-luan/binhluan.php";
}
require "./../layout.php";
?>