-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2020 at 01:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `bio`, `admin_image`) VALUES
(1, 'Naowas Morshed', 'Dev', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `description`, `link`, `image_path`) VALUES
(28, 'Naowas Morshed', 'Php Developer', 'naowas.live', 'uploads/my.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `body`, `image`, `date`) VALUES
(3, ' Lorem Ipsum', '<p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploads/posts/15933430251593166176blog-post-thumb-3.jpg', '2020-06-28 11:17:05'),
(4, ' Where can I get some?', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</span><br></p>', 'uploads/posts/1593343057blog-post-thumb-7.jpg', '2020-06-28 11:17:37'),
(5, ' What is Lorem Ipsum?', '<p><strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><br></p>', 'uploads/posts/15933431121593248073off_button.png', '2020-06-28 11:18:32'),
(6, ' বাংলা ডেমো টেক্সট', '<p style=\"margin-top: 1em; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: kalpurush, sans-serif;\">শব্দ গুলো দেখে সকলেই অবাক হয়েছে, এটা বলা বাহুল্য। অনেকেই ভাবছেন, এ সব শব্দের বেশিরভাগটাই নিজে থেকে বানানো। তবে সত্যটা হলো, এর একটাও বানানো নয়। সব গুলোই বাংলা ভাষার অংশ। উৎপত্তি অনুসারে বাংলাভাষার যে শ্রেনীবিভাগ রয়েছে, সেই পাঁচটি শ্রেনী বিভাগের ফলেই জন্ম নিয়েছে এই সকল শব্দ, যার অনেকগুলোই আপনি আপনার এই পর্যন্ত জীবনে একবারও শোনেননি।<br><br>এখানে বেছে বেছে বানান ও গঠনের দিক থেকে ব্যবহার করতে কঠিন, এমন কিছু শব্দ বাছাই করা হয়েছে। এটি একই সাথে আপনার ব্যবহৃত ফন্ট কতোটা নিঁখুত এবং আপনার ষ্ট্যাইলিং কতোটুকু সঠিক হয়েছে, নির্ধারন করতে সহায়তা করবে।</p><h3 style=\"font-size: 1.17em; margin-top: 1em; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: kalpurush, sans-serif;\">কৃতজ্ঞতা স্বীকার</h3><p style=\"margin-top: 1em; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: kalpurush, sans-serif;\"></p><ul style=\"margin-top: 1em; margin-bottom: 1em; padding-left: 40px; color: rgb(0, 0, 0); font-family: kalpurush, sans-serif;\"><li>অভ্র টিমঃ যাদের জন্য বাংলা আজ সবার কাছে</li><li>সারিম খানঃ অসম্ভব কে সম্ভব করার খারাপ গুণ আছে এই ব্যাক্তিটির</li><li>প্রলয় হাসানঃ কম্পিউটার এর এক কোনায় ফেলে রাখা আইডিয়াটা বাস্তবে নিয়ে আসার পেছনে অনুপ্রেরণার জন্য</li><li>এবং তাদের প্রতি, যারা বাংলা ভাষাকে সকলের কাছে পৌছে দেওয়ার জন্য দিন রাত পরিশ্রম করে যাচ্ছেন। বাংলা লিখছেন, অন্যকে লিখতে উৎসাহিত করছেন।</li></ul>', 'uploads/posts/1593343322f29bd64b-c23c-417c-993f-f929559ae2cc_200x200.png', '2020-06-28 11:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(2, '', 'naowasbd', 'naowas@mail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, '', 'shuvo', 'shuvo@mail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Naowas Morshed Eimon', 'naowas', 'naowas@me.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
