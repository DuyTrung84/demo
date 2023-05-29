<?php
    require "../bootstrap/bootstrap.php";
	require_once "../../global.php";
	require "../../dao/binhluan.php";
?>
    <form method="POST" action="">
        <?php
            
            // $noi_dung = binh_luan_select_by_id($ma_bl);
        ?>
			<div class="form-group">
				<label for="comment">Bình luận</label><br>
				<textarea class="form-control" name="noi_dung" rows="3" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary" name="btn_ed">Gửi bình luận</button>
        <?php
            if (isset($_POST['btn_ed'])) {
                $ma_tk = $_SESSION['user']['ma_tk'];
                $noi_dung=$_POST['noi_dung'];
                binh_luan_update($noi_dung, $ma_tk);
                // header('Location: index.php?chi-tiet&ma_hh=1');
                echo "<script>location.href = '$SITE_URL/sanpham/index.php?chi-tiet&ma_hh=1';</script>";
            }
        ?>    
		</form>