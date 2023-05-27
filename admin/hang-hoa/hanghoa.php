
<body>
    <h3 class="text-center bg-light text-success">Quản lý hàng hoá</h3>

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã</th>
        <th>Tên hàng hoá</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Số lượt xem</th>
        <th>Mô tả</th>
        <th>Mã loại</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        // if(isset($_GET['ma_hh'])){
        //   hang_hoa_delete($_GET['ma_hh']);
        // }
        $hh=hang_hoa_select_all_with_loai();
        foreach($hh as $row){
        extract($row);
        $del_link="index.php?btn_delete&ma_hh=".$ma_hh;
        $ed_link="index.php?btn_edit&ma_hh=".$ma_hh;
      ?>
        <tr>
          <td><?php echo $row['ma_hh'] ?></td>
          <td><?php echo $row['ten_hh'] ?></td>
          <td><img src="<?=$CONTENT_URL?>/img/<?php echo $row['hinh'] ?>" alt="" width="200"></td>
          <td><?php echo $row['don_gia'] ?></td>
          <td><?php echo $row['giam_gia'] ?></td>
          <td><?php echo $row['so_luot_xem'] ?></td>
          <td><?php echo $row['mo_ta'] ?></td>
          <td><?php echo $row['ten_loai'] ?></td>
          

          <th>
          <a class="btn btn-success" href="<?php echo "$ed_link" ?>">Sửa</a>
              <button type="button" class="btn btn-warning"><?php echo" <a href=".$del_link.">Xoá</a>" ?></button>
          </th>
        
      </tr>
      <?php    
        }
      ?>
        
    </tbody>
  </table><hr>
  <a href="index.php?btn_insert&" class="btn btn-primary">Thêm hàng hoá</a>
</body>
</html>