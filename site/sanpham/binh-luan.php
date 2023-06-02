<div class="row">
    <div class="container mt-3">
        <h2>Bình luận</h2>
        <p>Hãy chia sẻ suy nghĩ của bạn về sản phẩm:</p>
        <?php if(isset($_SESSION['user'])): ?>
            <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                <textarea class="form-control" rows="5" name="noi_dung"></textarea>
                <button class="btn btn-primary">Gửi</button>  
            </form>
        <?php else: ?>
            <b>Đăng nhập để bình luận về sản phẩm này</b>
        <?php endif; ?>

        <h2>Các bình luận khác:</h2>

        <?php
            require_once "../../dao/binhluan.php";
            if(exist_param("noi_dung") && isset($_SESSION['user'])){
                $ma_tk = $_SESSION['user']['ma_tk'];
                $ngay_bl = date_format(date_create(), 'Y-m-d');
                binh_luan_insert($noi_dung, $ma_hh, $ma_tk, $ngay_bl);
            }
        ?>

        <?php
            $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            foreach($binh_luan_list as $bl){
        ?>
            <div class="media border p-3">
                <div class="media-body">
                    <h4><?php echo $bl['ho_ten'] ?><small><i> | Ngày:<?php echo $bl['ngay_bl'] ?></i></small></h4>
                    <p><?php echo $bl['noi_dung'] ?></p>
                </div> 
            </div>    
        <?php
            }
        ?>

    </div>
</div>