-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 06:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('128e4dee-c627-4aaf-9e99-2217eb2415cc', 'Dr Cahyo', 'THT', 'Jl Kuningan No. 16', '08765234890'),
('19c1be1e-affd-4409-bb53-ff983a985a0f', 'Dr. Riki', 'Mata', 'Jl  Pasanggrahan 09', '087654329018'),
('35466a3b-54ea-4007-b3e5-c33ea15e7c9a', 'dr. Citra Menanti', 'Umum', 'Jl Ciwidey No.15 Rt 03\r\n', '087673246901'),
('7bdd9440-6a33-42fb-ba71-2a132a57e282', 'Dr. Rani', 'Umum', 'Jl. Andir No. 9B', '084235678902'),
('d9e23525-462e-4f8a-b5fb-34b288314161', 'drg. Setiawan', 'Gigi', 'Jl. Bandung No. 45', '089754378902'),
('e623f84f-5b4d-4f6c-969f-833cab01cf28', 'Dr Indah Ria', 'Penyakit Dalam', 'Ciwidey', '08765423890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('05a0e33b-a285-4dbb-9673-1b7a4591e4da', 'Osagi', 'Obat Sakit Gigi\r\n'),
('106c3aef-511f-4133-ab6e-2454720ee113', 'Sangobion', 'Zat besi'),
('2d5edcd4-205f-4c9c-aeba-31ae9726aa83', 'EyeFit', 'Vitamin Mata\r\n'),
('56221d35-a2d9-4d7d-bc3e-193b6938f351', 'Pimtrakol', 'Obat Paracetamol Anak'),
('60abdee3-6de0-11ec-ab76-d07e35ba1a02', 'Paracetamol', 'Obat Panas'),
('611e919a-6de2-11ec-ab76-d07e35ba1a02', 'Paramex', 'Obat Sakit Kepala'),
('89ef86f8-6de2-11ec-ab76-d07e35ba1a02', 'Remachyl', 'Obat Pusing\r\n'),
('89ef95d3-6de2-11ec-ab76-d07e35ba1a02', 'Kontereksin', 'Obat Sakit Anak'),
('f30d2326-6de1-11ec-ab76-d07e35ba1a02', 'Oskadon', 'Obat Sakit Kepala'),
('f30d320d-6de1-11ec-ab76-d07e35ba1a02', 'Ultraflu', 'Obat Flu'),
('f30d3d3e-6de1-11ec-ab76-d07e35ba1a02', 'Komix', 'Obat Batuk'),
('f4e2aced-62ee-46d4-a539-46a3a4a3609e', 'Fungiderm', 'Salep Obat Jamur'),
('f5d3927f-b995-4cc6-a4de-fd28f438e814', 'Bodrexin', 'Obat Sakit Kepala');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `no_id`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('082d8bb1-c23e-4a73-ae9e-195a17f7c4e2', '20129087', 'Rudi', 'L', 'Kp Andir', '081234567890'),
('0ab94a5f-877e-4f05-9c0a-0d5d4059b27e', '20170098', 'Kurnia', 'L', 'Ciwiey', '62876543908'),
('2777b7d7-590e-430c-8a76-496cef39a4e9', '201988970', 'Sekar', 'P', 'Kuningan', '0876523490'),
('2e56c222-4ad6-41aa-8afb-6b0eb0c54e90', '20180975', 'Cacang', 'L', 'Bandung', '8976532134'),
('49e78544-334b-4f4b-8e22-70378026592e', '201388907', 'Yuusuf', 'L', 'Ciwidey', '082267890192'),
('626250a7-d3ec-43bd-8ea0-1d84903f2d93', '20129807', 'Rena', 'P', 'Pasirjambu', '087625383490'),
('72256d61-ad83-4799-934a-3d052489ad33', '20190089', 'Rayhan', 'L', 'Gading', '081234567890'),
('84ed83e3-1dba-4f91-89f0-a8e360352cc8', '201956789', 'Cantik', 'P', 'Bandung', '0'),
('9d168acb-a1d3-442f-9e14-9a49a3b3a2fd', '201523456', 'Acah', 'P', 'Cilenyi', '089765233454'),
('aeb8b330-dcf4-4278-8316-43aabe6fdb9f', '3456', 'Cahya', 'P', 'Simpangan 13', '087654390213'),
('b8247e85-5dab-4241-961f-139d7251cde8', '12345676', 'Jaka', 'L', 'Andir', '081234567892'),
('c20c9e48-c5e9-412c-befb-95eba25283da', '20191087', 'Risma', 'P', 'Bandung', '81234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`, `gedung`) VALUES
('2f193296-35ea-4bb6-ba38-2638531d82b8', 'Laboratorium', 'C Lt 1'),
('4051fc9c-2f2e-4dd2-b8f5-246b431910ba', 'Poli Mata', 'B Lt 2'),
('46c45760-ce82-44b5-aae8-5a8c92bd20f8', 'Poli B1', 'B Lt2'),
('48fb4b95-3ef3-464b-9992-6245df2bd090', 'Poli THT', 'B Lt 2C'),
('a3f472bd-675c-42f7-9da3-de4d4771e242', 'Poli Mata', 'A Lt 2B'),
('aae224e0-c57c-4cae-811e-20ee477467c0', 'Poli Umum', 'A Lt 3C'),
('d038300e-7ddf-40b9-adbb-210a96d5347c', 'Poli  C4', 'A  Lt 2'),
('d6b1d7db-a2e5-40c6-9472-f74be3b87542', 'Poli 2B', 'A Lt 1'),
('e402d3f4-570c-4925-abf7-90546ed277c0', 'Poli Anak', 'A Lt 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm`
--

CREATE TABLE `tb_rm` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm`
--

INSERT INTO `tb_rm` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('54803171-139d-4980-8a9a-7ff9386ca30d', '49e78544-334b-4f4b-8e22-70378026592e', 'Gatal Gatal', '35466a3b-54ea-4007-b3e5-c33ea15e7c9a', 'Panu', 'd6b1d7db-a2e5-40c6-9472-f74be3b87542', '2022-01-07'),
('92836e1e-cb66-40aa-b0c7-5433117c79d1', '2777b7d7-590e-430c-8a76-496cef39a4e9', '<p>Sakit Gigi</p>\r\n', 'd9e23525-462e-4f8a-b5fb-34b288314161', 'Makan es', 'd038300e-7ddf-40b9-adbb-210a96d5347c', '2021-01-12'),
('ca8ec552-3a12-4fea-a3b3-7418c940e676', '082d8bb1-c23e-4a73-ae9e-195a17f7c4e2', 'Sakit Kepala', '35466a3b-54ea-4007-b3e5-c33ea15e7c9a', 'Kurang minum', 'd6b1d7db-a2e5-40c6-9472-f74be3b87542', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(1, 'ca8ec552-3a12-4fea-a3b3-7418c940e676', 'f30d3d3e-6de1-11ec-ab76-d07e35ba1a02'),
(2, 'ca8ec552-3a12-4fea-a3b3-7418c940e676', 'f5d3927f-b995-4cc6-a4de-fd28f438e814'),
(3, '54803171-139d-4980-8a9a-7ff9386ca30d', 'f30d2326-6de1-11ec-ab76-d07e35ba1a02'),
(5, '92836e1e-cb66-40aa-b0c7-5433117c79d1', '05a0e33b-a285-4dbb-9673-1b7a4591e4da');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('9d13e7cd-6ddb-11ec-ab76-d07e35ba1a02', 'Nisa', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rm`
--
ALTER TABLE `tb_rm`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rm`
--
ALTER TABLE `tb_rm`
  ADD CONSTRAINT `tb_rm_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rm_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rm_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poli` (`id_poli`);

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rm` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
