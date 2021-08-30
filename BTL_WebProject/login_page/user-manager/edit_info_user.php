<?php
include("../assets/config/connect-tlu.php");

// B2: truy vấn sửa
if (isset($_POST['submit_edit'])) {

    // Lấy dữ liệu từ form lưu vào biến
    $id_edit = $_POST['id'];
    $avatar =  $_POST['avatar'];
    $fullname =  $_POST['fullname'];
    $email =  $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
 

    $sql = "UPDATE can_bo SET avatar = '$avatar', fullname = '$fullname', email = '$email', phone_number = '$phone_number' 
                            , address = '$address' WHERE id = '$id_edit' ";
    
    if (mysqli_query($conn, $sql)) {
        header('location: ../admin.php');
    } else {
        $result = "Cập nhật khôg thành công" . mysqli_error($conn);
    }
}
