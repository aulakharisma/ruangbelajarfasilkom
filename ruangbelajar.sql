-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruangbelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `dok_materi` varchar(255) NOT NULL,
  `Kategori` enum('Tugas','Materi dosen','Lain-Lain') NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(100) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_admin`, `id_user`, `judul`, `id_matkul`, `dok_materi`, `Kategori`, `deskripsi`, `cover`, `CREATED_AT`, `UPDATED_AT`) VALUES
(3, NULL, 2, 'Prototyping aplikasi BookingYuk', 4, 'materi1.pdf', 'Tugas', 'tugas1', 'covermateri1', '2023-06-11 08:43:28', '2023-06-11 08:43:28'),
(4, NULL, 2, 'Sorting data menggunakan metode xxx', 2, 'materi2.pdf', 'Materi dosen', 'materi dari dosen x untuk mata kuliah struktur data', 'covermateri2.png', '2023-06-11 08:43:28', '2023-06-11 08:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `prodi` enum('informatika','sisteminformasi','sainsdata','umum') NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `nama_matkul`, `deskripsi`, `prodi`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Metode Numerik', 'mata kuliah ini dimaksudkan untuk memberi kemampuan pada mahasiswa tentang topik-topik dasar dari metode numerik yaitu galat, interpolasi, penghampiran fungsi, sistem persamaan linier, integrasi numerik, dan persamaan diferensial biasa sehingga diharapkan mahasiswa memperoleh pemahaman intuitif tentang beberpa ametode numerik yang digunakan untuk menyelesaikan masalah-masalah dasar dalam metode numerik, juga mendapatkan apresiasi mengenai konsep galat dan kebutuhan untuk menganalisis dan mekanismenya, serta dapat mengembangkan pengalaman dalam menerapkan metode numerik dengan menggunakan komputer.', 'informatika', '2023-06-11 08:26:46', '2023-06-11 08:26:46'),
(2, 'Struktur Data', 'Matakuliah ini sebagian besar teori yang diikuti dengan praktikum. Melalui Matakuliah ini mahasiswa mampu untuk memahami konsep, teknik dan manipulasi pengorganisasian sebuah data yang diimplementasikan kedalam sebuah bahasa pemrograman seperti array, string, matriks, record. Selain itu matakuliah ini juga memberi pemahaman tentang list linear, multi link list, non linier link list, jenis-jenis pengurutan, pencarian, graf, dan tree.', 'informatika', '2023-06-11 08:26:46', '2023-06-11 08:26:46'),
(3, 'Pemrograman Framework', 'Mata kuliah ini merupakan lanjutan dari pemrograman website, di mana mahasiswa akan mempelajari tentang beberapa framework, seperti codeigniter, react, node, dll.', 'informatika', '2023-06-11 08:26:46', '2023-06-11 08:26:46'),
(4, 'UI UX', 'Mata kuliah ini mempelajari tentang hubungan manusia dengan komputer', 'umum', '2023-06-11 08:26:46', '2023-06-11 08:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipe` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tipe`) VALUES
(1, '20081010192', 'passowrd192', 1),
(2, '20081010193', 'password193', 1),
(3, '20082010102', 'password102', 1),
(4, '20083010090', 'password090', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` enum('informatika','sainsdata','sisteminformasi') NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `id_user`, `nama`, `prodi`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 'Aula Kharismah', 'informatika', '2023-06-11 08:23:49', '2023-06-11 08:23:49'),
(2, 2, 'Frisda Dita Isnaini', 'informatika', '2023-06-11 08:24:22', '2023-06-11 08:24:22'),
(3, 3, 'Daud Arya Rafa', 'sisteminformasi', '2023-06-11 08:26:17', '2023-06-11 08:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `id_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `id_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
