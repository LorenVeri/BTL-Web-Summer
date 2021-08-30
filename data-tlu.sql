-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 09:39 AM
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
-- Database: `data-tlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `number_phone`, `email`) VALUES
(1, 'Vũ Ngọc Long', 'vulong', '123', '', ''),
(2, 'Tu_van', 'admin', '$2y$10$RX7QdpimD6GHA.yRqnLKsuin0eul8LD8pb35QyJgwoA6WB/sAW49i', '1111111111', 'mr.vungoclong@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `can_bo`
--

CREATE TABLE `can_bo` (
  `id` int(15) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `id_don_vi` int(15) DEFAULT NULL,
  `id_chuc_vu` int(15) DEFAULT NULL,
  `id_admin` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `can_bo`
--

INSERT INTO `can_bo` (`id`, `avatar`, `fullname`, `email`, `phone_number`, `address`, `id_don_vi`, `id_chuc_vu`, `id_admin`) VALUES
(1, 'http://cse.tlu.edu.vn/Portals/0/Images/2016/Tung%20VIASM.jpg', 'Nguyễn Thanh Tùng', 'thanhtung@e.tlu.edu.vn', '0336627852', '175 Tây Sơn - Đống Đa - Hà Nội', 305, 1, NULL),
(2, 'http://cse.tlu.edu.vn/Portals/0/Users/DangThuHien.jpg', 'Đặng Thu Hiền', 'thuhien@e.tlu.edu.vn', '0336747854', '175 Tây Sơn - Đống Đa - Hà Nội', 305, 2, NULL),
(3, 'http://cse.tlu.edu.vn/Portals/0/2016/HuongNT.jpg', 'Nguyễn Thị Thu Hương', 'thuhuong@e.tlu.edu.vn', '0333427953', '175 Tây Sơn - Đống Đa - Hà Nội', 305, 3, NULL),
(4, 'http://cse.tlu.edu.vn/Portals/0/Users/%e1%ba%a3nh%20th%e1%ba%bb.png', 'Nguyễn Khánh Linh', 'khanhlinh@e.tlu.edu.vn', '033223826', '175 Tây Sơn - Đống Đa - Hà Nội', 305, 3, NULL),
(5, 'http://cse.tlu.edu.vn/Portals/0/Users/nguyenhuutho.jpg', 'Nguyễn Hữu Thọ', 'huutho@e.tlu.edu.vn', '033449597', '175 - Tây Sơn - Đống Đa - Hà Nội', 203, 4, NULL),
(6, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t1.6435-9/134082727_3746147788797314_2150711497752461835_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_gCTNS-2xeYAX8mYEaN&_nc_ht=scontent.fhan14-2.fna&oh=39583c2d0a42d48cebf5d15dd34b44de&oe=6147E55A', 'Đỗ Lân', 'dolan@gmail.com', '033545971', '175 - Tây Sơn - Đống Đa - Hà Nội', 203, 5, NULL),
(7, 'http://cse.tlu.edu.vn/Portals/0/Users/le%20duc%20hau.jpg', 'Nguyễn Đức Hậu', 'haunguyen@e.tlu.edu.vn', '03554595', '175 - Tây Sơn - Đống Đa - Hà Nội', 203, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id` int(15) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`id`, `name`, `description`) VALUES
(1, 'Trưởng Khoa', '3.8521.422'),
(2, 'P.Trưởng Khoa', NULL),
(3, 'Trợ lý Khoa', '3.5632.211'),
(4, 'Trưởng BM', NULL),
(5, 'Phó BM', NULL),
(6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `don_vi`
--

CREATE TABLE `don_vi` (
  `id` int(15) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_vi`
--

INSERT INTO `don_vi` (`id`, `name`, `description`) VALUES
(203, 'BM Toán học: P203', NULL),
(305, 'Văn phòng Khoa: P305', NULL);

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
  `id` int(15) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL
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
  `id` int(15) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `date`, `img`, `content`) VALUES
(1, 'Giảng viên Đại học Tôn Đức Thắng sáng chế vật liệu làm khẩu trang tự phân huỷ', '2021-08-03', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/COVID-0.jpeg?itok=m6Gi7zQ-', 'Vật liệu có nguồn gốc tự nhiên, có khả năng tự phân hủy sinh học và kháng khuẩn, lọc bụi mịn tốt hơn những loại khẩu trang hiện tại.'),
(2, 'Seminar: Nghiên cứu khoa học trong lĩnh vực Kế toán và Kinh tế kỷ nguyên', '2021-08-21', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Hoang-Chinh/Chinh-0.jpg?itok=QgMjd9zY', 'Sự kiện học thuật khoa Kế toán tổ chức với sự tham gia của nhiều chuyên gia đến từ Anh Quốc, Malaysia, Đài Loan, Ấn Độ, Indonesia.'),
(3, 'Sinh viên Đại học Tôn Đức Thắng đoạt giải Nhất cuộc thi quốc tế năm 2021', '2021-08-01', 'https://tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Ke-Toan/W2.png?itok=Cjktrbfu', 'Colorama Award là cuộc thi về đổi mới và sáng tạo trong thiết kế thời trang, được tổ chức vào tháng 10 hàng năm bởi công ty Filmar (Italia).\r\n'),
(15, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `can_bo`
--
ALTER TABLE `can_bo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_vi` (`id_don_vi`),
  ADD KEY `id_chuc_vu` (`id_chuc_vu`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_vi`
--
ALTER TABLE `don_vi`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `can_bo`
--
ALTER TABLE `can_bo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `don_vi`
--
ALTER TABLE `don_vi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `tb_amission`
--
ALTER TABLE `tb_amission`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `can_bo`
--
ALTER TABLE `can_bo`
  ADD CONSTRAINT `can_bo_ibfk_1` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id`),
  ADD CONSTRAINT `can_bo_ibfk_2` FOREIGN KEY (`id_chuc_vu`) REFERENCES `chuc_vu` (`id`),
  ADD CONSTRAINT `can_bo_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
