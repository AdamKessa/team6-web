-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 07, 2023 at 09:04 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team6-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `party_size` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_number` int NOT NULL,
  `id` int NOT NULL,
  `reservationCode` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`party_size`, `date`, `time`, `fname`, `lname`, `email`, `phone_number`, `id`, `reservationCode`) VALUES
('3 persons', '2023-02-15', '13:37:00.000000', 'Mona', 'Fallah', 'F@gmail.com', 46405403, 2, 'C94VF2KH'),
('3 persons', '2023-02-09', '08:58:00.000000', 'Sanaz', 'Sohrabian', 'Sa@gmail.com', 46405404, 16, '40MD5P1T'),
('1 person', '2023-03-08', '09:31:00.000000', 'Soroush', 'Sohrabian', 'sohrabian.so83gmail.com', 466403404, 30, 'LVPHBIG4'),
('2 persons', '2023-03-01', '12:54:00.000000', 'Soroush', 'Sohrabian', 'sohrabian.so83@gmail.com', 466403404, 33, '3HS6YXMM'),
('3 persons', '2023-03-01', '14:22:00.000000', 'arogon21', 'reere', 'arodssdf@sd', 123456789, 34, 'YO48I35O');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `message_id` int NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `review_text` text NOT NULL,
  `rating` int NOT NULL,
  `review_image` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`message_id`, `customerName`, `review_text`, `rating`, `review_image`) VALUES
(1, 'stephen', 'what is this, is this OKey', 2, '/uploads/05220451.jpg'),
(2, 'heyhey', 'this is very good to eat', 4, '/uploads/微信图片_20230303214326.jpg'),
(5, 'Mike', 'WOWO, how good is the beer, I like the light one. No bit\r\nAnd the pig shank is so delicious !!!', 5, '/uploads/230305220459.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(30, 'sorushh@gmail.com', '4297f44b13955235245b2497399d7a93', 'sorush'),
(28, 'sorush@gmail.com', '4297f44b13955235245b2497399d7a93', 'sorush'),
(23, 'ads', 'c20ad4d76fe97759aa27a0c99bff6710', 'asd'),
(24, 'ssf', 'c20ad4d76fe97759aa27a0c99bff6710', 'asd'),
(25, 'asror@gmail.com', '4297f44b13955235245b2497399d7a93', 'asror'),
(26, 'asrorbek@gmail.com', '4297f44b13955235245b2497399d7a93', 'Asrorbek'),
(27, 'asrorbekk@gmail.com', '4297f44b13955235245b2497399d7a93', 'Asrorbek'),
(21, 'asdqwd', '4297f44b13955235245b2497399d7a93', 'asdsadas'),
(22, 'Asrorbek', '4297f44b13955235245b2497399d7a93', 'Asror');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
