<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS for me -->
    <link rel="stylesheet" href="./assets/style_login.css">
    <title>Đăng ký mới</title>
</head>
<?php
include("../login_page/assets/config/connect-tlu.php");
if (isset($_POST['submit_register'])) {
    $fullname =  $_POST['fullname'];
    $username =  $_POST['username'];
    $pass =  $_POST['password'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    // Mã hóa password
    $password_hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin(fullname, username, password, number_phone, email) 
                       VALUES ('$fullname', '$username', '$password_hash', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        header('location: login_form.php');
    }
}

?>

<body style="background-color: #ccc;">
    <div class="container">
        <h3> Đăng Ký </h3>
        <div class="row login">
            <div class="col a-scale" style="margin-bottom: 80px;">
                <h3> Nhập thông tin </h3>
                <a href="login_form.php" class="close"> <i class="fas fa-times"></i> </a>
                <form method="POST" role="form" id="form_Signin" action="register_admin.php">
                    <div class="form-group">
                        <label for="user_signin" class="">Họ và tên</label>
                        <input type="text" class="form-control" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="user_signin" class="">Tên đăng nhập</label>
                        <input type="text" class="form-control " name="username">
                    </div>
                    <div class="form-group">
                        <label for="pass_signin" class="">Mật khẩu</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="pass_signin" class="">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="email" class="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                   
                    <button class="btn btn-danger " id="submit_register" name="submit_register">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>