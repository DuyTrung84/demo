<?php 
    // session_start();
    /*
    * Định nghĩa các url cần thiết được sử dụng trong website
    */
    $ROOT_URL = "/xshop";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL = "$ROOT_URL/site";

    $IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/img";


    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }

    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }


       

?>