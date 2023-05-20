<?php 
    require_once 'pdo.php';
    require_once 'loai.php';
    require_once 'binhluan.php';
    require_once 'hanghoa.php';
    function thong_ke_hang_hoa(){
        $sql= "SELECT lo.ma_loai, lo.ten_loai,"
         "COUNT(*) so_luong,"
         "MIN(sp.don_gia) gia_min,"
         "MAX(sp.don_gia) gia_max,"
         "AVG(sp.don_gia) gia_avg"
         "FROM hang_hoa sp"
         "JOIN loai lo ON lo.ma_loai=sp.ma_loai"
         "GROUP BY lo.ma_loai, lo.ten_loai";
        return pdo_query($sql);

    }
    
?>