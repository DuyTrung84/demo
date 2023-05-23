<?php
    require "../bootstrap/bootstrap.php";

?>
<div class="container">
		<h2>Quản lý tài khoản</h2>
		<ul class="nav nav-tabs row menu col-sm-3 menu-column">
			<li class="active"><a data-toggle="tab" href="#home">Thông tin tài khoản</a></li>
			<li><a data-toggle="tab" href="#menu1">Đổi mật khẩu</a></li>
			<li><a data-toggle="tab" href="#menu2">Xóa tài khoản</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>Thông tin tài khoản</h3>
				<p>Thông tin tài khoản của bạn:</p>
				<table class="table">
					<thead>
						<tr>
							<th>Tên đăng nhập</th>
							<th>Email</th>
							<th>Số điện thoại</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>username</td>
							<td>email@example.com</td>
							<td>0987654321</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="menu1" class="tab-pane fade">
				<h3>Đổi mật khẩu</h3>
				<form>
					<div class="form-group">
						<label for="old-password">Mật khẩu cũ:</label>
						<input type="password" class="form-control" id="old-password">
					</div>
					<div class="form-group">
						<label for="new-password">Mật khẩu mới:</label>
						<input type="password" class="form-control" id="new-password">
					</div>
					<div class="form-group">
						<label for="confirm-password">Xác nhận mật khẩu mới:</label>
						<input type="password" class="form-control" id="confirm-password">
					</div>
					<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
				</form>
			</div>
			<div id="menu2" class="tab-pane fade">
				<h3>Xóa tài khoản</h3>
				<p>Bạn có chắc chắn muốn xóa tài khoản của mình?</p>
				<button type="button" class="btn btn-danger">Xóa tài khoản</button>
			</div>
		</div>
	</div>