<?php
    require "../bootstrap/bootstrap.php";
    require "../inc/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="../img/hinh-nen-may-tinh (4).png" alt="Product image" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>Tên sản phẩm</h2>
            <p class="text-muted">Mô tả sản phẩm</p>
            <h3>Giá: $99.99</h3>
            <p class="text-muted">Số lượng còn lại: 10</p>
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
		<form method="POST" action="process-comment.php">
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
				<textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
			</div>
			<input type="hidden" name="product_id" value="123">
			<button type="submit" class="btn btn-primary">Gửi bình luận</button>
		</form>
	</div>
</div>
</div>



    <?php
        require "../inc/footer.php"
    ?>