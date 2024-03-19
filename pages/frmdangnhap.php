<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frmDangnhapModal" id="frmDangnhap-btn">
    Đăng nhập
</button>
<!-- Modal -->
<div class="modal fade" id="frmDangnhapModal" tabindex="-1" aria-labelledby="frmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="frmLabel">Đăng nhập</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./pages/xulydangnhap.php" id="frmDangnhap" method="POST">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Username or id: </label>
                <input type="input" class="form-control" id="usernameInput" required = true name="username">
            </div>
            <div class="mb-3">
                <label for="pwdInput" class="form-label">Password: </label>
                <input type="password" class="form-control" id="pwdInput" required = true name="pwd">
            </div>
        </form>
        <div class="noAccount">
            <a class="text-center text-primary" href="index.php?frmDangki=" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#frmDangkiModal">Đăng kí ngay</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="submit" class="btn btn-primary" form="frmDangnhap">Đăng nhập</button>
      </div>
    </div>
  </div>
</div>

<?php
  if(isset($_GET['frmDangnhap'])) {
    echo "<script>document.getElementById('frmDanngnhap-btn').click()</script>";
  }
?>