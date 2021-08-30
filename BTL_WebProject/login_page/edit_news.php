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
    <title> Cập nhật tin tức</title>

</head>


<?php
include("./assets/config/connect-tlu.php");
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
            $sql = "SELECT * FROM tb_news WHERE id = '$id_edit'";
            $result = mysqli_query($conn, $sql);
            //Xử lý dữ liệu 
            while ($row = mysqli_fetch_assoc($result)) {
                $title =  $row['title'];
                $image_news =  $row['img'];
                $date =  $row['date'];
                $content = $row['content'];
            }
            ?>
            <div class="row">
                <div class="col-sm-4 bd-rd">
                    <div class="card-body">
                        <img src="<?php echo $image_news ?>" alt="img" style="width: 100%;">
                    </div>
                </div>
                <div class="col-sm-8 bd-rd">
                    <div class="card-body">
                        <form method="POST" role="form" id="form_Signin" action="./news-manager/edit_info_news.php">
                            <div class="form-title">
                                <span for="form-tilte" class="f-right">Tiêu đề</span>
                                <input type="text" class="form-control f-n" name="title" value="<?php echo $title ?>">
                            </div>
                            <div class="form-img">
                                <span for="form-img" class="f-right">Ảnh tin tức</span>
                                <input type="text" class="form-control f-n" name="image_news" value="<?php echo $image_news ?>">
                            </div>
                            <div class="form-date">
                                <span for="pass_signin" class="f-right">Ngày diễn ra </span>
                                <input type="text" class="form-control f-m" name="date" value="<?php echo $date ?>">
                            </div>
                            <div class="form-content">
                                <span for="form-content" class="f-right">Nội dung</span>
                                <input type="text" class="form-control f-m" name="content" value="<?php echo $content ?>">
                            </div>
                            <button class="btn btn-danger f-bot" id="submit_add" name="submit_add" style="margin-top: 20px;">Cập nhật</button>
                            <a href="./news.php" class="btn btn-danger f-bot" style="margin-top: 20px;">Hủy</a>
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