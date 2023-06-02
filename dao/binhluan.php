<?php
    require_once 'pdo.php';
    function binh_luan_insert($noi_dung, $ma_hh, $ma_tk, $ngay_bl){
        $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_tk, ngay_bl) VALUES(?,?,?,?)";
        pdo_execute($sql, $noi_dung, $ma_hh, $ma_tk, $ngay_bl);
       }
       function binh_luan_update($ma_tk, $noi_dung){
        $sql = "UPDATE binh_luan SET noi_dung=? WHERE ma_tk=?";
        pdo_execute($sql, $noi_dung, $ma_tk);
       }
       function binh_luan_delete($ma_bl){
        $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_bl);
        }
       }
       function binh_luan_select_all(){
        $sql = "SELECT * FROM binh_luan";
        return pdo_query($sql);
       }
       function binh_luan_select_by_id($ma_bl){
        $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
        return pdo_query_one($sql, $ma_bl);
       }
       function binh_luan_exist($ma_bl){
        $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
        return pdo_query_value($sql, $ma_bl) > 0;
       }
       function binh_luan_select_by_hang_hoa($ma_hh){
        $sql = "SELECT b.*, hh.ten_hh , tk.ho_ten FROM tai_khoan tk JOIN binh_luan b ON tk.ma_tk=b.ma_tk JOIN hang_hoa hh ON hh.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
        return pdo_query($sql, $ma_hh);
       }

                            
?>