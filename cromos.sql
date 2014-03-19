-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 14-03-2014 a les 20:52:11
-- Versió del servidor: 5.5.34-0ubuntu0.13.04.1
-- Versió de PHP: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `cromos`
--
CREATE DATABASE `cromos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cromos`;

-- --------------------------------------------------------

--
-- Estructura de la taula `album-cromo-pagina`
--

CREATE TABLE IF NOT EXISTS `album-cromo-pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `cromo_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=5 ;

--
-- Bolcant dades de la taula `album-cromo-pagina`
--

INSERT INTO `album-cromo-pagina` (`id`, `album_id`, `cromo_id`, `pagina_id`) VALUES
(1, 1, 7, 1),
(2, 1, 8, 1),
(3, 1, 9, 1),
(4, 1, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `album-imatge`
--

CREATE TABLE IF NOT EXISTS `album-imatge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `imatge_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `album-pregunta`
--

CREATE TABLE IF NOT EXISTS `album-pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `album-tema`
--

CREATE TABLE IF NOT EXISTS `album-tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf16_unicode_ci NOT NULL,
  `descripcio` int(11) NOT NULL,
  `portada` int(11) NOT NULL,
  `aprovat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=5 ;

--
-- Bolcant dades de la taula `albums`
--

INSERT INTO `albums` (`id`, `nom`, `descripcio`, `portada`, `aprovat`) VALUES
(1, 'Test Album 1', 0, 0, 1),
(3, 'Test Album 2', 123, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `categoria-subcategoria`
--

CREATE TABLE IF NOT EXISTS `categoria-subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `categoria-tema`
--

CREATE TABLE IF NOT EXISTS `categoria-tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `clan`
--

CREATE TABLE IF NOT EXISTS `clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `descripcio` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `coleccio`
--

CREATE TABLE IF NOT EXISTS `coleccio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `cromo_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  `vegades` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `cromos`
--

CREATE TABLE IF NOT EXISTS `cromos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `aprovat` tinyint(1) NOT NULL,
  `numeracio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=33 ;

--
-- Bolcant dades de la taula `cromos`
--

INSERT INTO `cromos` (`id`, `descripcio`, `aprovat`, `numeracio`) VALUES
(10, 'Cromo del Vegeta', -1, 0),
(9, 'Cromo del Goku', -1, 0),
(7, 'Cromo del Sonic', 1, 1),
(8, 'Cromo del Tails', 0, 1),
(11, 'Cromo de la princesa chicle', 0, 0),
(12, 'Finn de Hora de aventuras', -1, 0),
(13, 'Cromo de Jake', 1, 1),
(14, 'Spiderman', 0, 0),
(15, 'Superman', 0, 0),
(16, 'Batman', -1, 0),
(17, 'Capitan America', -1, 0),
(18, 'Linterna verde', 0, 0),
(19, 'Mario Bros', -1, 0),
(20, 'Luigi Bros', -1, 0),
(21, 'Wonderboy', 0, 0),
(22, 'Wondergirl', 0, 0),
(23, 'Picara  PatrullaX', 0, 0),
(24, 'Gambito PatrullaX', 0, 0),
(25, 'Sheldon Cooper', 1, 0),
(26, 'Cromo del Tux', -1, 0),
(27, 'Cromo de la Penny', 0, 0),
(28, 'Game Boy', 0, 0),
(29, 'Game Gear', 0, 0),
(30, 'Master System', 0, 0),
(31, 'NES', 0, 0),
(32, 'Super NES', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `fitxers_textos`
--

CREATE TABLE IF NOT EXISTS `fitxers_textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `idioma-usuari`
--

CREATE TABLE IF NOT EXISTS `idioma-usuari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuari_id` int(11) NOT NULL,
  `idioma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuari_id` (`usuari_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `idiomes`
--

CREATE TABLE IF NOT EXISTS `idiomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `imatges`
--

CREATE TABLE IF NOT EXISTS `imatges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `aprovada` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=9 ;

--
-- Bolcant dades de la taula `imatges`
--

INSERT INTO `imatges` (`id`, `descripcio`, `aprovada`) VALUES
(1, 'Imatge test 1', 0),
(2, 'Imatge test 2', 0),
(3, 'Imatge test 3', -1),
(4, 'Imatge test 4', 0),
(5, 'Imatge test 5', 0),
(6, 'Imatge test 6', 0),
(7, 'Imatge test 7', 0),
(8, 'Imatge test 8', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `lider_clan`
--

CREATE TABLE IF NOT EXISTS `lider_clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clan_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `pagina-tipus_pagina`
--

CREATE TABLE IF NOT EXISTS `pagina-tipus_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagina_id` int(11) NOT NULL,
  `tipus_pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `pagines`
--

CREATE TABLE IF NOT EXISTS `pagines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeracio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `pertany_clan`
--

CREATE TABLE IF NOT EXISTS `pertany_clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clan_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `portada`
--

CREATE TABLE IF NOT EXISTS `portada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `preguntes`
--

CREATE TABLE IF NOT EXISTS `preguntes` (
  `preguntes` int(11) NOT NULL AUTO_INCREMENT,
  `tipus` int(11) NOT NULL,
  `aprovada` int(11) NOT NULL,
  PRIMARY KEY (`preguntes`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=17 ;

--
-- Bolcant dades de la taula `preguntes`
--

INSERT INTO `preguntes` (`preguntes`, `tipus`, `aprovada`) VALUES
(1, 1, 0),
(16, 2, 0),
(15, 2, 0),
(14, 1, 1),
(13, 1, -1);

-- --------------------------------------------------------

--
-- Estructura de la taula `preguntes_de_relacionar`
--

CREATE TABLE IF NOT EXISTS `preguntes_de_relacionar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `pregunta_1` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta_1` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `pregunta_2` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta_2` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `pregunta_3` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta_3` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `pregunta_4` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta_4` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=4 ;

--
-- Bolcant dades de la taula `preguntes_de_relacionar`
--

INSERT INTO `preguntes_de_relacionar` (`id`, `pregunta_id`, `descripcio`, `pregunta_1`, `resposta_1`, `pregunta_2`, `resposta_2`, `pregunta_3`, `resposta_3`, `pregunta_4`, `resposta_4`) VALUES
(1, 1, 'Pregunta Test', 'Quant son 2+2', '4', 'Quant son 3+3', '6', 'Quant son 3+2', '5', 'Quant son 6+4', '10'),
(2, 13, 'Pregunta tonta', 'a', '1', 'b', '2', 'c', '3', 'd', '4'),
(3, 14, 'Pregunta tontissima', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');

-- --------------------------------------------------------

--
-- Estructura de la taula `preguntes_si_no`
--

CREATE TABLE IF NOT EXISTS `preguntes_si_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=3 ;

--
-- Bolcant dades de la taula `preguntes_si_no`
--

INSERT INTO `preguntes_si_no` (`id`, `pregunta_id`, `descripcio`, `resposta`) VALUES
(1, 15, 'El sonic és de color blau?', 1),
(2, 16, 'El Mario porta Txapela?', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `respostes`
--

CREATE TABLE IF NOT EXISTS `respostes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  `vegades` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `temes`
--

CREATE TABLE IF NOT EXISTS `temes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=2 ;

--
-- Bolcant dades de la taula `temes`
--

INSERT INTO `temes` (`id`, `descripcio`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de la taula `tipus_pagines`
--

CREATE TABLE IF NOT EXISTS `tipus_pagines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `tipus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `email` int(250) NOT NULL,
  `password` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
