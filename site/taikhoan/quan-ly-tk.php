<?php
    require "../bootstrap/bootstrap.php";
	require_once "../../global.php";
	require "../../dao/taikhoan.php";
	require_once '../inc/header.php'
?>


<head>
    <style>
        .btn.btn-block.active,
        .btn.btn-block:hover {
            background-color: #f8f9fa;
            color: #000;
        }
    </style>
</head>
    <div class="container" style="height: 100%;">
        <div class="row ">
            <ul class="nav flex-column nav-tabs col-sm-4">
				<li><a class="btn btn-block " href="<?=$SITE_URL?>/trang-chinh/">Về trang chủ</a></li>
                <li class="active ">
                    <button class="btn btn-block " data-toggle="tab" href="#home">Thông tin tài
                        khoản</button>
                </li>
                <li><button class="btn btn-block " data-toggle="tab" href="#menu2">Đổi mật khẩu</button>
                <li><button class="btn btn-block " data-toggle="tab" href="#menu1">Cập
                        nhật tài
                        khoản</button>
                </li>
            </ul>
            <div class="tab-content col-sm-8 " style="background-color:rgb(254, 254, 254);">
                <div id="home" class="tab-pane fade in active">
                    <h3>Thông tin tài khoản</h3>
                    <div class="container">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="text-secondary">AVT:</p> <img class="card-img-top" src="<?=$CONTENT_URL?>/img/<?php echo $_SESSION['user']['hinh'] ?>"style="width:25%">
                            </li>
                            <li class="list-group-item">
                                <p class="text-secondary">Tên: <b><?php echo $_SESSION['user']['ho_ten'] ?></b></p>
                            </li>
                            <li class="list-group-item">
                                <p class="text-secondary">Email: <b><?php echo $_SESSION['user']['email'] ?></b></p>
                            </li>
                            <li class="list-group-item ">
                                <p class="text-secondary">Vai trò: <b><?php echo ($_SESSION['user']['vai_tro'])?"Admin": "Member" ?></b></p>
                            </li>
                            <li class="list-group-item "></li>
                        </ul>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade col-sm-8" style="background-color:rgb(254, 254, 254);">
                    <h3>Cập nhật tài khoản</h3>
                    <?php
                        extract($_SESSION['user']);  
                    ?>                  
                    <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label >Email:</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>"  required>
                            <label >Họ tên:</label>
                            <input type="text" class="form-control" name="ho_ten" value="<?php echo $ho_ten ?>"  required>
                            <label >Hình:</label>
                            <input type="file" class="form-control" name="img" value="<?php echo $hinh ?>"  required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_edit_tk">Sửa</button>
                    </form>
                    

                    <?php 
                    if(isset($_POST['btn_edit_tk'])){
                        $tk=tk_select_by_id($_SESSION['user']['ma_tk']);
                        $email=$_POST['email'];
                        $ho_ten=$_POST['ho_ten'];
                        
                        $up_hinh = save_file("img", "$IMAGE_DIR/");

                        
                        tk_update($ma_tk,$email,$mat_khau,$ho_ten,$up_hinh,$vai_tro,$_SESSION['user']['ma_tk']);
                        echo '<script>alert("Cập nhật thành công!")</script>';
                        $_SESSION['user']=tk_select_by_id($_SESSION['user']['ma_tk']);
                                

                    }  
                    ?>
                <!-- -->
                </div>
                <div id="menu2" class="tab-pane fade col-sm-8" style="background-color:rgb(254, 254, 254);">
                    <h3>Đổi mật khẩu</h3>
                    <form method="post">
						<?php
							extract($_SESSION['user']);
						?>
                        <div class="form-group">
                            <label for="old-password">Mật khẩu cũ:</label>
                            <input type="password" class="form-control" name="mat_khau" required/>
                        </div>
                        <div class="form-group">
                            <label for="new-password">Mật khẩu mới:</label>
                            <input type="password" class="form-control" name="mat_khau2" required/>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Xác nhận mật khẩu mới:</label>
                            <input type="password" class="form-control" name="mat_khau3" required/>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_ed">Đổi mật khẩu</button>
						<?php
							if(isset($_POST['btn_ed'])){
								$tk=tk_select_by_id($_SESSION['user']['ma_tk']);
								$mat_khau=$_POST['mat_khau'];
								$mat_khau2=$_POST['mat_khau2'];
								$mat_khau3=$_POST['mat_khau3'];
								
								if ($mat_khau==$tk['mat_khau']) {
									if ($mat_khau2==$mat_khau3) {
										tk_update_mk($mat_khau3,$_SESSION['user']['ma_tk']);
										echo '<script>alert("Đổi mật khẩu thành công!")</script>';
										$_SESSION['user']=tk_select_by_id($_SESSION['user']['ma_tk']);
										
									}
									else{
										echo '<script>alert("Mật khẩu mới không trùng khớp!")</script>';
									}
								}
								else
								{
									echo '<script>alert("Mật khẩu hiện tại không đúng!")</script>'; 
								}
							} 
						?>
                    </form>
                </div>
            </div>
        </div>


    </div>