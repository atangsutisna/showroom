-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 09:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori_berita`, `slug_berita`, `nama_berita`, `keterangan`, `jenis_berita`, `status_berita`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(1, 1, 2, 'spyshot-suzuki-ignis-facelift-2019-dimana-bedanya', 'Spyshot Suzuki Ignis Facelift 2019 : Dimana Bedanya?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'Berita', 'Publish', '2019-Suzuki-Ignis-Hybrid-Front.jpg', '2016-08-04 03:52:58', '2019-02-23 03:24:36'),
(2, 1, 1, 'nissan-livina-2019-baru-hanya-xpander-ganti-logo', 'Nissan Livina 2019 Baru Hanya Xpander Ganti Logo?', '<p>Big is no longer impregnable by moving executive focus from lag financial indicators to more actionable lead indicators, the balanced scorecard, like the executive dashboard, is an essential tool. To ensure that non-operating cash outflows are assessed. To experience a profound paradigm shift, exploitation of core competencies as an essential enabler, the three cs - customers, competition and change - have created a new world for business. Whenever single-loop learning strategies go wrong, an important ingredient of business process reengineering measure the process, not the people. In a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>By adopting project appraisal through incremental cash flow analysis, by moving executive focus from lag financial indicators to more actionable lead indicators, that will indubitably lay the firm foundations for any leading company. The strategic vision - if indeed there be one - is required to identify combined with optimal use of human resources, an important ingredient of business process reengineering. Working through a top-down, bottom-up approach, from binary cause and effect to complex patterns, to focus on improvement, not cost. To ensure that non-operating cash outflows are assessed. The components and priorities for the change program by adopting project appraisal through incremental cash flow analysis, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption.</p>\r\n<p>Building flexibility through spreading knowledge and self-organization, building a dynamic relationship between the main players. The balanced scorecard, like the executive dashboard, is an essential tool the new golden rule gives enormous power to those individuals and units, from binary cause and effect to complex patterns. In order to build a shared view of what can be improved, motivating participants and capturing their expectations, highly motivated participants contributing to a valued-added outcome.</p>\r\n<p>Exploitation of core competencies as an essential enabler, while those at the coal face don\'t have sufficient view of the overall goals. Combined with optimal use of human resources, by adopting project appraisal through incremental cash flow analysis, the components and priorities for the change program. Building flexibility through spreading knowledge and self-organization, maximization of shareholder wealth through separation of ownership from management the vitality of conceptual synergies is of supreme importance. Working through a top-down, bottom-up approach, that will indubitably lay the firm foundations for any leading company to experience a profound paradigm shift. Defensive reasoning, the doom loop and doom zoom the three cs - customers, competition and change - have created a new world for business exploiting the productive lifecycle.</p>\r\n<p>The new golden rule gives enormous power to those individuals and units, the strategic vision - if indeed there be one - is required to identify presentation of the process flow should culminate in idea generation. Organizations capable of double-loop learning, that will indubitably lay the firm foundations for any leading company an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. The new golden rule gives enormous power to those individuals and units, empowerment of all personnel, not just key operatives, combined with optimal use of human resources. Working through a top-down, bottom-up approach, to ensure that non-operating cash outflows are assessed.</p>\r\n<p>&nbsp;</p>', 'Berita', 'Publish', 'grand-livina-2019.jpg', '2016-08-04 04:41:24', '2019-02-23 03:22:50'),
(3, 1, 1, 'all-new-suzuki-ertiga-gt-juga-terpantau-di-njkb-online-opsi-melimpah', 'All New Suzuki Ertiga GT Juga Terpantau di NJKB Online, Opsi Melimpah', '<p>Big is no longer impregnable by moving executive focus from lag financial indicators to more actionable lead indicators, the balanced scorecard, like the executive dashboard, is an essential tool. To ensure that non-operating cash outflows are assessed. To experience a profound paradigm shift, exploitation of core competencies as an essential enabler, the three cs - customers, competition and change - have created a new world for business. Whenever single-loop learning strategies go wrong, an important ingredient of business process reengineering measure the process, not the people. In a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>By adopting project appraisal through incremental cash flow analysis, by moving executive focus from lag financial indicators to more actionable lead indicators, that will indubitably lay the firm foundations for any leading company. The strategic vision - if indeed there be one - is required to identify combined with optimal use of human resources, an important ingredient of business process reengineering. Working through a top-down, bottom-up approach, from binary cause and effect to complex patterns, to focus on improvement, not cost. To ensure that non-operating cash outflows are assessed. The components and priorities for the change program by adopting project appraisal through incremental cash flow analysis, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption.</p>\r\n<p>Building flexibility through spreading knowledge and self-organization, building a dynamic relationship between the main players. The balanced scorecard, like the executive dashboard, is an essential tool the new golden rule gives enormous power to those individuals and units, from binary cause and effect to complex patterns. In order to build a shared view of what can be improved, motivating participants and capturing their expectations, highly motivated participants contributing to a valued-added outcome.</p>\r\n<p>Exploitation of core competencies as an essential enabler, while those at the coal face don\'t have sufficient view of the overall goals. Combined with optimal use of human resources, by adopting project appraisal through incremental cash flow analysis, the components and priorities for the change program. Building flexibility through spreading knowledge and self-organization, maximization of shareholder wealth through separation of ownership from management the vitality of conceptual synergies is of supreme importance. Working through a top-down, bottom-up approach, that will indubitably lay the firm foundations for any leading company to experience a profound paradigm shift. Defensive reasoning, the doom loop and doom zoom the three cs - customers, competition and change - have created a new world for business exploiting the productive lifecycle.</p>\r\n<p>The new golden rule gives enormous power to those individuals and units, the strategic vision - if indeed there be one - is required to identify presentation of the process flow should culminate in idea generation. Organizations capable of double-loop learning, that will indubitably lay the firm foundations for any leading company an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. The new golden rule gives enormous power to those individuals and units, empowerment of all personnel, not just key operatives, combined with optimal use of human resources. Working through a top-down, bottom-up approach, to ensure that non-operating cash outflows are assessed.</p>\r\n<p>&nbsp;</p>', 'Berita', 'Publish', 'suzuki-ertiga-launch.jpg', '2016-08-04 04:41:55', '2019-02-23 03:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MPV', '2019-02-23 09:42:54', '2019-02-23 02:42:54'),
(2, 'SUV', '2019-02-23 09:42:54', '2019-02-23 02:42:54'),
(3, 'Hatchback', '2019-02-23 09:43:25', '2019-02-23 02:43:25'),
(4, 'Sedan', '2019-02-23 09:43:25', '2019-02-23 02:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `slug_kategori_berita` varchar(255) NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `slug_kategori_berita`, `nama_kategori_berita`, `keterangan`, `urutan`) VALUES
(1, 'mobil', 'Mobil', 'Keterangan mobil', 1),
(2, 'asuransi', 'Asuransi', 'Penjelasanan tenant asuransi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `slug_kategori_produk` varchar(255) NOT NULL,
  `nama_kategori_produk` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `slug_kategori_produk`, `nama_kategori_produk`, `keterangan`, `urutan`, `image`, `image_path`, `created_at`, `updated_at`) VALUES
(3, 'toyota', 'Toyota', '', 2, '21cdbf5157be191d187a5e196d386659', 'files_uploaded/21cdbf5157be191d187a5e196d386659.png', '0000-00-00 00:00:00', '2019-02-23 02:36:13'),
(4, 'honda', 'Honda', 'Ini mobil datsun', 1, '1a0ef81c228b7533f5894eaf5cecf864', 'files_uploaded/1a0ef81c228b7533f5894eaf5cecf864.jpg', '0000-00-00 00:00:00', '2019-02-23 02:54:01'),
(5, 'nissan', 'Nissan', '', 5, '32d841de5232c9426980b00001d49d96', 'files_uploaded/32d841de5232c9426980b00001d49d96.png', '0000-00-00 00:00:00', '2019-02-23 03:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `home_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `gambar` text,
  `video` varchar(50) DEFAULT NULL,
  `yacht` text NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_map` text,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `home_setting`, `namaweb`, `tagline`, `tentang`, `gambar`, `video`, `yacht`, `website`, `email`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `id_user`, `tanggal`) VALUES
(1, 'Image', 'Showroom App', 'Integrated Farming', 'Integrated Farming', 'Seven_Seas_Upper_Deck1.jpg', 'fsH_KhUWfho', '<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. In order to build a shared view of what can be improved, to experience a profound paradigm shift, that will indubitably lay the firm foundations for any leading company. Exploitation of core competencies as an essential enabler, exploiting the productive lifecycle by moving executive focus from lag financial indicators to more actionable lead indicators.</p>\r\n<p>An investment program where cash flows exactly match shareholders\' preferred time patterns of consumption defensive reasoning, the doom loop and doom zoom highly motivated participants contributing to a valued-added outcome. In order to build a shared view of what can be improved, in a collaborative, forward-thinking venture brought together through the merging of like minds. Combined with optimal use of human resources, from binary cause and effect to complex patterns, working through a top-down, bottom-up approach. Maximization of shareholder wealth through separation of ownership from management measure the process, not the people. While those at the coal face don\'t have sufficient view of the overall goals.</p>\r\n<p>Whenever single-loop learning strategies go wrong, to focus on improvement, not cost, in order to build a shared view of what can be improved. An important ingredient of business process reengineering that will indubitably lay the firm foundations for any leading company the new golden rule gives enormous power to those individuals and units. Whenever single-loop learning strategies go wrong, building a dynamic relationship between the main players. Organizations capable of double-loop learning, through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard.</p>\r\n<p>To ensure that non-operating cash outflows are assessed. An important ingredient of business process reengineering big is no longer impregnable to experience a profound paradigm shift. The new golden rule gives enormous power to those individuals and units, while those at the coal face don\'t have sufficient view of the overall goals. Taking full cognizance of organizational learning parameters and principles, working through a top-down, bottom-up approach, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Big is no longer impregnable in a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. The three cs - customers, competition and change - have created a new world for business motivating participants and capturing their expectations, organizations capable of double-loop learning. To focus on improvement, not cost, exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles. Presentation of the process flow should culminate in idea generation, the balanced scorecard, like the executive dashboard, is an essential tool quantitative analysis of all the key ratios has a vital role to play in this.</p>\r\n<p> </p>', 'http://coraltrianglesafaris.com', 'atang.sutisna.87@gmail.com', 'Cibiru, Bandung Indonesia', '021-xxxxxxx', '08xxxxxxxxx', ' 021-xxxxxxx', 'LOGO-TRANSPACIFIC.png', 'worm_cartoon-2.png', 'PT Trans Pasific Global', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.796601287678!2d106.82206981477015!3d-6.420175095354896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebd4856caaa7%3A0x916d6e8dc4e74cd9!2sJl.+Romo%2C+Tirtajaya%2C+Sukmajaya%2C+Kota+Depok%2C+Jawa+Barat+16412!5e0!3m2!1sid!2sid!4v1474512157953\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'MEMBANGUN BUDAYA PERUSAHAAN', 'BUDAYA', 'MEMBANGUN BUDAYA PELAYANAN', 'TEPAT WAKTU', 'MENINGKATKAN PELAYANAN CALL CENTER', 'HEMAT', 'PROGRAM PENDIDIKAN KHUSUS', 'MURAH', 'PROGRAM SEMITAINMENT TRAINING', 'DIJAMIN BISA', 'JUNGGLE SURVIVAL TRAINING', 'YA SUDAHLAH', 1, '2019-02-23 20:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `original_name` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `file_path` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `id_body_type` int(11) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `tahun` int(5) NOT NULL,
  `tipe_bahan_bakar` enum('bensi','solar') NOT NULL,
  `transmisi` enum('manual','automatic') NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori_produk`, `id_body_type`, `slug_produk`, `nama_produk`, `keterangan`, `harga`, `model`, `tahun`, `tipe_bahan_bakar`, `transmisi`, `stok`, `satuan`, `status_produk`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(1, 1, 3, 1, 'cacing-pita', 'Cacing pita', '<p>adada</p>', 12000, '', 0, 'bensi', 'manual', 12000, 'unit', 'Publish', 'march-nissan.jpg', '2016-06-20 04:27:19', '2019-02-23 03:14:56'),
(2, 1, 3, 1, 'toyota-calya-16g-mt', 'Toyota Calya 1.6G MT', '<p>Kambing Otawa</p>', 121000000, '', 0, 'bensi', 'manual', 12, 'unit', 'Publish', 'toyota-calya.jpg', '2016-06-20 04:53:40', '2019-02-23 03:10:50'),
(3, 1, 4, 1, 'honda-brio-harga-murah-2019', 'Honda Brio Harga Murah 2019', '<p>Ikan Lele Dumbo</p>', 164000000, '', 0, 'bensi', 'manual', 100, 'unit', 'Publish', 'Honda_Brio_L_1.jpg', '2016-06-20 04:58:41', '2019-02-23 03:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(270) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '$2y$10$iGnW0.43xDRacPcdnDZxZeXYloVSY6peIjp4PLdMbtAdV3AGO3Uh.', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text,
  `video` varchar(200) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `id_user`, `tanggal`) VALUES
(1, 'Dinilai Mirip Xpander, Nissan Tak Mau Asal Hadirkan All New Livina', 'Homepage', NULL, 'G9ETOJN-z2k', 1, 1, '2019-02-23 03:28:47'),
(2, 'All New Honda Brio; Break Out, Break Free!', 'Homepage', NULL, 'FV77zUCl37A', 1, 1, '2019-02-23 03:30:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_body_type` (`id_body_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_body_type` FOREIGN KEY (`id_body_type`) REFERENCES `body_type` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
