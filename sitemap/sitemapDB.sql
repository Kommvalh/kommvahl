-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 06 dec 2012 kl 14:25
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `sitemapDB`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `sitemap`
--

CREATE TABLE `sitemap` (
  `loc` varchar(100) NOT NULL,
  `lastmod` date NOT NULL,
  `changefreq` set('always','hourly','daily','weekly','monthly','yearly','never') NOT NULL DEFAULT 'monthly',
  `priority` varchar(10) NOT NULL DEFAULT '0.5',
  PRIMARY KEY (`loc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `sitemap`
--

INSERT INTO `sitemap` (`loc`, `lastmod`, `changefreq`, `priority`) VALUES
('http://www.kommvahl.se', '2012-12-06', 'weekly', '1'),
('http://www.kommvahl.se/kontakt', '2012-12-06', 'monthly', '0.5'),
('http://www.kommvahl.se/om_oss', '2012-12-04', 'monthly', '0.8'),
('http://www.kommvahl.se/produkter', '2012-12-04', 'monthly', '0.5'),
('http://www.kommvahl.se/produkter/folie', '2012-12-06', 'daily', '0.5'),
('http://www.kommvahl.se/produkter/glass', '2012-12-04', 'weekly', '0.5'),
('http://www.kommvahl.se/produkter/slangbella', '2012-12-06', 'weekly', '0.5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
