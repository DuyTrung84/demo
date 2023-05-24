
<?php
  require "../bootstrap/bootstrap.php"
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.onlinewebfonts.com/svg/img_142579.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <div class="navbar-search">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
      </div>
      <div class="navbar-buttons">
        <a class="btn btn-outline-primary" href="<?=$SITE_URL?>/taikhoan/dangky.php">Đăng ký</a>
        <a class="btn btn-outline-secondary" href="<?=$SITE_URL?>/taikhoan/dangnhap.php">Đăng nhập</a>
      </div>
    </div>
  </nav>
