-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 01:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$EX0L5MeIQldpkCuTZW.mjujTaj.Yy20IW0GOluecU/c.es.9r6E5.', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `nuptk` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_materi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`nuptk`, `email`, `nama_guru`, `password`, `nama_materi`) VALUES
('2005987999130055', 'dana@gmail.com', 'Dana', '$2y$10$pE80RqNURiaBRfnNAuCW.O8W5Q/tEs.Ua5PH0Quc4.ACJUxmqJP9q', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id_informasi` varchar(10) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `kategori_informasi` varchar(20) NOT NULL,
  `isi_informasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_informasi`
--

INSERT INTO `data_informasi` (`id_informasi`, `judul_informasi`, `kategori_informasi`, `isi_informasi`, `tanggal`, `gambar`) VALUES
('INRP000001', 'Rencana Pembelajaran Kelas IX Tahun Ajaran 2020/2021', 'Rencana Pembelajaran', 'asudhsahduiashduahsd', '2020-08-11', 'Bundesliga_Bayer_Leverkusen_4-5_Vfl_Wolfsburg_(Full)_mp4_snapshot_00_01_42_2016_10_10_13_10_076.jpg'),
('INUMVM0000', 'Besok Masuk!!!', 'Pengumuman', 'Besok Masuk!!!Besok Masuk!!!Besok Masuk!!!Besok Masuk!!!Besok Masuk!!!Besok Masuk!!!', '2020-08-11', 'Bundesliga_Bayer_Leverkusen_4-5_Vfl_Wolfsburg_(Full)_mp4_snapshot_00_01_42_2016_10_10_13_10_07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `tahun_masuk` varchar(9) NOT NULL,
  `id_tahunajaran` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `email`, `nama_siswa`, `password`, `kelas`, `tahun_masuk`, `id_tahunajaran`) VALUES
('20217001', 'sasa@gmail.com', 'Sasa', '$2y$10$3X/qX9eqn6r4IxH/WOdfxOPNpgpuwgzy8pt1FvIlGaaNcbCfUrrJe', 'VII', '2020/2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_tahunajaran`
--

CREATE TABLE `data_tahunajaran` (
  `id_tahunajaran` int(8) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tahunajaran`
--

INSERT INTO `data_tahunajaran` (`id_tahunajaran`, `tahun_ajaran`, `status`) VALUES
(1, '2019/2020', 0),
(2, '2020/2021', 1),
(3, '2021/2022', 0),
(4, '2022/2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` varchar(10) NOT NULL,
  `jenis_evaluasi` varchar(25) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `lampiran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`id_evaluasi`, `jenis_evaluasi`, `nama_materi`, `nama_guru`, `tanggal`, `lampiran`) VALUES
('1', 'Kuis', 'Bahasa Inggris', 'Adam', '0000-00-00', ''),
('EVKUMA0001', 'Kuis', 'Matematika', 'Dana', '2020-08-12', 'burn.mp4'),
('EVKUMA0002', 'Kuis', 'Matematika', 'Dana', '2020-08-12', 'LPORAN_HUTRI.docx'),
('EVUJMA0001', 'Ujian', 'Matematika', 'Dana', '2020-08-14', 'Contoh_kasus_normalisasi.doc');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_evaluasi`
--

CREATE TABLE `hasil_evaluasi` (
  `id_hasilevaluasi` varchar(12) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `id_evaluasi` varchar(10) NOT NULL,
  `jawaban` text NOT NULL,
  `lampiran` varchar(128) NOT NULL,
  `skor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(10) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `video` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `kurikulum` varchar(30) NOT NULL,
  `id_tahunajaran` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_guru`, `nama_materi`, `gambar`, `video`, `deskripsi`, `kelas`, `kurikulum`, `id_tahunajaran`) VALUES
('MMA07001', 'Dana', 'Matematika', '', 'burn3.mp4', 'asdasd', 'VII', 'Kurikulum 2013', 2);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(8) NOT NULL,
  `soal` text NOT NULL,
  `kunci_jawaban` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `id_evaluasi` varchar(10) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `kunci_jawaban`, `a`, `b`, `c`, `d`, `e`, `id_evaluasi`, `aktif`) VALUES
(4, '2x2x2x2x2', 'A', '32', '42', '52', '12', '2', '', 'Y'),
(5, '9x9+2 = ?', 'C', '81', '82', '83', '93', '73', '', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`nuptk`);

--
-- Indexes for table `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `data_tahunajaran`
--
ALTER TABLE `data_tahunajaran`
  ADD PRIMARY KEY (`id_tahunajaran`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`);

--
-- Indexes for table `hasil_evaluasi`
--
ALTER TABLE `hasil_evaluasi`
  ADD PRIMARY KEY (`id_hasilevaluasi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_tahunajaran`
--
ALTER TABLE `data_tahunajaran`
  MODIFY `id_tahunajaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
