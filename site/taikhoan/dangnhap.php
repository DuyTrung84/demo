<?php
    require "../../global.php";
    if (isset($_COOKIE["email"])&&isset($_COOKIE["mat_khau"])) {
        $email = get_cookie("email");
        $mat_khau = get_cookie("mat_khau");
    }
    else {
        $email="";
        $mat_khau="";
    }
    
?>
    <?php
    
     require "../../dao/pdo.php";
     require "../bootstrap/bootstrap.php";
     require "../../dao/taikhoan.php";
     
    ?>
<div class="container d-flex align-items-center justify-content-center pt-5 mt-5">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title">Đăng nhập</h2>
        <form action="" name="login" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập email" value="<?=$email?>">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu" value="<?=$mat_khau?>">
            </div>
            <div style="text-align:left;">
                <input name="ghi_nho" type="checkbox"> Ghi nhớ tài khoản?
            </div><br>
            
            <button type="submit" class="btn btn-primary" name="btn_login">Đăng nhập</button>
        </form>
        <?php
            if (exist_param('btn_login')) {
                
                $email=$_POST["email"];
                $mat_khau=$_POST['mat_khau'];
                
                $acc=tk_select_by_email($email); 
                if ($acc) {
                    if ($acc['mat_khau']==$mat_khau) {
                        $_SESSION['user']=$acc;
                        
                        if(exist_param("ghi_nho")){
                            add_cookie("email", $email, 30);
                            add_cookie("mat_khau", $mat_khau, 30);
                            var_dump($email);
                        }
                        else{
                            delete_cookie("email");
                            delete_cookie("mat_khau");
                        }
                           
                        if ($acc['vai_tro']==1) {
                            header("Location: $ADMIN_URL/trang-chinh/");
                        }else
                            {
                                header("Location: $SITE_URL/trang-chinh");
                            }
                    }else{
                        echo '<script>alert("Sai tài khoản hoặc mật khẩu!")</script>';
                    }
                    
                }
                
            }
            else{
                if(exist_param("btn_logoff")){
                session_unset();
                }
               }
            
            ?>
            
        </div>
        <div class="forgot">
            <!-- <p><a href="<?=$SITE_URL?>/taikhoan/forgotpw.php">Quên mật khẩu?</a></p> -->
            <p><b>Bạn chưa có tài khoản?</b><a href="<?=$SITE_URL?>/taikhoan/dangky.php">Đăng kí ngay</a></p>

        </div>
        </div>
    </div>
</div>