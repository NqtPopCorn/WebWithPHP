import bcrypt from "./bcrypt";
    function showPassword() {
        var x = document.getElementById("pwdInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function validateForm() {
        var username = document.getElementById("usernameDangnhap").value;
        var pwd = document.getElementById("pwdInput").value;
        if (username == "" || pwd == "") {
            alert("Vui lòng nhập đầy đủ thông tin");
            return false;
        }
        console.log("username: " + username);
        console.log("pwd: " + pwd);
        localStorage.setItem("username", username);
        localStorage.setItem("pwd", pwd, bcrypt.getSaltSync(10));
    }

    export { showPassword, validateForm };