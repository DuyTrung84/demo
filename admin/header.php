<?php 
  $isLoggedIn = isset($_SESSION['user']);

  if (isset($_POST['logout'])) {
    session_destroy();
    setcookie('email', '', time() - 3600);
    setcookie('mat_khau', '', time()- 3600);
    header('Location: ' . "$SITE_URL/trang-chinh");
    exit;
  }
  require_once '../../global.php' 
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center alert alert-success">
        <h1 class=" m-0">Quản trị website</h1>
        <div>
          <span class="m-0">
            Xin chào, <?php echo isset($_SESSION['user']['ho_ten']) ? $_SESSION['user']['ho_ten'] : 'Khách'; ?>!
          </span>
          <form action="" method="post" class="d-inline">
            <button type="submit" class="btn btn-danger" name="logout">Đăng xuất</button>
          </form>
        </div>
    </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?=$SITE_URL?>/trang-chinh">Đi tới trang web</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/trang-chinh">Trang chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/loai">Loại hàng</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/hang-hoa">Hàng hoá</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/binh-luan">Bình luận</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/tai-khoan">Tài khoản</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="<?=$ADMIN_URL?>/thong-ke">Thống kê</a>
    </li>
  </ul> 
</div>



