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
    <title>Login Page</title>
</head>
<body style="background-color: #ccc;">
    <div class="container">
        <div class="row login">
            <div class="col">
                <h3 > Đăng Nhập </h3>
                <a href="../index.php" class="close"> <i class="fas fa-times"></i> </a>
                <form method="POST" role="form" id="form_Signin" action="./login_form.php">
                    <div class="form-group">
                        <label for="user_signin" class="f-right">Tên đăng nhập</label>
                        <input type="text" class="form-control f-n" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pass_signin" class="f-right">Mật khẩu</label>
                        <input type="password" class="form-control f-m" name="password">
                    </div>
                    <button class="btn btn-danger f-bot" id="submit_signin" name="submit_signin">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
    <?php
    include ("../login_page/assets/config/connect.php");
    if (isset($_POST['submit_signin'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        //Truy vấn dữ liệu trong bảng
        $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['login'] = $username;
            header('location: ./admin.php');
        } else {
            echo '<div class="container"> 
                    <h3>Bạn nhập sai tên đăng nhập hoặc mật khẩu</h3>
                </div>';
        }
    }
    ?>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>