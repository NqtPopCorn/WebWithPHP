<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
    Insert Product
</button>

<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Insert Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./pages/insert.php" method="POST" enctype="multipart/form-data" id="frmInsert">
                    <div class="form-group mb-3">
                        <label for="masp" class="form-label">Product ID:</label>
                        <input type="number" class="form-control" id="masp" name="masp" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tensp" class="form-label">Product Name:</label>
                        <input type="text" class="form-control" id="tensp" name="tensp" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="matl"  class="form-label">Category:</label>
                        <select class="form-control form-select" id="matl" name="matl" required>
                            <?php 
                                $sql = "select * from theloai";
                                $query = ConnectDatabase::query($sql);
                                while($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="dongia" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="dongia" name="dongia" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="hinh" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="hinh" name="hinh" required>
                        <img id="preview" style="height: 100px;">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="frmInsert">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#preview').css("display", "none")
    $('#hinh').change(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
            $('#preview').css("display", "block");
        }
        if (this.files[0]) reader.readAsDataURL(this.files[0]);
        else $('#preview').css("display", "none");
    });
</script>