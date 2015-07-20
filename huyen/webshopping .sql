-- phpMyAdmin SQL Dump
-- version 4.4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2015 at 02:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `ChiTietHoaDon`
--

CREATE TABLE IF NOT EXISTS `ChiTietHoaDon` (
  `MaHD` int(11) NOT NULL DEFAULT '0',
  `MaHang` int(11) NOT NULL DEFAULT '0',
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `DMHang`
--

CREATE TABLE IF NOT EXISTS `DMHang` (
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
-- Table structure for table `DMKhach`
--

CREATE TABLE IF NOT EXISTS `DMKhach` (
  `MaKhach` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `DienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DMKhach`
--

INSERT INTO `DMKhach` (`MaKhach`, `HoTen`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'Nguyễn Văn A', 'Đà Nẵng', '0905666777', 'abc@gmail.com'),
(2, 'Nguyễn Thị  C', 'Hà Nội', '0978999000', 'def@gmail.com'),
(3, 'Nguyễn Văn D', 'HCM', '0978999123', 'xyzz@yahoo.com'),
(4, 'Nguyễn Thị E', 'Hải Phòng', '0978999666', 'ebd@vnn.vn'),
(5, 'Nguyễn Văn F', 'Đà Nẵng', '0978000001', 'edc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `HoaDonBan`
--

CREATE TABLE IF NOT EXISTS `HoaDonBan` (
  `MaHD` int(11) NOT NULL,
  `MaKhach` int(11) NOT NULL,
  `NgHD` datetime DEFAULT NULL,
  `DienGiai` varchar(255) DEFAULT NULL,
  `Duyet` bit(8) DEFAULT NULL,
  `NgDuyet` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `HOCSINH`
--

CREATE TABLE IF NOT EXISTS `HOCSINH` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `CITY` varchar(30) NOT NULL,
  `SEX` varchar(2) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `IDLOP` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HOCSINH`
--

INSERT INTO `HOCSINH` (`ID`, `NAME`, `BIRTHDAY`, `CITY`, `SEX`, `AGE`, `IDLOP`) VALUES
(1, 'NGUYỄN VĂN TUẤN', '2015-07-08', 'HÀ NỘI', 'M', 20, 1),
(2, 'NGUYỄN TRỌNG VINH', '2015-07-08', 'TP HCM', 'M', 22, 2),
(3, 'NGUYỄN THỊ HUYỀN', '2015-07-08', 'ĐÀ NẴNG', 'F', 21, 3),
(4, 'TRẦN VĂN QUANG', '1991-01-31', 'HÀ NỘI', 'M', 22, 1),
(5, 'NGUYÊN GIA THÁI', '2015-07-08', 'TP HCM', 'M', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `LoaiHang`
--

CREATE TABLE IF NOT EXISTS `LoaiHang` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LOP`
--

CREATE TABLE IF NOT EXISTS `LOP` (
  `IDLOP` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LOP`
--

INSERT INTO `LOP` (`IDLOP`, `NAME`) VALUES
(1, '1A'),
(2, '1B');

-- --------------------------------------------------------

--
-- Table structure for table `NguoiDung`
--

CREATE TABLE IF NOT EXISTS `NguoiDung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenTruyCap` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `NhaCungCap`
--

CREATE TABLE IF NOT EXISTS `NhaCungCap` (
  `MaNhaCungCap` int(11) NOT NULL,
  `TenNhaCungCap` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `DienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `NhaCungCap`
--

INSERT INTO `NhaCungCap` (`MaNhaCungCap`, `TenNhaCungCap`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'Inet\r\n', 'Đà Nẵng', '0905666777', 'abc@gmail.com'),
(2, 'FPT\r\n', 'Đà Nẵng', '0978999000', 'def@gmail.com'),
(3, 'CMC\r\n', 'Đà Nẵng', '0978999123', 'xyzz@yahoo.com'),
(4, 'VNPT\r\n', 'Đà Nẵng', '0978999666', 'ebd@vnn.vn'),
(5, 'Viettel\r\n', 'Đà Nẵng', '0978000001', 'edc@gmail.com'),
(6, 'SamSung', 'Đà Nẵng', '051183732', 'hptm@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ChiTietHoaDon`
--
ALTER TABLE `ChiTietHoaDon`
  ADD PRIMARY KEY (`MaHD`,`MaHang`),
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaHang` (`MaHang`);

--
-- Indexes for table `DMHang`
--
ALTER TABLE `DMHang`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaNhaCungCap` (`MaNhaCungCap`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Indexes for table `DMKhach`
--
ALTER TABLE `DMKhach`
  ADD PRIMARY KEY (`MaKhach`);

--
-- Indexes for table `HoaDonBan`
--
ALTER TABLE `HoaDonBan`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKhach` (`MaKhach`);

--
-- Indexes for table `HOCSINH`
--
ALTER TABLE `HOCSINH`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `LoaiHang`
--
ALTER TABLE `LoaiHang`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Indexes for table `LOP`
--
ALTER TABLE `LOP`
  ADD PRIMARY KEY (`IDLOP`);

--
-- Indexes for table `NguoiDung`
--
ALTER TABLE `NguoiDung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `NhaCungCap`
--
ALTER TABLE `NhaCungCap`
  ADD PRIMARY KEY (`MaNhaCungCap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DMHang`
--
ALTER TABLE `DMHang`
  MODIFY `MaHang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DMKhach`
--
ALTER TABLE `DMKhach`
  MODIFY `MaKhach` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `HoaDonBan`
--
ALTER TABLE `HoaDonBan`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `HOCSINH`
--
ALTER TABLE `HOCSINH`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `LoaiHang`
--
ALTER TABLE `LoaiHang`
  MODIFY `MaLoaiHang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `LOP`
--
ALTER TABLE `LOP`
  MODIFY `IDLOP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `NguoiDung`
--
ALTER TABLE `NguoiDung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `NhaCungCap`
--
ALTER TABLE `NhaCungCap`
  MODIFY `MaNhaCungCap` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `DMHang`
--
ALTER TABLE `DMHang`
  ADD CONSTRAINT `dmhang_ibfk_1` FOREIGN KEY (`MaNhaCungCap`) REFERENCES `NhaCungCap` (`MaNhaCungCap`),
  ADD CONSTRAINT `dmhang_ibfk_2` FOREIGN KEY (`MaLoaiHang`) REFERENCES `LoaiHang` (`MaLoaiHang`);

--
-- Constraints for table `HoaDonBan`
--
ALTER TABLE `HoaDonBan`
  ADD CONSTRAINT `hoadonban_ibfk_1` FOREIGN KEY (`MaKhach`) REFERENCES `DMKhach` (`MaKhach`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
