-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 05:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti1c_qonitahilyatulfirdausa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `ID_Tiket` int NOT NULL,
  `Nama_Film` varchar(255) NOT NULL,
  `Jadwal_Tayang` datetime NOT NULL,
  `Jumlah_Kursi` int NOT NULL,
  `Harga_Dasar_Tiket` decimal(10,2) NOT NULL,
  `Jenis_Studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `Tipe_Audio` varchar(50) DEFAULT NULL,
  `Lokasi_Baris` varchar(10) DEFAULT NULL,
  `Kacamata_3D_Id` varchar(50) DEFAULT NULL,
  `Efek_Gerak_Fitur` varchar(100) DEFAULT NULL,
  `Bantal_Selimut_Pack` varchar(50) DEFAULT NULL,
  `Layanan_Butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`ID_Tiket`, `Nama_Film`, `Jadwal_Tayang`, `Jumlah_Kursi`, `Harga_Dasar_Tiket`, `Jenis_Studio`, `Tipe_Audio`, `Lokasi_Baris`, `Kacamata_3D_Id`, `Efek_Gerak_Fitur`, `Bantal_Selimut_Pack`, `Layanan_Butler`) VALUES
(1, 'Avatars: The Next Generation', '2026-07-20 14:00:00', 2, '50000.00', 'Regular', 'Dolby Atmos 7.1', 'Row G', NULL, NULL, NULL, NULL),
(2, 'Keluarga Cemara Bersemi', '2026-07-20 16:30:00', 1, '45000.00', 'Regular', 'Stereo standard', 'Row E', NULL, NULL, NULL, NULL),
(3, 'Detektif Conan: Sunset', '2026-07-20 19:00:00', 3, '50000.00', 'Regular', 'Dolby Atmos 7.1', 'Row F', NULL, NULL, NULL, NULL),
(4, 'Siksa Kubur Kembali', '2026-07-20 21:15:00', 2, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row J', NULL, NULL, NULL, NULL),
(5, 'Cinta Subuh di Seoul', '2026-07-21 11:00:00', 1, '40000.00', 'Regular', 'Stereo standard', 'Row H', NULL, NULL, NULL, NULL),
(6, 'Petualangan Sherina 3', '2026-07-21 13:30:00', 4, '45000.00', 'Regular', 'Dolby Atmos 7.1', 'Row D', NULL, NULL, NULL, NULL),
(7, 'Malam Pencabut Nyawa', '2026-07-21 16:00:00', 2, '45000.00', 'Regular', 'Dolby Digital 5.1', 'Row K', NULL, NULL, NULL, NULL),
(8, 'Interstellar RE-RUN', '2026-07-21 19:00:00', 4, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row C', '3D-GLASSES-A01', 'Motion Shake Heavy', NULL, NULL),
(9, 'Doctor Strange 3', '2026-07-21 21:45:00', 2, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Row D', '3D-GLASSES-B12', 'Motion Shake Light', NULL, NULL),
(10, 'Star Wars: The New Jedi', '2026-07-22 13:00:00', 2, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row B', '3D-GLASSES-A05', 'Full Motion Simulation', NULL, NULL),
(11, 'Jurassic World: Genesis', '2026-07-22 16:00:00', 3, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row A', '3D-GLASSES-A09', 'Motion Shake Medium', NULL, NULL),
(12, 'The Avengers: Secret Wars', '2026-07-22 19:30:00', 2, '120000.00', 'IMAX', 'IMAX Sound 12.1', 'Row C', '3D-GLASSES-C02', 'Full Motion Simulation', NULL, NULL),
(13, 'Avatar: The Seed Bearer', '2026-07-23 14:00:00', 5, '110000.00', 'IMAX', 'IMAX Sound 12.1', 'Row D', '3D-GLASSES-B04', 'Motion Shake Light', NULL, NULL),
(14, 'Inception: Anniversary Edition', '2026-07-23 17:30:00', 1, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row E', '3D-GLASSES-A11', 'Motion Shake Heavy', NULL, NULL),
(15, 'The Great Gatsby: Remake', '2026-07-22 18:00:00', 2, '250000.00', 'Velvet', 'Dolby Digital', 'Suite 1', NULL, NULL, 'Premium Pack 2', 'Butler Service Active'),
(16, 'A Night in Paris', '2026-07-22 20:30:00', 2, '250000.00', 'Velvet', 'Dolby Digital', 'Suite 4', NULL, NULL, 'Premium Pack 4', 'Butler Service Active'),
(17, 'The Godfather Trilogy Part 1', '2026-07-23 19:00:00', 2, '300000.00', 'Velvet', 'Dolby Atmos', 'Suite 2', NULL, NULL, 'Luxury Pack Gold', 'Butler Service Active'),
(18, 'La La Land: Live Orchestra', '2026-07-23 21:45:00', 2, '300000.00', 'Velvet', 'Dolby Atmos', 'Suite 5', NULL, NULL, 'Luxury Pack Gold', 'Butler Service Active'),
(19, 'Dune: Part Three', '2026-07-24 15:00:00', 2, '275000.00', 'Velvet', 'Dolby Digital', 'Suite 3', NULL, NULL, 'Standard Velvet Pack', 'Butler Service Active'),
(20, 'Titanic: Valentine Special', '2026-07-24 18:30:00', 2, '275000.00', 'Velvet', 'Dolby Digital', 'Suite 6', NULL, NULL, 'Standard Velvet Pack', 'Butler Service Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`ID_Tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `ID_Tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
