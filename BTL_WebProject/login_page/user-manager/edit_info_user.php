<?php
include("../assets/config/connect.php");

// B2: truy vấn sửa
if (isset($_POST['submit_edit'])) {

    // Lấy dữ liệu từ form lưu vào biến
    $id_edit = $_POST['id'];
    $fullname =  $_POST['name'];
    $username =  $_POST['username'];
    $pass =  $_POST['password'];
    $avatar = $_POST['avatar'];
    $work = $_POST['work'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $intro =  $_POST['intro'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "UPDATE tb_admin SET username = '$username', password = '$pass', avatar = '$avatar', work = '$work' 
                            , name = '$fullname', email = '$email', sđt = '$phone' , intro = '$intro'  WHERE id = '$id_edit' ";
    if (mysqli_query($conn, $sql)) {
        header('location: ../admin.php');
    } else {
        $result = "Cập nhật khôg thành công" . mysqli_error($conn);
    }
}
