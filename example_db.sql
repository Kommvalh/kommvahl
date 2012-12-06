-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 06 dec 2012 kl 14:06
-- Serverversion: 5.5.24-log
-- PHP-version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `acme`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `picId` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`picId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumpning av Data i tabell `images`
--

INSERT INTO `images` (`picId`, `src`) VALUES
(1, '<img src="img/folie.jpg">'),
(2, '<img src="img/folie.jpg">'),
(3, '<img src="img/folie.jpg">'),
(4, '<img src="img/folie.jpg">');

-- --------------------------------------------------------

--
-- Tabellstruktur `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `type`) VALUES
('om_oss', 'Om oss', 'Vi är världens största glass- och folieleverantör!', 'Page'),
('kontakt', 'Kontakta oss', 'Våra linjer är alltid upptagna men det går bra att lämna ett facebookmeddelande till vår helpdesk.', 'Contact');

-- --------------------------------------------------------

--
-- Tabellstruktur `pagesximages`
--

CREATE TABLE IF NOT EXISTS `pagesximages` (
  `pageId` varchar(50) NOT NULL,
  `imgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `pagesximages`
--

INSERT INTO `pagesximages` (`pageId`, `imgId`) VALUES
('om_oss', 1),
('om_oss', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `sitemap`
--

CREATE TABLE IF NOT EXISTS `sitemap` (
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
