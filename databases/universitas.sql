-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 01:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` varchar(5000) NOT NULL,
  `image_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `image_berita`) VALUES
(1, 'jjjjjjjj', 'klklklklklklklklkl', '0f3bcf87-b56c-444d-a50d-6381fedf4f58.jpeg'),
(2, 'WARDANA GANS PARAH LU MANA TAU', 'Di wilayah Sumatera hiduplah seorang petani yang sangat rajin bekerja. Ia hidup sendiri sebatang kara. Setiap hari ia bekerja menggarap lading dan mencari ikan dengan tidak mengenal lelah. Hal ini dilakukannya untuk memenuhi kebutuhannya sehari-hari.\r\n\r\nPada suatu hari petani tersebut pergi ke sungai di dekat tempat tinggalnya, ia bermaksud mencari ikan untuk lauknya hari ini. Dengan hanya berbekal sebuah kail, umpan dan tempat ikan, ia pun langsung menuju ke sungai. Setelah sesampainya di sungai, petani tersebut langsung melemparkan kailnya. Sambil menunggu kailnya dimakan ikan, petani tersebut berdoa,“Ya Alloh, semoga aku dapat ikan banyak hari ini”. Beberapa saat setelah berdoa, kail yang dilemparkannya tadi nampak bergoyang-goyang. Ia segera menarik kailnya. Petani tersebut sangat senang sekali, karena ikan yang didapatkannya sangat besar dan cantik sekali.\r\n\r\nSetelah beberapa saat memandangi ikan hasil tangkapannya, petani itu sangat terkejut. Ternyata ikan yang ditangkapnya itu bisa berbicara. “Tolong aku jangan dimakan Pak!! Biarkan aku hidup”, teriak ikan itu. Tanpa banyak Tanya, ikan tangkapannya itu langsung dikembalikan ke dalam air lagi. Setelah mengembalikan ikan ke dalam air, petani itu bertambah terkejut, karena tiba-tiba ikan tersebut berubah menjadi seorang wanita yang sangat cantik.\r\n\r\nReport this ad\r\n\r\n“Jangan takut Pak, aku tidak akan menyakiti kamu”, kata si ikan. “Siapakah kamu ini? Bukankah kamu seekor ikan?, Tanya petani itu. “Aku adalah seorang putri yang dikutuk, karena melanggar aturan kerajaan”, jawab wanita itu. “Terimakasih engkau sudah membebaskan aku dari kutukan itu, dan sebagai imbalannya aku bersedia kau jadikan istri”, kata wanita itu. Petani itupun setuju. Maka jadilah mereka sebagai suami istri. Namun, ada satu janji yang telah disepakati, yaitu mereka tidak boleh menceritakan bahwa asal-usul Puteri dari seekor ikan. Jika janji itu dilanggar maka akan terjadi petaka dahsyat.\r\n\r\nSetelah beberapa lama mereka menikah, akhirnya kebahagiaan Petani dan istrinya bertambah, karena istri Petani melahirkan seorang bayi laki-laki. Anak mereka tumbuh menjadi anak yang sangat tampan dan kuat, tetapi ada kebiasaan yang membuat heran semua orang. Anak tersebut selalu merasa lapar, dan tidak pernah merasa kenyang. Semua jatah makanan dilahapnya tanpa sisa.\r\n\r\nHingga suatu hari anak petani tersebut mendapat tugas dari ibunya untuk mengantarkan makanan dan minuman ke sawah di mana ayahnya sedang bekerja. Tetapi tugasnya tidak dipenuhinya. Semua makanan yang seharusnya untuk ayahnya dilahap habis, dan setelah itu dia tertidur di sebuah gubug. Pak tani menunggu kedatangan anaknya, sambil menahan haus dan lapar. Karena tidak tahan menahan lapar, maka ia langsung pulang ke rumah. Di tengah perjalanan pulang, pak tani melihat anaknya sedang tidur di gubug. Petani tersebut langsung membangunkannya. “Hey, bangun!, teriak petani itu.\r\n\r\nSetelah anaknya terbangun, petani itu langsung menanyakan makanannya. “Mana makanan buat ayah?”, Tanya petani. “Sudah habis kumakan”, jawab si anak. Dengan nada tinggi petani itu langsung memarahi anaknya. “Anak tidak tau diuntung ! Tak tahu diri! Dasar anak ikan!,” umpat si Petani tanpa sadar telah mengucapkan kata pantangan dari istrinya.\r\n\r\nSetelah petani mengucapkan kata-kata tersebut, seketika itu juga anak dan istrinya hilang lenyap tanpa bekas dan jejak. Dari bekas injakan kakinya, tiba-tiba menyemburlah air yang sangat deras. Air meluap sangat tinggi dan luas sehingga membentuk sebuah telaga. Dan akhirnya membentuk sebuah danau. Danau itu akhirnya dikenal dengan nama Danau Toba.', '0f3bcf87-b56c-444d-a50d-6381fedf4f58.jpeg'),
(3, 'CERITA RAKYAT', 'Di wilayah Sumatera hiduplah seorang petani yang sangat rajin bekerja. Ia hidup sendiri sebatang kara. Setiap hari ia bekerja menggarap lading dan mencari ikan dengan tidak mengenal lelah. Hal ini dilakukannya untuk memenuhi kebutuhannya sehari-hari. Pada suatu hari petani tersebut pergi ke sungai di dekat tempat tinggalnya, ia bermaksud mencari ikan untuk lauknya hari ini. Dengan hanya berbekal sebuah kail, umpan dan tempat ikan, ia pun langsung menuju ke sungai. Setelah sesampainya di sungai, petani tersebut langsung melemparkan kailnya. Sambil menunggu kailnya dimakan ikan, petani tersebut berdoa,“Ya Alloh, semoga aku dapat ikan banyak hari ini”. Beberapa saat setelah berdoa, kail yang dilemparkannya tadi nampak bergoyang-goyang. Ia segera menarik kailnya. Petani tersebut sangat senang sekali, karena ikan yang didapatkannya sangat besar dan cantik sekali. Setelah beberapa saat memandangi ikan hasil tangkapannya, petani itu sangat terkejut. Ternyata ikan yang ditangkapnya itu bisa berbicara. “Tolong aku jangan dimakan Pak!! Biarkan aku hidup”, teriak ikan itu. Tanpa banyak Tanya, ikan tangkapannya itu langsung dikembalikan ke dalam air lagi. Setelah mengembalikan ikan ke dalam air, petani itu bertambah terkejut, karena tiba-tiba ikan tersebut berubah menjadi seorang wanita yang sangat cantik. Report this ad “Jangan takut Pak, aku tidak akan menyakiti kamu”, kata si ikan. “Siapakah kamu ini? Bukankah kamu seekor ikan?, Tanya petani itu. “Aku adalah seorang putri yang dikutuk, karena melanggar aturan kerajaan”, jawab wanita itu. “Terimakasih engkau sudah membebaskan aku dari kutukan itu, dan sebagai imbalannya aku bersedia kau jadikan istri”, kata wanita itu. Petani itupun setuju. Maka jadilah mereka sebagai suami istri. Namun, ada satu janji yang telah disepakati, yaitu mereka tidak boleh menceritakan bahwa asal-usul Puteri dari seekor ikan. Jika janji itu dilanggar maka akan terjadi petaka dahsyat. Setelah beberapa lama mereka menikah, akhirnya kebahagiaan Petani dan istrinya bertambah, karena istri Petani melahirkan seorang bayi laki-laki. Anak mereka tumbuh menjadi anak yang sangat tampan dan kuat, tetapi ada kebiasaan yang membuat heran semua orang. Anak tersebut selalu merasa lapar, dan tidak pernah merasa kenyang. Semua jatah makanan dilahapnya tanpa sisa. Hingga suatu hari anak petani tersebut mendapat tugas dari ibunya untuk mengantarkan makanan dan minuman ke sawah di mana ayahnya sedang bekerja. Tetapi tugasnya tidak dipenuhinya. Semua makanan yang seharusnya untuk ayahnya dilahap habis, dan setelah itu dia tertidur di sebuah gubug. Pak tani menunggu kedatangan anaknya, sambil menahan haus dan lapar. Karena tidak tahan menahan lapar, maka ia langsung pulang ke rumah. Di tengah perjalanan pulang, pak tani melihat anaknya sedang tidur di gubug. Petani tersebut langsung membangunkannya. “Hey, bangun!, teriak petani itu. Setelah anaknya terbangun, petani itu langsung menanyakan makanannya. “Mana makanan buat ayah?”, Tanya petani. “Sudah habis kumakan”, jawab si anak. Dengan nada tinggi petani itu langsung memarahi anaknya. “Anak tidak tau diuntung ! Tak tahu diri! Dasar anak ikan!,” umpat si Petani tanpa sadar telah mengucapkan kata pantangan dari istrinya. Setelah petani mengucapkan kata-kata tersebut, seketika itu juga anak dan istrinya hilang lenyap tanpa bekas dan jejak. Dari bekas injakan kakinya, tiba-tiba menyemburlah air yang sangat deras. Air meluap sangat tinggi dan luas sehingga membentuk sebuah telaga. Dan akhirnya membentuk sebuah danau. Danau itu akhirnya dikenal dengan nama Danau Toba. ', 'cerita-rakyat-danau-toba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id` int(11) NOT NULL,
  `sesi` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `ipaddr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id`, `sesi`, `tanggal`, `ipaddr`) VALUES
(1, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '192.168.1.1'),
(2, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(3, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(4, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(5, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(6, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(7, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(8, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(9, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(10, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(11, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(12, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(13, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(14, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(15, '140ba5b15c79fb945c54013c724d73b6', '2020-04-16', '118.97.50.28'),
(16, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(17, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(18, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(19, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(20, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(21, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(22, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(23, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(24, '89671fcddcfed29b8c695e3841ada3f7', '2020-04-16', '192.168.1.7'),
(25, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(26, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(27, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(28, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(29, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(30, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(31, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(32, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(33, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(34, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(35, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(36, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(37, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(38, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(39, 'd67d317f6284fe231f4ca8a9a271747e', '2020-04-16', '::1'),
(40, '277c997d71d73c82d324d35a6ddd119c', '2020-04-22', '127.0.0.1'),
(41, 'bd20a13a3245badc51b3f53e8bd65949', '2020-04-22', '192.168.1.6'),
(42, 'f193344ef65776a09568cbc6fb5b3c18', '2020-04-22', '::1'),
(43, 'f193344ef65776a09568cbc6fb5b3c18', '2020-04-22', '::1'),
(44, 'f193344ef65776a09568cbc6fb5b3c18', '2020-04-22', '::1'),
(45, '2d529b63937c6af7ad1c799e2b10eb4b', '2020-04-23', '::1'),
(46, '42560cdaaa59debf4d55cb3a762158fb', '2020-04-23', '192.168.1.2'),
(47, '39c3e89a24d8baead75ea76843d2b641', '2020-04-24', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_session`
--

CREATE TABLE `tb_session` (
  `id` int(11) NOT NULL,
  `sesi` char(100) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_session`
--

INSERT INTO `tb_session` (`id`, `sesi`, `username`) VALUES
(1, '2d529b63937c6af7ad1c799e2b10eb4b', 'wardana'),
(5, 'c64969f398dc1bb81a18ab8f207c0bda', 'wardana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tes`
--

CREATE TABLE `tb_tes` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tes`
--

INSERT INTO `tb_tes` (`id`, `password`) VALUES
(1, '$2y$10$w9//out4kZCkk/UvBE4nzOtVbjaAMOaKtoMg6VkgO0nUUmhhgD4pu'),
(2, '$2y$10$cthFZdSi7vClULOD5YjUvuB6XXhQxrWPiCyPQzuZowazXGIJVCmju'),
(3, '$2y$10$85NgxgVQZxFDmNV0TyYPf.xt22oFUcTFKOoh147.SKJDUmodwY9xy'),
(4, '$2y$10$2JygpZJ2A3j0zV4JbNnpCeUjxVKYchkDNu0gv6BuB9t9.P6MpTR1G'),
(5, '$2y$10$SDUYmm7jmmaWJFrsyjGZDe72booxTnYG9UNXkTEqoZ.bQyfJZwwiS'),
(6, '$2y$10$LEEOuu03chJuxyXEQQA38O5rYINXdT7HAB0Als0EfZ/EIt6fJ865q'),
(7, '$2y$10$HUNjPvygWUCrvF88QeTf9euOu1V/77ZMU46uwMMlFtsytagTajSIu'),
(8, '$2y$10$7EaUSpuSFjbpZ8uXb.Bo8eaGevDkGdZAAn1xdISHM/KxWpfPk/AXi'),
(9, '$2y$10$KKfnDB2QLWHmSO9jA31uQu5ql6lLOrF9LJg1QAFOt2Ufava/U30SW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomber` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `password`, `nomber`, `email`, `jabatan`, `foto`) VALUES
(1, 'wardana', 'wardana', '$2y$10$vDqLVIsa32yJRgBHVwgGjOCspmQbc.wmRQaNrhcez5iM8mGVk88pm', '089686187452', 'wardana@localhost.com', 'admin', '0f3bcf87-b56c-444d-a50d-6381fedf4f58.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_session`
--
ALTER TABLE `tb_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tes`
--
ALTER TABLE `tb_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_session`
--
ALTER TABLE `tb_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tes`
--
ALTER TABLE `tb_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
