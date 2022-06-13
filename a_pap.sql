-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 03:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_pap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `descripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `user_id`, `nama_produk`, `harga`, `stok`, `descripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 21, 'Kain Ulos Ragidup', 300000, 12, 'Kain ulos ragidup bisa ditemukan di setiap rumah tangga suku batak di daerah-daerah yang masih kental adat bataknya. Kain ulos jenis ini secara umum terdiri atas tiga bagian yakni dua sisi yang ditenun sekaligus, dan satu bagian tengah yang ditenun tersendiri dengan sangat rumit.\r\nKain ulos ragidup jika dilihat dengan cermat dan teliti maka akan benar-benar nampak hidup baik itu warna maupun coraknya. Kain ulos ini juga menjadi perlambang betapa perlunya untuk tetap hidup dan mencapai kebahagiaan hidup.', '1607323481_ulos 1.jpg', '2020-12-06 23:44:41', '2021-01-01 00:43:11'),
(5, 21, 'Ragi Hotang', 250000, 29, 'Kain ulos ragi hotang termasuk ulos yang memiliki derajat tinggi, namun cara pembuatannya tidak sesulit ulos ragidup. Ulos ini biasanya digunakan pada saat upacara pernikahan dan diberikan oleh orangtua mempelai perempuan kepada menantu lelakinya.', '1607323533_ulos 2.jpg', '2020-12-06 23:45:33', '2021-01-01 00:42:37'),
(6, 21, 'Ulos Sibolang', 289000, 10, 'Kain ulos sibolang juga masih tergolong sebagai kain tenun yang derajatnya cukup tinggi, sekalipun cara pembuatannya lebih sederhana. Dalam sebuah upacara pernikahan, ulos sibolang biasanya diberikan orang tua pengantin perempuan kepada pengantin laki-laki. Ulos ini bisa juga diberikan kepada seorang wanita yang ditinggal mati suaminya sebagai tanda menghormati jasanya selama menjadi istri almarhum.', '1607323620_ulos 3.jpg', '2020-12-06 23:47:00', '2021-01-01 00:43:53'),
(11, 21, 'Mangiring', 210000, 23, 'Ulos mangiring merupakan jenis ulos Batak yang biasa digunakan untuk aktivitas sehari-hari. Biasanya ulos ini diberikan oleh orang yang dituakan kepada cucu-cucunya. Beberapa ada juga yang menggunakan kain ulos ini sebagai tali-tali (tutup kepala kaum pria) dan saong (tutup kepala wanita).&nbsp;', '1607327199_ulos 4.jpg', '2020-12-07 00:46:39', '2020-12-09 22:48:58'),
(12, 21, 'Bintang Maratur', 245000, 12, 'Ulos maratur umumnya memiliki motif garis-garis yang menggambarkan jejeran burung atau bintang yang tersusun rapi. Nilai yang terkandung di dalamnya yakni sebagai perlambang sikap patuh, rukun dan kekeluargaan termasuk dalam hal kekayaan dan kekuasaan.\r\nDalam acara-acara adat Batak Toba kain ulos maratus biasa diberikan kepada anak yang memasuki rumah baru dan selamatan kehamilan yang memasuki bulan ke tujuh. Harapannya agar setelah anak pertama dalam sebuah keluarga lahir akan disusul pila kelahiran anak-anak lainnya.', '1607327353_ulos 5.jpg', '2020-12-07 00:49:13', '2020-12-09 22:48:48'),
(13, 21, 'Kain Ulos Pinuncaan', 275000, 20, 'Kain ulos pinuncaan merupakan salah satu varian ulos Batak yang ini terdiri dari lima bagian yang ditenun secara terpisah yang kemudian disatukan dengan rapi hingga menjadi bentuk satu ulos. Dipakai oleh Raja-Raja dalam berbagai acara adat. Dipakai oleh rakyat biasa pada pesta perkawinan atau upacara adat (tuan rumah). Dipakai dengan cara dililitkan sebagai kain oleh keluarga hasuhuton (tuan rumah) pada waktu pesta besar dalam acara marpaniaran. Diberikan oleh orang tua pengantin perempuan (hula-hula) kepada ke dua orang tua pengantin dari pihak laki-laki (pangoli) pada acara pernikahan.', '1607328271_ulos 6.jpg', '2020-12-07 01:04:31', '2020-12-14 20:12:26'),
(14, 22, 'ULOS SIBOLANG', 340000, 23, 'Sibolang Berarti bisa dikatakan sebagai simbol duka cita,ulos nama yang panjang ini digunakan saat duka cita.Digunakan oleh keluarga yang mendapat suatu kemalangan misalnya meninggal Dunia maka ulos ini dipergunakan maka hal itu menunjukkan bahwa yang bersangkutan adalah pihak keluarga yang dekat dari orang yang meninggal.Bukan hanya itu ulos Sibolang juga diberikan kepada orang yang sangat berjasa dalam mabolang-bolangi(menghormati)pihak dari orang tua pengantin perempuan untuk mangulosi ayah pihak pengantin laki-laki pada saat pernikahan Adat Batak.', '1607574111_ulos 1.1.jpeg', '2020-12-09 21:21:51', '2020-12-09 21:21:51'),
(15, 22, 'ULOS RAGI HUTING', 204000, 12, 'Sesuai dengan perkembangan zaman ulos Ragi Huting ini susah untuk ditemukan sudah jarang dipakai oleh orang Batak, jaman dahulu ulos ini digunakan oleh gadis Batak, dengan cara melilitkan pada bagian dada (Hoba-Hoba),tidak hanya pada gadis Batak orang tua juga kadang memakai ulos ini saat bepergian.', '1607574260_ulos 1.2.JPG', '2020-12-09 21:24:20', '2020-12-30 05:39:24'),
(16, 22, 'ULOS BINTANG MARATUR', 215000, 45, 'ulos sibolang simbol duka cita dan simbol suka citanya adalah Ulos Bintang Maratur yang digunakan dalam tradisi dan ritual Batak seperti  mangulosi pengantin yang melakukan hajatan. Ulos ini menggambarkan jejeran Bintang yang teratur yang menunjukkan orang yang Patuh,Setia,Rukun dalam suatu ikatan keluarga.Bukan hanya itu ulos Bintang Maratur juga diberikan kepada pahompu dalam bahasa Batak (cucu) yang mendapat Baptisan di sebuah Gereja.', '1607574391_ulos 1.3.jpeg', '2020-12-09 21:26:31', '2020-12-09 21:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `barang_pembeli`
--

CREATE TABLE `barang_pembeli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembeli_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_pembeli`
--

INSERT INTO `barang_pembeli` (`id`, `pembeli_id`, `barang_id`, `jumlah_pesanan`, `total`, `created_at`, `updated_at`) VALUES
(7, 3, 15, 1, 204000, '2020-12-30 05:39:24', '2020-12-30 05:39:24'),
(9, 3, 5, 2, 500000, '2021-01-01 00:42:37', '2021-01-01 00:42:37'),
(10, 3, 4, 1, 300000, '2021-01-01 00:43:11', '2021-01-01 00:43:11'),
(11, 3, 6, 2, 578000, '2021-01-01 00:43:53', '2021-01-01 00:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `isi`, `gambar`, `teks`, `created_at`, `updated_at`) VALUES
(4, 'PODSI Toba Gelar Lomba Dayung Tradisional di Pantai Wisata Ulak Siregar Aek Nalas, Uluan', 'Wisata', '<p>Dalam rangka memeriahkan Hari Jadi Ke-21 Kabupaten Toba, Pemerintah Kabupaten Toba bekerja sama dengan Komite Olah Raga Nasional Indonesia (KONI)Toba dan Persatuan Olah Dayung Seluruh Indonesia (PODSI) Toba menggelar lomba dayung tradisional di kawasan objek wisata Pantai Ulak Desa Siregar Aek Nalas, Kecamatan Uluan, Kabupaten Toba, Selasa (10/3/2020).</p><p>Bupati Toba Darwin Siagian yang diwakili Asisten Ekonomi Pembangunan Sahat Manullang mengatakan Pantai Ulak Desa Siregar Aek Nalas ini adalah tempat wisata yang sangat sangat potensial untuk dikembangkan.</p><p>“Akses ke Uluan mudah ditempuh, setelah akses atraksinya juga harus ada. Atraksi budaya dan olah raga melalui lomba dayung tradisional akan menjadi acara tahunan disini,” jelasnya.</p><p>Pemerintah Kabupaten Toba mengharapkan untuk tahun depan perlombaan dayung tradisional lebih meriah.</p><p>“Kami berharap kerjasama Pemkab dengan KONI dengan perencanaan yang lebih sempurna dan lebih matang sehingga masyarakat dapat merasakan peningkatan ekonomi,” sebut Sahat Manullang.</p><p>Sementara Ketua PODSI Toba, Flores Manurung menjelaskan sebanyak 78 peserta yang terdiri dari 32 peserta lomba marsada-sada, dan 46 peserta lomba mardua-dua, mengikuti Lomba Dayung Tradisional guna memperebutkan piala bergilir dan sejumlah hadiah menarik.</p><p>Selanjutnya Ketua KONI Toba Maradona Siregar mengatakan Kejuaraan lomba dayung ini juga ditujukan untuk menyeleksi atlet untuk mengukuti kejuaraan Solu Bolon yang akan dilaksanakan nantinya pada bulan September 2020 di Samosir.</p><p>Camat Uluan Henry Butarbutar mengapresiasi masyarakat desa dalam menyukseskan acara tersebut sehingga pariwisata di Kecamatan Uluan bisa diorbitkan.</p><p>“Kecamatan Uluan merupakan kecamatan yang terpanjang pantainya di Toba dan berbagai tempat di Uluan ini potensi pariwisatanya sangat baik diantaranya air panas siregar aek nalas dan pantai lainnya yang layak untuk tempat wisata,” Camat Henry.</p><p>Kades Siregar Aek Nalas Evendi Siregar, mengharapkan dengan kegiatan ini mendorong niat dan semangat warganya mengertinya pentingnya kebersihan dan sadar wisata.</p><p>“Dengan pintu terbuka kami menerima kegiatan ini, kami juga bangga atas kegiatan ini, mudah mudahan mendorong niat dan semangat warga desa untuk sadar tentang kebersihan , wisata, dan setiap hari kamis kami mengadakan aksi pungut sampah dan ini merupakan awal kebangkitan pariwisata Siregar Aek Nalas termasuk Kecamatan Uluan,” kata Evendy.</p><p>Acara yang dihadiri sejumlah Kepala OPD Toba, Forkopimda dan ratusan masyarakat yang antusias mengikuti acara tersebut, diselingi dengan hiburan tortor dari SMP Negeri 2 Uluan dan Sanggar Seni Sigaol Barat,Uluan. (MC Toba jp/rik)</p>', '1610019317_IMG-20200310-WA0034-1024x682.jpg', 'Dalam rangka memeriahkan Hari Jadi Ke-21 Kabupaten Toba, Pemerintah Kabupaten Toba bekerja sama dengan Komite Olah Raga Nasional Indonesia (KONI)Toba dan Persatuan Olah Dayung Seluruh Indonesia (PODSI) Toba menggelar lomba dayung tradisional di kawasan objek wisata Pantai Ulak Desa Siregar Aek Nalas, Kecamatan Uluan, Kabupaten Toba, Selasa (10/3/2020).', '2021-01-07 04:35:17', '2021-01-07 06:53:57'),
(5, 'Siregar Aek Nalas Sebagai Tujuan Wisata Pancing.', 'Wisata', '<p>Balige, InfoPublik - Selain dikenal memiliki pantai air panasnya dan pemandangan yang begitu indah, Siregar Aek Nalas Kecamatan Uluan Kabupaten Toba Samosir juga diminati pemancing lokal dan luar Kabupaten Toba Samosir.&nbsp;</p><p>Salah seorang pemancing asal kota Pematangsiantar, Tubeng Situmorang, mengatakan, dirinya kerap mancing ke Siregar Aek Nalas, sebab ikannya selain manis berbeda dari ikan di Danau Toba yang lain.&nbsp;</p><p>\"Selama saya mancing, tidak pernah pulang dengan tangan kosong, bahkan ikan mujahir yang pernah saya dapatkan hampir empat kg per ekornya,\" cerita Tubeng pada Sabtu (26/1/2019).</p><p>Tiomsi Butar-Butar, salah seorang warga Siregar Aek Nalas, mengakui jika desanya sering dikunjungi peminat mancing, dan hampir setiap harinya terlebih dihari libur.&nbsp;</p><p>Andai Pemerintah Kabupaten Toba Samosir mau membenahi desa kami k earah yang lebih baik lagi, seperti tujuan wisata pantai Parparean di Kecamatan Porsea dan pantai Lumban Bulbul di Balige, sudah pasti pemancing akan lebih banyak datang, sehingga berimbas kepada kami masyarakat pelaku usaha wisata, sebut Tiomsi berharap.&nbsp;</p><p>Terpisah, Kepala Desa Siregar Aek Nalas Efendi Siregar, sangat berharap kegiatan event Pemerintah Kabupaten Toba Samosir digelar di Desanya agar tujuan wisata desanya lebih dikenal lagi.&nbsp;</p><p>\"Saya atas nama masyarakat Desa Siregar Aek Nalas , sangat ingin salah satu event Pemerintah Kabupaten, dari Dinas Pariwisata dan Kebudayaan Toba Samosir digelar disini, antara lain seperti Lomba Mancing,\" ujar Efendi. (MC Tobasa acon/cici/toeb)</p>', '1610019747_pancing.jpg', 'Balige, InfoPublik - Selain dikenal memiliki pantai air panasnya dan pemandangan yang begitu indah, Siregar Aek Nalas Kecamatan Uluan Kabupaten Toba Samosir juga diminati pemancing lokal dan luar Kabupaten Toba Samosir.', '2021-01-07 04:42:27', '2021-01-07 06:54:25'),
(6, 'Bupati Toba Dan Jajaran Pemkab Toba Hadiri Bakti Sosial Kapoldasu di Desa Lumban Holbung dan Siregar Aek Nalas Kecamatan Uluan', 'Berita', '<p>Uluan – MC Toba, Bupati Toba Darwin Siagian beserta jajarannya hadiri Bakti Sosial Kapoldasu di dua Desa Kecamatan Uluan disela sela Kunjungan Kerjanya Uluan (Jumat, 24 Juli 2020).</p><p>Pemkab Toba beserta jajarannya langsung mengadakan persiapan-persiapan dalam rangka kunjungan Kapoldasu Irjen Pol Drs Martuani Sormin MSi, Bupati Toba, Darwin Siagian langsung mengadakan rapat rapat persiapan dalam menyambut kedatangan Kapoldasu tersebut, persiapan sudah dilakukan rapat sejak Senin hingga saat acara Bakti Sosial di gelar di Kecamatan Uluan.</p><p>Di Desa Lumban Holbung Kapolda Sumut, Irjen Pol. Martuani Sormin memberikan secara simbolis bibit padi kepada masyarakat Desa Lumban Holbung dan setelah selesai pemberian bibit padi baru melaksanakan panen raya tanaman padi.</p><p>Dalam pertemuan tersebut disampaikan oleh pihak Polres Toba bahwa Luas lahan yang dipanen adalah seluas 100 Ha, dengan varietas padi lokal (Losari) dan sudah dilakukan pengukuran oleh pihak BPS bahwa produktivitas yang diperoleh adalah sekitar 8,97 Ton/Ha nya. PDRB Kabupaten Toba adalah 32,48% dari sektor pertanian dengan komoditi unggulan adalah padi, jagung dan kopi.</p><p>Sedang luas lahan sawah sekitar 17.438 Ha, dengan produktifitas rata rata 6,12 Ton/Ha nya ini juga sudah diatas rata rata secara nasional dimana produktifitas untuk provinsi sumut 4,65 Ton/Ha dan secara Nasional 5,03 Ton/Ha nya.</p><p>Pada kesempatan tersebut Kapolda Sumut menyampaikan kedatangannya bukan hanya seremonial semata, tetapi mengajak masyarakat agar menjauh dari bentuk tindakan yang melanggar hukum seperti narkoba, togel dan judi. Khususnya kaum bapak diminta sebelum memulai aktifitas pekerjaan agar berdoa menyerahkan diri kepada Tuhan semoga apa yang dikerjakan menjadi berkah untuk keluarga.</p><p>“Saya datang ke Toba, ke desa ini bukan sekedar melaksanakan temu ramah semata. Saya ingin memberikan motivasi kepada Bapak Ibu sekalian untuk berbuat yang terbaik, mempersiapkan anak-anak kita supaya dapat bersaing di zaman yang penuh persaingan saat ini. Jangan menyerah karena kita bukan orang kaya, karena kita orang desa. Percayalah bila bapak ibu berdoa sebelum bekerja maka perjuangan kita akan dimudahkan oleh Tuhan”. Jelas beliau setelah sebelumnya menjelaskan tentang betapa berbahayanya tindakan yang menyalahgunakan narkoba dan perjudian.</p><p>Setelah selesai dari Desa Lumban Holbung rombongan langsung menuju ke Desa Siregar Aek Nalas untuk mengunjungi masyarakat di desa tersebut. Disini juga Kapolda Sumut disambut meriah oleh masyarakat setempat.</p><p><br></p><p>&nbsp;&nbsp;</p><p><br></p><p>Di Desa Siregar Aek Nalas Irjen Pol. Martuani Sormin memberikan bibit ikan kepada masyarakat dan sekaligus penaburan bibit ikan di kolam milik masyarakat, serta memberikan sembako pada masyarakat. Dan di Desa Siregar Aek Nalas ini beliau juga menyampaikan kepada masyarakat agar masyarakat setempat menjauh dari tindakan-tindakan yang melanggar hukum.</p><p><br></p><p>Terobosan atau inovasi seperti inilah yang diharapkan mampu membangkitkan semangat masyarakat sebagai energi positif memecah kebuntuan yang terjadi karena saya yakin ini akan berjalan dengan baik berkat kerjasama antara Polri TNI dan Unsur Forkopimda terkait serta dukungan masyarakat agar terciptanya ketahanan pangan yang kita inginkan bersama,” pungkasnya</p>', '1610019920_IMG_8377-1024x683.jpg', 'Uluan – MC Toba, Bupati Toba Darwin Siagian beserta jajarannya hadiri Bakti Sosial Kapoldasu di dua Desa Kecamatan Uluan disela sela Kunjungan Kerjanya Uluan (Jumat, 24 Juli 2020).', '2021-01-07 04:45:20', '2021-01-07 06:54:53'),
(7, 'Mahasiswa IT Del Bakti Sosial Sekaligus Refreshing di Desa Siregar Aek Nalas', 'Berita', '<p>Unit Keasramaan IT Del bersama mahasiswa, kali ini angkatan 2017, melaksanakan kegiatan Bakti Sosial, di desa Siregar Aek Nalas. Kegiatan kali ini berupa, bersih-bersih di Desa Siregar Aek Nalas, sebagai perwujudan desa ekowisata; berbagi cerita dan pengalaman kepada siswa-siswi SD Siregar dan Berbagi Kasih.</p><p>Kegiatan bersih-bersih ini sangat penting, selain mahasiswa dapat berolahraga, melihat langsung suasana kehidupan masyarakat dan mengajak masyarakat untuk hidup bersih dan mencintai kebersihan.</p><p>Kegiatan ini dipandu oleh Pembina Asrama IT Del</p><p>Selamat refreshing dan Kami Bahagia Hidup Bersih</p>', '1610020198_11-300x225.jpg', 'Unit Keasramaan IT Del bersama mahasiswa, kali ini angkatan 2017, melaksanakan kegiatan Bakti Sosial, di desa Siregar Aek Nalas. Kegiatan kali ini berupa, bersih-bersih di Desa Siregar Aek Nalas, sebagai perwujudan desa ekowisata; berbagi cerita dan pengalaman kepada siswa-siswi SD Siregar dan Berbagi Kasih.', '2021-01-07 04:49:58', '2021-01-07 06:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(10) UNSIGNED NOT NULL,
  `negara` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `negara`, `provinsi`, `kabupaten`, `kecamatan`, `kodepos`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', 'Sumatera Utara', 'Toba Samosir', 'Uluan', '22385', NULL, '2021-01-02 07:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'Pengunjung Menikmati Tempat Wisata', '1609653043_werr.jpeg', '2021-01-02 22:50:43', '2021-01-02 22:50:43'),
(5, 'Kepala Desa Siregar Dengan Bupati', '1609653078_wefffg.jpeg', '2021-01-02 22:51:18', '2021-01-02 22:51:18'),
(6, 'Para Pengunjung Wisata', '1609653102_weqqq.jpeg', '2021-01-02 22:51:42', '2021-01-02 22:51:42'),
(7, 'Warga Desa Menaiki Solu', '1609653129_werwe.jpeg', '2021-01-02 22:52:09', '2021-01-02 22:52:09'),
(8, 'Tambang Batu Di Sekitar Wisata', '1609653155_ds.jpg', '2021-01-02 22:52:35', '2021-01-02 22:52:35'),
(9, 'Kepala Desa Dengan Bupati', '1609653177_wee.jpeg', '2021-01-02 22:52:57', '2021-01-02 22:52:57'),
(10, 'Pemandangan Wisata', '1609653197_vbb.jpeg', '2021-01-02 22:53:17', '2021-01-02 22:53:17'),
(11, 'Sekitaran Tempat Wisata', '1609653225_werew.jpeg', '2021-01-02 22:53:45', '2021-01-02 22:53:45'),
(12, 'View Tempat Wisata', '1609653244_we.jpeg', '2021-01-02 22:54:04', '2021-01-02 22:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `alias`, `terbit`, `created_at`, `updated_at`) VALUES
(1, 'Hiburan', 'HB', '1', '2021-01-06 22:59:41', '2021-01-06 22:59:41'),
(3, 'Artis', 'AR', '1', '2021-01-06 23:01:10', '2021-01-06 23:01:10'),
(5, 'Wisata', 'WS', '1', '2021-01-06 23:01:52', '2021-01-06 23:01:52'),
(6, 'Berita', 'B', '1', '2021-01-06 23:02:53', '2021-01-06 23:02:53'),
(7, 'Kuliner', 'KL', '1', '2021-01-06 23:59:52', '2021-01-06 23:59:52'),
(9, 'Presiden', 'PR', '1', '2021-01-07 00:29:36', '2021-01-07 00:29:36'),
(10, 'MAsuk', 'MA', '1', '2021-01-07 03:08:41', '2021-01-07 03:08:41');

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
(1, '2020_11_18_085340_create_desa_table', 1),
(2, '2020_11_21_055227_users', 2),
(3, '2014_10_12_000000_create_users_table', 3),
(4, '2020_11_23_082601_create_admin_table', 3),
(5, '2020_11_25_022738_create_pengusaha_table', 4),
(6, '2020_11_25_023536_create_pengusaha_table', 5),
(7, '2020_11_25_032828_create_users_table', 6),
(8, '2020_11_25_032928_create_pengusaha_table', 6),
(9, '2020_11_28_043156_create_pengusaha_table', 7),
(10, '2020_11_28_052232_create_pengusaha_table', 8),
(11, '2014_10_12_100000_create_password_resets_table', 9),
(12, '2020_12_03_085244_create_barang_table', 10),
(13, '2020_12_07_013906_create_barang_table', 11),
(14, '2020_12_07_041727_create_barang_table', 12),
(15, '2020_12_14_014009_create_pengusaha_barang_table', 13),
(16, '2020_12_14_040913_create_pengusaha_barang_table', 14),
(17, '2020_12_14_044418_create_pembeli_table', 15),
(18, '2020_12_14_051313_create_pembeli_barang_tabel', 16),
(19, '2020_12_14_051513_create_pembeli_barang_table', 17),
(20, '2020_12_14_063933_create_barang_pembeli_table', 18),
(21, '2021_01_02_142251_create_gambar_table', 19),
(22, '2021_01_07_044202_create_kategori_table', 20),
(23, '2021_01_07_073704_create_berita_table', 21);

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
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `user_id`, `nama`, `tanggal_lahir`, `no_handphone`, `whatsapps`, `file`, `created_at`, `updated_at`) VALUES
(2, 28, 'Revi Siahaan', '1000-01-01', '-', '-', '-', '2020-12-13 22:34:17', '2020-12-13 22:34:17'),
(3, 29, 'Frans Panjaitan', '2004-01-22', '085467891123', '085467891123', '1608001800_1575278672.jpg', '2020-12-13 23:07:34', '2020-12-14 20:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `pengusaha`
--

CREATE TABLE `pengusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengusaha`
--

INSERT INTO `pengusaha` (`id`, `user_id`, `nama`, `tanggal_lahir`, `no_handphone`, `whatsapps`, `file`, `created_at`, `updated_at`) VALUES
(2, 21, 'Suryanto Ray S Panjaitan', '2001-09-24', '082272741515', '082272741515', '1607403367_IMG_20191027_190602_389.jpg', '2020-11-29 21:33:56', '2020-12-09 00:57:58'),
(3, 22, 'Faber Sianipar', '1000-01-01', '-', '-', '-', '2020-12-09 00:53:09', '2020-12-09 00:53:09'),
(4, 23, 'Ivanowsky Habeahan', '1000-01-01', '-', '-', '-', '2020-12-09 00:56:26', '2020-12-09 00:56:26'),
(5, 24, 'Ivana Mariana Sianturi', '2001-09-24', '082272741515', '082272741515', '1607910747_1574925602.jpg', '2020-12-09 02:20:04', '2020-12-13 18:52:27'),
(6, 25, 'Meyliza Siregar', '1000-01-01', '-', '-', '-', '2020-12-13 21:51:05', '2020-12-13 21:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `jenis_kelamin`, `alamat`, `posisi`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Surya Ray', 'suryaRay@gmail.com', '$2y$10$GK/jauY9uv72zBxTR3V5hOAJz6A2COS4v3hA3K8oNJ3Gmbht0UiHW', 'L', 'Jakarta', 'Admin', NULL, '2021-01-01 00:59:57', '2021-01-01 00:59:57'),
(21, 'Suryanto Ray S Panjaitan', 'suryantopanjaitan44@gmail.com', '$2y$10$W78ME6V.4XWUZM1ieuqcZuPnY.Sf9.wp6wH/Ervm6LjOXfO0ioH3W', 'L', 'Bandung', 'Pengusaha', NULL, '2020-11-29 21:33:56', '2020-12-07 21:54:50'),
(22, 'Faber Sianipar', 'faber@gmail.com', '$2y$10$ymbuvTi.ZaaeHZGYwLNXcOhhq1UgwqkVoB9k7E.xqHTQE6kTH8Uju', 'L', 'Tarutung', 'Pengusaha', NULL, '2020-12-09 00:53:09', '2020-12-09 00:53:09'),
(23, 'Ivanowsky Habeahan', 'ivan@gmail.com', '$2y$10$iIwESYcCCj8ALk5.ZmXXLewldMrB7r37NIsVhOKBub3OjpzhUGi2y', 'L', 'Balige', 'Pengusaha', NULL, '2020-12-09 00:56:26', '2020-12-09 00:56:26'),
(24, 'Ivana Mariana Sianturi', 'ivana@gmail.com', '$2y$10$19bU2XZYtbY.iWp5tF4WV.wkTVwsnik9TlYVWE6Bf..21ROWtyjze', 'P', 'Palembang', 'Pembeli', NULL, '2020-12-09 02:20:04', '2020-12-09 02:20:04'),
(25, 'Meyliza Siregar', 'meyliza@gmail.com', '$2y$10$d1.oN2bvJK5J90puHVYspujOGdFuR65RY3w5VkzQoz0xgRu/nq.T.', 'P', 'Paindoan', 'Pengusaha', NULL, '2020-12-13 21:51:05', '2020-12-13 21:51:05'),
(28, 'Revi Siahaan', 'revi@gmail.com', '$2y$10$H/.gFEhQM4.2Potl5Gt0e.oi7VyPXvn7BYWDYGBolnztI6.U3pGNO', 'P', 'Paindoan', 'Pembeli', NULL, '2020-12-13 22:34:17', '2020-12-13 22:34:17'),
(29, 'Frans Panjaitan', 'frans@gmail.com', '$2y$10$sNWVXVyuJa.jFdBFL3hN2OF/YuNfX15Pu67JSruUbAmw/Fk2nAkCW', 'L', 'Balige', 'Pembeli', NULL, '2020-12-13 23:07:34', '2020-12-13 23:07:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_pembeli`
--
ALTER TABLE `barang_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengusaha`
--
ALTER TABLE `pengusaha`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `barang_pembeli`
--
ALTER TABLE `barang_pembeli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengusaha`
--
ALTER TABLE `pengusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
