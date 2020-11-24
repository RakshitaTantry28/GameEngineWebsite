-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 07:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Quiz`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`sr_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
