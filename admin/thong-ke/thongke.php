<h3 class="text-center bg-light text-success">Thống kê</h3>
    <table class="table table-condensed">
    <thead>
      <tr>
            <th>Loại hàng</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
      </tr>
    </thead>
    <tbody>
    <?php 

        $items= thong_ke_hang_hoa();
        foreach($items as $item){
            extract($item);
    ?>
            <tr>
            <td><?= $ten_loai  ?></td>
            <td><?= $so_luong ?></td>
            <td>$<?= number_format($gia_max,2) ?></td>
            <td>$<?= number_format($gia_min,2) ?></td>
            <td>$<?= number_format($gia_avg,2) ?></td>
            </tr>
    <?php        
        }

    ?>
    </tbody>
  </table>
  <a class="btn btn-primary " href="index.php?chart">Xem biểu đồ</a>

