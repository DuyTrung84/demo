<?php
    require "../bootstrap/bootstrap.php";
    require_once "../../global.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="<?=$CONTENT_URL?>/img/<?=$hinh?>" alt="Product image" class="img-fluid" style="width:80%; height:100%;">
        </div>
        <div class="col-md-6">
            <h2><?php echo $product['ten_hh']?></h2>
            <p class="text-muted"><?php echo $product['mo_ta']?></p>
            <h3>Giá: $<?php echo $product['don_gia']?></h3>
            <p class="text-muted">Số lượt xem: <?php echo $product['so_luot_xem']?></p>
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
    <?php
        require 'binh-luan.php';
    ?>
</div>