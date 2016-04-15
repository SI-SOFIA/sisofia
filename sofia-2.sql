-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 10:26 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sofia`
--

-- --------------------------------------------------------

--
-- Table structure for table `alokasi`
--

CREATE TABLE `alokasi` (
  `id_booking` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alokasi`
--

INSERT INTO `alokasi` (`id_booking`, `id_ruangan`) VALUES
(1, 1),
(2, 2),
(4, 3),
(5, 4),
(8, 5),
(10, 6),
(11, 7),
(12, 8),
(13, 9),
(15, 10),
(16, 11),
(17, 12),
(18, 13),
(19, 14),
(20, 15),
(21, 16),
(22, 17);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_checkin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_checkout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_pelanggan`, `status`, `tanggal_pemesanan`, `tanggal_checkin`, `tanggal_checkout`, `jumlah`, `jenis`, `total_harga`) VALUES
(1, 1, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(2, 2, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(3, 3, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(4, 4, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(5, 5, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(6, 6, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(7, 7, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(8, 8, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(9, 9, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(10, 10, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'single', 600000),
(11, 11, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(12, 12, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(13, 13, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(14, 14, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(15, 15, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(16, 16, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(17, 17, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'double', 800000),
(18, 18, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(19, 19, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(20, 20, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(21, 21, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(22, 22, 'paid', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(23, 23, 'pending', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'executive', 1000000),
(24, 24, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'half-day', 100000),
(25, 25, 'cancel', '2016-04-13 17:00:00', '2016-04-13 17:00:00', '2016-04-14 17:00:00', 1, 'full-day', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_ruangan` int(11) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL,
  `harga_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_ruangan`, `jenis_kamar`, `harga_kamar`) VALUES
(1, 'single', 600000),
(2, 'single', 600000),
(3, 'single', 600000),
(4, 'single', 600000),
(5, 'single', 600000),
(6, 'single', 600000),
(7, 'single', 600000),
(8, 'single', 600000),
(9, 'single', 600000),
(10, 'single', 600000),
(11, 'double', 800000),
(12, 'double', 800000),
(13, 'double', 800000),
(14, 'double', 800000),
(15, 'double', 800000),
(16, 'double', 800000),
(17, 'double', 800000),
(18, 'executive', 1000000),
(19, 'executive', 1000000),
(20, 'executive', 1000000),
(21, 'executive', 1000000),
(22, 'executive', 1000000),
(23, 'executive', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `tanggal_konfirmasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis_pembayaran` varchar(10) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `id_booking`, `tanggal_konfirmasi`, `jenis_pembayaran`, `nominal`) VALUES
(1, 1, '2016-04-13 17:00:00', 'full', 600000),
(2, 2, '2016-04-13 17:00:00', 'dp', 300000),
(3, 8, '2016-04-13 17:00:00', 'full', 600000),
(4, 10, '2016-04-13 17:00:00', 'full', 600000),
(5, 11, '2016-04-13 17:00:00', 'full', 800000),
(6, 16, '2016-04-13 17:00:00', 'dp', 400000),
(7, 19, '2016-04-13 17:00:00', 'dp', 500000),
(8, 22, '2016-04-13 17:00:00', 'full', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `paket_meeting_room`
--

CREATE TABLE `paket_meeting_room` (
  `paket` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_meeting_room`
--

INSERT INTO `paket_meeting_room` (`paket`, `harga`) VALUES
('full-day', 200000),
('half-day', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `email`, `nomor_hp`) VALUES
(1, 'Sandra Hart', 'Desa Temon, Sawoo, Ponorogo', 'shart0@house.gov', '082116826050'),
(2, 'Edward Long', 'Jl. Kalibaru Barat Iv Rt.001/07 No.38 Cilincing, Jakarta Uta', 'elong1@webs.com', '08568141566'),
(3, 'Henry Frazier', 'Jl. Sultan Syahrir no. 147 Silaing Bawah, Padang Panjang', 'hfrazier2@google.com', '085740300724'),
(4, 'Marie Carpenter', 'Jl. Merkuri Utara 4 no.10 blok W133 Margahayu Raya, Bandung', 'mcarpenter3@bbb.org', '085730354203'),
(5, 'Brian Watson', 'Jln Rambutan No.1066 A, Palembang', 'bwatson4@g.co', '081224185310'),
(6, 'Louise Knight', 'Kp. Pekopen Rt 06/Rw 07 Desa Tambun Kec. Tambun Selatan Kab.', 'lknight5@marriott.co', '085793350088'),
(7, 'Sarah Turner', 'Jl Jembatan Gambang Ii B/21, Jakarta Utara, Dki Jakarta', 'sturner6@wiley.com', '089665406740'),
(8, 'Jimmy Gardner', 'Jl. Pengasinan Ii No.28 Rt02/002 Bekasi Timur 17115', 'jgardner7@alibaba.co', '085263716795'),
(9, 'Terry Baker', 'Jl. Sumber Resik No. 4', 'tbaker8@hao123.com', '087824778650'),
(10, 'Louise Flores', 'Jalan Anggrek No. 35, Payakumbuh', 'lflores9@marketwatch', '085664938135'),
(11, 'Willie Myers', 'Kalideres Permai Blok G6 No 20 Rt 005/ Rw 014. Kalideres. Ja', 'wmyersa@clickbank.ne', '089627761245'),
(12, 'Bobby Grant', 'Aglik Selatan Rt3 Rw6 Semawung Daleman, Kutoarjo, Purworejo,', 'bgrantb@abc.net.au', '083876757757'),
(13, 'Evelyn Hicks', 'Jl. Tritura No. 161-B Medan', 'ehicksc@unc.edu', '081514289944'),
(14, 'Tammy Matthews', 'Cipaku Indah V no 51', 'tmatthewsd@wikispace', '081320397886'),
(15, 'Mildred Cruz', 'Jln. Ciwaregu No. 3B, Bandung 40121', 'mcruze@usda.gov', '08972501470'),
(16, 'Johnny Carroll', 'Jl. Urea No. 3 Komp. Pusri Kebon Sirih Kenten Palembang', 'jcarrollf@wikia.com', '089637983208'),
(17, 'Carol Day', 'Jl. Taman Duren Sawit B1/5', 'cdayg@yellowbook.com', '08995179942'),
(18, 'Carol Phillips', 'Jln. Biologi 7, Bandung', 'cphillipsh@umich.edu', '08566334900'),
(19, 'Steve Palmer', 'Jalan Hijau Daun C1 No 17, Kelapa Gading, Jakarta Utara', 'spalmeri@issuu.com', '087775452541'),
(20, 'Judy Howell', 'Jl. Kalingga No. 3 Medan 20112', 'jhowellj@fda.gov', '081219705514'),
(21, 'Norma Lee', 'Harapan Indah Regency Bc/2, Bekasi Barat', 'nleek@soup.io', '081373611126'),
(22, 'Fred Williamson', 'Jl. Danau Melintang No. 124A Medan', 'fwilliamsonl@wikia.c', '085710093690'),
(23, 'Amanda Reed', 'Jl. Cempaka Putih Barat 21 no. 20 Jakarta Pusat 10520', 'areedm@sakura.ne.jp', '08562113917'),
(24, 'Sarah Murphy', 'Apartemen Ambassador 2 Lt. 17 No. 2 Jalan Prof Dr.Satrio, Ja', 'smurphyn@netvibes.co', '08999737598'),
(25, 'Nancy Graham', 'Jl. Sutomo No. 29 D', 'ngrahamo@vinaora.com', '087869565758');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `status`, `kapasitas`) VALUES
(1, 'booked', 4),
(2, 'booked', 4),
(3, 'booked', 4),
(4, 'booked', 4),
(5, 'booked', 4),
(6, 'booked', 4),
(7, 'booked', 4),
(8, 'booked', 4),
(9, 'booked', 4),
(10, 'booked', 4),
(11, 'booked', 4),
(12, 'booked', 4),
(13, 'booked', 4),
(14, 'booked', 4),
(15, 'booked', 4),
(16, 'booked', 4),
(17, 'booked', 4),
(18, 'available', 4),
(19, 'available', 4),
(20, 'available', 4),
(21, 'available', 4),
(22, 'available', 4),
(23, 'available', 4),
(24, 'available', 50),
(25, 'available', 50);

-- --------------------------------------------------------

--
-- Table structure for table `ruang_pertemuan`
--

CREATE TABLE `ruang_pertemuan` (
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_pertemuan`
--

INSERT INTO `ruang_pertemuan` (`id_ruangan`) VALUES
(24),
(25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id_booking`,`id_ruangan`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD UNIQUE KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_booking` (`id_booking`);

--
-- Indexes for table `paket_meeting_room`
--
ALTER TABLE `paket_meeting_room`
  ADD PRIMARY KEY (`paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_pertemuan`
--
ALTER TABLE `ruang_pertemuan`
  ADD UNIQUE KEY `id_ruangan` (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD CONSTRAINT `alokasi_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `alokasi_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`);

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`);

--
-- Constraints for table `ruang_pertemuan`
--
ALTER TABLE `ruang_pertemuan`
  ADD CONSTRAINT `ruang_pertemuan_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
