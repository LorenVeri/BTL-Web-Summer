-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 11:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdtu-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `work` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sđt` int(10) NOT NULL,
  `intro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `avatar`, `work`, `name`, `email`, `sđt`, `intro`) VALUES
(3, 'kitudu', '123', 'http://cse.tlu.edu.vn/Portals/0/2016/Kieu%20Tuan%20Dung.jpg', 'Teacher', 'Kiều Tuấn Dũng', 'kitudu@gmail.com', 32266592, 'Ngành IT Việt Nam hiện nay ở đầu của sự phát triển. Có thể nói IT là vua của các nghề. Vừa có tiền, có quyền. Vừa kiếm được nhiều $ lại được xã hội trọng vọng.'),
(79, 'vulong', '123', './assets/image-admin/user-image/users/2.jpg', 'Dev', 'Vũ Ngọc Long', 'longvu@gmail.com', 336628452, 'Không có gì để giởi thiệu'),
(83, 'bill', '123', './assets/image-admin/user-image/users/5.jpg', 'Dev', 'Bill Gate', 'billgate@gmail.com', 2147483647, 'Ông hoàng tiền tệ, kẻ hủy diệt sàn chứng khoán');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amission`
--

CREATE TABLE `tb_amission` (
  `id` int(15) UNSIGNED NOT NULL,
  `img_video` varchar(255) NOT NULL,
  `Cam_nang` varchar(255) NOT NULL,
  `Tu_van` varchar(255) NOT NULL,
  `Kham_pha` varchar(255) NOT NULL,
  `ts` varchar(255) NOT NULL,
  `ptts` varchar(255) NOT NULL,
  `hdtnk` varchar(255) NOT NULL,
  `dmn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_amission`
--

INSERT INTO `tb_amission` (`id`, `img_video`, `Cam_nang`, `Tu_van`, `Kham_pha`, `ts`, `ptts`, `hdtnk`, `dmn`) VALUES
(1, 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/image_video.jpg', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/Cam-nang.jpg', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/Tu-van.jpg', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/Kham-pha.jpg', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/ts2021.PNG', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/ptts.PNG', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/hdtnk.PNG', 'https://tdtu.edu.vn/sites/www/files/Admission/admission_front/hdtnk.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `day` varchar(10) NOT NULL,
  `month` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id`, `title`, `img`, `content`, `day`, `month`) VALUES
(1, 'Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghi', './assets/image/events-image/Seminar-event.jpg', 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', '5', 'Tháng 8'),
(2, 'Seminar khoa học: Spike Protein 501Y.V2 chống lại kháng thể trung hòa trong mô phỏng nguyên tử', './assets/image/events-image/Seminar-event.jpg', 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', '14', 'Tháng 8');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `date`, `img`, `content`) VALUES
(1, 'Giảng viên Đại học Tôn Đức Thắng sáng chế vật liệu làm khẩu trang tự phân huỷ', '2021-08-03', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/COVID-0.jpeg?itok=m6Gi7zQ-', 'Vật liệu có nguồn gốc tự nhiên, có khả năng tự phân hủy sinh học và kháng khuẩn, lọc bụi mịn tốt hơn những loại khẩu trang hiện tại.'),
(2, 'Seminar: Nghiên cứu khoa học trong lĩnh vực Kế toán và Kinh tế kỷ nguyên', '2021-08-21', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Hoang-Chinh/Chinh-0.jpg?itok=QgMjd9zY', 'Sự kiện học thuật khoa Kế toán tổ chức với sự tham gia của nhiều chuyên gia đến từ Anh Quốc, Malaysia, Đài Loan, Ấn Độ, Indonesia.'),
(3, 'Sinh viên Đại học Tôn Đức Thắng đoạt giải Nhất cuộc thi quốc tế', '2021-08-01', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Ke-Toan/W2.png?itok=Cjktrbfu', 'Colorama Award là cuộc thi về đổi mới và sáng tạo trong thiết kế thời trang, được tổ chức vào tháng 10 hàng năm bởi công ty Filmar (Italia).\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_amission`
--
ALTER TABLE `tb_amission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_amission`
--
ALTER TABLE `tb_amission`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
