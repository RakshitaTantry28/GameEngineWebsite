-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2020 at 04:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `sr_no` int(11) NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`sr_no`, `ans`) VALUES
(0, 'a'),
(1, 'b'),
(2, 'a'),
(3, 'd'),
(4, 'c'),
(5, 'a'),
(6, 'c'),
(7, 'd'),
(8, 'b'),
(9, 'b'),
(10, 'a'),
(11, 'c'),
(12, 'd'),
(13, 'a'),
(14, 'b'),
(15, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `username` varchar(100) NOT NULL,
  `snake_game` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`username`, `snake_game`) VALUES
('Danish_123', 10),
('neha_123', 0),
('nikis', 10),
('nikita_sarode', 35);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `sr_no` int(5) NOT NULL,
  `ques` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`sr_no`, `ques`, `a`, `b`, `c`, `d`) VALUES
(0, 'Ready !!?', 'Yes', 'yayayay', 'yup', 'Yesssss'),
(1, 'Name Disney’s first film?', 'Cinderella', 'Snow White', 'The Incredible Journey', 'Mary Poppins'),
(2, 'What was the most-watched series on Netflix in 2019?', 'Stranger Things', 'You', 'Friends', 'Big Bang Theory'),
(3, 'What is the name of the coffee shop in the sitcom Friends?', 'Farm Cafe', 'Coffee Shop', 'Central Farm', 'Central Perk'),
(4, 'What is the all-time most-streamed song on Spotify to date?', 'Tusa', 'All Night', 'The Shape of You', 'Despacito'),
(5, 'In Game of Thrones, what does Arya Stark call her sword?', 'Needle', 'Pen', 'Light', 'Star'),
(6, 'Who among the following Cricketer was the winner of Orange Cap in the IPL 2020?', 'Virat Kohli', 'Rohit Sharma', 'K L Rahul', 'Kieron Pollard'),
(7, 'Hitler party which came into power in 1933 is known as', 'Labour Party', 'Ku-Klux-Klan', 'Democratic Party', 'Nazi Party'),
(8, 'INDIA HAS LARGEST DEPOSITS OF ____ IN THE WORLD.', 'gold', 'mica', 'copper', 'None of the above'),
(9, 'India\'s first atomic reactor was', 'Kamini', 'Apsara', 'Dhruva', 'Zerlina'),
(10, 'Satellite launching station is located at', 'Sriharikotta (Andhra Pradesh)', 'Salem (Tamilnadu)', 'Solapur (Maharashtra)', 'Warangal (Telangana)'),
(11, 'Logarithm tables were invented by', 'John Doe', 'John Harrison', 'John Napier', 'John Douglas'),
(12, 'Entomology is the science that studies', 'Behavior of Elephants', 'The origin and history of technical and scientific terms', 'The formation of rocks', 'Insects'),
(13, 'When is the International Workers\' Day?', '1st May', '15th April', '12th December', '1st August'),
(14, 'Which country operationalized world’s largest radio telescope?', 'India', 'China', 'USA', 'Japan'),
(15, ' Which state has the largest population?', 'Uttar Pradesh', 'Bihar', 'Maharastra', 'Andra Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `email`, `phone_no`, `review`) VALUES
('Nidhi', 'rnsxdcd', 908932022, 'Noice'),
('Nikita', 'nikita@nothing.com', 12312312, 'This is a very great website !! Very amazing stuff and good games and also very unique !! I love it ....'),
('Amruta ', 'amruta@why.com', 787877878, 'Ta bong👍🏻'),
('Rakesh', 'Rakesh@panmasala.com', 0, 'Awesome Panmasal khaike!! 🍃');

-- --------------------------------------------------------

--
-- Table structure for table `snakegame`
--

CREATE TABLE `snakegame` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `snakegame`
--

INSERT INTO `snakegame` (`id`, `username`, `score`) VALUES
(1, 'nikita_sarode', 20),
(2, 'nikita_sarode', 20),
(3, 'nikita_sarode', 30),
(4, 'nikita_sarode', 30),
(5, 'nikita_sarode', 10),
(6, 'nikita_sarode', 10),
(7, 'nikita_sarode', 10),
(8, 'nikita_sarode', 15),
(9, 'nikita_sarode', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`) VALUES
('nikita', 'nikita_sarode', '123456'),
('Nidhi', 'nidhi_vanjare', '123456'),
('Nidhi V', 'nidhi_v', '123456'),
('Rakshita', 'rak', '123'),
('nikita', 'nikis', '123456'),
('nhfdkbj  ', 'nikita_sarode', 'ehuvj12hS'),
('Nikita Sarode', 'nikita_sarode', '54854hsdA'),
('Nikita Sarode', 'nikita_sarode', '54854hsdA'),
('Danish', 'Danish_123', 'Danish123'),
('Neha ', 'neha_123', 'Neha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `snakegame`
--
ALTER TABLE `snakegame`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `snakegame`
--
ALTER TABLE `snakegame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`sr_no`) REFERENCES `questions` (`sr_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
