<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title> Đại học Tôn Đức Thắng </title>
</head>

<body>
  <!-- Header & Banner -->
  <?php
  include('header.php');
  ?>
  <!-- End -->
  <!-- Wrapper -->
  <div id="wrapper">
    <!-- News -->
    <div class="row" style="padding: 50px 0;">
      <div class="container">
        <h3 class="sub-heading">
          TIN TỨC
        </h3>
        <!-- Grid -->
        <div class="row" style="margin: 0 auto;">
          <?php
          include './connect.php';
          $sql1 = "SELECT * FROM tb_news";
          $result1 = mysqli_query($conn, $sql1);

          //Xử lý dữ liệu 
          if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
              echo '<div class="col-sm-4">';
              echo '<a href="#"> <img src="' . $row1['img'] . '" alt="" class="news-img"> </a>';
              echo '<a href="#" class="title text-black">
                <h5 class="title"> ' . $row1['title'] . ' </h5>
                </a>';
              echo '<a href="#" class="place"> KHOA HỌC-CÔNG NGHỆ </a> <span class="topbar" style="color: #000;"></span>  <span>' . $row1['date'] . '</span>';
              echo '<p class="content"> ' . $row1['content'] . ' </p>';
              echo '</div>';
            }
          }
          ?>
          <div class="btn-page">
            <a href="#">
              <h3> Trang tin tức >> </h3>
            </a>
          </div>
        </div>
      </div>

      <!-- End News -->
    </div>
    <!-- Tuyển Sinh -->
    <div class="row" style="padding: 50px 0; background: #9a9ea3;">
      <div class="container">
        <h3 class="sub-heading">
          TUYỂN SINH
        </h3>
        <!-- Grid -->
        <div class="row" style="margin: 0 auto;">
          <?php

          $sql2 = "SELECT * FROM tb_amission";
          $result1 = mysqli_query($conn, $sql2);

          //Xử lý dữ liệu 
          if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
          ?>
              <div class="col-sm-4">
                <a href="#">
                  <img src="<?php echo $row1['img_video'] ?>" alt="" class="news-img" style="height: 100%;">
                </a>
              </div>
              <div class="col-sm-4">
                <div class="my-menu">
                  <a href="#">
                    <!-- Cam-nang Tu-van Kham-pha ts ptts hdtnk dmn-->
                    <img src="<?php echo $row1['Cam_nang'] ?>" alt="" class="news-img mg-top">
                  </a>
                  <a href="#">
                    <img src="<?php echo $row1['Tu_van'] ?>" alt="" class="news-img mg-top">
                  </a>
                  <a href="#">
                    <img src="<?php echo $row1['Kham_pha'] ?>" alt="" class="news-img mg-top">
                  </a>
                </div>
              </div>
              <div class="col-sm-4">
                <a href="#">
                  <img src="<?php echo $row1['ts'] ?>" alt="" class="news-img">
                </a>
                <a href="#">
                  <img src="<?php echo $row1['ptts'] ?>" alt="" class="news-img mg-top">
                </a>
                <a href="#">
                  <img src="<?php echo $row1['hdtnk'] ?>" alt="" class="news-img mg-top">
                </a>
                <a href="#">
                  <img src="<?php echo $row1['dmn'] ?>" alt="" class="news-img mg-top">
                </a>
              </div>
        </div>
      </div>
    </div>
<?php
            }
          }
?>
<!-- End Tuyển Sinh -->

<!-- Events -->
<div class="row" style="padding: 50px 0; background-color: #f9fadc;">
  <div class="container">
    <h3 class="sub-heading">
      SỰ KIỆN
    </h3>
    <!-- Grid -->
    <div class="row" style="margin: 0 auto; ">
      <?php

      $sql3 = "SELECT * FROM tb_event";
      $result1 = mysqli_query($conn, $sql3);

      //Xử lý dữ liệu 
      if (mysqli_num_rows($result1) > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
      ?>
          <div class="col-sm-4">
            <div class="seminar">
              <a href="#">
                <img src="<?php echo $row1['img'] ?>" alt="" class="news-img">
              </a>
              <div class="date">
                <i class="fas fa-history"></i>
                <span class="day"><?php echo $row1['day'] ?></span>
                <span class="moth"><?php echo $row1['month'] ?></span>
              </div>
            </div>
            <a href="#" class="title text-black">
              <h5 class="title "> <?php echo $row1['title'] ?> </h5>
            </a>
            <p class="content">
              <?php echo $row1['content'] ?>
            </p>
          </div>
      <?php
        }
      }
      ?>

      <div class="col-sm-4">
        <div class="list-item">
          <div class="event-date">
            <span class="day">14</span>
            <span class="moth">Tháng 8</span>
          </div>
          <div class="link">
            <a href="#"> <span>Ngày hội việc làm Đại học Tôn Đức Thắng 2021</span> </a>
          </div>
        </div>

        <div class="list-item">
          <div class="event-date">
            <span class="day">20</span>
            <span class="moth">Tháng 1</span>
          </div>
          <div class="link">
            <a href="#"> <span>Bright technical careers – Are you ready?</span> </a>
          </div>
        </div>

        <div class="list-item">
          <div class="event-date">
            <span class="day">26</span>
            <span class="moth">Tháng 12</span>
          </div>
          <div class="link">
            <a href="#"> <span>Tọa đàm: "Trách nhiệm của thanh niên hành động giảm tác động của biến đổi khí hậu"</span> </a>
          </div>
        </div>

        <div class="list-item" style="padding-bottom: 0;">
          <div class="event-date">
            <span class="day">27</span>
            <span class="moth">Tháng 11</span>
          </div>
          <div class="link">
            <a href="#"> <span>Ngày hội tự động hoá 2020: Chuyển đổi số trong doanh nghiệp sản xuất</span> </a>
          </div>
        </div>
      </div>

      <div class="btn-page">
        <a href="#">
          <h3> Trang tin tức >> </h3>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Department -->
<div class="row" style="padding: 50px 0;">
  <div class="container">
    <h3 class="sub-heading">
      KHOA
    </h3>
    <div class="row">
      <div class="col-sm-3">
        box-1
      </div>
      <div class="col-sm-3">
        box-2
      </div>
      <div class="col-sm-3">
        box-3
      </div>
      <div class="col-sm-3">
        box-4
      </div>
    </div>
  </div>
</div>
  </div>
<!-- Khoa -->
<!-- End Khoa -->
<!-- End Wrapper -->
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>