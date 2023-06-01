<div class="row">
    <?php
        require_once "../../dao/binhluan.php";
        if(exist_param("noi_dung")){
            $ma_tk = $_SESSION['user']['ma_tk'];
            $ngay_bl = date_format(date_create(), 'Y-m-d');
            binh_luan_insert($noi_dung, $ma_hh, $ma_tk, $ngay_bl);
        }
        $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
        foreach($binh_luan_list as $bl){
            echo "<li>$bl[noi_dung] <i><b>$bl[ma_tk]</b>,$bl[ngay_bl]</li></li>";
        }
        if(!isset($_SESSION['user'])){
            echo `<b>Đăng nhập để bình luận về sản phẩm này</b>`;
        } else {
    ?>
        <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
            <input type="text" name="noi_dung"><button>Gửi</button>  
        </form>
        <?php
            }
        ?>
</div>