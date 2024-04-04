<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <form id="registerForm">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>
</body>
<script>
    $(document).ready(function(){
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'register.php', // URL của script PHP xử lý đăng ký
            type: 'post',
            data: $(this).serialize(), // Lấy dữ liệu từ form
            success: function(response) {
                // Xử lý phản hồi từ server
                $('#result').html(response);
            }
        });
    });
});
</script>
</html>