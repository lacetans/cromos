-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2014 a las 15:55:15
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.4.4-14+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  `descripcio` int(11) NOT NULL,
  `portada` int(11) NOT NULL,
  `aprovat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id`, `nom`, `descripcio`, `portada`, `aprovat`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album_pregunta`
--

CREATE TABLE IF NOT EXISTS `album_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `tipus_pregunta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `album_pregunta`
--

INSERT INTO `album_pregunta` (`id`, `album_id`, `pregunta_id`, `tipus_pregunta`) VALUES
(115, 1, 4, 5),
(114, 1, 5, 1),
(113, 1, 4, 1),
(112, 1, 3, 5),
(111, 1, 3, 4),
(110, 1, 3, 3),
(109, 1, 7, 2),
(108, 1, 23, 6),
(107, 1, 22, 6);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `preguntes`
--

INSERT INTO `preguntes` (`preguntes`, `tipus`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `preguntes_de_relacionar`
--

INSERT INTO `preguntes_de_relacionar` (`id`, `pregunta_id`, `descripcio`, `pregunta_1`, `resposta_1`, `pregunta_2`, `resposta_2`, `pregunta_3`, `resposta_3`, `pregunta_4`, `resposta_4`) VALUES
(4, 1, 'relaciona', 'p1', 'r1', 'p2', 'r2', 'p3', 'r3', 'p4', 'r4'),
(5, 1, 'Relaciona correctament', 'p1', 'r1', 'p2', 'r2', 'p3', 'r3', 'p4', 'r4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_hospot`
--

CREATE TABLE IF NOT EXISTS `preguntes_hospot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) NOT NULL,
  `resposta` varchar(200) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `preguntes_hospot`
--

INSERT INTO `preguntes_hospot` (`id`, `pregunta`, `resposta`, `pregunta_id`) VALUES
(3, 'prov', 'PROVA', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_omplir_blancs`
--

CREATE TABLE IF NOT EXISTS `preguntes_omplir_blancs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) NOT NULL,
  `resposta` varchar(200) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `preguntes_omplir_blancs`
--

INSERT INTO `preguntes_omplir_blancs` (`id`, `pregunta`, `resposta`, `pregunta_id`) VALUES
(3, 'omple el __ en blan', 'buit', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_opcio_multiple_resposta_unica`
--

CREATE TABLE IF NOT EXISTS `preguntes_opcio_multiple_resposta_unica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) NOT NULL,
  `resposta_correcta` varchar(200) NOT NULL,
  `resposta_2` varchar(200) NOT NULL,
  `resposta_3` varchar(200) NOT NULL,
  `resposta_4` varchar(200) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `preguntes_opcio_multiple_resposta_unica`
--

INSERT INTO `preguntes_opcio_multiple_resposta_unica` (`id`, `pregunta`, `resposta_correcta`, `resposta_2`, `resposta_3`, `resposta_4`, `pregunta_id`) VALUES
(3, 'prova', 'res_correcta', 'p2', 'p3', 'p4', 5),
(4, 'resposta correcta', 'correct', 'false', 'false', 'false', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_si_no`
--

CREATE TABLE IF NOT EXISTS `preguntes_si_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL,
  `descripcio` mediumtext COLLATE utf16_unicode_ci NOT NULL,
  `resposta` text COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `preguntes_si_no`
--

INSERT INTO `preguntes_si_no` (`id`, `pregunta_id`, `descripcio`, `resposta`) VALUES
(7, 2, 'digues si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntes_youtube`
--

CREATE TABLE IF NOT EXISTS `preguntes_youtube` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) NOT NULL,
  `resposta` varchar(200) NOT NULL,
  `inici_video` int(11) NOT NULL,
  `fi_video` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `preguntes_youtube`
--

INSERT INTO `preguntes_youtube` (`id`, `pregunta`, `resposta`, `inici_video`, `fi_video`, `pregunta_id`, `video`) VALUES
(22, 'Qui canta aquesta cançó?', 'Britney spears', 0, 0, 6, 'http://www.youtube.com/embed/_rxgp7TJhUE'),
(23, 'Qui canta aquesta cançó?', 'bob marley', 0, 0, 6, 'https://www.youtube.com/embed/_rxgp7TJhUE');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
