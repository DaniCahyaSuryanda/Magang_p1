-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 10:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1_menejemen_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip_guru` int(18) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Buddha','Hindu','Katolik','Kristen','Islam','Konghucu') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip_guru`, `nama_guru`, `tmpt_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `no_telepon`) VALUES
(1, 2147483647, 'Adit', 'Bangkalan', '2022-01-01', 'Laki-laki', 'Islam', 'Jl. .......-', 539028295),
(2, 2147483647, 'Mei-mei', '---', '2022-01-14', 'Perempuan', 'Konghucu', 'Jl. ----', 782354679),
(3, 98546734, 'Aditya', 'Bangkalan', '2022-01-11', 'Laki-laki', 'Islam', 'Jl. ---', 86535278),
(19, 2147483647, 'Jarjit', '----', '2022-01-10', 'Laki-laki', 'Hindu', '-----', 2147483647),
(20, 2147483647, 'Denis', 'Surabaya', '1991-06-20', 'Laki-laki', 'Kristen', 'Jl. ----', 2147483647),
(21, 8236280, 'Kipli', 'Jawa Tengah', '1988-06-16', '', '', 'Jl. ----', 2147483647),
(24, 45328748, 'Soleh', 'Bangkalan', '1996-07-08', 'Laki-laki', 'Islam', 'Jl. ---', 2147483647),
(25, 2147483647, 'Ah Tong', '-----', '1990-06-06', 'Laki-laki', 'Konghucu', 'Jl. -----', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
