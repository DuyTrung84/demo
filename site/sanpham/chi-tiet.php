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

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Các bình luận</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Bình luận</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Thao tác</th>
                    
                </tr>
                
                </thead>
                <tbody>
                <?php
                    
                    if(binh_luan_exist("noi_dung")){
                           
                    
                    
                    $ngay_bl = date_format(date_create(), 'Y-m-d');
                    
                    }
                    $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh); 
                    foreach ($binh_luan_list as $bl) {
                        echo    "<tr><td><b>$bl[ho_ten]</b></td>
                                <td><span name='noi_dung'>$bl[noi_dung]</span></td>
                                <td><span name='ngay_bl'>$bl[ngay_bl]</span></td>
                                <th>
                                    <button name='btn_ed'><a href='$SITE_URL/sanpham/ed-binhluan.php?chi-tiet&ma_hh=$ma_hh'>Sửa</a></button>
                                    <button name='btn_delete'>Xóa</button>
                                </th>
                                </tr>";
                    }
                    
                    
                    
                    ?>
                    
                </tbody>
            </table>
            </div>
            </div>
                
                
        <?php
            if(!isset($_SESSION['user'])){
                echo "<b>Đăng nhập để bình luận về sản phẩm này</b>";
            } else{
        ?>
		<form method="POST" action="<?= $_SERVER["REQUEST_URI"] ?>">
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

