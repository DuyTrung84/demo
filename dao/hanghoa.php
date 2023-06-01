<?php
    require_once 'pdo.php';
    function hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$hinh,$so_luot_xem,$mo_ta,$ma_loai){
        $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh,so_luot_xem,mo_ta,ma_loai) VALUES(?,?,?,?,?,?,?)";
        pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$so_luot_xem,$mo_ta,$ma_loai);
       }
       function hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$so_luot_xem,$mo_ta,$ma_loai){
        $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,mo_ta=?,so_luot_xem=?,ma_loai=? WHERE ma_hh=?";
        pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$mo_ta,$so_luot_xem,$ma_loai,$ma_hh);
       }
       function hang_hoa_delete($ma_hh){
        $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
        if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_hh);
        }
       }
       function hang_hoa_select_all(){
        $sql = "SELECT * FROM hang_hoa";
        return pdo_query($sql);
       }
       function hang_hoa_tang_so_luot_xem($ma_hh){
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
       }
       function hang_hoa_select_all_with_loai(){
        $sql = "SELECT hang_hoa.ma_hh, hang_hoa.ten_hh, hang_hoa.don_gia, hang_hoa.giam_gia, hang_hoa.hinh, hang_hoa.so_luot_xem, hang_hoa.mo_ta, loai_hang.ten_loai 
                FROM hang_hoa
                JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai";
        return pdo_query($sql);
    }
       function hang_hoa_select_by_id($ma_hh){
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
       }
       function san_pham_select_all_view(){
        $sql = "SELECT * FROM hang_hoa order by so_luot_xem desc";
        return pdo_query($sql);
       }
       function hang_hoa_exist($ma_loai){ 
        $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_value($sql, $ma_hh) > 0;
       }

                            
?>