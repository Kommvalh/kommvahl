-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 06 dec 2012 kl 15:09
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `acme`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `images`
--

CREATE TABLE `images` (
  `picId` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`picId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumpning av Data i tabell `images`
--

INSERT INTO `images` (`picId`, `src`) VALUES
(1, '<img src="img/folie.jpg">'),
(2, '<img src="img/slangbella.jpg">'),
(3, '<img src="img/glass.jpg">'),
(4, '<img src="img/kommvalh.jpg">');

-- --------------------------------------------------------

--
-- Tabellstruktur `pages`
--

CREATE TABLE `pages` (
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
('om_oss', 'Om oss', 'Vi är världens största glass-, slangbelle- och folieleverantör!', 'Page'),
('kontakt', 'Kontakta oss', 'Våra linjer är alltid upptagna men det går bra att lämna ett facebookmeddelande till vår helpdesk.', 'Contact'),
('hem', 'Startsida', 'Kommvalh är ett företag som arbetar med folie, slangbellor och glass. Våra folier används för att ge ett dekorativt ytskikt med olika funktioner, anpassade till den färdiga produktens användningsområde och miljö.', 'home'),
('produkter', 'Produkter', '\r\nProdukter\r\nGislaved Folie arbetar både med skräddarsydda och kundunika produkter samt med olika standardkollektioner.\r\n\r\nVåra produktområden är uppdelade i tre olika grupper; folie, glass och slangbellor.\r\n\r\nInom våra områden erbjuder Kommvalh produkter som tillhör marknadens toppskick, vad det gäller design, kvalitet, miljö och funktion.', 'product');

-- --------------------------------------------------------

--
-- Tabellstruktur `pagesximages`
--

CREATE TABLE `pagesximages` (
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