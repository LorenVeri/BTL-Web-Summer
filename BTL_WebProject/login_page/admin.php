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
    include("../login_page/assets/config/connect-tlu.php");
    session_start();
    // if(!isset($_SESSION['login'])) {
    //     header('location: ./login_form.php');
    // }
    if (!isset($_SESSION['login'])) {
        header('location: ./login_form.php');
    }
    ?>

    <!-- Header -->
    <?php
    include("./assets/template/header_teamplate.php");
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
                    <div class="col-sm bd-rd">
                        <div class="card-body">
                            <div class="title">
                                <h5>Thông tin các bản ghi</h5>
                                <span>Thông số</span>
                            </div>
                            <div class="main">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>
                                            <?php
                                            $sqlx = "SELECT * FROM can_bo";
                                            $result = mysqli_query($conn, $sqlx);
                                            //Xử lý kết quả: Lấy ra số bản ghi
                                            $count_users = mysqli_num_rows($result);
                                            echo $count_users;
                                            ?>
                                        </h3>
                                        <p>Giảng viên khoa CNTT</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>
                                            <?php
                                            $sqly = "SELECT * FROM tb_news";
                                            $result = mysqli_query($conn, $sqly);
                                            //Xử lý kết quả: Lấy ra số bản ghi
                                            $count_news = mysqli_num_rows($result);
                                            echo $count_news;
                                            ?>
                                        </h3>
                                        <p>Tin tức</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>
                                            <?php
                                            $sqlz = "SELECT * FROM tb_event";
                                            $result = mysqli_query($conn, $sqlz);
                                            //Xử lý kết quả: Lấy ra số bản ghi
                                            $count_event = mysqli_num_rows($result);
                                            echo $count_event;
                                            ?>
                                        </h3>
                                        <p>Sự kiện</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Status -->
            </div>
            <!-- User -->
        </div>
        <div class="user" style="margin-top: 20px;">
            <div class="row" style="margin: 0 15px;">
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
                                        <th scope="col">Ảnh đại diện</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Đơn vị</th>
                                        <th scope="col">Chức vụ</th>
                                        <th scope="col">Địa chỉ Email</th>
                                        <th scope="col">Số Điện Thoại</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Thêm mới</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <form action="admin.php" method="POST" role="form">
                                    <div class="search-bar" style="margin-bottom: 15px;">
                                        <input type="text" name="search" placeholder="Nhập nội dung cần tìm" style="padding: 10px 0; width: 30%">
                                        <button class="btn btn-danger f-bot" id="submit_search" name="submit_search">Tìm kiếm</button>
                                    </div>
                                    <tbody>
                                        <?php
                                        $sql2 = "SELECT * FROM can_bo";
                                        if (isset($_POST['submit_search'])) {
                                            $s = $_POST['search'];
                                            $sql2 = "SELECT * FROM can_bo WHERE fullname LIKE '%$s%'";
                                        }
                                        $result1 = mysqli_query($conn, $sql2);

                                        //Xử lý dữ liệu 
                                        if (mysqli_num_rows($result1) > 0) {
                                            $i = 0;
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                $i++;

                                                $id_dv = $row1['id_don_vi'];
                                                $sql3 = "SELECT * FROM don_vi WHERE id = $id_dv";
                                                $result3 = mysqli_query($conn, $sql3);
                                                $row3 = mysqli_fetch_assoc($result3);
                                                $name_dv = $row3['name'];


                                                $id_cv = $row1['id_chuc_vu'];
                                                $sql4 = "SELECT * FROM chuc_vu WHERE id = $id_cv";
                                                $result4 = mysqli_query($conn, $sql4);
                                                $row4 = mysqli_fetch_assoc($result4);
                                                $name_cv = $row4['name'];

                                        ?>
                                                <tr>
                                                    <th scope="row"><span><?php echo $i ?></span></th>
                                                    <td>
                                                        <div class="avatar-img" style="width: 150px">
                                                            <img src="<?php echo $row1['avatar'] ?>" alt="avatar" style="width: 100%;">
                                                        </div>

                                                    </td>
                                                    <td><span><?php echo $row1['fullname'] ?></span></td>
                                                    <td><span><?php echo $name_dv ?></span></td>
                                                    <td><span><?php echo $name_cv ?></span></td>
                                                    <td><span><?php echo $row1['email'] ?></span></td>
                                                    <td><span><?php echo $row1['phone_number'] ?></span></td>
                                                    <td><span><?php echo $row1['address'] ?></span></td>
                                                    <td><a href="./info.php"><i class="fas fa-user-plus icon-center"></i></i></a></td>
                                                    <td><a href="edit_user.php?id=<?php echo $row1['id'] ?>"><i class="fas fa-pencil-alt icon-center"></i></a></td>
                                                    <td><a href="./user-manager/delete_user.php?id=<?php echo $row1['id'] ?>"><i class="far fa-trash-alt icon-center"></i></a></td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User -->

    </div>
    <!-- End Wrapper -->
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>