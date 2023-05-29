<?php
    require "../bootstrap/bootstrap.php";
	require_once "../../global.php";
	require "../../dao/taikhoan.php";
?>
<div class="container">
		<h2>Quản lý tài khoản</h2>
		<ul class="nav nav-tabs row menu col-sm-3 menu-column">
			<li><a href="<?=$SITE_URL?>/trang-chinh/">Về trang chủ</a></li>
			<li class="active"><a data-toggle="tab" href="#home">Thông tin tài khoản</a></li>
			<li><a data-toggle="tab" href="#menu1">Đổi mật khẩu</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>Thông tin tài khoản</h3>
				<p>Thông tin tài khoản của bạn:</p>
				<table class="table">
					<thead>
						<tr>
							<th>Họ tên</th>
							<th>Email</th>
							<th>Vai trò</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $_SESSION['user']['ho_ten'] ?></td>
							<td><?php echo $_SESSION['user']['email'] ?></td>
							<td><?php echo $_SESSION['user']['vai_tro'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="menu1" class="tab-pane fade">
				<h3>Đổi mật khẩu</h3>
				
				<form method="post">
					<?php
						extract($_SESSION['user']);
					?>
					<div class="form-group">
						<label for="old-password">Mật khẩu cũ:</label>
						<input type="password" class="form-control" id="old-password" name="mat_khau">
					</div>
					<div class="form-group">
						<label for="new-password">Mật khẩu mới:</label>
						<input type="password" class="form-control" id="new-password" name="mat_khau">
					</div>
					<div class="form-group">
						<label for="confirm-password">Xác nhận mật khẩu mới:</label>
						<input type="password" class="form-control" id="confirm-password">
					</div>
					<button type="submit" class="btn btn-primary" name="btn_ed">Đổi mật khẩu</button>
					
				<?php
					// }else{
					// 	echo "Tài khoản không tồn tại";
					// }
					if(isset($_POST['btn_ed'])){
						$ma_tk=$_SESSION['user']['ma_tk'];
						$mat_khau=$_POST['mat_khau'];
			
						tk_update_mk($ma_tk,$mat_khau);
						header('Location: quan-ly-tk.php');
				  } 
				?>
				</form>

				<?php
					
				?>
			</div>
		</div>
	</div>