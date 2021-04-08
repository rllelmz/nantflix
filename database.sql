-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2021 at 11:01 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Nantflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `IDinscription` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(12) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `telephone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`IDinscription`, `mail`, `motdepasse`, `nom`, `prenom`, `datenaissance`, `telephone`) VALUES
(1, 'helene25@gmail.com', 'Helen5432', 'Johnson', 'Hélène', '1987-09-25', '0675675434'),
(2, 'leane@gmail.com', 'Leane4567', 'Williams', 'Léane ', '1995-12-09', '0765432145'),
(3, 'junior_@gmail.com', 'Junior4512', 'Elka', 'Junior', '1976-01-01', '0678676542'),
(4, 'runona03@outlook.fr', 'Runona2345', 'Rinis', 'Runona', '2002-12-03', '0676452345'),
(5, 'rdueghjo@outlook.fr', 'Azdfgt5678', 'Prude', 'Rudini', '1980-03-25', '0709010305'),
(6, 'Ashley_@yahoo.fr', 'Ashleigh678', 'Rundis', 'Ashley', '2000-02-29', '0656788291'),
(7, 'hailey23@yahoo.fr', 'Hailey678', 'Sidis', 'Hailey', '1999-08-23', '0987654331'),
(8, 'Hailee45@gmail.com', 'Efeurhio0987', 'Stenford', 'Hailee', '1996-09-30', '0643531345');

-- --------------------------------------------------------

--
-- Table structure for table `lastepisode`
--

CREATE TABLE `lastepisode` (
  `IDepisode` int(11) NOT NULL,
  `numepisode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serie`
--

CREATE TABLE `serie` (
  `IDserie` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `nbepisodes` int(11) NOT NULL,
  `acteurs` varchar(100) NOT NULL,
  `realisateur` varchar(100) NOT NULL,
  `anneesortie` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serie`
--

INSERT INTO `serie` (`IDserie`, `intitule`, `nbepisodes`, `acteurs`, `realisateur`, `anneesortie`) VALUES
(1, 'The Saddle Club ', 50, 'Sophie Bennett Lara Jean Marshall Keenan MacWilliam', 'Jason Abelson Kate Barris ', 2001),
(2, 'Cold Case ', 156, 'Kathryn Morris Dany Pino', 'Jerry Bruckheimer', 2003),
(3, 'My Wife And Kids', 123, 'Damon Wayans,Tisha Campbell-Martin,George O. Gore II,Parker McKenna Posey,Jennifer Freeman', 'Damon Wayans, Don Reo ', 2001),
(4, 'The Next Step', 180, 'Briar Nolet, Victoria Baldesarra, Alex Beaton', 'Frank van Keeken', 2013),
(5, 'The Nanny', 146, 'Fran Drescher, Charles Shaughnessy, Nicholle Tom, Benjamin Salisbury, Madeline Zima,', 'Peter Marc Jacobson, Fran Drescher', 1993),
(6, 'Unknown', 125, 'Unknown', 'Unknown', 1938),
(7, 'Unknown', 6, 'Well-known', 'Reuelle', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`IDinscription`);

--
-- Indexes for table `lastepisode`
--
ALTER TABLE `lastepisode`
  ADD PRIMARY KEY (`IDepisode`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`IDserie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `IDinscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lastepisode`
--
ALTER TABLE `lastepisode`
  MODIFY `IDepisode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `IDserie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
