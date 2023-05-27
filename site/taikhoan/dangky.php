
<?php
    require "../../dao/pdo.php";
    require "../../dao/taikhoan.php";
    require "../bootstrap/bootstrap.php";
    require_once '../../global.php'
    
   ?>
<div class="container d-flex align-items-center justify-content-center ">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Đăng ký</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="confirm-password" placeholder="Nhập lại mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" class="form-control" name="ho_ten" placeholder="Nhập họ tên" required>
                </div>
                <!-- <div class="form-group">
                    <label for="image">Hình đại diện</label>
                    <input type="file" class="form-control" name="image">
                </div> -->
                <button type="submit" class="btn btn-primary" name="btn_signup">Đăng ký</button>
                <p><b>Đã có tài khoản?</b><a href="<?=$SITE_URL?>/taikhoan/dangnhap.php">Đăng nhập ngay</a></p>
            </form>

            <?php
                    if (isset($_POST['btn_signup'])) {
                        $ho_ten=$_POST['ho_ten'];
                        $mat_khau=$_POST['password'];
                        $repass=$_POST["confirm-password"];
                        $email=$_POST["email"];
                        $img_name="";
                        $vai_tro=0;
                        //ktra xem email đã tồn tại hay chưa
                        $check=tk_select_by_email($email);
                        if ($check) {
                            echo '<script>alert("Email đã được đăng ký trước đó. Vui lòng sử dụng email khác.")</script>';
                        }else if ($mat_khau !== $repass) {
                            echo '<script>alert("Mật khẩu và Nhập lại mật khẩu không khớp")</script>';
                        }else if (strlen($mat_khau) < 6) {
                            echo '<script>alert("Mật khẩu phải chứa ít nhất 6 ký tự")</script>';
                        }else{
                            tk_insert($email,$mat_khau,$ho_ten,$img_name,$vai_tro);
                            echo '<script>alert("Đăng kí tài khoản thành công")</script>';
                            header("Location : $SITE_URL/taikhoan/dangnhap.php");
                        }

                    }
            ?>
        </div>
    </div>
</div>