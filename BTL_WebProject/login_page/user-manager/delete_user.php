<?php 
    include ("../assets/config/connect.php");
    $id_delete = $_GET['id'];

    // B2: truy vấn xóa
    $sql = "DELETE FROM tb_admin WHERE id=$id_delete";
    $result = mysqli_query($conn, $sql);

    // Quay lại trang admin nếu xóa thành công
    if($result == true) {
        header('location: ../admin.php');
    }
?>