<?php
    require "../bootstrap/bootstrap.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="../img/hinh-nen-may-tinh (4).png" alt="Product image" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2><?php echo $product['ten_hh']?></h2>
            <p class="text-muted"><?php echo $product['mo_ta']?></p>
            <h3>Giá: $<?php echo $product['don_gia']?></h3>
            <p class="text-muted">Số lượt mua: <?php echo $product['so_luot_xem']?></p>
            <button class="btn btn-primary">Mua hàng</button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h4>Thông tin chi tiết sản phẩm</h4>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Thương hiệu</th>
                        <td>Samsung</td>
                    </tr>
                    <tr>
                        <th scope="row">Màn hình</th>
                        <td>6.4 inch, Super AMOLED, Full HD+</td>
                    </tr>
                    <tr>
                        <th scope="row">Camera sau</th>
                        <td>Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP</td>
                    </tr>
                    <tr>
                        <th scope="row">Camera trước</th>
                        <td>32 MP</td>
                    </tr>
                    <tr>
                        <th scope="row">CPU</th>
                        <td>Exynos 9611 8 nhân</td>
                    </tr>
                    <tr>
                        <th scope="row">RAM</th>
                        <td>6 GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Bộ nhớ trong</th>
                        <td>128 GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Pin</th>
                        <td>4000 mAh, có sạc nhanh 15W</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
	<div class="col-md-12 mt-5 py-5">
		<h4>Bình luận</h4>
        
        <!-- if(binh_luan_exist("noi_dung")){
                    $ngay_bl = date_format(date_create(), 'Y-m-d')
                }
                $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh) -->

        <table style="border-collapse:collapse;">
            <!-- <tr >
                <td id="ho_ten" name="ho_ten">Người bình luận</td>
                <td id="noi_dung" name="noi_dung">Nội dung</td>
                <td id="ngay_bl" name="ngay_bl">Ngày bình luận</td>
            </tr> -->
        
            <?php
                // if(binh_luan_exist('ma_bl')){
                //     $ngay_bl = date_format(date_create(), 'Y-m-d');
                // }
                // $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
                // foreach($binh_luan_list as $bl){
                //     echo `<tr>
                //     <td><b>$bl[ho_ten]</b></td>
                //     <td>$bl[noi_dung]</td>
                //     <td>$bl[ngay_bl]</td>
                //     </tr>`;
                // }
                $binh_luan_list = hien_thi_binh_luan_theo_hang_hoa($ma_hh);

                if (!empty($binh_luan_list)) {
                    echo "Bình luận cho hàng hoá có mã " . $ma_hh . ":<br>";
                    echo "<table>";
                    echo "<tr><th>Mã tài khoản</th><th>Nội dung</th><th>Ngày bình luận</th></tr>";
                    foreach ($binh_luan_list as $bl) {
                        echo "<tr>";
                        echo "<td><b>{$bl['ma_tk']}</b></td>";
                        echo "<td>{$bl['noi_dung']}</td>";
                        echo "<td>{$bl['ngay_bl']}</td>";
                        echo "</tr>";
                    }
                        echo "</table>";
                    } else {
                        echo "Không có bình luận nào cho hàng hoá có mã " . $ma_hh . "<br>";
                    }
            ?>
        </table>
        <?php
            if(!isset($_SESSION['user'])){
                echo "<b>Đăng nhập để bình luận về sản phẩm này</b>";
            } else{
        ?>
		<form method="POST" action="<?= $_SERVER["REQUEST_URI"] ?>">
			<div class="form-group">
				<label for="name">Họ tên</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="comment">Bình luận</label>
				<textarea class="form-control" name="noi_dung" rows="3" required></textarea>
			</div>
			<input type="hidden" name="product_id" value="123">
			<button type="submit" class="btn btn-primary" name="insert_bl">Gửi bình luận</button>
		</form>

        <?php 
            $ma_tk = $_SESSION['user']['ma_tk'];
            if (isset($_POST['insert_bl'])) {
                $noi_dung=$_POST['noi_dung'];
                $ngay_bl = date_format(date_create(), 'Y-m-d');
                binh_luan_insert($noi_dung, $ma_sp, $ma_tk, $ngay_bl);
                echo "<script>location.href = '$SITE_URL/sanpham/index.php?chi-tiet&ma_hh=$ma_hh';</script>";
            }
        }
        ?>
	</div>
</div>
</div>

