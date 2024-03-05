
<form name="formTinhtoan" class="frmTinhtoan" action="./pages/xulytinhtoan.php">
    <label for="txtsoA">So A<input type="text" name="txtsoA" id="soA" <?php if(isset($_GET['txtsoA'])) echo 'value='.$_GET['txtsoA'] ?>></label>
    <label for="txtsoB">So B<input type="text" name="txtsoB" id="soB" <?php if(isset($_GET['txtsoB'])) echo 'value='.$_GET['txtsoB'] ?>></label>
    <label for="txtKQ">Ket qua<input type="text" name="txtKQ" id="KQ" disabled <?php if(isset($_GET['KQ'])) echo 'value='.$_GET['KQ'] ?>></label>
    <label for="txtpheptinh">Phep tinh<select name="txtpheptinh" id="pheptinh">
        <option value="+" <?php dienPheptinh("+")?>>+</option>
        <option value="-" <?php dienPheptinh("-") ?>>-</option>
        <option value="*" <?php dienPheptinh("*") ?>>*</option>
        <option value="/" <?php dienPheptinh("/") ?>>/</option>
    </select></label>
    <input type="button" onclick="tinhtoan();" value="Tinh JS">
    <input type="submit" value="Tinh PHP">
</form>
<?php
    function dienPheptinh($pt) {
        if(isset($_GET['txtpheptinh']) and $_GET['txtpheptinh'] == $pt) echo 'selected'; else echo '';
    }
?>
<script>
    function tinhtoan() {
        let KQ = document.getElementById("KQ");
        var soA = document.getElementById("soA").value;
        var soB = document.getElementById("soB").value;
        if(soA == "") {
            alert("Vui long nhap so A!!!");
            soA.focus();
            return false;
        }
        if(soB == "") {
            alert("Vui long nhap so B!!!");
            soB.focus();
            return false;
        }
        let pheptinh = document.getElementById("pheptinh").value;
        if(pheptinh == "+") KQ.value = parseInt(soA)+parseInt(soB);
        else if(pheptinh == "-") KQ.value = parseInt(soA)-parseInt(soB);
        else if(pheptinh == "*") KQ.value = parseInt(soA)*parseInt(soB);
        else KQ.value = (parseInt(soA)*1.0/parseInt(soB)).toFixed(2);
    }
</script>