-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 09:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuti2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `telp_adm` varchar(15) NOT NULL,
  `user_adm` varchar(50) NOT NULL,
  `pass_adm` varchar(100) NOT NULL,
  `foto_adm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `telp_adm`, `user_adm`, `pass_adm`, `foto_adm`) VALUES
(1, 'Administrator', '08962878534', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `no_cuti` varchar(30) NOT NULL,
  `npp` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `leader` varchar(20) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `spv` varchar(20) NOT NULL,
  `stt_cuti` varchar(50) NOT NULL,
  `ket_reject` text NOT NULL,
  `hrd_app` int(2) NOT NULL,
  `lead_app` int(2) NOT NULL,
  `spv_app` int(2) NOT NULL,
  `mng_app` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`no_cuti`, `npp`, `tgl_pengajuan`, `tgl_awal`, `tgl_akhir`, `durasi`, `keterangan`, `leader`, `manager`, `spv`, `stt_cuti`, `ket_reject`, `hrd_app`, `lead_app`, `spv_app`, `mng_app`) VALUES
('04022020134004', '04190', '2020-02-04', '2020-02-10', '2020-02-14', 5, 'cuti tahunan', 'admin', '', '', 'Approved', '', 1, 0, 0, 0),
('04022020134155', '04190', '2020-02-04', '2020-09-28', '2020-09-30', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020134223', '04190', '2020-02-04', '2020-04-13', '2020-04-14', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020134346', '04654', '2020-02-04', '2020-03-24', '2020-03-26', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020134429', '04654', '2020-02-04', '2020-07-27', '2020-07-30', 4, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020134505', '04654', '2020-02-04', '2020-09-28', '2020-09-30', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020135300', '05858', '2020-02-04', '2020-03-19', '2020-03-20', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020135336', '05858', '2020-02-04', '2020-06-25', '2020-06-26', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020135401', '05858', '2020-02-04', '2020-10-21', '2020-10-23', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020135510', '05858', '2020-02-04', '2020-12-28', '2020-12-29', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020135641', '05858', '2020-02-04', '2020-01-31', '2020-01-31', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140303', '04664', '2020-02-04', '2020-01-02', '2020-01-06', 5, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140340', '04664', '2020-02-04', '2020-06-25', '2020-06-26', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140440', '04664', '2020-02-04', '2020-06-25', '2020-06-26', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140546', '04664', '2020-02-04', '2020-10-21', '2020-10-23', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140636', '04664', '2020-02-04', '2020-12-28', '2020-12-29', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140801', '07682', '2020-02-04', '2020-02-24', '2020-02-26', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140845', '07682', '2020-02-04', '2020-06-08', '2020-06-08', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140907', '07682', '2020-02-04', '2020-07-06', '2020-07-07', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020140935', '07682', '2020-02-04', '2020-10-19', '2020-10-20', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141022', '07682', '2020-02-04', '2020-11-23', '2020-11-23', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141105', '07682', '2020-02-04', '2020-12-28', '2020-12-28', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141217', '07688', '2020-02-04', '2020-02-03', '2020-02-05', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141257', '07688', '2020-02-04', '2020-07-06', '2020-07-08', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141334', '07688', '2020-02-04', '2020-09-11', '2020-09-11', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141400', '07688', '2020-02-04', '2020-09-14', '2020-09-14', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141423', '07688', '2020-02-04', '2020-11-13', '2020-11-13', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141446', '07688', '2020-02-04', '2020-11-16', '2020-11-16', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141640', '07692', '2020-02-04', '2020-02-07', '2020-02-11', 5, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141723', '07692', '2020-02-04', '2020-06-25', '2020-06-26', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141749', '07692', '2020-02-04', '2020-07-10', '2020-07-10', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141810', '07692', '2020-02-04', '2020-09-04', '2020-09-04', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141848', '07692', '2020-02-04', '2020-10-12', '2020-10-12', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020141926', '07692', '2020-02-04', '2020-12-30', '2020-12-31', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142107', '07843', '2020-02-04', '2020-01-02', '2020-01-06', 5, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142136', '07843', '2020-02-04', '2020-06-25', '2020-06-26', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142203', '07843', '2020-02-04', '2020-07-16', '2020-07-17', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142304', '07843', '2020-02-04', '2020-09-08', '2020-09-10', 3, ' cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142633', '08260', '2020-02-04', '2020-01-02', '2020-01-03', 2, 'cuti tahunan', 'admin', '', '', 'Approved', '', 1, 0, 0, 0),
('04022020142720', '08260', '2020-02-04', '2020-01-08', '2020-01-08', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142819', '08260', '2020-02-04', '2020-04-01', '2020-04-03', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020142916', '08260', '2020-02-04', '2020-05-29', '2020-05-29', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020143056', '08260', '2020-02-04', '2020-07-30', '2020-07-30', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020143138', '08260', '2020-02-04', '2020-08-21', '2020-08-21', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020143212', '08260', '2020-02-04', '2020-10-30', '2020-10-30', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020143733', '09516', '2020-02-04', '2020-02-24', '2020-02-24', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020143933', '09516', '2020-02-04', '2020-04-13', '2020-04-13', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144041', '09516', '2020-02-04', '2020-07-01', '2020-07-03', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144156', '09516', '2020-02-04', '2020-12-23', '2020-12-23', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144225', '09516', '2020-02-04', '2020-12-28', '2020-12-31', 4, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144359', '09540', '2020-02-04', '2020-01-02', '2020-01-06', 5, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144422', '09540', '2020-02-04', '2020-04-09', '2020-04-10', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144455', '09540', '2020-02-04', '2020-05-28', '2020-05-29', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144532', '09540', '2020-02-04', '2020-07-30', '2020-07-30', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144609', '09540', '2020-02-04', '2020-08-18', '2020-08-18', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144656', '09540', '2020-02-04', '2020-10-30', '2020-10-30', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020144907', '09902', '2020-02-04', '2020-02-27', '2020-02-27', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145006', '09902', '2020-02-04', '2020-03-21', '2020-03-21', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145037', '09902', '2020-02-04', '2020-04-01', '2020-04-03', 3, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145110', '09902', '2020-02-04', '2020-05-28', '2020-05-29', 2, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145222', '09902', '2020-02-04', '2020-07-17', '2020-07-17', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145255', '09902', '2020-02-04', '2020-09-03', '2020-09-03', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020145326', '09902', '2020-02-04', '2020-12-11', '2020-12-11', 1, 'cuti tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152253', '09530', '2020-02-04', '2020-02-20', '2020-02-21', 2, 'Cuti Tahunan ', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152335', '09530', '2020-02-04', '2020-02-24', '2020-02-24', 1, 'Cuti Tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152410', '09530', '2020-02-04', '2020-06-29', '2020-06-30', 2, 'Cuti Tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152447', '09530', '2020-02-04', '2020-07-08', '2020-07-10', 3, 'Cuti Tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152513', '09530', '2020-02-04', '2020-10-28', '2020-10-28', 1, 'Cuti Tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0),
('04022020152539', '09530', '2020-02-04', '2020-10-30', '2020-10-30', 1, 'Cuti Tahunan', 'admin', '', '', 'Menunggu Approval Admin', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `npp` varchar(20) NOT NULL,
  `nama_emp` varchar(100) NOT NULL,
  `jk_emp` varchar(20) NOT NULL,
  `telp_emp` varchar(20) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `jml_cuti` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_emp` text NOT NULL,
  `active` varchar(20) NOT NULL,
  `id_adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`npp`, `nama_emp`, `jk_emp`, `telp_emp`, `divisi`, `jabatan`, `alamat`, `hak_akses`, `jml_cuti`, `password`, `foto_emp`, `active`, `id_adm`) VALUES
('04190', 'Tri Mulyani', 'Perempuan', '081225663399', 'Departement bussines support', 'human resources & general affair area 2 section he', 'rsfh', 'pegawai', 10, '04190', 'foto04190i.png', 'Aktif', 1),
('04654', 'Mulyanto', 'Laki-Laki', '081223040505', 'Departement Operation', 'Operation Area 2 Departement Head', 'cghfg', 'pegawai', 10, '04654', 'foto04654o.png', 'Aktif', 1),
('04664', 'Kusdiyono', 'Laki-Laki', '081325677494', 'Departement Operation ', 'Transaction Area 2 Assistant', 'jl.', 'pegawai', 10, '04664', 'foto04664O.jpg', 'Aktif', 1),
('05858', 'Dharmawan', 'Laki-Laki', '081325880959', 'Departement Operation ', 'Transaction Area 2 Section Head', 'sere', 'pegawai', 10, '05858', 'foto05858n.png', 'Aktif', 1),
('07682', 'Pendi Setyo Nugroho', 'Laki-Laki', '082133669305', 'Departement Business Support', 'Finance and Revenue contorling  Area 2 senior Offi', 'jl.', 'pegawai', 10, '07682', 'foto07682O.png', 'Aktif', 1),
('07688', 'Yosep Ruswito', 'Laki-Laki', '777654', 'fgegrt', 'hehh4', 'yhehhth', 'pegawai', 10, '07688', 'foto07688O.png', 'Aktif', 1),
('07692', 'Mohamad Hadi Supeno', 'Laki-Laki', '082133518829', 'Departement Operation ', 'Maintenance Semarang  Senior Officer', 'JL.', 'pegawai', 10, '07692', 'foto07692O.png', 'Aktif', 1),
('07843', 'Riyono', 'Laki-Laki', '081390207843', 'Departement Business Support', 'Human Resources & General Affair Area 2 Assistant', 'jl.', 'pegawai', 10, '07843', 'foto07843O.png', 'Aktif', 1),
('08159', 'Prajudi', 'Laki-Laki', '08', 'Area 2', 'Area 2 Head', 'jl.', 'pegawai', 10, '08159', 'foto08159A.png', 'Aktif', 1),
('08260', 'Jumadi', 'Laki-Laki', '082247428014', 'Departement Business Support', 'CDP And Public Relation Area 2 Senior Officer ', 'jl.', 'pegawai', 10, '08260', 'foto08260I.png', 'Aktif', 1),
('09516', 'Chatarina Cahyaning Triwidanti', 'Perempuan', '081326033505', 'Departement Business Support', 'Finance and Revenue contorling  Area 2 senior Offi', 'fsds', 'pegawai', 10, '09516', 'foto09516I.png', 'Aktif', 1),
('09540', 'Wahyu Eko Purnomo', 'Laki-Laki', '082220063939', 'Departement Business Support', 'CDP And Public Relation Area 2 Senior Officer', 'HJ', 'pegawai', 10, '09540', 'foto09540O.png', 'Aktif', 1),
('09902', 'Saat Dudin Taftayani', 'Laki-Laki', '082135220704', 'Departement Business Support', 'CDP And Public Relation Area 2 Senior Officer ', 'jl.', 'pegawai', 10, '09902', 'foto09902I.png', 'Aktif', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`no_cuti`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`npp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
