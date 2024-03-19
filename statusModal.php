<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#statusModal" style="display: none;" id="status-btn">
  Launch statusModal
</button>
<?php
  $title = "<h5 class='modal-title text-center' id='statusLabel'>Thông báo</h5>";
  $status = "Status";
  $btn_type = "btn-primary";
  if (isset($_GET['modalSuccess'])) {
    $type = $_GET['modalSuccess'];
    $title = "<h5 class='modal-title text-center text-success' id='statusLabel'>Thành công</h5>";
    $btn_type = "btn-success";
    if ($type == "dangki") {
      $status = "Đăng kí thành công";
    } else if ($type == "dangnhap") {
      $status = "Đăng nhập thành công";
    }
  } else if (isset($_GET['modalError'])) 
  {
    $type = $_GET['modalError'];
    $error = $_GET['error'];
    $title = "<h5 class='modal-title text-center text-danger' id='statusLabel'>Thất bại</h5>";
    $btn_type = "btn-danger";
    if ($type == "dangki") {
      if ($error == "empty") {
        $status = "Vui lòng điền đầy đủ thông tin";
      } else if ($error == "pwd") {
        $status = "Mật khẩu không trùng khớp";
      } else if ($error == "email") {
        $status = "Email không hợp lệ";
      } else if ($error == "sdt") {
        $status = "Số điện thoại không hợp lệ";
      } else if ($error == "exist") {
        $status = "Tài khoản đã tồn tại";
      }
    } else if ($type == "dangnhap") {
      if ($error == "empty") {
        $status = "Vui lòng điền đầy đủ thông tin";
      } else if ($error == "pwd") {
        $status = "Mật khẩu không chính xác";
      } else if ($error == "username") {
        $status = "Tài khoản không tồn tại";
      }
    }
  }
?>
<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php echo $title ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
          echo $status;
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn <?php echo $btn_type; ?>" data-bs-dismiss="modal">Xác nhận</button>
      </div>
    </div>
  </div>
</div>

<?php
//hien thi modal khi co thong bao
  if (isset($_GET['modalSuccess']) || isset($_GET['modalError'])) {
    echo "<script>document.getElementById('status-btn').click()</script>";
  }
?>