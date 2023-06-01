
<?php
  $isLoggedIn = isset($_SESSION['user']);

  if (isset($_POST['logout'])) {
    session_destroy();
    setcookie('email', '', time() - 3600);
    setcookie('mat_khau', '', time()- 3600);
    header('Location: ' . "$SITE_URL/trang-chinh");
    exit;
  }

  require "../bootstrap/bootstrap.php";
  // require_once "../inc/require.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?=$SITE_URL?>/trang-chinh">
      <img src="https://cdn.onlinewebfonts.com/svg/img_142579.png" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <div class="navbar-search">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </div>
    <div class="navbar-buttons">
      <?php if ($isLoggedIn): ?>
        <form method="POST">
        <?php
                if (isset($_SESSION['user'])&&$_SESSION['user']['vai_tro']==1) {
            ?>
                <a href="<?=$ADMIN_URL?>/trang-chinh/"><i class="fa-solid fa-list-check" style="color: white;font-size: 20px;width: 20px;height: 20px;"></i></a>
            <?php
                }
            ?>
          <span>Xin chào <a href="<?=$SITE_URL?>/taikhoan/quan-ly-tk.php"><?php echo $_SESSION['user']['ho_ten'] ?></a></span>
          <button class="btn btn-outline-danger" type="submit" name="logout">Đăng xuất</button>
        </form>
      <?php else: ?>
        <a class="btn btn-outline-primary" href="<?=$SITE_URL?>/taikhoan/dangky.php">Đăng ký</a>
        <a class="btn btn-outline-secondary" href="<?=$SITE_URL?>/taikhoan/dangnhap.php">Đăng nhập</a>
      <?php endif; ?>
    </div>
  </div>
</nav>