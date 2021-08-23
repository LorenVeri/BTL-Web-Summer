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
    <title> Quản lý </title>
</head>

<body>
    <?php
    include ("../login_page/assets/config/connect.php");
    session_start();
    // if(!isset($_SESSION['login'])) {
    //     header('location: ./login_form.php');
    // } 
    ?>

    <!-- Header -->
    <?php 
        include ("./assets/template/header_teamplate.php");
    ?>
    <!-- End Header -->
    <!-- Wrapper -->
    <div class="wrapper">
        <div class="container">
            <div class="header-main">
                <i class="fas fa-home"></i> <i class="fas fa-angle-right" style="padding: 0 10px;"></i> <span>Trang chủ</span>
                <h2>Trang chủ</h2>
            </div>
            <!-- Status -->
            <div class="status">
                <div class="row">
                    <!-- Table database -->
                    <div class="col-sm-6 bd-rd">
                        <div class="card-body">
                            <div class="title">
                                <h5>Thông tin các bản ghi</h5>
                                <span>Thông số</span>
                            </div>
                            <div class="main">

                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="col-sm-6 bd-rd" style="padding: 0;">
                        <div class="card-body">
                            <div class="title">
                                <h5>Thông tin các bản ghi</h5>
                                <span>Thông số</span>
                            </div>
                            <div class="main">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Status -->
                <!-- Status -->
                <div class="user" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col-sm bd-rd" style="width: 100%;">
                            <div class="card-body">
                                <div class="title">
                                    <h5>Thông tin người dùng</h5>
                                    <span>Quản trị viên</span>
                                </div>
                                <div class="main">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Tên người dùng</th>
                                                <th scope="col">Công việc</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Thêm mới</th>
                                                <th scope="col">Sửa</th>
                                                <th scope="col">Xóa</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql2 = "SELECT * FROM tb_admin";
                                                $result1 = mysqli_query($conn, $sql2);

                                                //Xử lý dữ liệu 
                                                if (mysqli_num_rows($result1) > 0) {
                                                    $i = 0; 
                                                while($row1 = mysqli_fetch_assoc($result1)) {
                                                    $i++;
                                            ?>
                                            <tr>
                                                <th scope="row"><span><?php echo $i ?></span></th>
                                                <td>
                                                    <img src="" alt="">
                                                    <?php echo $row1['name'] ?>
                                                </td>
                                                <td><span><?php echo $row1['username'] ?></span></td>
                                                <td><span><?php echo $row1['work'] ?></span></td>
                                                <td><span><?php echo $row1['email'] ?></span></td>
                                                <td><a href="./info.php"><i class="fas fa-user-plus icon-center"></i></i></a></td>
                                                <td><a href="edit_user.php?id=<?php echo $row1['id'] ?>"><i class="fas fa-pencil-alt icon-center"></i></a></td>
                                                <td><a href="./user-manager/delete_user.php?id=<?php echo $row1['id'] ?>"><i class="far fa-trash-alt icon-center"></i></a></td>
                                            </tr>
                                            <?php 
                                                } 
                                            }    
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Status -->
            </div>
        </div>
        <!-- End Wrapper -->
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>