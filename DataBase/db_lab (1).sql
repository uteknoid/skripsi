-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 03:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id`, `nama_alat`, `jumlah`, `jenis`) VALUES
(6, 'Krimping', 10, 'Tidak Habis'),
(7, 'Konektor RJ 45', 100, 'Habis');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_lab`
--

CREATE TABLE `jadwal_lab` (
  `id` int(11) NOT NULL,
  `npm` int(10) NOT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  `ruang` varchar(100) NOT NULL,
  `dosen_pengampu` varchar(30) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`id`, `nama`, `deskripsi`, `logo`, `icon`, `alamat`, `telp`, `email`) VALUES
(1, 'LAB FTKOM UNCP', 'Website ini merupakan aplikasi yang dapat digunakan untuk mengelola peminjaman alat pada LAB FTKOM UNCP. Aplikasi ini merupakan aplikasi berbasis web yang di kelola langsung oleh pihak FTKOM UNCP', 'logo.png', 'icon.png', 'Jl. Latamacelling, Tompotika, Wara, Kota Palopo, Sulawesi Selatan 91911', '+6247122111', 'staf@ftkom-uncp.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `option_laporan`
--

CREATE TABLE `option_laporan` (
  `id` int(1) NOT NULL,
  `header1` varchar(255) NOT NULL,
  `header2` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `situs` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kota` varchar(255) NOT NULL,
  `an` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_laporan`
--

INSERT INTO `option_laporan` (`id`, `header1`, `header2`, `alamat`, `telp`, `situs`, `email`, `kota`, `an`, `nama`, `nip`) VALUES
(1, 'Fakultas Teknik Komputer ', 'Universitas Cokroaminoto Palopo', 'Jl. Latammacelling NO.9B Palopo', '(0471) 3200907', 'https://ftkom-uncp.ac.id', 'staf@ftkom-uncp.ac.id', 'Palopo', 'Kepala Laboratorium', 'Safwan Kasma, S.Kom., M.Pd', '0910068705');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text NOT NULL,
  `tipe` text NOT NULL,
  `volume` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `uraian`, `tipe`, `volume`, `satuan`, `harga`, `kredit`, `bukti`) VALUES
(5, '2022-01-25', 'qweqwe', 'asdasd', 2, 'ggg', '1000', '2000', 'uteknoid.png'),
(6, '2022-01-25', 'sdfsdfsdf', 'asdasdsd', 10, 'rrr', '10000', '100000', 'uteknoid1.png'),
(7, '2022-01-26', 'dgdgdgdg', 'ssssdff', 1, 'dfd', '100000', '100000', 'uteknoid2.png');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `jumlah_alat` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jaminan` varchar(255) NOT NULL,
  `proses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruang_lab`
--

CREATE TABLE `ruang_lab` (
  `id_lab` int(5) NOT NULL,
  `nama_lab` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='merupakan table ruangan lab';

--
-- Dumping data for table `ruang_lab`
--

INSERT INTO `ruang_lab` (`id_lab`, `nama_lab`, `status`) VALUES
(1, 'Laboratorium 1', 'Kosong'),
(2, 'Laboratorium 2', 'Kosong'),
(3, 'Laboratorium 3', 'Kosong'),
(4, 'Laboratorium 4', 'Kosong'),
(5, 'Laboratorium 5', 'Kosong'),
(6, 'Laboratorium 6', 'Kosong'),
(7, 'Laboratorium 7', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `saldo_masuk` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `bukti_saldo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id`, `tanggal`, `saldo_masuk`, `ket`, `bukti_saldo`) VALUES
(6, '2022-01-25', '5000000', 'Semester IV', 'uteknoid.png'),
(7, '2022-01-26', '1000000', 'Semester V', 'uteknoid1.png'),
(8, '2022-01-27', '1000000', 'Semester VI', 'uteknoid2.png');

-- --------------------------------------------------------

--
-- Table structure for table `saldo_terkini`
--

CREATE TABLE `saldo_terkini` (
  `id` int(11) NOT NULL,
  `saldo_terkini` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo_terkini`
--

INSERT INTO `saldo_terkini` (`id`, `saldo_terkini`) VALUES
(1, '6798000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `npm` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `qrlog` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `name`, `email`, `password`, `hp`, `qrlog`, `role_id`, `is_active`) VALUES
('123', 'Admin', 'admin@uncp.ac.id', '$2y$10$2OQ0DvgPbTOA0pCW.yunuOjbM5rCSx3YWIVqFKwnZn5zrJJvnv8oS', '081234567890', 'ivFH5jiPFl', 1, 1),
('12345', 'Dosen TI', 'motorjadul5@gmail.com', '$2y$10$9ug1207m03dSG07.YJdNC.0LEcx.STMiOdJlzKBjjM41hf6Vs8hey', '087869767818', 'd9zMj33JYq', 2, 1),
('1234567890', 'Rafli Fadillah', 'email@mail.com', '$2y$10$G5C2VUNfJGLdSvP8Ox/snOUaNOMd2IRnYcpaeejwqq2yXmmJ/DPM2', '085656767654', 'Eeq63f26Oc', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_lab`
--
ALTER TABLE `jadwal_lab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jam_awal` (`jam_awal`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_laporan`
--
ALTER TABLE `option_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_lab`
--
ALTER TABLE `ruang_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal_lab`
--
ALTER TABLE `jadwal_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `option_laporan`
--
ALTER TABLE `option_laporan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ruang_lab`
--
ALTER TABLE `ruang_lab`
  MODIFY `id_lab` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
