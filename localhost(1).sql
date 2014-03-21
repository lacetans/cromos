-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2014 a las 17:29:01
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cromos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album-cromo-pagina`
--

CREATE TABLE IF NOT EXISTS `album-cromo-pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `cromo_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album-imatge`
--

CREATE TABLE IF NOT EXISTS `album-imatge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `imatge_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album-pregunta`
--

CREATE TABLE IF NOT EXISTS `album-pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album-tema`
--

CREATE TABLE IF NOT EXISTS `album-tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album_usuari`
--

CREATE TABLE IF NOT EXISTS `album_usuari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuari_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `data_creacio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `album_usuari`
--

INSERT INTO `album_usuari` (`id`, `usuari_id`, `album_id`, `data_creacio`) VALUES
(4, 17, 2, '2014-03-11'),
(5, 18, 3, '2014-03-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  `descripcio` int(11) NOT NULL,
  `portada` int(11) NOT NULL,
  `aprovat` int(11) NOT NULL,
  `data_creacio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id`, `nom`, `descripcio`, `portada`, `aprovat`, `data_creacio`) VALUES
(2, 123456789, 12345, 1234, 1234, '2014-03-11'),
(3, 123, 123, 123, 123, '2014-03-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria-subcategoria`
--

CREATE TABLE IF NOT EXISTS `categoria-subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria-tema`
--

CREATE TABLE IF NOT EXISTS `categoria-tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clan`
--

CREATE TABLE IF NOT EXISTS `clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `descripcio` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coleccio`
--

CREATE TABLE IF NOT EXISTS `coleccio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `cromo_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  `vegades` int(11) NOT NULL,
  `data_creacio` date NOT NULL,
  `nom` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `coleccio`
--

INSERT INTO `coleccio` (`id`, `album_id`, `cromo_id`, `usuari_id`, `vegades`, `data_creacio`, `nom`) VALUES
(3, 3, 1, 18, 1, '2014-03-13', 111111),
(5, 3, 1, 19, 1, '2014-03-13', 1111223);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coleccio_usuari`
--

CREATE TABLE IF NOT EXISTS `coleccio_usuari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuari_id` int(11) NOT NULL,
  `coleccio_id` int(11) NOT NULL,
  `data_creacio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `coleccio_usuari`
--

INSERT INTO `coleccio_usuari` (`id`, `usuari_id`, `coleccio_id`, `data_creacio`) VALUES
(1, 18, 3, '2014-03-13'),
(3, 19, 3, '2014-03-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cromos`
--

CREATE TABLE IF NOT EXISTS `cromos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `aprovat` tinyint(1) NOT NULL,
  `numeracio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fitxers_textos`
--

CREATE TABLE IF NOT EXISTS `fitxers_textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma-usuari`
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
-- Estructura de tabla para la tabla `idiomes`
--

CREATE TABLE IF NOT EXISTS `idiomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imatges`
--

CREATE TABLE IF NOT EXISTS `imatges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider_clan`
--

CREATE TABLE IF NOT EXISTS `lider_clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clan_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina-tipus_pagina`
--

CREATE TABLE IF NOT EXISTS `pagina-tipus_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagina_id` int(11) NOT NULL,
  `tipus_pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagines`
--

CREATE TABLE IF NOT EXISTS `pagines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeracio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertany_clan`
--

CREATE TABLE IF NOT EXISTS `pertany_clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clan_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portada`
--

CREATE TABLE IF NOT EXISTS `portada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes`
--

CREATE TABLE IF NOT EXISTS `preguntes` (
  `preguntes` int(11) NOT NULL AUTO_INCREMENT,
  `tipus` int(11) NOT NULL,
  PRIMARY KEY (`preguntes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_de_relacionar`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_si_no`
--

CREATE TABLE IF NOT EXISTS `preguntes_si_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respostes`
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
-- Estructura de tabla para la tabla `rss`
--

CREATE TABLE IF NOT EXISTS `rss` (
  `id` int(11) NOT NULL,
  `descripcio` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rss_usuari`
--

CREATE TABLE IF NOT EXISTS `rss_usuari` (
  `id` int(11) NOT NULL,
  `rss_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temes`
--

CREATE TABLE IF NOT EXISTS `temes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipus_pagines`
--

CREATE TABLE IF NOT EXISTS `tipus_pagines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `tipus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `email` int(250) NOT NULL,
  `password` int(250) NOT NULL,
  `data_creacio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `login`, `email`, `password`, `data_creacio`) VALUES
(18, 'avui', 123456, 123456, '2014-03-13'),
(17, 'avui', 12345, 1234, '2014-03-11'),
(19, 'avui2', 12345, 12344, '2014-03-13'),
(20, 'avui2', 12345, 12344, '2014-03-13');
--
-- Base de datos: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
