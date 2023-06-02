

    <h3 class="text-center bg-light text-success">Quản lý tài khoản khách hàng</h3>

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã </th>
        <th>Email</th>
        <th>Mật khẩu</th>
        <th>Họ tên</th>
        <th>Ảnh</th>
        <th>Vai trò</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        $tk=tk_select_all();
        foreach($tk as $row){
          extract($row);
          $del_link="index.php?btn_delete&ma_tk=".$ma_tk;
          $ed_link="index.php?btn_edit&ma_tk=".$ma_tk;
      ?>
            <tr>
            <td><?php echo $ma_tk?></td>
            <td><?php echo $email?></td>
            <td><?php echo $mat_khau?></td>
            <td><?php echo $ho_ten?></td>
            <td><img src="<?=$CONTENT_URL?>/img/<?php echo $row['hinh'] ?>" alt="" width="200"></td>
            <td><?= ($vai_tro==1)?"Admin":"Member" ?></td>
            <th>
            <a class="btn btn-success" href="<?php echo "$ed_link" ?>">Sửa</a>
            <button type="button" class="btn btn-warning"><?php echo" <a href=".$del_link.">Xoá</a>" ?>  </button>
            </th>
            
          </tr>
      <?php    
        }
      ?>


    </tbody>
  </table>
