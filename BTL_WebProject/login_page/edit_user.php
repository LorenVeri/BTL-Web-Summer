<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS for me -->
    <link rel="stylesheet" href="./assets/style_admin.css">
    <link rel="stylesheet" href="./assets/style_info.css">
    <title> Cập nhật người dùng</title>

</head>


<?php
include("./assets/config/connect.php");
?>

<body>
    <?php
    include("./assets/template/header_teamplate.php");
    ?>
    <!-- Header -->
    <div class="wrapper">
        <div class="container">
            <!-- Title -->
            <div class="header-main">
                <i class="fas fa-home"></i> <i class="fas fa-angle-right" style="padding: 0 10px;"></i> <span>Cập nhật</span>
                <h2>Thông tin</h2>
            </div>
            <!-- Form info -->
            <?php
            $id_edit = $_GET['id'];
            $sql = "SELECT * FROM tb_admin WHERE id = '$id_edit'";
            $result = mysqli_query($conn, $sql);
            //Xử lý dữ liệu 
            while ($row = mysqli_fetch_assoc($result)) {
                $id_edit = $row['id'];
                $fullname =  $row['name'];
                $username =  $row['username'];
                $pass =  $row['password'];
                $avatar = $row['avatar'];
                $work = $row['work'];
                $email =  $row['email'];
                $phone =  $row['sđt'];
                $intro =  $row['intro'];
            }
            ?>
            <div class="row">
                <div class="col-sm-4 bd-rd">
                    <div class="card-body">
                        <img src="<?php echo $avatar ?>" alt="avatar" style="width: 100%;">
                    </div>
                </div>
                <div class="col-sm-8 bd-rd">
                    <div class="card-body">
                        <form method="POST" role="form" id="form_Signin" action="./user-manager/edit_info_user.php">
                            <div class="form-id">
                                <span for="form-id" class="f-right">ID</span>
                                <input type="text" class="form-control f-n" name="id" value="<?php echo $id_edit ?>">
                            </div>
                            <div class="form-name">
                                <span for="form-name" class="f-right">Tên người dùng</span>
                                <input type="text" class="form-control f-n" name="name" value="<?php echo $fullname ?>">
                            </div>
                            <div class="form-username">
                                <span for="form-username" class="f-right">Tên đăng nhập</span>
                                <input type="text" class="form-control f-n" name="username" value="<?php echo $username ?>">
                            </div>
                            <div class="form-password">
                                <span for="pass_signin" class="f-right">Mật khẩu</span>
                                <input type="password" class="form-control f-m" name="password" value="<?php echo $pass ?>">
                            </div>
                            <div class="form-avatar">
                                <span for="form-avatar" class="f-right">Ảnh đại diện</span>
                                <input type="text" class="form-control f-m" name="avatar" value="<?php echo $avatar ?>">
                            </div>
                            <div class="form-work">
                                <span for="form-work" class="f-right">Nghề nghiệp</span>
                                <input type="text" class="form-control f-m" name="work" value="<?php echo $work ?>">
                            </div>
                            <div class="form-email">
                                <span for="form-email" class="f-right">Email</span>
                                <input type="text" class="form-control f-m" name="email" value="<?php echo $email ?>">
                            </div>
                            <div class="form-phone">
                                <span for="form-phone" class="f-right">Số điện thoại</span>
                                <input type="text" class="form-control f-m" name="phone" value="<?php echo $phone ?>">
                            </div>
                            
                            <div class="form-intro">
                                <span for="form-intro" class="f-right">Giới thiệu</span>
                                <input type="text" class="form-control f-m" name="intro" value="<?php echo $intro ?>">
                            </div>
                            <button class="btn btn-danger f-bot" id="submit_edit" name="submit_edit" style="margin-top: 20px;">Cập nhật</button>
                            <a href="./admin.php" class="btn btn-danger f-bot" style="margin-top: 20px;">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Header -->
    <!-- Wrapper -->
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>