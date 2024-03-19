<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frmDangkiModal" id="frmDangki-btn">
    Đăng kí
</button>
<!-- Modal -->
<div class="modal fade" id="frmDangkiModal" tabindex="-1" aria-labelledby="frmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="frmLabel">Đăng kí</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./pages/xulydangki.php" id="frmDangki" method="post">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Username or id: </label>
                <input type="input" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="pwdInput1" class="form-label">Password: </label>
                <input type="password" class="form-control" id="pwdInput1" name="pwd1">
            </div>
            <div class="mb-3">
                <label for="pwdInput2" class="form-label">Nhập lại Password: </label>
                <input type="password" class="form-control" id="pwdInput2" name="pwd2">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email: </label>
                <input type="email" class="form-control" id="emailInput" name="email">
            </div>
            <div class="mb-3">
                <label for="sdtInput" class="form-label">Số điện thoại: </label>
                <input type="input" class="form-control" id="sdtInput" name="sdt">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <input type="submit" class="btn btn-primary" value="Đăng kí" form="frmDangki">
      </div>
    </div>
  </div>
</div>

<?php
  if(isset($_GET['frmDangki'])) {
    echo "<script>document.getElementById('frmDangki-btn').click()</script>";
  }
?>