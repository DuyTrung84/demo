<?php
    
    if (isset($_GET['ma_loai'])) {
        $ma_loai=$_GET['ma_loai'];
    }
?>

<ul class="nav justify-content-left">
    <?php
        $loai = loai_select_all();
        foreach ($loai as $cate) {
    ?>
    <li class="nav-item">
        <a class="nav-link" href="<?=$SITE_URL?>/sanpham/index.php?categories&ma_loai=<?php echo $cate['ma_loai'] ?>">
        <?php echo $cate['ten_loai'] ?>
        </a>
    </li>
    <?php
        };
    ?>
</ul>
<hr>
<h2>
    <?php
        $category=loai_select_by_id($ma_loai);
        echo $category['ten_loai']
    ?>
</h2>
<div class="row">
    <?php
        $sps = hang_hoa_select_by_loai_hang($ma_loai);
        foreach ($sps as $sp) {
    ?>
    <div class="col-md-2 mb-4">
        <div class="card h-100">
            <a href="<?=$SITE_URL?>/sanpham/index.php?chi-tiet-ui&ma_hh=<?php echo $sp['ma_hh'] ?>"><img class="card-img-top" style="width:232px; height:232px;" src="<?=$CONTENT_URL?>/img/<?php echo $sp['hinh'] ?>" alt=""></a>
            <div class="card-body">
                <h6 class="card-title"><a href="<?=$SITE_URL?>/sanpham/index.php?chi-tiet-ui&ma_hh=<?php echo $sp['ma_hh'] ?>" class="text-black"><?php echo $sp['ten_hh'] ?></a></h6>
                <p class="card-text"><b class="text-danger">$<?php echo $sp['don_gia']?> <span><del class="text-secondary">$<?php echo $sp['giam_gia']?></del></span></b></p>
                <a href="#" class="btn btn-primary">Thêm giỏ hàng</a>
            </div>
        </div>
    </div>
    <?php
        };
    ?>
</div>