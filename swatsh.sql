-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 10:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swatsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id_lokasi` int(11) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fasilitas` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id_lokasi`, `long`, `lat`, `nama`, `fasilitas`, `gambar`, `id_user`) VALUES
(1, '106.9736057', '-6.2563468', 'Taman Hijau Pekayon', 'Track lari, Gawang bola, Ring basket, Tiang pullup, Wifi.', 'http://sim.ciptakarya.pu.go.id/p2kh/storage/app/uploads/public/597/adb/950/thumb_701_800x600_0_0_crop.jpg', 8),
(2, '106.970641', '-6.259776', 'Taman Gigi Galaxy', 'Track lari, Tiang pullup, Wifi.', 'https://akcdn.detik.net.id/community/pasma/2016/03/08/1457416291319629057.jpg?w=942', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `password`) VALUES
(8, '', 'agilsaim', 'agilsaim9b@gmail.com', '$2y$10$rxGYJCtDhYJrasYwJrGIje835KFwBR0pjFBwLBYGrBxirSY9goKrq'),
(9, '', 'alpin', 'mythixgt23@gmail.com', '$2y$10$pxKRsMtn8h9hOPN7W5vH2uFDn2NluYSlRV9NRs1e4S7p6qDDMKDPG'),
(10, '', 'zchs', 'zchs23@gmail.com', '$2y$10$IpsaczMRqx7od6h/8aO6TO3ogwdD7HbTLu16ulOWoVzqvyvfpyXn6'),
(11, '', 'panpan', 'kiztiboyz@gmail.com', '$2y$10$urVJja32gdhnkCOx.cVffeF/diRkZp7MaOMK30nOzg5WyV460nT1O'),
(12, '', 'opeyyy', 'opey@gmail.com', '$2y$10$jqO6hQ7BZ/xnS.XvYQ3gwesC2kI045tiErktxNdNHMZ9nyAVTmrA2'),
(13, '', 'setiawan', 'ayogass@gmail.com', '$2y$10$bJ15VmZoLmXciDy8p1ydmezEqTZ9sjTslPYLy5xGBuibFBvfp7XRS'),
(26, 'renew', 'lol', 'mythixgt23@gmail.com', '$2y$10$o0YMi3A1/gkoc1cWGU5N6.yZuj3vYo1H.xGMq6clP2k8sJFud5bUu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
