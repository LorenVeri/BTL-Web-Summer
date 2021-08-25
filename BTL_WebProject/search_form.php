<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style_search.css">
    <title> Đại học Tôn Đức Thắng </title>
</head>

<body>
    <!-- Header & Banner -->
    <?php
    include('header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="sub-heading" style="margin-top: 40px;">
                    TÌM KIẾM THÔNG TIN
                </h3>
                <form action="./search.php" method="POST" role="form">
                    <div class="form-search">
                        <legend>Nhập nội dung tìm kiếm</legend>
                        <input type="text" class="form-control f-n" name="search-bar">
                        <button class="btn btn-danger" id="btn-search" name="btn-search" style="margin-top: 20px; display: inline;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Hiển thị thông tin -->
        <div class="row">
            <div class="col-3">
                aa
            </div>
            <div class="col-3">
                aa
            </div>
            <div class="col-3">
                aa
            </div>
            <div class="col-3">
                aa
            </div>
        </div>
    </div>
    </div>
    <!-- End Wrapper -->
    <!-- JS -->
    <script src="./assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>