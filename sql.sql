-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 11:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `conection`
--

CREATE TABLE `conection` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `messages` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conection`
--

INSERT INTO `conection` (`id`, `name`, `email`, `messages`) VALUES
(1, 'MONU', 'monu1215pal@gmail.com', 'okkp'),
(2, 'MONU', 'monu1215pal@gmail.com', 'okkp'),
(3, 'MONU', 'monu1215pal@gmail.com', 'this is good thot\r\n'),
(4, 'MONU MONU', 'monu9op@gmail.com', 'scs');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(9, 'CSS', 'SCC (Cascading Style Sheets) is a style sheet language used to describe the presentation and visual appearance of HTML and XML documents. It provides a powerful mechanism for controlling the layout, colors, fonts, and other visual aspects of a webpage, allowing developers to create visually appealing and consistent designs across multiple web pages.', '2023-07-14 16:51:22'),
(63, 'HTML5', 'HTML is the standard markup language for Web pages. With HTML you can create your own Website. HTML is easy to learn - You will enjoy it! Study our free HTML .', '2023-07-14 16:51:22'),
(64, 'PYTHON', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation via the off-side rule. Python is dynamically typed and garbage-collected', '2023-07-14 16:51:22'),
(75, 'java', 'javaScript was initially created to “make web pages alive”.\r\n\r\nThe programs in this language are called scripts. They can be written right in a web page’s HTML and run automatically as the page loads.\r\n\r\nScripts are provided and executed as plain text. They don’t need special preparation or compilation to run.\r\n', '2023-07-14 16:51:22'),
(76, 'LUCKNOW', 'Lucknow, a large city in northern India, is the capital of the state of Uttar Pradesh. Toward its center is Rumi Darwaza, a Mughal gateway. Nearby, the 18th-century Bara Imambara shrine has a huge arched hall. Upstairs, Bhool Bhulaiya is a maze of narrow tunnels with city views from its upper balconies. Close by, the grand Victorian Husainabad Clock Tower was built as a victory column in 1881.', '2023-07-14 16:51:22'),
(77, 'Raebareli', 'Raebareli is a city in Indian state of Uttar Pradesh. It is the administrative headquarters of Raebareli district and a part of Lucknow Division. The city is situated on the banks of the Sai river, 82 km southeast of Lucknow.  this is new ', '2023-07-14 17:00:51'),
(78, 'KANPUR 2', 'Kanpur, formerly Cawnpore, is a large industrial city located in the central-western part of the state of Uttar Pradesh, India. Founded in 1207, Kanpur became one of the most important commercial and military stations of British India. Kanpur is also the financial capital of Uttar Pradesh.', '2023-07-15 14:31:13'),
(79, 'Delhi', 'Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid Mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.', '2023-07-15 14:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'ram', 'ram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conection`
--
ALTER TABLE `conection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conection`
--
ALTER TABLE `conection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
