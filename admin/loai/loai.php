

    <h3 class="text-center bg-light text-success">Loại hàng</h3>
    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $loai=loai_select_all();
        foreach($loai as $row){
          extract($row);
          $del_link="index.php?btn_delete&ma_loai=".$ma_loai;
          $ed_link="index.php?btn_edit&ma_loai=".$ma_loai;
      ?>
      <tr>
        <td><?php echo $row['ma_loai'] ?></td>
        <td><?php echo $row['ten_loai'] ?></td>
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
  <a class="btn btn-primary " href="index.php?btn_insert&">Thêm loại</a>