-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 02:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encounterlarav`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(200) NOT NULL,
  `deskripsi_blog` text NOT NULL,
  `img_blog` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`id_blog`, `judul_blog`, `deskripsi_blog`, `img_blog`, `created_at`, `updated_at`) VALUES
(39, 'Ramadhan Belanja Ceria Bersama BAZNAS Kalimantan Selatan di Matahari Duta Banjarmasin', 'Matahari Department Store (“Matahari”) menjadi pusat belanja terpilih yang digunakan oleh Badan Amil Zakat Nasional (BAZNAS) Kalimantan Selatan dalam kegiatan “Ramadhan Belanja Ceria” yang diadakan pada 7 Mei 2021. Kegiatan ini berlangsung di Matahari Duta Banjarmasin yang berlokasi di Duta Mall, Jalan A. Yani, Melayu, Kota Banjarmasin, Kalimantan Selatan.', '5883Ramadhan-Belanja-Ceria-Bersama-BAZNAS-Kalimantan-Selatan.jpg', '2021-06-07 20:13:23', '2021-06-07 20:13:23'),
(40, 'Belanja Bersama 100 Anak Yatim di Matahari Cilegon Center Mall', 'Matahari Department Store (“Matahari”) berpartisipasi aktif dalam kegiatan Buka Puasa bersama yang diadakan oleh Mall Cilegon Center dengan turut berbagi kebaikan di Bulan Suci melalui pemberian 100 Voucher Belanja Matahari yang dibagikan kepada 100 anak yatim piatu dari beberapa Panti Asuhan di Kota Cilegon. Kegiatan ini dilaksanakan di Cilegon Center Mall yang berlokasi di Jl. Sultan Ageng Tirtayasa KM. 47, Simpang Tiga, Ramanuju, Kec. Cilegon, Kota Cilegon, Banten.', '62955526Belanja-Bersama-100-Anak-Yatim.jpg', '2021-06-08 05:11:18', '2021-06-08 05:11:18'),
(41, 'Matahari Meresmikan Gerai Baru di Tiga Kota', 'Jaringan ritel modern PT Matahari Department Store Tbk (“Matahari” atau “Perseroan”; kode saham: “LPPF”), membuka gerai pertamanya di Kabupaten Tangerang hari ini dan merupakan gerai ke-8 di wilayah provinsi Banten, yang berlokasi di Mal Ciputra Citra Raya Cikupa. Gerai ini adalah gerai ketiga yang diresmikan di tahun 2020 dan menjadi gerai fisik ke-155 yang dioperasikan oleh Matahari di seluruh Indonesia.', '75733138Matahari-Meresmikan-Gerai-Baru.jpg', '2021-06-08 05:11:49', '2021-06-08 05:11:49'),
(42, 'Informasi Matahari Untuk Pemangku Kepentingan', 'Matahari mengumumkan penutupan sementara semua gerai secara nasional selama 14 hari atau lebih jika diharuskan sebagai langkah untuk menjaga kesehatan para karyawan, dan untuk mendukung gerakan nasional “di rumah saja” - Membatalkan rekomendasi pembayaran dividen untuk tahun buku 2019 - Mengurangi beban usaha yang tidak esensial termasuk beban sewa, pemasaran, perjalanan dinas dan beban lainnya, dan menghapuskan semua non-committed capital expenditure di tahun ini - Penurunan beban sumber daya manusia dengan penurunan terbesar di tingkat manajemen senior - Menunda pembukaan 4 gerai baru - Menarik semua arahan penjualan dan laba 2020 sehubungan dengan ketidak-pastian yang sedang terjadi', '49645271Informasi-Matahari-Untuk-Pemangku-Kepentingan.jpg', '2021-06-08 05:12:21', '2021-06-08 05:12:21'),
(43, 'Matahari Kini Hadir di Ujung Berung Townsquare Bandung', 'Jaringan ritel modern PT Matahari Department Store Tbk (“Matahari” atau “Perseroan”; kode saham: “LPPF”), baru saja meresmikan gerai keempatnya di Bandung, tepatnya di pusat perbelanjaan Ujung Berung Townsquare (Ubertos). Gerai ini menjadi gerai kedua yang diresmikan di tahun 2019 dan menjadi gerai fisik ke-161 yang dioperasikan oleh Matahari di seluruh Indonesia.', '7894Matahari-Kini-Hadir-di-Ujung-Berung.jpg', '2021-06-08 05:13:08', '2021-06-08 05:13:08'),
(44, 'Kolaborasi Eksklusif OVS & Matahari', 'PT Matahari Department Store Tbk mengumumkan kolaborasi terbarunya dengan OVS. Matahari akan menjadi gerai distribusi eksklusif untuk produk OVS di Indonesia.', '4676Kolaborasi-Eksklusif-OVS-&-Matahari.jpg', '2021-06-08 05:26:35', '2021-06-08 05:26:35'),
(45, 'Matahari Department Store sebagai Salah Satu dari 3 Merek Ritel Terkuat di Indonesia', 'PT Matahari Department Store, Tbk (“Matahari” atau “Perseroan”; kode saham: “LPPF”) kembali menduduki posisi sebagai Top 3 Retail di Indonesia dalam Brand Asia Study 2018. Penghargaan Brand Asia diberikan oleh Nikkei BP bekerja sama dengan MarkPlus Insight yang dilaksanakan pada hari Kamis, 6 September 2018 di Raffles Hotel Jakarta.', '2107Matahari-Department-Store-sebagai-Salah-Satu-dari-3-Merek-Ritel-Terkuat.jpg', '2021-06-08 05:27:01', '2021-06-08 05:27:01'),
(46, 'Kolaborasi Eksklusif 361 Degrees & Matahari', 'PT Matahari Department Store Tbk mengumumkan kolaborasi terbarunya dengan 361 Degrees International. Gerai Matahari baik online dan offline akan menjadi gerai distribusi eksklusif untuk produk 361 Degrees di pasar Indonesia.', '9108Kolaborasi-Eksklusif-361-Degrees.jpg', '2021-06-08 05:27:31', '2021-06-08 05:27:31'),
(47, 'Matahari Department Store Menjadi Salah Satu Indonesia Outstanding Public Companies 2018', 'PT Matahari Department Store Tbk (“Matahari” atau “Perseroan”; kode saham:”LPPF) meraih penghargaan sebagai salah satu Indonesia Outstanding Public Companies 2018 untuk kategori perdagangan, jasa, dan investasi. Penghargaan diterima oleh Roy N. Mandey, Wakil Presiden Komisaris Independen Matahari pada hari Selasa, 31 Juli 2018 di Mawar Ballroom, Balai Kartini, Jakarta.', '2209Matahari-Salah-Satu-Indonesia-Outstanding-Public.jpg', '2021-06-08 05:28:06', '2021-06-08 05:28:06'),
(48, 'Matahari Deparment Store Mencatat Penjualan Kotor Sebesar RP 3.368 M', 'PT Matahari Department Store Tbk (“Matahari” atau “Perseroan”; kode saham: “LPPF”) mencatatkan laba kotor Semester 1 2018 sebesar Rp 10.370 miliar, naik 3,5% dari Rp 10.017 miliar di Semester 1 2017, sementara pendapatan bersih naik sebesar 3,1% menjadi Rp 5.915 miliar dan laba bersih sebesar Rp 1.345 miliar, 0,5% lebih tinggi dari Semester 1 2017.', '1070Matahari-Deparment-Store-Mencatat-Penjualan-Kotor.jpg', '2021-06-08 05:29:01', '2021-06-08 05:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE `member_tbl` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `gambar_member` varchar(250) NOT NULL,
  `no_member` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_tbl`
--

INSERT INTO `member_tbl` (`id_member`, `nama_member`, `gambar_member`, `no_member`, `created_at`, `updated_at`) VALUES
(2, 'AYU', 'M02.jpg', '1000098767a2', NULL, NULL),
(3, 'NAMIRAH', 'M03.jpg', '1000098767a3', NULL, NULL),
(4, 'SITI', 'M04.jpg', '1000098767a4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_05_18_141504_create_sliderms_table', 2),
(6, '2021_05_19_002853_create_contohajas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id_product` int(11) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `quantity_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `img_product` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id_product`, `nama_produk`, `quantity_produk`, `harga_produk`, `deskripsi_produk`, `img_product`, `created_at`, `updated_at`) VALUES
(4, 'Puricia Dress Kasual Wanita', '23', 10000, 'Bahan katun\r\nTampil fashionable di berbagai kesempatan dengan koleksi pilihan terbaik yang memberikan kesan modis dan stylish. Kombinasi sempurna untuk setiap gaya favorit Anda.\r\n\r\nUkuran Size Model:\r\nTinggi: 178 cm\r\nLingkar Dada : 76 cm\r\nLingkar Pinggang: 65 cm\r\nLingkar Pinggul: 82 cm\r\n\r\nModel Menggunakan size : S', 'puricia-dress-kasual-wanita.jpg', NULL, '2021-06-08 05:38:48'),
(5, 'Cardinal Girl Tunik Detail Print Checkers', '23', 20000, 'Material katun\r\nResleting belakang\r\nTampil fashionable di berbagai kesempatan dengan koleksi pilihan terbaik yang memberikan kesan modis dan stylish serta berkualitas tinggi.\r\nUkuran Badan Model :\r\nTinggi : 173 cm\r\nLingkar Dada : 82 cm\r\nLingkar Pinggang : 60 cm\r\nLingkar Pinggul : 89 cm\r\nModel menggunakan size S\r\nSize Chart (Panjang Bahu x Lebar Dada x Pinggang x Panjang)\r\nS : 33 cm x 45 cm x 42 cm x 92 cm', 'cardinal-girl-tunik-detail-print-checkers.jpg', NULL, NULL),
(6, 'CARDINAL FEMME Dress Midi Aksen Woven', '34', 30000, 'Material katun\r\nNyaman dikenakan\r\nCasual design\r\nTampil fashionable di berbagai kesempatan dengan koleksi pilihan terbaik yang memberikan kesan modis dan stylish. Kombinasi sempurna untuk setiap gaya favorit Anda.\r\nUkuran Badan Model:\r\nTinggi: 176 cm\r\nLingkar Dada: 85 cm\r\nLingkar Pinggang: 61 cm\r\nLingkar Pinggul: 90 cm\r\nModel Menggunakan Size S', 'cardinal-femme-dress-midi-aksen-woven.jpg', NULL, NULL),
(7, 'Nevada Ls Midi Dress Pullover Dot', '42', 40000, 'Hadirkan pesona gaya kasual Anda dengan koleksi pakaian terbaru dari brand Nevada. Sentuhan desain kasual yang simpel dengan tampilan yang modis. Hadir dalam balutan material berkualitas memberikan kenyamanan di setiap aktivitas.\r\nUkuran Badan Model\r\nTinggi: 177 cm\r\nLingkar Dada: 84 cm\r\nLingkar Pinggang: 61 cm\r\nLingkar Pinggul: 90 cm\r\nModel Menggunakan size : M', 'nevada-ls-midi-dress-pullover-dot.jpg', NULL, NULL),
(8, 'Exit Faula Dress', '78', 50000, 'Tampil fashionable di berbagai kesempatan dengan koleksi pilihan terbaik yang memberikan kesan modis dan stylish. Kombinasi sempurna untuk setiap gaya favorit Anda.\r\nUkuran Size Model:\r\nTinggi: 175 cm\r\nLingkar Dada : 85 cm\r\nLingkar Pinggang: 61 cm\r\nLingkar Pinggul: 91 cm', 'exit-faula-dress.jpg', NULL, NULL),
(9, 'Cardinal Girl Tunik Print Stripes', '32', 60000, 'Tampil fashionable di berbagai kesempatan dengan koleksi pilihan terbaik yang memberikan kesan modis dan stylish serta berkualitas tinggi.\r\nUkuran Badan Model :\r\nTinggi : 173 cm\r\nLingkar Dada : 82 cm\r\nLingkar Pinggang : 60 cm\r\nLingkar Pinggul : 89 cm\r\nModel menggunakan size S\r\nSize Chart (Panjang Bahu x Lebar Dada x Pinggang x Panjang)\r\nS : 33 cm x 45 cm x 42 cm x 92 cm', 'Cardinal-Girl-Tunik-Print-Stripes.jpg', NULL, NULL),
(10, 'Expand Mayka Brokat Dress', '56', 70000, 'Bahan brokat\r\nTampil fashionable di berbagai kesempatan dengan menggunakan Dress Wanita. Pilihan terbaik yang memberikan kesan modis dan stylish. Kombinasi sempurna untuk setiap gaya favorit Anda.\r\nUkuran badan model\r\nTinggi: 175 cm\r\nLingkar Dada: 83 cm\r\nLingkar Pinggang: 61 cm\r\nLingkar Pinggul: 89 cm\r\nModel Menggunakan size : S\r\nSize Chart: (Panjang Bahu x Lebar Dada x Lebar Pinggang x Panjang Baju)\r\nUkuran S = 33 cm x 42 cm x 36 cm x 135 cm', 'expand-mayka-brokat-dress.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `id_slider` int(11) NOT NULL,
  `gambar_slider` varchar(250) NOT NULL,
  `judul_slider` varchar(250) NOT NULL,
  `status_slider` varchar(50) NOT NULL COMMENT '1=aktif, 0=nonaktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`id_slider`, `gambar_slider`, `judul_slider`, `status_slider`, `created_at`, `updated_at`) VALUES
(26, '3494free-struk-gift-sgv.jpg', 'FREE STRUK GIFT SGV', '1', '2021-06-07 20:41:44', '2021-06-08 05:33:48'),
(27, '7320diskon70%.jpg', 'DISKON 70%', '1', '2021-06-07 20:45:25', '2021-06-08 05:33:05'),
(28, '6574cashback-ramadhan-50%.jpg', 'CASHBACK RAMADHAN 50%', '0', '2021-06-07 20:45:43', '2021-06-07 20:45:43'),
(29, '6125promo-cicilan-hingga-9bulan.jpg', 'PROMO CICILAN HINGGA 9 BULAN', '1', '2021-06-07 20:46:01', '2021-06-07 20:46:51'),
(30, '5381promo-1212.png', 'PROMO 12.12', '0', '2021-06-07 20:46:23', '2021-06-07 20:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes@gmail.com', NULL, '$2y$10$mQus5PsBdZjLbpfMt9CAkuIKr9lKaAur.nPTIYf3CQ0CXnVULLS1a', NULL, NULL, NULL, '2021-05-11 00:56:59', '2021-05-11 00:56:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_tbl`
--
ALTER TABLE `member_tbl`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
