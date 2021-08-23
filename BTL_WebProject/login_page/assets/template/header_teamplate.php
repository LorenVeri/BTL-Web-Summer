<div class="header">
        <div class="sidebar">
            <div class="container">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="../login_page/admin.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="../login_page/info.php">Người dùng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="../login_page/news.php">Tin Tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="../login_page/amission.php">Tuyển sinh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Sự kiện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Khoa</a>
                        </li>
                    </ul>
                    <?php
                    $sql1 = "SELECT * FROM tb_admin";
                    $result1 = mysqli_query($conn, $sql1);
                    //Xử lý dữ liệu 
                    if (mysqli_num_rows($result1) > 0) {
                        $row1 = mysqli_fetch_assoc($result1);
                    ?>
                        
                        <a class="navbar-brand" href=""><i class="fas fa-user"></i></a>  
                    <?php
                    }
                    ?>
                </nav>
            </div>
        </div>
    </div>