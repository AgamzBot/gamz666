-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 04:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_guru`
--

CREATE TABLE `db_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `guru_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_guru`
--

INSERT INTO `db_guru` (`id_guru`, `nama_guru`, `jabatan`, `guru_mapel`) VALUES
(2, 'ILHAM', 'MAYOR', 'MTK'),
(3, 'ewrtyu', 'GURU', 'MTK');

-- --------------------------------------------------------

--
-- Table structure for table `db_jadwal`
--

CREATE TABLE `db_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_jadwal`
--

INSERT INTO `db_jadwal` (`id_jadwal`, `hari`, `mata_pelajaran`) VALUES
(2, 'SELASA', 'WEB');

-- --------------------------------------------------------

--
-- Table structure for table `db_pelajaran`
--

CREATE TABLE `db_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_pelajaran`
--

INSERT INTO `db_pelajaran` (`id_pelajaran`, `mata_pelajaran`) VALUES
(2, 'MATEMATIKA33');

-- --------------------------------------------------------

--
-- Table structure for table `db_siswa`
--

CREATE TABLE `db_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_siswa`
--

INSERT INTO `db_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `alamat`) VALUES
(3, 'ilhas', 'as', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$/TXMJec6YGKmXPWMYtXlt.s1ZM/VyR5ntmUqBZFB6.2.SNvRBGVDC'),
(2, 'Kasir', '$2y$10$X3t5drillXNMjpFFxlDor.tvr7NCG1iJHh9ZlLm1G/P.8H7F.3JHq'),
(14, '', ''),
(15, '', ''),
(16, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_guru`
--
ALTER TABLE `db_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `db_jadwal`
--
ALTER TABLE `db_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `db_pelajaran`
--
ALTER TABLE `db_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `db_siswa`
--
ALTER TABLE `db_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_guru`
--
ALTER TABLE `db_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_jadwal`
--
ALTER TABLE `db_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_pelajaran`
--
ALTER TABLE `db_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_siswa`
--
ALTER TABLE `db_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
