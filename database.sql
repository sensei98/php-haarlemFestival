-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2022 at 12:04 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ticketsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ID` int(50) NOT NULL,
  `artistname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `hall` varchar(255) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `timefrom` datetime NOT NULL,
  `timeto` datetime NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `artistname`, `location`, `hall`, `price`, `timefrom`, `timeto`, `about`) VALUES
(25, 'gumbo kings', 'patronaat', 'main hall', 15, '2021-07-29 18:00:00', '2021-07-29 19:00:00', 'The gumbo kings is a small band and one of the first jazz bands that made the first jazz album ever to be played on the radio in the year 2000. Get the ticket!'),
(26, 'evolve', 'patronaat', 'main hall', 15, '2021-07-29 19:30:00', '2021-07-29 20:30:00', 'Evolve jazz band is a group of young jazz talents and really talented artists from Belgium. They are mostly known around the world for their unusual Jazz songs. Get the ticket!'),
(27, 'ntjam rosie', 'patronaat', 'main hall', 15, '2021-07-29 21:00:00', '2021-07-29 22:00:00', 'Ntjam Rosie is an American jazz artist that is both a great pianist and also a really good guitarist. She plays mostly at small bars and also festivals and this is her first time performing in Holland.Get the ticket!'),
(28, 'wicked jazz sounds', 'patronaat', 'second hall', 10, '2021-07-29 18:00:00', '2021-07-29 19:00:00', 'The Wicked Jazz Sounds is an American Jazz trio from Minneapolis, United States, consisting of bassist Reid Anderson, pianist Orin Evans and Dave Harst. Get the ticket!'),
(29, 'tom thomson assemble', 'patronaat', 'second hall', 10, '2021-07-29 19:30:00', '2021-07-29 20:30:00', 'Tom Thomson Assemble is a jazz band, led by pianist Tom Thomson. Following the demise of return to forever, Tom established the music Tom Thomson Assemble. Get the ticket! '),
(30, 'joanna frazer', 'patronaat', 'second hall', 10, '2021-07-29 21:00:00', '2021-07-29 22:00:00', 'Joanna Frazer is a jazz band led by a dutch jazz artist Joanna Frazer with Brandon Riel on piano and Dave Chapelle on drums. Get the ticket!'),
(31, 'fox & the majors', 'patronaat', 'main hall', 15, '2021-07-30 18:00:00', '2021-07-30 19:00:00', 'Fox & The Majors is a cuban band founded by pianist Chucho Valdes in 2010. They won the Grammy award for best jazz album in 2015.Get the ticket!'),
(32, 'uncle sue', 'patronaat', 'main hall', 15, '2021-07-30 19:30:00', '2021-07-30 20:30:00', 'Uncle Sue is an Belgian male vocal quartet that blends open-harmonic jazz arrangements with the big band vocal group sounds of The Modenaires.Get the ticket!'),
(33, 'chris allen', 'patronaat', 'main hall', 15, '2021-07-30 21:00:00', '2021-07-30 22:00:00', 'Chris Allen is an English jazz artist born in the city of London in the United Kingdom. He has been performing in festivals all over London for years.Get the ticket! '),
(34, 'myles sanko', 'patronaat', 'second hall', 10, '2021-07-30 18:00:00', '2021-07-30 19:00:00', 'Myles Sanko is a dutch jazz artist who plays with pianist Eddie van der Beek, guitarist Vikistar and his brother who is a drummer, Gary Sanko.Get the ticket!'),
(35, 'ruis soundsystem', 'patronaat', 'second hall', 10, '2021-07-30 19:30:00', '2021-07-30 20:30:00', 'Ruiz Soundsystem is a jazz group from Berlin,Germany. This group has played all over the world and now performing in patronaat.Get the ticket!'),
(36, 'the family xl', 'patronaat', 'second hall', 10, '2021-07-30 21:00:00', '2021-07-30 22:00:00', 'The family XL is a trio jazz group that performs mostly in small bars and events. This festival will be their first big audience. They have a lot of loyal fans who listen and love their music.Get the ticket!'),
(37, 'gare du nord', 'patronaat', 'main hall', 15, '2021-07-31 18:00:00', '2021-07-31 19:00:00', 'Gare du Nord will be performing at Grote Markt for free and also at the Jazz event at the Haarlem festival in patronaat. Get the ticket!'),
(38, 'rilan & the bombadiers', 'patronaat', 'main hall', 15, '2021-07-31 19:30:00', '2021-07-31 20:30:00', 'Rilan & The Bombadiers is a three man jazz band which consists of only brass instruments namely trumpet, trombone and the tuba horn. These Instruments are played by a group of three.Get the ticket!'),
(39, 'soul six', 'patronaat', 'main hall', 15, '2021-07-31 21:00:00', '2021-07-31 22:00:00', 'The soul six is an American jazz fusion band that has been successful since the 2000s and is still making music in 2020. They will be performing one of their hit songs at the Haarlem Festival.Get the ticket!'),
(40, 'han bennink', 'patronaat', 'second hall', 10, '2021-07-31 18:00:00', '2021-07-31 19:00:00', 'Han Bennink is a jazz musician from Uruguay who incorporates RnB and soul into his music. He is one of the musicians that started this trend. His music is quite versatile.Get the ticket!'),
(41, 'the nordanians', 'patronaat', 'second hall', 10, '2021-07-31 19:30:00', '2021-07-31 20:30:00', 'This is a group of jazz musicians from Norway that incorporates the local music of Norway into their music.Get the ticket!'),
(42, 'lilith merlot', 'patronaat', 'second hall', 10, '2021-07-31 21:00:00', '2021-07-31 22:00:00', 'Lilith Merlot is a jazz musician that lives in Belgium. She is a great saxophonist and one of the best in europe.Get the ticket!'),
(43, 'ruiz soundsystem', 'grote markt', NULL, 0, '2021-08-01 15:00:00', '2021-08-01 16:00:00', 'Ruiz soundsystem will be performing at Grote Markt for free at the Jazz event at the Haarlem festival.Get the ticket!'),
(44, 'wicked jazz sounds', 'grote markt', NULL, 0, '2021-08-01 16:00:00', '2021-08-01 17:00:00', 'Wicked Jazz Sounds will be performing at Grote Markt for free at the Jazz event at the Haarlem festival.Get the ticket!'),
(45, 'evolve', 'grote markt', NULL, 0, '2021-08-01 17:00:00', '2021-08-01 18:00:00', 'Evolve will be performing at Grote Markt for free at the Jazz event at the Haarlem festival.Get the ticket!'),
(46, 'the nordanians', 'grote markt', NULL, 0, '2021-08-01 18:00:00', '2021-08-01 19:00:00', 'The Nordanians will be performing at Grote Markt for free at the Jazz event at the Haarlem festival.Get the ticket!'),
(47, 'gumbo kings', 'grote markt', NULL, 0, '2021-08-01 19:00:00', '2021-08-01 20:00:00', 'Gumbo Kings will be performing at Grote Markt for free at the Jazz event at the Haarlem festival.Get the ticket!'),
(48, 'gare du nord', 'grote markt', NULL, 0, '2021-08-01 20:00:00', '2021-08-01 21:00:00', 'Gare du Nord will be performing at Grote Markt for free at the Jazz event at the Haarlem festival. Get the ticket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ID`);


-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2022 at 12:05 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ticketsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `topArtists`
--

CREATE TABLE `topArtists` (
  `topArtistsID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topArtists`
--

INSERT INTO `topArtists` (`topArtistsID`, `image`, `ID`) VALUES
(2, '/uploads/joannafrazer.png', 30),
(3, '/uploads/unclesue.png', 32),
(4, '/uploads/chrisallen.png', 33),
(5, '/uploads/lilithmerlot.png', 42),
(6, '/uploads/hanbennink.png', 40),
(7, '/uploads/ntjamrosie.png', 27),
(8, '/uploads/wickedjazzsounds.png', 44),
(9, '/uploads/tomthomsonassemble.png', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topArtists`
--
ALTER TABLE `topArtists`
  ADD PRIMARY KEY (`topArtistsID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topArtists`
--
ALTER TABLE `topArtists`
  MODIFY `topArtistsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topArtists`
--
ALTER TABLE `topArtists`
  ADD CONSTRAINT `topartists_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tickets` (`ID`);
