-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 05:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(50) NOT NULL,
  `idsanpham` int(50) NOT NULL,
  `tensanpham` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(50) NOT NULL,
  `tong` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `idsanpham`, `tensanpham`, `soluong`, `tong`) VALUES
(59, 1, 'Casio G-SHOCK DW-5600BB-1DR', 1, 2876),
(59, 2, 'Casio MTP-1374L-7AVDF', 1, 1714),
(59, 3, 'Casio G-SHOCK GA-110-1ADR', 1, 3194);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) NOT NULL,
  `tenkhach` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `idkhach` int(50) NOT NULL,
  `thoigian` date NOT NULL,
  `tong` int(50) NOT NULL,
  `tinhtrang` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `tenkhach`, `idkhach`, `thoigian`, `tong`, `tinhtrang`) VALUES
(59, 'hocvohoc', 1, '2020-06-21', 7784, 'đã hủy đơn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(8) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `SDT`, `DIACHI`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
(1, 'hocvohoc', '0909520341', '6 6 6', 'dzehox@gmail.com', '123456789', 'dzehox@gmail.com'),
(1000, 'Nguyễn Văn A', '0128326548', 'TPHCM', 'aaaaaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'nguyenvana@gmail.com'),
(1001, 'Phạm Văn B', '0123456789', 'TPHCM', 'bpham', '5b1b27a431ce0ba6310022738c465c57', 'bpham123@gmail.com'),
(1002, 'Nguyễn Thị C', '0123456789', 'Đà Nẵng', 'nguyenthic', '4aee3e28df37ea1af64bd636eca59dcb', 'nguyenthic111@gmail.com'),
(1003, 'Lê D', '08888888a', 'Hà Nội', 'le123', '4d6e0517a8166caee8ba1d94f1036feb', 'lelele88@gmail.com'),
(1004, 'Phan Văn E', '0849308490', 'Quảng Nam', 'phanphan', '11111111111111111111111', 'phanvanvan@gmail.com'),
(1005, 'Trương Thị F', 'aaaaaaaaaa', 'TPHCM', 'thi333', 'dd4b21e9ef71e1291183a46b913ae6f2', 'truongthi007@gmail.com'),
(1006, 'Phạm Minh Hiển', '0922638605', '15/4/8 Lê Lai Phường 12 Quận Tân Bình', 'hienpham2703', '2a9e8e915babc89edfbf38cbe80f9624', 'hienpham2703@gmail.com'),
(1007, 'dbdkjv', '254893486', 'fhbkvzdbfvkdb', 'vbdhbvkdbfvk', '4c5972b22c374b8c21c461b9304bfc8c', '123456asda@gmail.com'),
(1008, 'Phạm Minh Bảy', '0922638605', 'Tân Bình', 'hienpham2803', '2828d922d4a513c8cd361d884253d452', 'minhbay113@gmail.com'),
(1046, 'Đoàn Nguyễn Hương Quỳnh', '0922638605', 'Tân Bình', 'hquynh1108', '25f9e794323b453885f5181f1b624d0b', 'quynhhuongnguyen@gmail.com'),
(1047, 'Trần Thị Mơ', '0933665232', 'Tân Bình', 'mtran1305', '40070c2e65f1dfa471f5b9ff0f1838da', 'tranthimo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idord` int(10) NOT NULL,
  `MAKH` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idord`, `MAKH`) VALUES
(60, 1),
(61, 1005),
(62, 1005),
(63, 1005);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `idorder` int(50) NOT NULL,
  `iditem` int(50) NOT NULL,
  `amount` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`idorder`, `iditem`, `amount`) VALUES
(60, 1, 3),
(61, 9, 1),
(62, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `danhcho` varchar(256) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `danhcho`, `price`, `image`) VALUES
(1, 'Casio G-SHOCK DW-5600BB-1DR', 'Nam', 2876.00, 'img1/product/casio/casio-g-shock-DW-5600BB-NAM.jpg'),
(2, 'Casio MTP-1374L-7AVDF', 'Nam', 1714.00, 'img1/product/casio/dong-ho-casio-mtp-1374l-7avdf-nam-pin-day-da-a-1.jpg'),
(3, 'Casio G-SHOCK GA-110-1ADR', 'Nam', 3194.00, 'img1/product/casio/dong-ho-casio-g-shock-GA-110-1ADR.jpg'),
(4, 'Casio MTP-1374L-1AVDF', 'Nam', 1714.00, 'img1/product/casio/dong-ho-casio-mtp-1374l-1avdf-nam-pin-day-da-a-1.jpg'),
(5, 'Casio MTP-1374D-1AVDF', 'Nam', 1777.00, 'img1/product/casio/dong-ho-casio-mtp-1374d-1avdf-nam-pin-day-inox-a-1.jpg'),
(6, 'Casio A159WGED-1DF', 'Nữ', 2221.00, 'img1/product/casio/A159WGED-1DF-3.jpg'),
(7, 'Casio AE-1200WH-1AVDF', 'Nam', 931.00, 'img1/product/casio/dong-ho-casio-ae-1200wh-1avdf-nam-pin-day-nhua-a-1.jpg'),
(8, 'Casio LA680WEGB-1ADF', 'Nữ', 1819.00, 'img1/product/casio/dong-ho-casio-LA680WEGB-1ADF.jpg'),
(9, 'Casio B640WC-5ADF', 'Nữ', 1565.00, 'img1/product/casio/B650WC-5ADF.jpg'),
(10, 'Casio AE-1200WHD-1AVDF', 'Nam', 1121.00, 'img1/product/casio/casio-AE-1200WHD-1AVDF-NAM.jpg'),
(11, 'Casio B650WC-5ADF', 'Nam', 1587.00, 'img1/product/casio/B650WC-5ADF.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`,`idsanpham`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhach` (`idkhach`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idord`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`idorder`,`iditem`),
  ADD KEY `iditem` (`iditem`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1050;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idord` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`id`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idkhach`) REFERENCES `khachhang` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`idorder`) REFERENCES `order` (`idord`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`iditem`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
