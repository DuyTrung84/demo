<?php 
    session_start();
    /*
    * Định nghĩa các url cần thiết được sử dụng trong website
    */
    $ROOT_URL = "/duanmau";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL = "$ROOT_URL/site";
    /*
    * Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
    */
    $IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/img";
    /*
    * 2 biến toàn cục cần thiết để chia sẻ giữa controller và view
    */
    $VIEW_NAME = "index.php";
    $MESSAGE = "";


    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
       }
?>