-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 03:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiswa_haqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nama` varchar(50) NOT NULL,
  `nis` int(6) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nama`, `nis`, `gender`, `alamat`, `ttl`, `foto`) VALUES
('Achmad Baihaqi', 6156, 'L', 'Semeloh', 'Jombang, 4 Agustus 2003', 'haqi.png'),
('Ade Raihan M', 6157, 'L', 'Banaran', 'Nganjuk, 20 Februari 2002', 'raihan.png'),
('Adelia Puteri G.N.S', 6158, 'P', 'Pisang', 'Nganjuk, 20 Desember 2002', 'gita.png'),
('Adetya Wardani', 6159, 'P', 'Pantianrowo', 'Nganjuk, 15 Maret 2003', 'adet.png'),
('Agung Tri L', 6160, 'L', 'Kemlokolegi', 'Nganjuk, 9 Januari 2003', 'agung.png'),
('Ahmad Ansori', 6161, 'L', 'Tanjunganom', 'Nganjuk, 17 April 2002', 'aan.png'),
('Ahmad Rozikul A', 6162, 'L', 'Kemlokolegi', 'Kediri, 11 Agustus 2002', 'rozikul.png'),
('Amalia Devi P', 6163, 'P', 'Pecuk', 'Nganjuk, 3 Juli 2003', 'amal.png'),
('Ananta Eka P', 6164, 'L', 'Pandantoyo', 'Kediri, 9 November 2002', 'ananta.png'),
('Aning Rahma A.S', 6165, 'P', 'Pecuk', 'Jombang, 27 November 2003', 'aning.png'),
('Arahma Handayani', 6166, 'P', 'Merjoyo', 'Nganjuk, 10 Februari 2003', 'Arahma.png'),
('Bella Alfyo A.Y', 6167, 'P', 'Tembarak', 'Nganjuk, 13 Maret 2003', 'Bella.png'),
('Cantika Dea', 6168, 'P', 'Tembarak', 'Nganjuk, 4 Juni 2003', 'Bacan.png'),
('Cindy Qaula A', 6169, 'P', 'Papar', 'Kediri, 5 Oktober 2003', 'Cindy.png'),
('David Aldian H', 6170, 'L', 'Kaluran', 'Kediri, 25 Agustus 2002', 'David.png'),
('Deky Reza S', 6171, 'L', 'Ngronggot', 'Nganjuk, 13 Mei 2003', 'Deky.png'),
('Dhinno Haryasena', 5715, 'L', 'Mengkreng', 'Jombang, 19 September 2002', 'Dhino.png'),
('Didin Rakfil B', 6172, 'L', 'Pelem', 'Magetan, 10 Juli 2002', 'Didin.png'),
('Disma Eka N', 6173, 'P', 'Tanjung', 'Nganjuk, 3 Januari 2003', 'Disma.png'),
('Diva Sabrina', 6174, 'P', 'Tembarak', 'Nganjuk 7 Desember 2002', 'Diva.png'),
('Dwi Windarti', 6175, 'P', 'Mojokambang', 'Nganjuk, 30 Oktober 2002', 'Dwi.png'),
('Elok Fadia M', 6176, 'P', 'Kedung Gabus', 'Jombang, 11 Mei 2003', 'Elok.png'),
('Fadia Irsania P', 6178, 'P', 'Mekikis', 'Kediri, 26 April 2002', 'Fadia.png'),
('Fahrezian Arya B', 6179, 'L', 'Baron', 'Nganjuk, 12 Mei 2002', 'Bima.png'),
('Fatur Riandy', 6180, 'L', 'Kutorejo', 'Nganjuk, 28 November 2002', 'Fatur.png'),
('Fitri Nur F', 6181, 'P', 'Merjoyo', 'Kediri, 17 November 2002', 'Fitri.png'),
('Halim Bagus P', 6182, 'L', 'Gondang Tanjung', 'Nganjuk, 16 September 2002', 'Halim.png'),
('Ichsan Wahyu R', 6183, 'L', 'Purwoasri', 'Kediri, 6 Juli 2002', 'Iksan.png'),
('Ike Handayani', 6184, 'P', 'Tanjung', 'Nganjuk, 10 Januari 2002', 'Ike.png'),
('Ilham Maulana', 6185, 'L', 'Merjoyo', 'Kediri, 10 Oktober 2002', 'Ilham.png'),
('Inna Fatahna', 6186, 'P', 'Pandantoyo', 'Jombang, 21 Juli 2003', 'Ina.png'),
('Julia Sabrina ', 6187, 'P', 'Tembarak', 'Jombang, 12 Februari 2003', 'Julia.png'),
('Krtina Apriliya', 6188, 'P', 'Sambijajar', 'Kediri, 7 Januari 2003', 'Koyim.png'),
('M. Arifin Mustofa', 6189, 'L', 'Pandanasri', 'Nganjuk, 23 September 2003', 'Aripin.png'),
('M. Nur Kholis C.E.Y', 6190, 'L', 'Tembarak', 'Nganjuk, 1 Juli 2003', 'Chuenk.png'),
('Mar \'Atunnufita S', 6191, 'P', 'Pantianrowo', 'Nganjuk, 21 Juni 2003', 'Atun.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `alamat`, `password`) VALUES
(21, 'admin', 'Singapore', 'root'),
(22, 'haqi', 'jombang', 'xi'),
(25, 'finish', 'planet namex', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
