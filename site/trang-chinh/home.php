<?php
    require "../bootstrap/bootstrap.php";
    require "../inc/slider.php";
?>

<div class="container bg-3 text-center">    
    <h2 class="my-3 bg-dark text-white">Sản phẩm nổi bật</h2><br>
    
    <div class="row ml-3 ">
    <?php
        $product=hang_hoa_select_all();
        foreach($product as $item){
    ?>
        <div class="col-sm-2 border border-secondary py-3 mx-3 ">
            <img class="card-img-top" src="<?=$CONTENT_URL?>/img/<?php echo $item['hinh'] ?>" alt="Card image" style="width:70%; height:50%;">
            <div class="card-body">
                <h6 class="card-title"><a href="<?=$SITE_URL?>/sanpham/index.php?chi-tiet&ma_hh=<?php echo $item['ma_hh'] ?>" class="nav-link text-dark"><?php echo $item['ten_hh'] ?></a></h6>
                <p><b class="text-danger">$<?php echo $item['don_gia']?> <span><del class="text-secondary">$<?php echo $item['giam_gia']?></del></span></b></p>
                <a href="#" class="btn btn-primary mb-5">Thêm giỏ hàng</a>
            </div>
        </div>

    <?php
        }
    ?>    
    </div>
</div>

