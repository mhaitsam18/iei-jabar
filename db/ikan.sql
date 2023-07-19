-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 03:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `abundance`
--

CREATE TABLE `abundance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abundance` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abundance`
--

INSERT INTO `abundance` (`id`, `abundance`, `description`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', 'Undefined', '2023-07-17 10:11:59', '2023-07-17 10:11:59'),
(1, 'Not Evaluated (NE)', 'Not Evaluated', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(2, 'Least Concern (LC)', 'Species or ecosystems that are not considered at risk of extinction in the near future due to their large populations, wide distribution, and limited threats.', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(3, 'Data Deficient (DD)', NULL, '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(4, 'Near Threatened (NT)', NULL, '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(5, 'Vulnerable', 'Species or ecosystems that face a high risk of extinction in the wild if the threatening factors continue.', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(6, 'Critically Endangered', 'Species or ecosystems that are at an extremely high risk of extinction in the wild, with very limited populations and facing imminent extinction without immediate and effective conservation actions.', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(7, 'Endangered', 'Species or ecosystems that face a very high risk of extinction in the wild if effective conservation measures are not taken.', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(8, 'Extinct in the Wild', 'Species that no longer exist in their natural habitats but are still maintained in captive populations or outside their natural habitats.', '2023-07-12 06:21:21', '2023-07-12 06:21:21'),
(9, 'Extinct', 'Species that no longer exist in the wild or in captivity.', '2023-07-12 06:21:21', '2023-07-12 06:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `archipelago`
--

CREATE TABLE `archipelago` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distribution_id` bigint(20) UNSIGNED DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `archipelago` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archipelago`
--

INSERT INTO `archipelago` (`id`, `distribution_id`, `province_id`, `archipelago`, `created_at`, `updated_at`) VALUES
(0, 0, 0, 'Undefined', '2023-07-17 10:12:36', '2023-07-17 10:12:36'),
(1, 1, 0, 'Sungai Nil', '2023-07-18 10:20:57', '2023-07-18 10:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `excerpt`, `content`, `slug`, `author_id`, `fish_id`, `article_category_id`, `article_type_id`, `thumbnail`, `views`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Undefined', 'Undefined', 'Undefined', 'undefined', 0, 0, 0, 0, 'image-not-found.png', 0, NULL, '2023-07-17 17:50:39', '2023-07-17 17:50:39', '2023-07-17 17:50:39'),
(1, 'Resep Ikan Kuah Kuning, Pakai Daging Ikan Filet Lebih Nikmat', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, cupiditate.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates deserunt officia ab nesciunt quidem hic aperiam delectus, necessitatibus doloremque sed repellat praesentium eius commodi aliquid atque quo perspiciatis quod quibusdam eveniet iure adipisci. Fugiat molestias minima facilis praesentium tempora, sequi doloribus officia, obcaecati illum asperiores beatae unde veniam sit alias? Voluptate aliquam ut, neque eaque vitae sint. Ab et ratione rem maxime ad animi adipisci eligendi itaque facilis odio placeat ipsam voluptate tempora reprehenderit molestiae mollitia, dolores quibusdam autem. Necessitatibus dolore assumenda consectetur eligendi numquam nemo ex aliquid non similique est quaerat optio quisquam, quae consequuntur dolores id natus molestias?', 'resep-ikan-kuah-kuning', 3, NULL, NULL, 1, 'artikel/64b73f6366c30.jpeg', 0, NULL, '2023-06-22 01:22:54', '2023-07-18 17:23:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_category`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 17:51:31', '2023-07-17 17:51:31'),
(1, 'Ikan', '2023-07-13 05:39:08', '2023-07-13 05:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `article_type`
--

CREATE TABLE `article_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_type`
--

INSERT INTO `article_type` (`id`, `article_type`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 17:51:47', '2023-07-17 17:51:47'),
(1, 'Sejarah', '2023-06-21 19:00:09', '2023-06-21 19:00:09'),
(2, 'Budidaya', '2023-06-21 19:00:09', '2023-06-21 19:00:09'),
(3, 'Informasi', '2023-06-21 19:00:09', '2023-06-21 19:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avatar`
--

INSERT INTO `avatar` (`id`, `name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Man', 'avatar/man.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(2, 'Black Man', 'avatar/black-man.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(3, 'Hat Man', 'avatar/hat-man.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(4, 'Jilbab Woman', 'avatar/jilbab-woman.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(5, 'Europe Man', 'avatar/europe-man.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(6, 'Woman', 'avatar/woman.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59'),
(7, 'Young Black Man', 'avatar/young-black-man.png', '2023-07-18 16:20:59', '2023-07-18 16:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `phylum_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `species` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `general_name`, `phylum_id`, `description`, `picture`, `species`, `created_at`, `update_at`) VALUES
(0, 'Undefined', 'Undefined', 0, 'not found', 'image-not-found.png', NULL, '2023-07-17 17:52:28', '2023-07-17 17:52:28'),
(1, 'Osteichtyes', 'Ikan Bertulang Sejati', 9, 'Osteichthyes atau disebut juga Ikan bertulang sejati adalah kelas dari anggota hewan bertulang belakang yang merupakan subfilum dari Pisces. Osteichthyes berasal dari bahasa Yunani, yaitu osteon yang berati tulang dan ichthyes yang berarti ikan. Ikan jenis ini hidup di laut, rawa-rawa, atau air tawar. Superkelas: Osteichthyes; Huxley, 1880', 'class/64b62ea2b4b69.jpeg', 0, '2023-07-18 06:15:07', '2023-07-18 06:15:07'),
(2, 'Petromyzontidae', 'Ikan Lamprey', 9, 'Lamprey adalah garis keturunan purba dari ikan tak berahang dari ordo Petromyzontiformes, ditempatkan di superclass Cyclostomata. Lamprey dewasa dapat dicirikan dengan mulut penghisap yang bergigi seperti corong.', 'classify/64a3f75277f80.jpeg', 0, '2023-06-10 19:52:30', '2023-06-10 19:52:30'),
(3, 'Petromyzontida', '', 9, 'Hyperoartia or Petromyzontida is a disputed group of vertebrates that includes the modern lampreys and their fossil relatives. Examples of hyperoartians from early in their fossil record are Endeiolepis and Euphanerops (which possessed a calcified branchial basket), fish-like animals with hypocercal tails that lived during the Late Devonian Period. Some paleontologists still place these forms among the ', 'classify/64a3f75d6c5b3.jpeg', 0, '2023-06-10 19:54:29', '2023-06-10 19:54:29'),
(4, 'Conodonta', '', 9, 'diklasifikasikan dalam kelas Conodonta. Selama bertahun-tahun, mereka hanya diketahui dari elemen oral mirip gigi yang ditemukan di pengasingan dan sekarang disebut elemen conodont. Pengetahuan mengenai jaringan halus masih terbatas.', 'classify/64a3f76b9ef63.jpeg', 0, '2023-06-10 19:56:27', '2023-06-10 19:56:27'),
(5, 'Placodermi', 'ikan berperisai', 9, 'Placodermi (Dari bahasa yunani πλάξ = Perisai dan δέρμα = Kulit) adalah spesies ikan berperisai yang telah punah, diketahui dari fossilnya, spesies ini hidup diantara periode Silur, hingga periode Devon (periode) akhir. Kepala ikan ini, dilindungi oleh plat keras, sedangkan, seluruh bagian tubuh lainnya tidak diselimuti oleh perisai ini. Taxa Placodermi, dianggap sebagai paraphyleti yang berkerabat dengan seluruh ikan yang hidup saat ini.', 'classify/64a3f78e28ba0.jpeg', 0, '2023-06-10 19:58:34', '2023-06-10 19:58:34'),
(6, 'Chondrichthyes', 'ikan bertulang rawan', 9, 'Chondrichthyes atau ikan bertulang rawan adalah ikan berahang, mempunyai sirip berpasangan, lubang hidung berpasangan, sisik, jantung beruang dua, dan rangka yang terdiri atas tulang rawan bukan tulang sejati. Mereka dibagi menjadi dua subkelas: Elasmobranchii (Hiu dan Pari ) dan Holocephali (kimera atau hiu hantu, terkadang dipisahkan menjadi kelas tersendiri).', 'classify/64a3f78423a86.jpg', 0, '2023-06-10 19:58:34', '2023-06-10 19:58:34'),
(7, 'Acanthodii', 'ikan Basal', 9, 'Acanthodii atau acanthodians adalah kelas gnathostom yang telah punah. Mereka saat ini dianggap mewakili tingkat parafiletik dari berbagai garis keturunan ikan basal hingga Chondrichthyes yang masih ada, yang mencakup hiu, pari, dan chimaera yang masih hidup.', 'classify/64a3f79a18cc6.jpg', 0, '2023-06-10 19:58:34', '2023-06-10 19:58:34'),
(8, 'Actinopterygii', 'ikan bersirip kipas', 9, 'Actinopterygii (/ˌæktɪnɒptəˈrɪdʒiaɪ/; dari actino-, berarti ', 'classify/64a3f7b7445cf.jpg', 0, '2023-06-10 19:58:34', '2023-06-10 19:58:34'),
(9, 'Sarcopterygii', 'ikan bersirip cuping', 9, 'Sarcopterygii - Crossopterygii merupakan kelas dari Chordata bertulang sejati yang mengembangkan anggota badan berciri mirip tungkai: tebal, berdaging, dan juga memiliki tulang. Anggotanya adalah ', 'classify/64a3f7c295ef5.png', 0, '2023-06-10 19:58:34', '2023-06-10 19:58:34'),
(10, 'Mammalia laut', 'ikan seperti paus dan lumba-lumba', 9, '', 'classify/64a3f7cbed19e.jpg', 128, '2023-06-11 02:29:58', '2023-06-11 02:29:58'),
(11, 'Cephalaspidomorphi', 'ikan tak berahang (primitif)', 9, 'Cephalaspidomorphs adalah sekelompok ikan tanpa rahang yang dinamai Cephalaspis dari osteostracans. Sebagian besar ahli biologi menganggap takson ini telah punah, tetapi nama ini kadang-kadang digunakan dalam klasifikasi lamprey, karena lamprey pernah dianggap berkerabat dengan sefalaspid. Jika lamprey dimasukkan, mereka akan memperluas jangkauan kelompok yang diketahui dari periode Silurian dan Devonian hingga saat ini. Mereka adalah kerabat terdekat ikan berahang, yang muncul dari dalam diri mereka dan akan bertahan hidup jika ikan berahang dimasukkan.', 'classify/64a3f83c83632.jpg', 0, '2023-06-11 02:38:31', '2023-06-11 02:38:31'),
(12, 'Myxini', 'ikan seperti lintah laut', 9, 'Ikan hag (bahasa Inggris: hagfish) adalah hewan serupa ikan yang memiliki tulang belakang (vertebra) semu. Hewan air ini dianggap sebagai bentuk ikan purba. Habitatnya adalah laut, sungai, dan danau.\n\nIkan hag tidak diklasifikasikan sebagai vertebrata karena tidak mempunyai tulang belakang (vertebra) sejati; juga tidak dapat dianggap avertebrata karena ia memiliki notokorda pada tahap awal perkembangan hidupnya dan tengkorak yang melindungi otaknya. Oleh para zoologiwan, remang dimasukkan ke dalam filum Chordata, klad Craniata, suprakelas Agnatha, kelas Myxini.', 'classify/64a3f55888fac.jpeg', 200, '2023-06-10 19:49:52', '2023-06-10 19:49:52'),
(13, 'Thelodonti', 'Ikan Purba', 9, 'Thelodonti adalah kelas ikan tak berahang Paleozoikum yang telah punah dengan sisik yang khas, bukan pelat pelindung yang besar. Ada banyak perdebatan mengenai apakah kelompok tersebut mewakili pengelompokan monofiletik, atau kelompok induk yang berbeda dengan garis utama ikan tanpa rahang dan berahang.', 'class/64b6308c3eaff.jpg', 0, '2023-06-11 02:51:48', '2023-06-11 02:51:48'),
(14, 'Anaspida', 'Ikan Purba', 9, 'Anaspida adalah kelompok vertebrata tanpa rahang yang telah punah secara evolusioner yang ada dari periode Silur awal hingga akhir periode Devonian. Mereka secara klasik dianggap sebagai nenek moyang lamprey.', 'class/64b630aabf6d7.jpg', 0, '2023-06-11 02:51:48', '2023-06-11 02:51:48'),
(15, 'Galeaspida', 'Ikan Purba', 9, 'aleaspida adalah takson ikan laut dan air tawar yang sudah punah. Nama ini berasal dari galea, kata Latin untuk helm, dan mengacu pada perisai tulang besar di kepala mereka.', 'class/64b630c68fd10.jpeg', 0, '2023-06-11 02:51:48', '2023-06-11 02:51:48'),
(16, 'Pituriaspida', 'Ikan Purba', 9, 'Pituriaspida adalah sekelompok kecil ikan tanpa rahang lapis baja yang punah dengan mimbar seperti hidung yang luar biasa, yang hidup di lingkungan delta laut Devonian Tengah Australia', 'class/64b630f3166ff.jpg', 0, '2023-06-11 02:51:48', '2023-06-11 02:51:48'),
(17, 'Osteostraci', 'Ikan Purba', 9, 'Kelas Osteostraci adalah takson ikan tanpa rahang berlapis tulang yang telah punah, disebut ', 'class/64b631164e567.jpg', 0, '2023-06-11 02:51:48', '2023-06-11 02:51:48'),
(18, 'Hyperoartia', 'Lamprey Modern', 9, 'Hyperoartia atau Petromyzontida adalah kelompok vertebrata yang disengketakan yang mencakup lamprey modern dan kerabat fosilnya. Contoh hyperoartians dari awal catatan fosil mereka adalah Endeiolepis dan Euphanerops, hewan mirip ikan dengan ekor hypocercal yang hidup selama Periode Devon Akhir.', 'class/64b631374ebab.jpg', 0, '2023-06-11 02:56:13', '2023-06-11 02:56:13'),
(19, 'Amphibia', '', 9, '', 'class/64b62f04898e1.jpg', 0, '2023-06-11 02:38:31', '2023-06-11 02:38:31'),
(20, 'Aves', '', 9, '', 'class/64b62f2a61e89.png', 0, '2023-06-11 02:38:31', '2023-06-11 02:38:31'),
(21, 'Reptilia', '', 9, '', 'class/64b62f56b8b83.jpg', 0, '2023-06-11 02:38:31', '2023-06-11 02:38:31'),
(22, 'Sauropsida', '', 9, 'Sauropsida Hewan Purba', 'class/64b62f9e0dd48.jpg', 0, '2023-06-11 02:40:04', '2023-06-11 02:40:04'),
(23, 'Synapsida', 'Dinosaurus', 9, 'Synapsida (\'fused arch\'), atau theropsida (\'wajah hewan\'), adalah kelompok hewan yang termasuk mamalia dan segala kerabat dekatnya selain amniota hidup lainnya.[4] Anggota non-mamalia disebut sebagai reptil mirip mammalia dalam sistematika klasik,[5][6] tetapi disebut ', 'class/64b630357c75c.jpg', 0, '2023-06-11 02:40:04', '2023-06-11 02:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `article_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Wahhh, enak bangeett!!!', '2023-07-19 07:57:40', '2023-07-19 07:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `continent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`id`, `continent`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 10:29:32', '2023-07-17 10:29:32'),
(1, 'Amerika Utara', '2023-07-18 10:23:16', '2023-07-18 10:23:16'),
(2, 'Amerika Selatan', '2023-07-18 10:23:23', '2023-07-18 10:23:23'),
(3, 'Afrika Utara', '2023-07-18 10:23:57', '2023-07-18 10:23:57'),
(4, 'Afrika Barat', '2023-07-18 10:24:04', '2023-07-18 10:24:04'),
(5, 'Afrika Tengah', '2023-07-18 10:24:15', '2023-07-18 10:24:15'),
(6, 'Afrika Timur', '2023-07-18 10:24:26', '2023-07-18 10:24:26'),
(7, 'Afrika Selatan', '2023-07-18 10:24:37', '2023-07-18 10:24:37'),
(8, 'Asia Tengah', '2023-07-18 10:24:50', '2023-07-18 10:24:50'),
(9, 'Asia Timur', '2023-07-18 10:24:57', '2023-07-18 10:24:57'),
(10, 'Asia Tenggara', '2023-07-18 10:25:05', '2023-07-18 10:25:05'),
(11, 'Asia Selatan', '2023-07-18 10:25:13', '2023-07-18 10:25:13'),
(12, 'Asia Barat', '2023-07-18 10:25:21', '2023-07-18 10:25:21'),
(13, 'Eropa Utara', '2023-07-18 10:26:58', '2023-07-18 10:26:58'),
(14, 'Eropa Barat', '2023-07-18 10:27:06', '2023-07-18 10:27:06'),
(15, 'Eropa Tengah', '2023-07-18 10:27:14', '2023-07-18 10:27:14'),
(16, 'Eropa Timur', '2023-07-18 10:27:19', '2023-07-18 10:27:19'),
(17, 'Eropa Selatan', '2023-07-18 10:27:25', '2023-07-18 10:27:25'),
(18, 'Australia', '2023-07-18 10:27:46', '2023-07-18 10:27:46'),
(19, 'Antarktika', '2023-07-18 10:27:55', '2023-07-18 10:27:55'),
(20, 'Artik', '2023-07-18 10:28:52', '2023-07-18 10:28:52'),
(21, 'Samudera Pasifik', '2023-07-18 10:29:48', '2023-07-18 10:29:48'),
(22, 'Samudera Atlantik', '2023-07-18 10:29:56', '2023-07-18 10:29:56'),
(23, 'Samudera Hindia', '2023-07-18 10:30:05', '2023-07-18 10:30:05'),
(24, 'Samudera Arktik', '2023-07-18 10:30:10', '2023-07-18 10:30:10'),
(25, 'Samudera Selatan', '2023-07-18 10:30:32', '2023-07-18 10:30:32'),
(26, 'Samudera Timur', '2023-07-18 10:30:39', '2023-07-18 10:30:39'),
(27, 'Samudera Utara', '2023-07-18 10:30:49', '2023-07-18 10:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `continent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `continent_id`, `country`, `created_at`, `updated_at`) VALUES
(0, 0, 'Undefined', '2023-07-17 10:29:56', '2023-07-17 10:29:56'),
(1, 10, 'Indonesia', '2023-07-18 10:31:31', '2023-07-18 10:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distribution` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`id`, `distribution`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 10:30:15', '2023-07-17 10:30:15'),
(1, 'Afrika Selatan', '2023-07-18 10:18:41', '2023-07-18 10:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `family` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `ordo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `family`, `general_name`, `ordo_id`, `description`, `picture`, `created_at`, `update_at`) VALUES
(0, 'Undefined', 'Undefined', 0, 'Not Found', 'image-not-found.png', '2023-07-17 17:19:43', '2023-07-17 17:19:43'),
(1, 'Cichlidae', 'Siklid atau Cichlid', 1, 'Siklid atau Cichlid adalah ikan dari famili Cichlidae dalam ordo Cichliformes', 'family/64b64ea07ae3f.jpg', '2023-07-18 08:33:19', '2023-07-18 08:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scientific_name` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `synonim` varchar(255) DEFAULT NULL,
  `species_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fish_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `abundance_id` bigint(20) UNSIGNED DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `scientific_name`, `general_name`, `synonim`, `species_id`, `fish_type_id`, `abundance_id`, `length`, `weight`, `information`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Undefined', 'Undefined', 'Undefined', 0, 0, 0, '', '', '', 'image-not-found.png', NULL, '2023-07-17 17:20:36', '2023-07-17 17:20:36'),
(1, 'Betta sp', 'Ikan Cupang', '', 1, 7, 2, '', '', '', 'fish/cupang.jpg', NULL, '2023-07-12 06:11:31', '2023-07-12 06:11:31'),
(2, 'Carrasius auratus', 'Ikan Koki', '', 2, 7, 2, '', '', '', 'fish/koki.jpg', NULL, '2023-07-12 06:11:31', '2023-07-12 06:11:31'),
(3, 'Symphysodon discus', 'Ikan Discus', '', 3, 7, 2, '', '', '', 'fish/discus.jpg', NULL, '2023-07-12 06:11:31', '2023-07-12 06:11:31'),
(4, 'Oreochromis niloticus', 'Ikan Nila', 'ikan nila', 4, 1, 1, '15-40 cm', '0,4 - 2 kg', 'Ikan nila adalah sejenis ikan konsumsi air tawar. Ikan ini diintroduksi dari Afrika, tepatnya Afrika bagian timur, pada tahun 1969, dan kini menjadi ikan peliharaan yang populer di kolam-kolam air tawar di Indonesia sekaligus hama di setiap sungai dan danau Indonesia. Nama ilmiahnya adalah Oreochromis niloticus, dan dalam bahasa Inggris dikenal sebagai Nile Tilapia.', 'fish/64b6549622a32.jpg', NULL, '2023-07-18 09:00:07', '2023-07-18 09:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `fish_distribution`
--

CREATE TABLE `fish_distribution` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `distribution_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish_distribution`
--

INSERT INTO `fish_distribution` (`id`, `fish_id`, `distribution_id`, `created_at`, `update_at`) VALUES
(0, 0, 0, '2023-07-17 17:21:12', '2023-07-17 17:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `fish_food`
--

CREATE TABLE `fish_food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `food_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish_food`
--

INSERT INTO `fish_food` (`id`, `fish_id`, `food_id`, `created_at`, `update_at`) VALUES
(0, 0, 0, '2023-07-17 17:54:04', '2023-07-17 17:54:04'),
(1, 1, 1, '2023-07-18 08:09:13', '2023-07-18 08:09:13'),
(2, 1, 2, '2023-07-18 08:09:13', '2023-07-18 08:09:13'),
(3, 1, 4, '2023-07-18 08:09:13', '2023-07-18 08:09:13'),
(4, 1, 5, '2023-07-18 08:09:51', '2023-07-18 08:09:51'),
(5, 1, 31, '2023-07-18 08:09:51', '2023-07-18 08:09:51'),
(6, 4, 1, '2023-07-18 08:48:02', '2023-07-18 08:48:02'),
(7, 4, 2, '2023-07-18 08:48:02', '2023-07-18 08:48:02'),
(8, 4, 3, '2023-07-18 08:48:02', '2023-07-18 08:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `fish_habitat`
--

CREATE TABLE `fish_habitat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `habitat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish_habitat`
--

INSERT INTO `fish_habitat` (`id`, `fish_id`, `habitat_id`, `created_at`, `update_at`) VALUES
(0, 0, 0, '2023-07-17 17:54:18', '2023-07-17 17:54:18'),
(1, 4, 1, '2023-07-18 08:48:02', '2023-07-18 08:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `fish_like`
--

CREATE TABLE `fish_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish_like`
--

INSERT INTO `fish_like` (`id`, `fish_id`, `user_id`, `created_at`, `updated_at`) VALUES
(0, 0, 0, '2023-07-17 17:54:54', '2023-07-17 17:54:54'),
(1, 2, 3, '2023-07-12 07:54:41', '2023-07-12 07:54:41'),
(5, 2, 2, '2023-07-19 06:03:22', '2023-07-19 06:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `fish_type`
--

CREATE TABLE `fish_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish_type`
--

INSERT INTO `fish_type` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', 'Tipe Ikan tidak ditemukan', '2023-07-17 17:21:51', '2023-07-17 17:21:51'),
(1, 'Ikan Endemik', 'Ikan endemik, di sisi lain, merujuk pada ikan yang hanya ditemukan di suatu wilayah tertentu dan tidak ada di tempat lain di dunia. Mereka secara alami berkembang biak dan hidup di wilayah tersebut, dan telah berevolusi dan beradaptasi dengan kondisi lingkungan setempat selama ribuan atau jutaan tahun.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(2, 'Ikan Introduksi', 'Ikan introduksi adalah ikan yang diperkenalkan atau diimpor ke suatu wilayah yang tidak asli bagi spesies ikan tersebut. Ini bisa dilakukan oleh manusia dengan tujuan tertentu, seperti untuk keperluan budidaya, perikanan, atau tujuan rekreasi seperti memancing.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(3, 'Ikan Migran', 'Ikan migran adalah jenis ikan yang melakukan perjalanan jarak jauh antara perairan air tawar dan laut. Mereka biasanya melakukan migrasi untuk tujuan pemijahan, mencari makanan, atau menghindari perubahan lingkungan yang tidak sesuai.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(4, 'Ikan Transplantasi', 'Ikan transplantasi mengacu pada ikan yang dipindahkan dari satu wilayah ke wilayah lain dalam batas yang lebih kecil daripada introduksi. Transplantasi sering dilakukan oleh manusia dengan tujuan mengisi populasi ikan yang berkurang atau untuk keperluan manajemen perikanan.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(5, 'Ikan Invasif', 'Ikan invasif adalah jenis ikan yang diperkenalkan ke suatu wilayah baru dan memiliki kemampuan untuk berkembang biak secara agresif dan mengganggu ekosistem setempat. Ikan invasif biasanya tidak memiliki pemangsa alami di wilayah baru mereka dan dapat menyebabkan kerusakan yang signifikan terhadap keanekaragaman hayati asli.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(6, 'Ikan Komersial', 'Ikan komersial merujuk pada jenis ikan yang ditangkap atau dibudidayakan untuk tujuan komersial, seperti untuk konsumsi manusia atau industri perikanan. Ikan komersial sering kali memiliki nilai ekonomi yang tinggi dan ditangkap dalam skala besar.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(7, 'Ikan Hias', 'Ikan hias adalah jenis ikan yang dipelihara dalam akuarium atau kolam sebagai hewan peliharaan. Mereka sering memiliki warna yang indah dan bentuk tubuh yang menarik. Ikan hias berasal dari berbagai wilayah di dunia dan telah menjadi bagian penting dari industri perdagangan hewan peliharaan.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(8, 'Ikan Purba', 'Ikan purba merujuk pada jenis ikan yang telah ada sejak zaman prasejarah dan masih bertahan sampai sekarang. Beberapa contoh ikan purba termasuk ikan pari, ikan hiu, dan coelacanth.', '2023-06-13 09:33:05', '2023-06-13 09:33:05'),
(9, 'Ikan Asli', 'Ikan Asli', '2023-07-19 13:22:47', '2023-07-19 13:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 17:22:29', '2023-07-18 00:22:29'),
(1, 'ikan', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(2, 'ikan kecil', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(3, 'larva ikan', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(4, 'telur ikan', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(5, 'krustasea', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(6, 'krustasea planktonik', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(7, 'krustasea kecil', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(8, 'moluska', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(9, 'kepiting', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(10, 'keong', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(11, 'kerang', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(12, 'katak', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(13, 'cacing', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(14, 'cacing tanah', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(15, 'cacing polychaetes', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(16, 'invertebrata', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(17, 'invertebrata bentik', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(18, 'organisme bentik', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(19, 'alga bentik', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(20, 'alga', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(21, 'larva', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(22, 'gurita', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(23, 'cumi-cumi', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(24, 'copepoda', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(25, 'mysids', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(26, 'lobster', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(27, 'udang', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(28, 'larva udang', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(29, 'plankton', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(30, 'zooplankton', '2023-06-08 00:29:45', '2023-06-08 07:29:45'),
(31, 'Air', '2023-07-18 08:09:51', '2023-07-18 15:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `genus`
--

CREATE TABLE `genus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genus` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `family_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genus`
--

INSERT INTO `genus` (`id`, `genus`, `general_name`, `family_id`, `description`, `picture`, `created_at`, `update_at`) VALUES
(0, 'Undefined\r\n', 'Undefined', 0, 'Undefined', 'image-not-found.png', '2023-07-17 17:22:56', '2023-07-17 17:22:56'),
(1, 'Oreochromis', 'ikan endemik di Afrika dan Timur Tengah', 1, 'Oreochromis adalah genus besar oreochromine cichlids, ikan endemik di Afrika dan Timur Tengah. Beberapa spesies dari genus ini telah diperkenalkan jauh di luar jangkauan asli mereka dan penting dalam akuakultur.', 'genus/64b64fb36d7c9.png', '2023-07-18 08:39:20', '2023-07-18 08:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `habitats`
--

CREATE TABLE `habitats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habitats`
--

INSERT INTO `habitats` (`id`, `habitat`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '2023-07-17 17:23:08', '2023-07-17 17:23:08'),
(1, 'Perairan', '2023-06-13 08:28:30', '2023-06-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kingdoms`
--

CREATE TABLE `kingdoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kingdom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kingdoms`
--

INSERT INTO `kingdoms` (`id`, `kingdom`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', '', 'image-not-found.png', '2023-07-17 17:23:43', '2023-07-17 17:23:43'),
(1, 'Animalia', '', 'kingdom/animalia.jpeg', '2023-06-10 18:49:08', '2023-06-10 17:00:00'),
(2, 'Plantae', '', 'kingdom/plantae.png', '2023-06-10 17:00:00', '2023-06-10 18:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(0, 0, 0, '2023-07-17 17:56:42', '2023-07-17 17:56:42'),
(8, 2, 1, '2023-07-19 07:40:17', '2023-07-19 07:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `local_name`
--

CREATE TABLE `local_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `local_name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_name`
--

INSERT INTO `local_name` (`id`, `fish_id`, `local_name`, `area`, `created_at`, `updated_at`) VALUES
(0, 0, 'Undefined', 'Undefined', '2023-07-17 17:24:14', '2023-07-17 17:24:14'),
(1, 4, 'Ikan Nila Best', 'Bogor', '2023-07-18 14:09:09', '2023-07-18 14:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `ordo`
--

CREATE TABLE `ordo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ordo` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordo`
--

INSERT INTO `ordo` (`id`, `ordo`, `general_name`, `class_id`, `description`, `picture`, `created_at`, `update_at`) VALUES
(0, 'Undefined', 'Undefined', 0, 'Not Found', 'image-not-found.png', '2023-07-17 17:24:28', '2023-07-17 17:24:28'),
(1, 'Perciformes', 'Percomorphi atau Acanthopteri', 1, 'Perciformes, juga disebut Percomorphi atau Acanthopteri, adalah ordo terbesar vertebrata, yang mengandung sekitar 41% dari semua ikan bertulang sejati. Perciformes berarti \"seperti-perch\"', 'ordo/64b64e24bdab1.jpg', '2023-07-18 08:29:47', '2023-07-18 08:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`id`, `fish_id`, `origin`, `created_at`, `updated_at`) VALUES
(0, 0, 'Undefined', '2023-07-17 17:27:24', '2023-07-17 17:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `phylums`
--

CREATE TABLE `phylums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phylum` varchar(255) DEFAULT NULL,
  `kingdom_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phylums`
--

INSERT INTO `phylums` (`id`, `phylum`, `kingdom_id`, `description`, `picture`, `created_at`, `update_at`) VALUES
(0, 'Undefined', 0, 'Undefined', 'image-not-found.png', '2023-07-17 17:27:50', '2023-07-17 17:27:50'),
(1, 'Porifera', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:52'),
(2, 'Platyhelminthes', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(3, 'Coelenterata', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(4, 'Nematoda', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(5, 'Annelida', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(6, 'Mollusca', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(8, 'Echinodermata', 1, NULL, 'image-not-found.png', '2023-06-10 18:50:42', '2023-06-10 18:50:42'),
(9, 'Chordata', 1, 'Filum Chordata adalah kelompok hewan, termasuk vertebrata dan beberapa binatang yang mirip invertebrata yang memiliki ciri-ciri yang serupa. Semua anggota kelompok ini, pada suatu saat dalam kehidupan mereka, memiliki notokorda, tali saraf dorsal berongga, celah faring (pharyngeal slits), endostyle, dan ekor berotot yang melewati anus. Vertebrata merupakan kelompok hewan yang memiliki tulang belakang. Dalam sistem klasifikasi, vertebrata merupakan subfilum dari filum Chordata. Chordata terbagi menjadi empat subfilum: Vertebrata, Urochordata, Cephalochordata, dan Hemichordata. Urochordata dan Cephalochordata tergolong invertebrata.', 'phylum/chordata.jpg', '2023-06-10 18:50:42', '2023-06-10 18:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `country_id`, `province`, `created_at`, `updated_at`) VALUES
(0, 0, 'Undefined', '2023-07-17 17:28:16', '2023-07-17 17:28:16'),
(1, 1, 'Aceh', '2023-07-18 10:33:27', '2023-07-18 10:33:27'),
(2, 1, 'Sumatera Utara', '2023-07-18 10:34:01', '2023-07-18 10:34:01'),
(3, 1, 'Sumatera Barat', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(4, 1, 'Riau', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(5, 1, 'Kepulauan Riau', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(6, 1, 'Jambi', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(7, 1, 'Sumatera Selatan', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(8, 1, 'Bangka Belitung', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(9, 1, 'Bengkulu', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(10, 1, 'Lampung', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(11, 1, 'Banten', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(12, 1, 'DKI Jakarta (Daerah Khusus Ibukota Jakarta)', '2023-07-18 10:37:27', '2023-07-18 10:37:27'),
(13, 1, 'Jawa Barat', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(14, 1, 'Jawa Tengah', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(15, 1, 'DI Yogyakarta (Daerah Istimewa Yogyakarta)', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(16, 1, 'Jawa Timur', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(17, 1, 'Bali', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(18, 1, 'Nusa Tenggara Barat (NTB)', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(19, 1, 'Nusa Tenggara Timur (NTT)', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(20, 1, 'Kalimantan Barat', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(21, 1, 'Kalimantan Tengah', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(22, 1, 'Kalimantan Selatan', '2023-07-18 10:38:21', '2023-07-18 10:38:21'),
(23, 1, 'Kalimantan Timur', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(24, 1, 'Kalimantan Utara', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(25, 1, 'Sulawesi Utara', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(26, 1, 'Gorontalo', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(27, 1, 'Sulawesi Tengah', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(28, 1, 'Sulawesi Barat', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(29, 1, 'Sulawesi Selatan', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(30, 1, 'Sulawesi Tenggara\n', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(31, 1, 'Maluku', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(32, 1, 'Maluku Utara\n', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(33, 1, 'Papua Barat\n', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(34, 1, 'Papua', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(35, 1, 'Kalimantan Utara\n', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(36, 1, 'Papua Barat Daya', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(37, 1, 'Kepulauan Papua', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(38, 1, 'Maluku Utara Barat', '2023-07-18 10:39:06', '2023-07-18 10:39:06'),
(39, 1, 'Nusantara', '2023-07-18 10:39:06', '2023-07-18 10:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `species` varchar(255) DEFAULT NULL,
  `general_name` varchar(255) DEFAULT NULL,
  `genus_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `species`, `general_name`, `genus_id`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(0, 'Undefined', 'Undefined', 0, 'Undefined', 'image-not-found.png', '2023-07-17 17:28:29', '2023-07-17 17:28:29'),
(1, 'Betta sp', NULL, NULL, NULL, 'image-not-found.png', '2023-07-12 06:13:02', '2023-07-12 06:13:02'),
(2, 'Carrasius auratus', NULL, NULL, NULL, 'image-not-found.png', '2023-07-12 06:13:02', '2023-07-12 06:13:02'),
(3, 'Symphysodon discus', NULL, NULL, NULL, 'image-not-found.png', '2023-07-12 06:13:02', '2023-07-12 06:13:02'),
(4, 'Oreochromis niloticus', 'Ikan Nila', 1, 'Ikan nila adalah sejenis ikan konsumsi air tawar. Ikan ini diintroduksi dari Afrika, tepatnya Afrika bagian timur, pada tahun 1969, dan kini menjadi ikan peliharaan yang populer di kolam-kolam air tawar di Indonesia sekaligus hama di setiap sungai dan danau Indonesia.', 'species/64b65146d407b.jpg', '2023-07-18 08:46:01', '2023-07-18 08:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `gender` varchar(128) DEFAULT NULL,
  `place_of_birth` varchar(128) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone_number` varchar(128) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `avatar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `gender`, `place_of_birth`, `birthday`, `phone_number`, `address`, `image`, `avatar_id`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(0, 'undefined', 'Undefined', 'undefined@gmail.com', NULL, NULL, NULL, NULL, NULL, 'profile/default.png', NULL, '$2y$10$54Ajl0R.ArBF45hyXCsJZOnTdLzoegtv9nJbBRs3ICk1QBv1kS5yW', 0, 0, 1614472317),
(1, 'feby', 'Feby', 'feby@gmail.com', 'Perempuan', 'Bandung', '1999-02-18', '081214222446', 'Jl. Bandung ', 'profile/default.png', NULL, '$2y$10$54Ajl0R.ArBF45hyXCsJZOnTdLzoegtv9nJbBRs3ICk1QBv1kS5yW', 1, 1, 1614472317),
(2, 'geby', 'Geby', 'geby@gmail.com', 'Perempuan', 'Bandung', '2002-06-12', '0128938123', 'Bandung', 'avatar/woman.png', NULL, '$2y$10$54Ajl0R.ArBF45hyXCsJZOnTdLzoegtv9nJbBRs3ICk1QBv1kS5yW', 2, 1, 1614472317),
(3, 'amel', 'Amel', 'amel@gmail.com', 'Perempuan', 'Bandung', '2002-06-12', '0821148321', 'Bandung', 'profile/default.png', NULL, '$2y$10$54Ajl0R.ArBF45hyXCsJZOnTdLzoegtv9nJbBRs3ICk1QBv1kS5yW', 3, 1, 1614472317);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(0, 0, 0),
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 2),
(7, 3, 2),
(8, 3, 6),
(9, 3, 7),
(10, 1, 8),
(11, 3, 9),
(12, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(128) DEFAULT NULL,
  `active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `active`) VALUES
(0, 'Undefined', 0),
(1, 'Admin', 1),
(2, 'User', 1),
(3, 'Menu', 1),
(4, 'DataMaster', 1),
(5, 'Lainnya', 0),
(6, 'Artikel', 1),
(7, 'Article', 0),
(8, 'Dashboard', 0),
(9, 'App', 1),
(10, 'Member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(0, 'undefined'),
(1, 'administrator'),
(2, 'member'),
(3, 'adminartikel');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(0, 0, 'Undefined', NULL, NULL, 0),
(1, 1, 'Dashboard', 'admin/', 'box', 1),
(2, 6, 'Dashboard', 'user/', 'box', 1),
(3, 2, 'Edit Profile', 'user/edit', 'user', 1),
(4, 3, 'Menu Management', 'menu/', 'list', 1),
(5, 3, 'Submenu Management', 'menu/subMenu', 'list', 1),
(6, 1, 'Role Management', 'admin/role', 'users', 1),
(7, 2, 'Change Password', 'user/changePassword', 'key', 1),
(8, 1, 'Data User', 'admin/dataUser/', 'users', 1),
(9, 4, 'Master Data', 'DataMaster/', 'list', 0),
(10, 4, 'Fish', 'DataMaster/fish/', 'box', 1),
(11, 4, 'Species', 'DataMaster/species', 'activity', 1),
(12, 4, 'Genus', 'DataMaster/genus', 'box', 1),
(13, 4, 'Family', 'DataMaster/family', 'box', 1),
(14, 4, 'Ordo', 'DataMaster/ordo', 'box', 1),
(15, 4, 'Class', 'DataMaster/classes', 'box', 1),
(16, 4, 'Phylum', 'DataMaster/phylum', 'box', 1),
(17, 4, 'Kingdom', 'DataMaster/kingdom', 'box', 1),
(18, 4, 'Distribution', 'DataMaster/distribution', 'box', 1),
(19, 4, 'Food', 'DataMaster/food', 'box', 1),
(20, 4, 'Habitat', 'DataMaster/habitat', 'box', 1),
(21, 4, 'Archipelago / Waters', 'DataMaster/archipelago', 'box', 1),
(22, 4, 'Province', 'DataMaster/province', 'box', 1),
(23, 4, 'Country', 'DataMaster/country', 'box', 1),
(24, 4, 'Continent', 'DataMaster/continent', 'box', 1),
(25, 4, 'Fish Type', 'DataMaster/fishType', 'box', 1),
(26, 4, 'Abundance', 'DataMaster/abundance', 'box', 1),
(27, 6, 'Article', 'Artikel/index', 'file', 1),
(28, 6, 'Article Type', 'Article/ArticleType', 'file', 1),
(29, 6, 'Article Category', 'Article/ArticleCategory', 'file', 1),
(30, 9, 'Avatar', 'App/avatar', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abundance`
--
ALTER TABLE `abundance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archipelago`
--
ALTER TABLE `archipelago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distribution_id` (`distribution_id`),
  ADD KEY `provinsi_id` (`province_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_author_id_foreign` (`author_id`),
  ADD KEY `article_type_id` (`article_type_id`),
  ADD KEY `article_category_id` (`article_category_id`),
  ADD KEY `fish_id` (`fish_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phylum_id` (`phylum_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distribution_id` (`continent_id`),
  ADD KEY `benua_id` (`continent_id`);

--
-- Indexes for table `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`ordo_id`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `species_id` (`species_id`),
  ADD KEY `fish_type_id` (`fish_type_id`),
  ADD KEY `abundance_id` (`abundance_id`);

--
-- Indexes for table `fish_distribution`
--
ALTER TABLE `fish_distribution`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_id` (`fish_id`),
  ADD KEY `distribution_id` (`distribution_id`);

--
-- Indexes for table `fish_food`
--
ALTER TABLE `fish_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_id` (`fish_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `fish_habitat`
--
ALTER TABLE `fish_habitat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_id` (`fish_id`),
  ADD KEY `habitat_id` (`habitat_id`);

--
-- Indexes for table `fish_like`
--
ALTER TABLE `fish_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_id` (`fish_id`),
  ADD KEY `fish_like_ibfk_2` (`user_id`);

--
-- Indexes for table `fish_type`
--
ALTER TABLE `fish_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genus`
--
ALTER TABLE `genus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_id` (`family_id`);

--
-- Indexes for table `habitats`
--
ALTER TABLE `habitats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kingdoms`
--
ALTER TABLE `kingdoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_article_id_foreign` (`article_id`);

--
-- Indexes for table `local_name`
--
ALTER TABLE `local_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_id` (`fish_id`);

--
-- Indexes for table `ordo`
--
ALTER TABLE `ordo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classify_id` (`class_id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fish_id` (`fish_id`);

--
-- Indexes for table `phylums`
--
ALTER TABLE `phylums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kingdom_id` (`kingdom_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`),
  ADD KEY `negara_id` (`country_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genus_id` (`genus_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `avatar_id` (`avatar_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abundance`
--
ALTER TABLE `abundance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `archipelago`
--
ALTER TABLE `archipelago`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_type`
--
ALTER TABLE `article_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `continent`
--
ALTER TABLE `continent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `distribution`
--
ALTER TABLE `distribution`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fish_distribution`
--
ALTER TABLE `fish_distribution`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fish_food`
--
ALTER TABLE `fish_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fish_habitat`
--
ALTER TABLE `fish_habitat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fish_like`
--
ALTER TABLE `fish_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fish_type`
--
ALTER TABLE `fish_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `genus`
--
ALTER TABLE `genus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `habitats`
--
ALTER TABLE `habitats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kingdoms`
--
ALTER TABLE `kingdoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `local_name`
--
ALTER TABLE `local_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordo`
--
ALTER TABLE `ordo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phylums`
--
ALTER TABLE `phylums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archipelago`
--
ALTER TABLE `archipelago`
  ADD CONSTRAINT `archipelago_ibfk_1` FOREIGN KEY (`distribution_id`) REFERENCES `distribution` (`id`),
  ADD CONSTRAINT `archipelago_ibfk_2` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`article_type_id`) REFERENCES `article_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`);

--
-- Constraints for table `families`
--
ALTER TABLE `families`
  ADD CONSTRAINT `families_ibfk_1` FOREIGN KEY (`ordo_id`) REFERENCES `ordo` (`id`);

--
-- Constraints for table `fish`
--
ALTER TABLE `fish`
  ADD CONSTRAINT `fish_ibfk_1` FOREIGN KEY (`species_id`) REFERENCES `species` (`id`),
  ADD CONSTRAINT `fish_ibfk_2` FOREIGN KEY (`fish_type_id`) REFERENCES `fish_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fish_ibfk_3` FOREIGN KEY (`abundance_id`) REFERENCES `abundance` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `fish_distribution`
--
ALTER TABLE `fish_distribution`
  ADD CONSTRAINT `fish_distribution_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`),
  ADD CONSTRAINT `fish_distribution_ibfk_2` FOREIGN KEY (`distribution_id`) REFERENCES `distribution` (`id`);

--
-- Constraints for table `fish_food`
--
ALTER TABLE `fish_food`
  ADD CONSTRAINT `fish_food_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`),
  ADD CONSTRAINT `fish_food_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`);

--
-- Constraints for table `fish_habitat`
--
ALTER TABLE `fish_habitat`
  ADD CONSTRAINT `fish_habitat_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`),
  ADD CONSTRAINT `fish_habitat_ibfk_2` FOREIGN KEY (`habitat_id`) REFERENCES `habitats` (`id`);

--
-- Constraints for table `fish_like`
--
ALTER TABLE `fish_like`
  ADD CONSTRAINT `fish_like_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fish_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genus`
--
ALTER TABLE `genus`
  ADD CONSTRAINT `genus_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `local_name`
--
ALTER TABLE `local_name`
  ADD CONSTRAINT `local_name_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`);

--
-- Constraints for table `ordo`
--
ALTER TABLE `ordo`
  ADD CONSTRAINT `ordo_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `origin`
--
ALTER TABLE `origin`
  ADD CONSTRAINT `origin_ibfk_1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`);

--
-- Constraints for table `phylums`
--
ALTER TABLE `phylums`
  ADD CONSTRAINT `phylums_ibfk_1` FOREIGN KEY (`kingdom_id`) REFERENCES `kingdoms` (`id`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `province_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Constraints for table `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_ibfk_1` FOREIGN KEY (`genus_id`) REFERENCES `genus` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`avatar_id`) REFERENCES `avatar` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
