<?php
include("../assets/config/connect-tlu.php");

// B2: truy vấn sửa
if (isset($_POST['submit_edit'])) {

    // Lấy dữ liệu từ form lưu vào biến
    $id_edit = $_POST['id'];
    $title =  $_POST['title'];
    $image_news =  $_POST['image_news'];
    $date =  $_POST['date'];
    $content = $_POST['content'];

    $sql = "UPDATE tb_news SET title = '$title', date = '$date', img = '$image_news', content = '$content' WHERE id = '$id_edit' ";
    if (mysqli_query($conn, $sql)) {
        header('location: ../news.php');
    } else {
        $result = "Cập nhật khôg thành công" . mysqli_error($conn);
    }
}
