-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 05:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immnewsnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `about_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`about_id`, `title`, `content`) VALUES
(1, 'About Us', 'IMM News Network, our mission is to deliver reliable, impartial, and in-depth news coverage to our readers. We believe that a well-informed public is essential for a healthy democracy and a better world. Our commitment is to provide you with news that is accurate, fair, and relevant, empowering you to make informed decisions about the issues that affect your life.');

-- --------------------------------------------------------

--
-- Table structure for table `articles_page`
--

CREATE TABLE `articles_page` (
  `article_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `content` varchar(300) NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles_page`
--

INSERT INTO `articles_page` (`article_id`, `category`, `title`, `author`, `content`, `featured`) VALUES
(2, 'Technical EDIT-TEST', 'Einstein must be wrong about ', 'Valerio Feraoni and Andrea Giusti', 'Einstein’s theory of gravity — general relativity — has been very successful for more than a century. However, it has theoretical shortcomings...', 1),
(3, 'Industry', 'Fossil fuel workers have the skills to succeed in green jobs', 'Morgan R. Frank and Junghyun Lim', 'As the U.S. shifts away from fossil fuels to cleaner energy sources, thousands of coal, oil and gas workers will be looking for new jobs...', 0),
(4, 'Industry', 'The Coal Industry Shrinks', 'Ann Eisenberg', 'Murray Energy, one of the biggest private U.S. coal companies, has become the fifth coal company to file for bankruptcy in 2019...', 0),
(5, 'Technical', 'AI Industrial Revolution', 'Richard Markoff and Ralf Seifert', 'It’s nearly a decade since the term “fourth industrial revolution” was coined, yet many people won’t have heard of it, or know what it refers to...', 0),
(6, 'Technical', '3D Printing Opportunities For African Countries', 'Seun Kolade', 'Thousands of years ago, the blacksmith led a technological leap in sub-Saharan Africa. West Africa’s Nok culture, for example,...', 0),
(7, 'Career', 'Career Advice For School Leavers', 'Lucas Walsh and Joanne Gleeson', 'As we pass the half way mark in term 3, many students in Year 12 will be thinking more and more about their future...', 0),
(8, 'Career', '3 Tips For Your Next Career Step', 'Marina Milosheva', 'What do you want to be when you grow up? Practically from the moment you start talking, you’re asked this question. As a child, you’re encouraged to make decisions about...', 0),
(11, 'Arts', 'A brief history of goth fashion', 'Catherine Spooner', 'Goth is the subculture that never died – or more precisely, perhaps, remains undead. The persistence of the subculture’s style is due to the remarkable richness of the cultural tradition on which it draws, and its malleability– its striking ability to absorb new influences into ….', 0),
(13, 'Arts ADD-TEST', 'Goth Culture', 'Catherine Spooner', 'Goth is the subculture that never died – or more precisely, perhaps, remains undead. The persistence of the subculture’s style is due to the remarkable richness of the cultural tradition on which it draws, and its malleability– its striking ability to absorb new influences into ….', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_likes`
--

CREATE TABLE `article_likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `likes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_likes`
--

INSERT INTO `article_likes` (`like_id`, `user_id`, `article_id`, `likes`) VALUES
(1, 4, 4, 1),
(2, 4, 4, 1),
(3, 4, 4, 1),
(4, 4, 4, 1),
(5, 4, 0, 1),
(6, 4, 4, 1),
(7, 4, 4, 1),
(8, 4, 0, 1),
(9, 6, 0, 1),
(10, 6, 0, 1),
(11, 6, 0, 1),
(12, 6, 0, 1),
(13, 6, 7, 1),
(14, 6, 0, 1),
(15, 6, 0, 1),
(16, 6, 0, 0),
(17, 6, 0, 1),
(18, 6, 0, 1),
(19, 6, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Submission_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category_Interest` varchar(15) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Submission_id`, `name`, `email`, `category_Interest`, `role`) VALUES
(24, 'AgentMM', 'agentmm@gmail.com', 'Technical', 'Contributor'),
(25, 'Beula', 'haha@gmail.com', 'Career', 'Writer');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_Id`, `username`, `password`, `role`) VALUES
(1, 'immRealAdmin', 'adminIMM', 'Admin'),
(2, 'DapperCrow', 'DC07', 'Member'),
(4, 'Pokemon Go', 'pookie', 'Member'),
(6, 'Heyyoo', 'meheyo', 'Member'),
(7, 'Scooby', 'doo', 'Member'),
(8, 'Mike Wasouski', 'scaredBro', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `articles_page`
--
ALTER TABLE `articles_page`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_likes`
--
ALTER TABLE `article_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Submission_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles_page`
--
ALTER TABLE `articles_page`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `article_likes`
--
ALTER TABLE `article_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
