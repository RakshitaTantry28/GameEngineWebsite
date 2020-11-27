-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2020 at 01:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guess-the-switch`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_data`
--

CREATE TABLE `game_data` (
  `remote_address` varchar(400) NOT NULL,
  `http_user_agent` varchar(500) NOT NULL,
  `gamedata` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_data`
--

INSERT INTO `game_data` (`remote_address`, `http_user_agent`, `gamedata`) VALUES
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":2,\"score\":20,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":20}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":2,\"score\":20,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":20}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":10,\"levelcompleted\":1},\"3\":{\"level\":3,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"4\":{\"level\":4,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":4,\"score\":70}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":2,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":30}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":3,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":2,\"score\":20,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":10,\"levelcompleted\":1},\"3\":{\"level\":3,\"noofattempts\":2,\"score\":20,\"levelcompleted\":1},\"4\":{\"level\":4,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"5\":{\"level\":5,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":5,\"score\":80}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":3,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":2,\"score\":20,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":20}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":3,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":3,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":3,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":10,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":10}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":1,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":2,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":1,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":30}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":5,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":4,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":1,\"score\":30,\"levelcompleted\":1},\"2\":{\"level\":2,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":2,\"score\":30}'),
('::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', '{\"switch\":0,\"gamestatus\":0,\"gamedata\":{\"1\":{\"level\":1,\"noofattempts\":3,\"score\":0,\"levelcompleted\":0}},\"level\":1,\"score\":0}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
