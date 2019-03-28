-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 04:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movtic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `admin_password`) VALUES
('bassemelsawy', 'Bassem_2018');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_ID` int(3) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `director` varchar(30) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `plus18` tinyint(1) NOT NULL,
  `is3D` tinyint(1) NOT NULL,
  `movie_poster` varchar(100) NOT NULL,
  `movie_rate` varchar(10) NOT NULL,
  `movie_trailer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(1, 'The Mule', 'Crime, Drama, Mystery', ' 1h 56min', 'A 90-year-old horticulturist and Korean War veteran is caught transporting $3 million worth of cocaine through Illinois for a Mexican drug cartel.', 'Clint Eastwood', 'Clint Eastwood, Bradley Cooper, Taissa Farmiga', 0, 0,'images/The-Mule.jpg', '7.3/10', 'https://www.imdb.com/title/tt7959026/videoplayer/vi2678503961');
INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(2, 'Ralph Breaks the Internet', 'Animation, Adventure, Comedy', '1h 52min', 'Six years after the events of \"Wreck-It Ralph,\" Ralph and Vanellope, now friends, discover a wi-fi router in their arcade, leading them into a new adventure.', 'Phil Johnston', 'John C. Reilly, Sarah Silverman, Gal Gadot', 0, 0,'images/Ralph-Breaks-the-Internet.jpg', '7.5/10', 'https://www.imdb.com/title/tt5848272/videoplayer/vi1706015257');
INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(3, 'Mortal Engines', 'Action, Adventure, Fantasy', '2h 8min', 'In a post-apocalyptic world where cities ride on wheels and consume each other to survive, two people meet in London and try to stop a conspiracy.', 'Christian Rivers', 'Hera Hilmar, Robert Sheehan, Hugo Weaving', 0, 1, 'images/Mortal-Engines.jpg' , '6.5/10', 'https://www.imdb.com/title/tt1571234/videoplayer/vi3886594585');
INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(5, 'Green Book', 'Biography, Comedy, Drama', '2h 10min', 'A working-class Italian-American bouncer becomes the driver of an African-American classical pianist on a tour of venues through the 1960s American South.', 'Peter Farrelly', 'Mahershala Ali, Viggo Mortensen, Linda Enda Cardellini', 0, 0,'images/Green-Book.jpg' , '8.3/10', 'https://www.imdb.com/title/tt6966692/videoplayer/vi824752921'),
(6, 'Halloween', 'Horror, Thriller', '1h 46min', 'Laurie Strode confronts her long-time foe Michael Myers, the masked figure who has haunted her since she narrowly escaped his killing spree on Halloween night four decades ago.', 'David Gordon Green', 'Jamie Lee Curtis, Judy Greer, Andi Matichak', 0, 0,'images/Halloween.jpg' , '6.9/10', 'https://www.imdb.com/title/tt1502407/videoplayer/vi615692825');
INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(7, 'Venom', 'Action, Sci-Fi', '1h 52min', 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 'Ruben Fleischer', 'Tom Hardy, Michelle Williams, Riz Ahmed', 0, 0,'images/Venom.jpg' , '6.9/10', 'https://www.imdb.com/title/tt1270797/videoplayer/vi1186773529');
INSERT INTO `movie` (`movie_ID`, `movie_name`, `category`, `duration`, `description`, `director`, `cast`, `plus18`, `is3D`, `movie_poster`, `movie_rate`, `movie_trailer`) VALUES
(9, 'Instant Family', 'Comedy, Drama ', '1h 58min', 'A couple find themselves in over their heads when they foster three children.', 'Sean Anders', 'Mark Wahlberg, Rose Byrne, Isabela Moner', 0, 0,'images/Instant-Family.jpg' , '7.6/10', 'https://www.imdb.com/title/tt7401588/videoplayer/vi3723999769'),
(10, 'Shoplifters', 'Crime, Drama', '2h 1min', 'A family of small-time crooks take in a child they find outside in the cold.', 'Hirokazu Koreeda', 'Lily Franky, Sakura AndÃ´, Mayu Matsuoka', 0, 0, 'images/Shoplifters.jpg', '8.1/10', 'https://www.imdb.com/title/tt8075192/videoplayer/vi1118419737');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `user_username` varchar(20) NOT NULL,
  `movie_ID` varchar(30) DEFAULT NULL,
  `reservation_num` int(3) NOT NULL,
  `reservation_date` varchar(10) NOT NULL,
  `num_of_reserved_seats` int(2) NOT NULL,
  `seat_num` varchar(50) NOT NULL,
  `play_time` varchar(10) NOT NULL,
  `total_price` int(3) AS (80 * num_of_reserved_seats) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`user_username`, `movie_ID`, `reservation_num`, `reservation_date`, `num_of_reserved_seats`, `seat_num`, `play_time`) VALUES
('bassem_elsawy', 'The Mule', 59, '2018-12-18', 4, '1,6,11,16', '3pm');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone_num` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `user_password`, `full_name`, `phone_num`, `email`) VALUES
('bassem_elsawy', 'Bassem_2018', 'Bassem Adel El-Sawy', '01116601411', 'bassemelsawy22@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_ID`),
  ADD UNIQUE KEY `uk_movie_name` (`movie_name`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reservation_num`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `uk_phone_num` (`phone_num`),
  ADD UNIQUE KEY `uk_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reservation_num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
