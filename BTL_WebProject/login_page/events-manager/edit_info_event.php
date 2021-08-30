<?php
include("../assets/config/connect-tlu.php");

// B2: truy vấn sửa
if (isset($_POST['submit_edit'])) {

    // Lấy dữ liệu từ form lưu vào biến
    $id_edit = $_POST['id'];
    $title =  $_POST['title'];
    $img_event =  $_POST['img_event'];
    $content =  $_POST['content'];
    $day = $_POST['day'];
    $month = $_POST['month'];
 

    $sql = "UPDATE tb_event SET title = '$title', img = '$img_event', content = '$content', day = '$day' 
                                , month = '$month' WHERE id = '$id_edit' ";
                                echo $sql;
    if (mysqli_query($conn, $sql)) {
        header('location: ../event.php');
    } else {
        $result = "Cập nhật khôg thành công" . mysqli_error($conn);
    }
}
