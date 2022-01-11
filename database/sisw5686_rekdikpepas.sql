-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2022 at 02:18 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisw5686_rekdikpepas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_grup`
--

CREATE TABLE `tb_grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_grup`
--

INSERT INTO `tb_grup` (`id_grup`, `nama_grup`, `created_at`) VALUES
(1, 'Administrator', '21 Oktober 2021'),
(2, 'User', '21 Oktober 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_info` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grup_id` int(11) NOT NULL,
  `saran` text NOT NULL,
  `jawaban_saran` text DEFAULT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `user_id`, `grup_id`, `saran`, `jawaban_saran`, `created_at`) VALUES
(1, 1, 2, 'Kkll', NULL, '24 Dec 2021 11:56'),
(2, 2, 2, 'Halooo', 'halooooo haoii', '27 Dec 2021 23:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_regis` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kelamin` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `token_id` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_jaminan` varchar(123) NOT NULL,
  `tgl_lahir` varchar(123) NOT NULL,
  `no_rekam` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_regis`, `user_id`, `nama`, `email`, `username`, `password`, `no_hp`, `kelamin`, `alamat`, `created_at`, `status`, `token_id`, `gambar`, `nik`, `no_jaminan`, `tgl_lahir`, `no_rekam`) VALUES
(1, 2, 'Adi Murdayani', 'adimurdayani@gmail.com', 'adimurdayani', '538ccb720c36e5991c7cbe07092497e56100869c', '', '', '', '24 Dec 2021', 1, 'erl4Y5qrnAk:APA91bFWxrsa-LpW8lQgSwqIQNrw0LewSU8rlM-1g4cBIT4Gd5BMXTV1tSYXCjfFrsT_RkVEkLBvzLsKEAzvmL6smJmpyc4yhPoAA1m1mtZDF_VROApD3JblYmBpQ11FuIwurzFjNdCc', '', '', '', '', '03.00.001'),
(2, 2, 'Hardiyanti', 'hardiyantirb@gmail.com', 'hardii', '013498ff439cb152a1e390cf90fc70a74100c0dc', '', '', '', '27 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(3, 2, 'Abdul Munir', 'munir19@gmail.com', 'munir', 'c9be98504cdadc7d5787932b09dd70590f8c4c8d', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(4, 2, 'Della anjani', 'delaanjani@gmail.com', 'della', '51e84f09934eaf96b29d3f34eb23433dba8d2178', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(5, 2, 'Mawaddah', 'mawaddah11@gmai.com', 'mawaddah', '2cc0ec7466f7bc1f1aa66bb9907e3323cb54a14f', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(6, 2, 'Warahmah', 'warahmah@gmail.com', 'warahmah', '26e6ee1171c7c4bc3216273155f239a7fae67d55', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(7, 2, 'Sri mulyani', 'mulyanisri@gmail.com', 'mulyani', 'ac7343b09314d02b65471a96469e98da387f64c2', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(8, 2, 'Sri wahyuni', 'wahyunisri@gmail.com', 'wahyuni', 'deecc5971c8dfdcbeb52388f6ac0d08b88d39b51', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(9, 2, 'Sri reskiani', 'reskianisri@gmail.com', 'reskiani', 'cf33a52432217f19b0a8707f8f53e6bebc55f142', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(10, 2, 'Sri Wulandari', 'wulandarisri@gmail.com', 'wulandari', 'afdfc11c8d8e74d1c7cf07874080751c05cc362d', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(11, 2, 'Muhammad Alamsyah', 'Alamsyah@gmail.com', 'Alamasyah', '280a84f77ca0203b1dfcd4a9c5de09aaec4d5574', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(12, 2, 'Fandi Cristian', 'cristianfandi@gmail.com', 'fandi', '27aee31787988543064725568fcd463eec0afbcb', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(13, 2, 'Masri muhammad', 'masrimuhammad@gmail.com', 'masri', '27d25da661a22b84d2ff2b12d54f178fee9b5bcb', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(14, 2, 'Jumarni', 'jumarni@gmail.com', 'jum', '9883807d51b54f5a7fae2baee06e0d6ac7822159', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(15, 2, 'Israwati', 'israwati@gmail.com', 'isra', '7b15a878d96b3d9f923b155131a7a3a69f0ca40b', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(16, 2, 'Satrianti', 'satrianti@gmail.com', 'satri', 'da29dfb4006649f2d90953b53b4f605898ada30b', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(17, 2, 'Haerullah pabenteng', 'pabenteng@gmail.com', 'Oel', '9352a3e519993d0803a2074909e9d1c4c983db96', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(18, 2, 'Liawulandari', 'liawulandari@gmail.com', 'liawulan', '4d3c1b156465f941c0c924f2102595a62dbce2f7', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(19, 2, 'Nurdin', 'nurdin@gmail.com', 'nurdin', '63103aead0442cf9dd726802111a292e37e6d987', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(20, 2, 'Aisya', 'aisyah@gmail.com', 'aisyah', '2eb012a4865ae80a0e6240e40148d5f1dd26dca0', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(21, 2, 'Harnisa Rb', 'randabandaso@gmail.com', 'harnisa', 'b51c1c7558359ce0abf596a636c01958ad0c84cb', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(22, 2, 'Khalilghibran', 'khalilghibran@gmail.com', 'khalil', 'ba9b70cc8abdf2db883297f4ce967fdcbe56bd77', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(23, 2, 'Nursintaria bakari', 'nursintabakari@gmail.com', 'sinta', 'af79969f3dece7d22f5fe1b2939f87ce8e211289', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(24, 2, 'Wahida', 'wahida@gmail.com', 'dida', '04d9691245bac3d3369cc0cde9599346933aca20', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(25, 2, 'Wita', 'Wita@gmail.com', 'wita', 'ba73653b7e3747ca08712d136297edda11ec8ff7', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(27, 2, 'Widia', 'widia@gmail.com', 'wiwi', '77c8d143cf3dfe01466015badec80f426be3ecfb', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(28, 2, 'Fhaifnel', 'fhaifnel@gmail.com', 'inel', '4b89958e18573f748d0d8f682ea643d7617578a2', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(29, 2, 'Kasmira', 'kasmira@gmail.com', 'mira', 'b120613a3d69ffb5181a65ca892f58b7423658e7', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(31, 2, 'Tiansi', 'tiansi@gmail.com', 'titin', '6227eebc91401dba6beee261bb9cf825e594610f', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(32, 2, 'Rika', 'rikarsila@gmail.com', 'rika', 'de44efb1ea3bf9410932316cc6258312e40e886e', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(33, 2, 'Marsidin baken', 'marsidin@gmail.com', 'marsidin', 'c222579c5c79d0bee242ec118c4fe721b2087f41', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(34, 2, 'Asrianti', 'aseianti@gmail.com', 'asrianti', '41fae6680eee5409bd14b8f29a2e842ae5268006', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(35, 2, 'Dila hamsal', 'dilahamsal@gmail.com', 'dilahamsal', '3c85b1a40cd498ac081bb7b1c165e15c707cd95f', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(36, 2, 'Iis hidayah', 'hidayahiis@gmail.com', 'iis hidayah', '9810315b7118138d52c7090365ca59c5d172df37', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(37, 2, 'Silva', 'silvayanti@gmail.com', 'silva', '98da252ff7a59eb7262a682808d876ce7abd6c94', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(38, 2, 'Hasnaeni lupu', 'hasnaenil@gmail.com', 'hasnaeni', '3cdf26c4a916a9c230d38cf700189fc393f76a1a', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(39, 2, 'Mail jayanto', 'jayantomail@gmail.com', 'mail', 'f7c675d19cce8ff214239722c7d5d763e7c9179c', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(40, 2, 'Indrawan', 'indrawan@gmail.com', 'indra', '3ad210f654ecfe6ea8502a8a863abdc0a07d2b69', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(41, 2, 'Asrul pasimbong', 'pasimbongasrul@gmail.com', 'asrul', '2dd17f957abf96501165a438f2806b4e9b75bd29', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(42, 2, 'Sulfikar', 'sulfikar@gmail.com', 'fikar', 'b0055f8d250878710c3734373abe3ec22e8c59fb', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(43, 2, 'Lius cristian', 'criatianlius@gmail.com', 'lius', '27aee31787988543064725568fcd463eec0afbcb', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(44, 2, 'Panji ramdana', 'ramdanapanji@gmail.com', 'panji', '66f7664bf5ce919df50be3e73965b2c3d5edcee2', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(45, 2, 'Arif rampe', 'ariframpe@gmail.com', 'ariframpe', 'dcac641e5f2c8b2eddfdc666c97c256a1e6b5f71', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(46, 2, 'Agung maulana', 'maulana@gmail.com', 'agung', '1e91ca681865297928d6021f80b0c25378a2ba63', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(47, 2, 'Arya musdin', 'aryamusdin1717@gmail.com', 'arya', 'db75f14773477c112eb629eff151c7c1b465a437', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(48, 2, 'Sudandi', 'sudandi@gmail.com', 'dandi', '7c22af3f6382a7c11fd518860de85fc541014459', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(49, 2, 'Yayat', 'yayat@gmail.com', 'yayat', '35a6c0dfa9c02cec8052693267fad49c3af9c0a3', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(50, 2, 'Limin', 'liminho@gmail.com', 'limin', '6870e8a3c9019997ca132633697c442c5b91f301', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(51, 2, 'Hariadi cakti', 'hariadi@gmail.com', 'gador', '0005916bea3952c6316be5034f9b3dc0fe425fd6', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(52, 2, 'Miftahul jannah cakti', 'huljannah@gmail.com', 'miftahul', '7c1806d556ad9fba6245ab8470200c8797fda78c', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(53, 2, 'Khalil Akbar', 'akbarkhalil@gmail.com', 'khalil akbar', '1d09bfd0a525e1f9ca657ec5c407b82f385b6480', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(54, 2, 'Darwin sonna', 'darwinsonna@gmail.com', 'darwinsonna', 'c5ac9fa3e5919015d6b8d44f804c45dc8ea31a74', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(55, 2, 'Harmon pabenteng', 'pabentengharmon@gmail.com', 'harmon', 'b094ff96b519628dc3f95d48105f90b36f7a190b', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001'),
(56, 2, 'Herman pasande', 'hermanpasande@gmail.com', 'arman', '2344caab9d8f08edc3f41299bc3e806f754da1f3', '', '', '', '28 Dec 2021', 1, 'dD_9a6I7iX8:APA91bGN9avpit-HSBmsoLdKcuKIyRnJq9do1UHKcpHHby70S_tXyK2BHcx-MC1EVYsEu1QlNNxGSAEQ11MLCbG5ei2bY12vBphXFHvDD5opGYJjcDw3xlCvr_62h85Q5wzumqx3yQ-d', '', '', '', '', '03.00.001'),
(57, 2, 'Guntur Armada jaya', 'armadajaya@gmail.com', 'Guntur', 'c68225179d79edf2089b6d6bc7da57aaf86f04a5', '', '', '', '28 Dec 2021', 1, 'eAvLqt9dlnE:APA91bFkKJFPbcJVrAhZTVC1SwwTE2ZMwuykBXaJKTpaDRljOI6oAG1Q2LiTv7knVj-AXproTGIP9CFC9cORmHaxBCAXDzXwTIENE-sIzYHbYuGjvzqrKp7cnONR1sKzpGAC4ku8jP1V', '', '', '', '', '03.00.001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedik`
--

CREATE TABLE `tb_rekammedik` (
  `id_rekam` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `diagnosa` text NOT NULL,
  `jenis_obat` text NOT NULL,
  `no_jaminan` varchar(50) NOT NULL,
  `created_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekammedik`
--

INSERT INTO `tb_rekammedik` (`id_rekam`, `no_rm`, `tgl_lahir`, `diagnosa`, `jenis_obat`, `no_jaminan`, `created_at`) VALUES
(1, '05.00.150', '1971-11-30', 'Diabetes Mellitus + Hipertensi + Abces', 'Debridement,Kompres Nacl,\r\nAmplodipine 1x5 Mg, Ctm 3x1,\r\nCefadroxyl 2x500 Mg,\r\nVitamin C 3x1', '0001556693741', '21 Oct 2021'),
(2, '03.00.969', '1994-05-22', 'Ganglion', 'Rujuk Rs Bintang Laut Plp', '0001556697734', '21 Oct 2021'),
(3, '01.00.060', '1989-03-29', 'Dermotitis + Kontak Alergi', 'Ctm 3x1,\r\nHidrocortion Solf,\r\nVitamin C 1x500 Mg', '0001079627883', '21 Oct 2021'),
(4, '08.00.033', '2013-07-03', 'Tonsilitis Akut', 'Amoxcylline 3x250 Mg ,\r\nOgg 3x1/2,\r\nIbuprofen 3x1/2,\r\nVitamin C 3x1/2', '000155669696979', '21 Oct 2021'),
(5, '10.00.649', '2013-07-31', 'Hipertensi + Diabetes Mellitus', 'Amlodipin 1x10 Mg\r\nGlimepinde', '000940320652', '21 Oct 2021'),
(6, '03.00.580', '1997-10-10', 'Sehat', 'Surat Berbadan Sehat', '0000941477501', '21 Oct 2021'),
(7, '05.00.150', '1971-12-30', 'Diabetes Mellitus + Hipertensi + Abces', '-	Debridement,Kompres Nacl\r\n-	Amplodipine 1x5 Mg, Ctm 3x1\r\n-	Cefadroxyl 2x500 Mg\r\n-	Vitamin C 3x1', '0001556693741', '27 Dec 2021'),
(8, '03.00.969', '1994-05-22', 'Dermotitis + Kontak Alergi', '-	Ctm 3x1\r\n-	Hidrocortion Solf\r\n-	Vitamin C 1x500 Mg', '1079627883', '27 Dec 2021'),
(9, '08.00.033', '2013-07-03', 'Tonsilitis Akut', '-	Amoxcylline 3x250 Mg \r\n-	Ogg 3x1/2\r\n-	Ibuprofen 3x1/2\r\n-	Vitamin C 3x1/2', '000155669696979', '27 Dec 2021'),
(10, '05.00.267', '1953-12-31', 'Ppo K + Lbp + Ispa', '-	Tcn\r\n-	Cotn 2x960 Mg\r\n-	Acety L 3x1/2\r\n-	Pct 3x1\r\n-	Zmc 1x1/2', '0002421634882', '27 Dec 2021'),
(11, '03.00.341', '1974-01-02', 'Abces', '-	Amoxcilline 3x1,\r\n-	Vitamin C 3x1\r\n-	Asam Mefenamat 3x1\r\n-	Salf', '000941003324', '27 Dec 2021'),
(12, '07.00.088', '1966-07-01', 'Gastritis + Dka', '-	Antasid 3x1 Ac\r\n-	Omz 2x1 Ac\r\n-	Biet Bubur', '00009417441031', '27 Dec 2021'),
(13, '04.00.125', '1985-01-07', 'Gastritis + Coa', '-	Nadic 3x1\r\n-	Domperidom 3x1 Ac\r\n-	Ranididin 2x1 Ac\r\n-	Ut B 3x1\r\n-	Diet Teratur', '73171807850033', '27 Dec 2021'),
(14, '01.00.062', '1953-12-31', 'Hipertensi + Demam + Tb Par', '-	Ut K 1x1\r\n-	Amboxol 3x1\r\n-	Amlodipine 1x5mg\r\n-	Glibendamide ½-0-0 At\r\n-      Metformin 0-1-0', '0000941491282', '27 Dec 2021'),
(15, '01.00.141', '2017-02-21', 'Animal Bcat + Gphr', '-	Pct 3x ½ \r\n-	Ut C 3x ¼', '7317186102170001', '27 Dec 2021'),
(16, '10.00.672', '1979-06-09', 'Zhizoprenia', '-	Haloperidol 1,5 Mg 3x1\r\n-	Trihexyl 2mg 2x1\r\n-	Cloilex 1x12,5 Mg', '0002450251732', '27 Dec 2021'),
(17, '06.00.029', '1981-06-01', 'Ispa', '-	Cefadoxil 2x1\r\n-	Pct 3x1\r\n-	Gg 3x1', '0000941321079', '27 Dec 2021'),
(18, '05.00.482', '2008-06-06', 'Sircum', '-	Amoxcillin\r\n-	Pct\r\n-	Vitamin C', '0001072387359', '27 Dec 2021'),
(19, '05.00.344', '1969-07-01', 'Hipertensi', '-	Amiodipin\r\n-	Gupnepirid\r\n-	Bi', '0001072387664', '27 Dec 2021'),
(20, '05.00.419', '1983-07-15', 'Singgivitic', '-	Amox\r\n-	Nadic\r\n-	Dexa\r\n-	Vitamin C', '0002406553751', '27 Dec 2021'),
(21, '10.00.154', '2007-11-08', 'Onick', '-	Ibuprofen\r\n-	Dexa\r\n-	Ctm\r\n-	Amax\r\n-	Vitamin C', '0000939505759', '27 Dec 2021'),
(22, '04.00.437', '1990-09-24', 'Tifoid', '-	Kloramfenikol 3x2\r\n-	Paracetamol 3x1\r\n-	Zinc Vit C 1x ½ \r\n-	Ogg 3x1', '0002658626638', '27 Dec 2021'),
(23, '05.00.140', '1983-07-25', 'Dermatitis Kontak Alergi + Common Col31.D', '-	Paracetamol 3x1\r\n-	Ogg 3x1\r\n-	Zinc Vit C 1x ½ \r\n-	Dexametasone 3x1\r\n-	Ctm 3x1', '0000942019593', '27 Dec 2021'),
(24, '01.00.198', '1952-07-01', 'Hipertensi + Gerd', '-	Amlodipin 1x5 Mg\r\n-	Paracetamol 3x1\r\n-	Ranitidine 2x1 Ac\r\n-	Omeprazole 2x1 Ac\r\n-	Ctm 3x1', '0002830507569', '27 Dec 2021'),
(25, '01.00.488', '1962-04-03', 'Diabetes Mellitus 2 + Hipertensi', '-	Glimepiride 1-0-0 Ac\r\n-	Furosemide ½ - 0 – 0\r\n-	Amplodipin 5mg\r\n-	Debridement + Kompres Nacl', '00018906144406', '27 Dec 2021'),
(26, '03.00.103', '1962-09-03', 'Tifoid + Infeksi Saluran Pernafasan Akut', '-	Amoxcilline 3x250 Mg\r\n-	Paracetamol 3x ½  . Gg 3x ½\r\n-	Antasida Sirup 3x1 Sdt Ac\r\n-	Lyctacur Sirup 1x2 Sdt', '0002973304552', '27 Dec 2021'),
(27, '04.00.385', '1964-01-18', 'Covgh + Cc', '-	Ctm\r\n-	Vitamin C\r\n-	Gg\r\n-	Amox', '00002826682571', '27 Dec 2021'),
(28, '01.00.261', '2012-12-31', 'Komplikasi', '-	Ctm\r\n-	Metil\r\n-	Zink\r\n-	Vitamin C\r\n-	Hidro Saip', '0002367727841', '27 Dec 2021'),
(29, '01.00.129', '1976-03-12', 'Karies', '-	Nadic\r\n-	Metil\r\n-	Vitamin C\r\n-	Cefadroxil', '0001072395303', '27 Dec 2021'),
(30, '01.00.168', '1959-03-03', 'Diare', '-	Cotri\r\n-	Zink\r\n-	Bg', '0002367733116', '27 Dec 2021'),
(31, '06.00.057', '1995-06-30', 'Infeksi Saluran Pernapasan Akut + Cyrtitis', '-	Cefadvoxyl 2x500 Mg\r\n-	Paracetamol 3x1\r\n-	Acetylcystein 1x1\r\n-	Zivit Zino 2 X ½', '0000941345302', '27 Dec 2021'),
(32, '07.00.287', '2015-04-05', 'Gastritis', '-	Antasida Sirup 3x1 Sdt Ac\r\n-	Vitamin Bcompleks 3 X ½ \r\n-	Vitamin 3 X ½', '0001843008693', '27 Dec 2021'),
(33, '04.00.338', '1992-06-12', 'Supervision Of Normal Pregnancy', 'Rujuk P.Obgin Klinik Utama Walmas St. Madyang', '0000941646115', '27 Dec 2021'),
(34, '04.00219', '1965-05-08', 'Common Cold +  Dd Ispa + Osteo Atritis', '-	Amoxcilline 3x500 Mg\r\n-	Zivit Zinc 2 X ½ \r\n-	Paracetamol 3x1\r\n-	Gg 3x1\r\n-	Natrium Diclofenac 2x1', '000094238438', '27 Dec 2021'),
(35, '05.00.486', '2005-03-11', 'Colazion', '-	Oxytetia Salf 1%\r\n-	Metilprednisolon 3x1\r\n-	Kompres Hangat 3-4 X/Hari 15 Menit', '0002173591574', '27 Dec 2021'),
(36, '03.00.159', '1973-10-07', 'Gastritis + Hipertensi + Diabetes Mellitus', '-	Amlodipine 1x5 Mg\r\n-	Antasida 3x1 Ac\r\n-	Glimepinde 2mg – 0 – 0\r\n-	Ranitidine 2x1 Ac', '0000941015057', '28 Dec 2021'),
(37, '10.00.671', '2013-08-03', 'Cerumen Impac', '-	Cotrimoksazole Sirup 2x1\r\n-	Ibuprofen Sirup 3x1\r\n-	Prednisone 3 X ½ \r\n-	Phesiol Gliserol\r\n-	Tetes Telinga', '0001072385054', '28 Dec 2021'),
(38, '07.00.236', '1982-02-05', 'Tonsilitis Kronik', '-	Cefadoxyl 2x 500mg\r\n-	Ibuprofen 3x1\r\n-	Metil Prednisolon 3x1', '0000940136106', '28 Dec 2021'),
(40, '01.00.136', '2007-09-25', 'Sircumsisi', '-	Amoxycilline 4x 250mg\r\n-	Ibuprofen 4x1/2\r\n-	Zinc Vitamin C 1x1/2', '0001072385054', '28 Dec 2021'),
(41, '04.00.268', '1943-12-31', 'Dislipidemia + Osteo Atritis + Gout Atritis', '-	Arropulinol 1x1 \r\n-	Predinison 3x1\r\n-	Natrium Diclofenac 2x1\r\n-	Metil Prednisolon 3x1', '0001556687136', '28 Dec 2021'),
(43, '01.00.158', '2008-12-13', 'Post Slrcum H-3', '-	Amoxylline 4x250 Mg\r\n-	Ibuprofen 4x1/2\r\n-	Zinc Vit. C 1x1/2', '0001198122232', '28 Dec 2021'),
(44, '03.00.584', '1969-05-25', 'Osteo Atritis', '-	Proxicom 2x1\r\n-	Metil Prednisolon 3x1\r\n-	Vitamin B.I  3x1', '0002367732003', '28 Dec 2021'),
(46, '10.00.383', '2009-05-31', 'Infeksi Saluran Pernafasan Akut', '-	Gg 3x1\r\n-	Vitamin C 3x1\r\n-	Ctm 3x1\r\n-	Paracetamol 3x1\r\n-	Amoxycilline Sirup', '0001106831823', '28 Dec 2021'),
(47, '07.00.160', '1968-04-26', 'Hipotensi+ Insomnia+ Osteo Atritis', '-	Sf 1x1\r\n-	Vitamin B.I 3x1\r\n-	Ctm 3x1\r\n-	Natrium Diclofences 2x1', '0001536297469', '28 Dec 2021'),
(48, '01.00.192', '1989-12-30', 'Osteo Atritis', '-	Kloramfenikol Ear Drops/ 4 Tetes\r\n-	Cefadroxyl 2x 500mg\r\n-	Ibuprofen 3x1', '0001556688609', '28 Dec 2021'),
(49, '07.00.056', '1960-12-31', 'Hipertensi + Diabetes Melitus Dislipidemia + Tinea Unguinum + Candidiasis', '-	Simvastatin 0-0-1\r\n-	Amplodipin 5mg-0-0\r\n-	Glibenclamide 1/2  - 0-0\r\n-	Metformia 0-1-0\r\n-	Ctm 3x1\r\n-	Ketoconazole Salf', '0000940085199', '28 Dec 2021'),
(50, '03.00.001', '2020-12-25', 'Infeksi Saluran Pernafasan Akut + Dd Fneumonia', '-	Cefadroxyl Sirup 2x1/2 Sdt\r\n-	Paracetamol Sirup 3x1 Sdt\r\n-	Gg, Vitamin C, Vitamin B Compleks', '7317181908790002', '28 Dec 2021'),
(51, '0100.408', '1960-12-31', 'Hipertensi + Gastritis + Dermatitis Kontak Alergi', '-	Captopril 1x 25mg \r\n-	Antasida 3x1 Ac\r\n-	Dexamethasone 3x1\r\n-	Zinc Vit. C 1x ½', '0002885428157', '28 Dec 2021'),
(52, '01.00.028', '1975-08-27', 'Hemiparase + Hipertensi + Diabetes Mellitus + Ppok Et Causa Suspec Tuberculosis', 'Rujuk P. Saraf Rs. Klinik Mitra Husada Palopo', '0000941035035775', '28 Dec 2021'),
(53, '01.00.271', '1980-08-06', 'Gout Atritis', '-	Natrium Diclofenoc 2x1\r\n-	Allopurinol 1x1\r\n-	Paracetamol 3x1', '0000131830255', '28 Dec 2021'),
(54, '03.00.066', '2008-06-18', 'Animal Beat', '-	Debridement Dengan Air Mengalir\r\n-	Injeksi Anti Rabies\r\n-	Amoxycilline 4x250mg\r\n-	Ibuprofen 4x ½', '0000940590472', '28 Dec 2021'),
(55, '07.00.285', '1979-08-19', 'Animal Beat', '-	Detrisoment + Kompres Nact\r\n-	Inj. Anti Rabies Im\r\n-	R/ Lanjut\r\n-	Cefadroxyl 2x1 \r\n-	Metilprednisolon 3x1\r\n-	Ibuprofen 3x1', '0001882227457', '28 Dec 2021'),
(56, '07.00.119', '1990-05-19', 'Tifoid', '-	Cefadroxyl 2x 500mg\r\n-	Paracetamol 3x1\r\n-	Ranitidine 2x1 Ac \r\n-	Zinc Vit. C 1x ½', '0000940132034', '28 Dec 2021'),
(57, '01.00.363', '2005-04-15', 'Cystitis', '-	Cefadroxyl 2 X 500mg\r\n-	Asam Mefenamat 3x1\r\n-	Metilpredisolon 3x1\r\n-	Vit. K 1x1', '0001556693886', '28 Dec 2021'),
(58, '01.00.097', '1981-11-10', 'Cough + Gastritis', '-	Dextrol 3x1\r\n-	Antasida Sirup 3x2 Ac\r\n-	Vitamin C 3x1', '0000941985033', '28 Dec 2021'),
(59, '01.00.163', '2016-12-17', 'ispa', '-	Amoxycilline Sirup 3x1 Sdt\r\n-	Paracetamol 3x1\r\n-	Gg, Vitamin C, Vitamin B.Compleks, Ctm 3x1', '0002234325925', '28 Dec 2021'),
(60, '01.00.164', '1959-12-31', 'Follow. Up Post Op. Batu Ginjal / Cholelitiosis', '-	Asam Mefenamat 3x1\r\n-	Vitamin C 3x1', '0000941034609', '28 Dec 2021'),
(61, '08.00.087', '2017-05-16', 'Carries', 'Rujuk P. Gigi Rs. Mujaisyah Palopo', '0001556692593', '28 Dec 2021'),
(62, '05.00.484', '1998-04-24', 'Cold Abses Dd Lipoma', 'Rujuk P. Bedah Rs. Bintang Laut Palopo', '0001902924235', '28 Dec 2021'),
(63, '10.00.086', '1992-03-19', 'Gingivitis', '-	Asam Mefenamat 3x1 \r\n-	Vitamin C 3x1\r\n-	Amoxycilline 3x1\r\n-	Ctm 3x1\r\n-	Natrium Diclofenac 2x1', '0000207362312', '28 Dec 2021'),
(64, '07.00.088', '1998-03-30', 'Common Cold', '-	Paracetamol Sirup 3x3/4 Sdt\r\n-	Ctm \r\n-	Vitamin B.Compleks 3x1\r\n-	Vitamin C', '0001556692256', '28 Dec 2021'),
(65, '04.00.203', '1974-10-08', 'Diabetes Mellitus + Cough', '-	Metformin 1x1 \r\n-	Paracetamol 3x1 \r\n-	Dextral 3x1 \r\n-	Omeprazole 2x1\r\n-	Amoxycilline 3x1', '0000942279208', '28 Dec 2021'),
(66, '07.00.088', '1994-10-09', 'Kista Ovarium', 'Rujuk P. Obgian Rs. Bintang Laut Palopo\r\n-	Paracetamol 3x1\r\n-	Metilprednisolon 3x1', '0000941744169', '28 Dec 2021'),
(67, '04.00.283', '2000-12-22', 'Cough', '-	Amoxycilline 3x1\r\n-	Dextral 3x1\r\n-	Paracetamol 3x1 \r\n-	Vitamin C 3x1\r\n-	Prednisone 3x1', '0000942280165', '28 Dec 2021'),
(68, '04.00.314', '1983-12-22', 'Hipertensi + Cough', '-	Amlodipine 1x1\r\n-	Asam Mefenamat 3x1\r\n-	Antasida 3x1\r\n-	Dextral 3x1\r\n-	Amoxycilline 3x1\r\n-	Prednisone 3x1', '0002173551478', '28 Dec 2021'),
(69, '03.00.578', '2010-05-08', 'Follow Up Post Op', 'Rujuk P. Bedah Rs. Mega Buana Palopo', '0002250129982', '28 Dec 2021'),
(70, '05.00.013', '1996-09-18', 'ispa', '-	Paracetamol 3x1 \r\n-	Zinc Vit. C 2x1/2\r\n-	Ambroxol 3x1\r\n-	Paracetamol 3x1\r\n-	Ctm 3x1\r\n-	Vitamin C 3x1\r\n-	Prednisone 3x1\r\n-	Fe 1x1', '0002826683638', '28 Dec 2021'),
(71, '01.00.146', '1978-07-01', 'Pre Hipertensi + Osteo Atritis', '-	Asam Mefenamat 3x1\r\n-	Natrium Diclofenac 2x1\r\n-	Ranitide 2x1 Ac', '0002973304776', '28 Dec 2021'),
(72, '01.00.278', '1986-07-01', 'fatigue', '-	Paracetamol 3x1\r\n-	Ctm 3x1\r\n-	Vitamin C 3x1\r\n-	Prednisone 3x1\r\n-	Fe 1x1', '0001311919918', '28 Dec 2021'),
(73, '01.00.250', '1987-07-01', 'Hipertensi + Konjungtivitis', '-	Amlodipin 20mg – 0 – 0\r\n-	Amoxycilline 3x 500mg\r\n-	Oxytetra Salf 1% /Ac\r\n-	Ibuprofen 3x1', '0000941993392', '28 Dec 2021'),
(74, '01.00.250', '2994-08-20', 'Emesis + Cystitis', '-	Cefadroxyl 2x 500mg\r\n-	Ibuprofen 3x 400mg\r\n-	Domperidon 3x1 Ac \r\n-	Sf 1x1', '0000941995956', '28 Dec 2021'),
(75, '03.00.426', '1951-07-07', 'Headtension', '-	Natrium Diclofenac 2x1\r\n-	Metilprednisolon 3x1\r\n-	Vitamin C', '0002479630421', '28 Dec 2021'),
(76, '02.00.334', '1996-11-03', 'Abces Pro Hesting H.14', '-	Debridement +Aff Heacting \r\n-	Kompres Nacl/2 Hari\r\n-	Cefadroxyl 2x 500mg \r\n-	Ibuprofen 3x1\r\n-	Metilprednisolon 3x1\r\n-	Zinc Vitamin C 1x ½', '0002366279774', '28 Dec 2021'),
(77, '07.00.284', '2010-09-01', 'tifoid', '-	Antasida Sirup 3x1/2 \r\n-	Paracetamol 3x1/2\r\n-	Kloramfenicol 3x1/2\r\n-	Ctm 3x1/2', '0000940826812', '28 Dec 2021'),
(78, '01.00.017', '1969-03-23', 'Gingivitis + Gastritis Hipertensive Heart Disease', '-	Cefadroxyl 2x 500mg\r\n-	Metilprednisolon 3x1\r\n-	Ibuprofen 3x1\r\n-	Antasida 3x1 Ac', '0001556685876', '28 Dec 2021'),
(79, '01.00.189', '2013-11-07', 'Abces', '-	Kompres Nacl\r\n-	Amoxycilline 3x250 Mg\r\n-	Ibuprofen 3x1/2\r\n-	Metilprednisolon 3x1/2', '0001868914225', '28 Dec 2021'),
(80, '06.00.012', '1971-06-06', 'Common Cold', '-	Vitamin C 3x1\r\n-	Paracetamol 3x1\r\n-	Ctm 3x1', '000212674963', '28 Dec 2021'),
(81, '03.00.02001', '1998-01-14', 'Braxton Hicks', 'Rujuk P. Obgin Rs. At-Medika Palopo', '0000941115745', '28 Dec 2021'),
(82, '05.00.119', '1986-07-01', 'Tuberculosis Paru', '-	OAT 1 1x3 Tablet \r\n-	Vitamin B.6', '0000941417739', '28 Dec 2021'),
(83, '03.00.020', '2018-06-14', 'ispa', '-	Amoxycilline Sirup 3x1 Sdt\r\n-	Paracetamol Sirup 3x1 Sdt\r\n-	Gg \r\n-	Ctm \r\n-	Vitamin B. Compleks 3x1\r\n-	Vitamin C', '0002473148619', '28 Dec 2021'),
(84, '01.00.073', '2002-09-20', 'Corpus Alineum', '-	Amoxycilline 3x1\r\n-	Dexamethasone 3x1\r\n-	Asam Mefenamat 3x1` \r\n-	Vitamin C 3x1\r\n-	Drainase', '0000941974907', '28 Dec 2021'),
(85, '05.00.485', '1998-12-28', 'Suspec Tb', '-	Tcm\r\n-	Acetylcystein', '0002367730045', '28 Dec 2021'),
(86, '04.00.096', '0972-07-01', 'Hipertensi + Diabetes Melitus + Osteo Atritis\r\nSuspee Tuberculosis', '-	Captopril 1x 12,5mg\r\n-	Blibenclamide ½-0-0 Ac\r\n-	Piroxicom 2 X 1\r\n-	Vitamin B.1 1x2', '0000941037647', '28 Dec 2021'),
(87, '05.00.483', '1997-03-04', 'Suspee Tuberculosis', '-	Kotrimoksazole 2 X 960mg\r\n-	Acezyylcystein 3x1\r\n-	Paracetamol 3x1\r\n-	Zinc Vit. C 1x ½', '0003072388182', '28 Dec 2021'),
(88, '01.00.073', '1977-08-20', 'Osteo Atritis', '-	Natrium Diclofenac 2x1\r\n-	Metilprednisolon 2x1\r\n-	Amoxycilline 3x1', '0000941974525', '28 Dec 2021'),
(89, '04.00.094', '1998-05-10', 'tifoid', 'rawat inap', '000941732368', '28 Dec 2021'),
(90, '02.00.327', '2007-06-05', 'Sir Cumsisi', '-	Amoxycilline 3x ½ \r\n-	Asam Mefenamat 3x ½ \r\n-	Dexamethasone 3x ½ \r\n-	Vitamin C 3x ½', '0002826681816', '28 Dec 2021'),
(91, '03.00.366', '1993-08-15', 'Cough + Gastritis', '-	Dextral 3x1\r\n-	Amoxycilline 3x1\r\n-	Antasida 3x1 Ac', '0001072383748', '28 Dec 2021'),
(92, '07.00.015', '2011-04-01', 'Infeksi Saluran Pernafasan Akut', '-	Amoxycilline 4x 250mg\r\n-	Paracetamol 4x ½ \r\n-	Gg 4x ½ \r\n-	Zinc Vit. C 2x ½', '0000941046028', '28 Dec 2021'),
(93, '04.00.175', '1955-08-18', 'Hipertensi + TA', '-	Cek BTA\r\n-	Gg 3x1\r\n-	Amlodipine 0-0-5mg\r\n-	Ctm 3x1\r\n-	Pivoxicam 3x1', '0000941796246', '28 Dec 2021'),
(94, '04.00.172', '2009-11-09', 'Gastritis', '-	Antasida 3x1 Ac\r\n-	Ranitidine 2x ½ \r\n-	Paracetamol 3x ½', '0000941762766', '28 Dec 2021'),
(95, '04.00.175', '1966-01-03', 'HT + Gastitis', '-	Antacid Sirup 3x2 Sdm \r\n-	Ranitidin 2x1\r\n-	Omz 1x1\r\n-	Vitamin B.6 3x1', '0000941796887', '28 Dec 2021'),
(96, '05.00.141', '2017-02-21', 'Animal Beat', '-	Debridemen Dengan Air Mengalir &Bilas Dengan Sabun\r\n-	Infeksi Tt Anti Rabies \r\n-	Amoxycilline 3x 250mg\r\n-	Ibuprofen 3x ½', '0002445597887', '28 Dec 2021'),
(97, '04.00.175', '2013-11-17', 'GEA', '-	Ovalit 1x1\r\n-	Gcopma 1x ½\r\n-	Combi Sirup 2x2 Sdm\r\n-	Antacid Sirup 2x1 Sdm', '0001868919225', '28 Dec 2021'),
(98, '01.00.189', '1985-01-14', 'GEA', '-	Gotri 2x 960mg\r\n-	Pct 3x1\r\n-	Scopma 3x1\r\n-	Zinc 1x1\r\n-	Ctm 3x1', '00018689009207', '28 Dec 2021'),
(99, '01.00.283', '1974-08-08', 'Infeksi Saluran Pernafasan Akut + Gastritis', '-	Amoxycilline 3x 500mg\r\n-	Ambroxol 3x1\r\n-	Paracetamol 3x1\r\n-	Antasida 3x1 Ac\r\n-	Ranitidine 2x1 Ac\r\n-	Ctm 3x1', '0000162904768', '28 Dec 2021'),
(100, '01.00.04', '2008-06-04', 'Abces Furuncle Of Nose', '-	Ctm 3x1 \r\n-	Dexamethasone 3x1\r\n-	Ibuprofen 3x1\r\n-	Amoxycilline 3x1', '0002072315855', '28 Dec 2021'),
(101, '10.00.003', '2009-07-23', 'Sircumsisi', '-	Amoxycilline 3x ½ \r\n-	Vitamin C 3x1\r\n-	Asam Mefenamat 3x ½\r\n-	Dexa 3x ½', '0000942119763', '28 Dec 2021'),
(102, '04.00.429', '2009-09-09', 'Sircumsisi', '-	Amoxycilline 3x ½ \r\n-	Asam Mefenamat 3x ½ \r\n-	Vitamin C 3x1\r\n-	Dexamethasone 3x ½', '0000941736172', '28 Dec 2021'),
(103, '04.00.117', '1984-07-01', 'Otitis Media Akut', '-	Metilpredisolon 3x1\r\n-	Ibuprofen 3x400mg', '0000941140113', '28 Dec 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_active` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_id`, `user_active`, `nama`, `email`, `username`, `password`, `created_at`) VALUES
(1, 1, 1, 'Auliya Nurmala', 'nurmalauliya@gmail.com', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', '14 Dec 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grup_id` (`grup_id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_regis`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_rekammedik`
--
ALTER TABLE `tb_rekammedik`
  ADD PRIMARY KEY (`id_rekam`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_rekammedik`
--
ALTER TABLE `tb_rekammedik`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD CONSTRAINT `tb_pengaduan_ibfk_1` FOREIGN KEY (`grup_id`) REFERENCES `tb_grup` (`id_grup`);

--
-- Constraints for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD CONSTRAINT `tb_register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_grup` (`id_grup`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_grup` (`id_grup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
