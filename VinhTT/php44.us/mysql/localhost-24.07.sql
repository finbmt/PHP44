-- phpMyAdmin SQL Dump
-- version 4.4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2015 at 06:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
--
-- Database: `vinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `DangKi`
--

CREATE TABLE IF NOT EXISTS `DangKi` (
  `MaDangKi` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TenDangNhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DangKi`
--

INSERT INTO `DangKi` (`MaDangKi`, `HoTen`, `TenDangNhap`, `MatKhau`) VALUES
(6, 'vinhanh', 'vinhanh', 'vinhanh');

-- --------------------------------------------------------

--
-- Table structure for table `NguoiDung`
--

CREATE TABLE IF NOT EXISTS `NguoiDung` (
  `Email` varchar(100) NOT NULL,
  `TenTruyCap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `NguoiDung`
--

INSERT INTO `NguoiDung` (`Email`, `TenTruyCap`, `MatKhau`, `HoTen`) VALUES
('value-1', 'value-2', 'value-3', 'value-4');

-- --------------------------------------------------------

--
-- Table structure for table `PTB2`
--

CREATE TABLE IF NOT EXISTS `PTB2` (
  `BaiToan1` int(11) NOT NULL,
  `BienA` int(11) NOT NULL,
  `BienB` int(11) NOT NULL,
  `BienC` int(11) NOT NULL,
  `KetQua` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PTB2`
--

INSERT INTO `PTB2` (`BaiToan1`, `BienA`, `BienB`, `BienC`, `KetQua`) VALUES
(20, 1, 2, 3, '4'),
(21, 2, -7, 3, 'X1= 0.5  ;  X2= 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DangKi`
--
ALTER TABLE `DangKi`
  ADD PRIMARY KEY (`MaDangKi`);

--
-- Indexes for table `NguoiDung`
--
ALTER TABLE `NguoiDung`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `PTB2`
--
ALTER TABLE `PTB2`
  ADD PRIMARY KEY (`BaiToan1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DangKi`
--
ALTER TABLE `DangKi`
  MODIFY `MaDangKi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `PTB2`
--
ALTER TABLE `PTB2`
  MODIFY `BaiToan1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;--
-- Database: `webshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ChiTietHoaDon`
--

CREATE TABLE IF NOT EXISTS `tbl_ChiTietHoaDon` (
  `MaHD` int(11) NOT NULL DEFAULT '0',
  `MaHang` int(11) NOT NULL DEFAULT '0',
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_DMHang`
--

CREATE TABLE IF NOT EXISTS `tbl_DMHang` (
  `MaHang` int(11) NOT NULL,
  `TenHang` varchar(255) DEFAULT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `DVT` varchar(15) DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `MaNhaCungCap` int(11) DEFAULT NULL,
  `MaLoaiHang` int(11) DEFAULT NULL,
  `MoTa` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_DMKhach`
--

CREATE TABLE IF NOT EXISTS `tbl_DMKhach` (
  `MaKhach` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `DienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_DMKhach`
--

INSERT INTO `tbl_DMKhach` (`MaKhach`, `HoTen`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'Nguyễn Văn A', 'Đà Nẵng', '0905666777', 'abc@gmail.com'),
(2, ' Nguyễn Thị  C', 'Hà Nội', '0978999000', 'def@gmail.com'),
(3, ' Nguyễn Văn D', ' HCM', '0978999123', 'xyzz@yahoo.com'),
(4, ' Nguyễn Thị  E', 'Hải Phòng', '0978999666', 'ebd@vnn.vn'),
(5, ' Nguyễn Văn F', 'Đà Nẵng', '0978000001', 'edc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_HoaDonBan`
--

CREATE TABLE IF NOT EXISTS `tbl_HoaDonBan` (
  `MaHD` int(11) NOT NULL,
  `MaKhach` int(11) NOT NULL,
  `NgHD` datetime DEFAULT NULL,
  `DienGiai` varchar(255) DEFAULT NULL,
  `Duyet` bit(2) DEFAULT NULL,
  `NgDuyet` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_LoaiHang`
--

CREATE TABLE IF NOT EXISTS `tbl_LoaiHang` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_NguoiDung`
--

CREATE TABLE IF NOT EXISTS `tbl_NguoiDung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenTruyCap` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_NguoiDung`
--

INSERT INTO `tbl_NguoiDung` (`MaNguoiDung`, `TenTruyCap`, `MatKhau`, `HoTen`) VALUES
(1, 'admin', 'admin', 'vinhtt'),
(2, 'admin', 'admin', 'vinhtt'),
(5, 'admin', 'admin', 'vinhtt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_NhaCungCap`
--

CREATE TABLE IF NOT EXISTS `tbl_NhaCungCap` (
  `MaNhaCungCap` int(11) NOT NULL,
  `TenNhaCungCap` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `DienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_NhaCungCap`
--

INSERT INTO `tbl_NhaCungCap` (`MaNhaCungCap`, `TenNhaCungCap`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'Inet', 'Đà Nẵng', '0905666777', 'abc@gmail.com'),
(2, 'FPT', 'Hà Nội', '0978999000', 'def@gmail.com'),
(3, 'CMC', 'HCM', '0978999123', 'xyzz@yahoo.com'),
(4, 'Hải Phòng', 'Đà Nẵng', '0978999666', 'ebd@vnn.vn'),
(5, 'Viettel', 'Đà Nẵng', '0978000001', 'edc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ChiTietHoaDon`
--
ALTER TABLE `tbl_ChiTietHoaDon`
  ADD PRIMARY KEY (`MaHD`,`MaHang`);

--
-- Indexes for table `tbl_DMHang`
--
ALTER TABLE `tbl_DMHang`
  ADD PRIMARY KEY (`MaHang`);

--
-- Indexes for table `tbl_DMKhach`
--
ALTER TABLE `tbl_DMKhach`
  ADD PRIMARY KEY (`MaKhach`);

--
-- Indexes for table `tbl_HoaDonBan`
--
ALTER TABLE `tbl_HoaDonBan`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `tbl_LoaiHang`
--
ALTER TABLE `tbl_LoaiHang`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Indexes for table `tbl_NguoiDung`
--
ALTER TABLE `tbl_NguoiDung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `tbl_NhaCungCap`
--
ALTER TABLE `tbl_NhaCungCap`
  ADD PRIMARY KEY (`MaNhaCungCap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_DMHang`
--
ALTER TABLE `tbl_DMHang`
  MODIFY `MaHang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_DMKhach`
--
ALTER TABLE `tbl_DMKhach`
  MODIFY `MaKhach` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_HoaDonBan`
--
ALTER TABLE `tbl_HoaDonBan`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_LoaiHang`
--
ALTER TABLE `tbl_LoaiHang`
  MODIFY `MaLoaiHang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_NguoiDung`
--
ALTER TABLE `tbl_NguoiDung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_NhaCungCap`
--
ALTER TABLE `tbl_NhaCungCap`
  MODIFY `MaNhaCungCap` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
