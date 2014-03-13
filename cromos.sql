-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-03-2014 a las 17:00:00
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.3.10-1ubuntu3.10

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
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  `descripcio` int(11) NOT NULL,
  `portada` int(11) NOT NULL,
  `aprovat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf16_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `password` int(250) NOT NULL,
  `fname` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `gender` varchar(200) COLLATE utf16_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `acc_status` int(11) NOT NULL,
  `profile` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `fname`, `lname`, `gender`, `birthday`, `acc_status`, `profile`) VALUES
(12, NULL, 'dher1992@gmail.com', 0, 'Diego', 'Hernando', 'f', '0000-00-00', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_oauth`
--

CREATE TABLE IF NOT EXISTS `user_oauth` (
  `user_id` int(11) NOT NULL,
  `provider` varchar(45) NOT NULL,
  `identifier` varchar(64) NOT NULL,
  `profile_cache` text,
  `session_data` text,
  PRIMARY KEY (`provider`,`identifier`),
  UNIQUE KEY `unic_user_id_name` (`user_id`,`provider`),
  KEY `oauth_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_oauth`
--

INSERT INTO `user_oauth` (`user_id`, `provider`, `identifier`, `profile_cache`, `session_data`) VALUES
(11, 'Facebook', '100001351655579', 'a:22:{s:10:"identifier";s:15:"100001351655579";s:10:"webSiteURL";s:0:"";s:10:"profileURL";s:55:"https://www.facebook.com/profile.php?id=100001351655579";s:8:"photoURL";s:71:"https://graph.facebook.com/100001351655579/picture?width=150&height=150";s:11:"displayName";s:14:"Alvaro Arbeola";s:11:"description";s:0:"";s:9:"firstName";s:6:"Alvaro";s:8:"lastName";s:7:"Arbeola";s:6:"gender";s:6:"female";s:8:"language";N;s:3:"age";N;s:8:"birthDay";i:3;s:10:"birthMonth";i:7;s:9:"birthYear";i:1992;s:5:"email";s:17:"lackhw@hotmail.es";s:13:"emailVerified";s:17:"lackhw@hotmail.es";s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";s:0:"";s:4:"city";N;s:3:"zip";N;}', 'a:2:{s:35:"hauth_session.facebook.is_logged_in";s:4:"i:1;";s:41:"hauth_session.facebook.token.access_token";s:197:"s:188:"CAAHgk5JfyOsBAMj7tgZCap3IlVlPxSb6dmvaIwHppdrPIlV4LXOpdUZCHwUr3qOuOxCC1kAtXK5NoG7SxZC87QGSPYnnLv1L530MybPZBEU6IBjwq2duC7TNiRvnm9HZCcWUVcZCLxU7fVfZBs8vQeZCuzYeo66RRohtExZAoiLG8akeZAH3iZAbCax";";}'),
(10, 'Facebook', '635014820', 'a:22:{s:10:"identifier";s:9:"635014820";s:10:"webSiteURL";s:0:"";s:10:"profileURL";s:33:"https://www.facebook.com/dher1992";s:8:"photoURL";s:65:"https://graph.facebook.com/635014820/picture?width=150&height=150";s:11:"displayName";s:14:"Diego Hernando";s:11:"description";s:0:"";s:9:"firstName";s:5:"Diego";s:8:"lastName";s:8:"Hernando";s:6:"gender";s:6:"female";s:8:"language";N;s:3:"age";N;s:8:"birthDay";i:3;s:10:"birthMonth";i:7;s:9:"birthYear";i:1992;s:5:"email";s:15:"diegoho@msn.com";s:13:"emailVerified";s:15:"diegoho@msn.com";s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";s:16:"Barcelona, Spain";s:4:"city";N;s:3:"zip";N;}', 'a:2:{s:35:"hauth_session.facebook.is_logged_in";s:4:"i:1;";s:41:"hauth_session.facebook.token.access_token";s:199:"s:190:"CAAHgk5JfyOsBAMEHZApJKNdPQ1yZCi4E6I3L3ZC1IBeD1AJGRFZBa7mt86Lc0q2lqv07iZCPbp9Y7WiWITZBTZCIXCZCq6chTMFoZCC9HNa5bJHLRUSw4taHt6UOtB6ZAqSDMEuxGZA4N1hY8Piqicu8QdyRKcs09sn4yMnffZCwC8QqAQzZCwBBlUPke";";}'),
(12, 'Google', '116824170148648335385', 'a:22:{s:10:"identifier";s:21:"116824170148648335385";s:10:"webSiteURL";N;s:10:"profileURL";s:49:"https://profiles.google.com/116824170148648335385";s:8:"photoURL";s:92:"https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg";s:11:"displayName";s:14:"Diego Hernando";s:11:"description";N;s:9:"firstName";s:5:"Diego";s:8:"lastName";s:8:"Hernando";s:6:"gender";s:4:"male";s:8:"language";s:2:"es";s:3:"age";N;s:8:"birthDay";N;s:10:"birthMonth";N;s:9:"birthYear";N;s:5:"email";s:18:"dher1992@gmail.com";s:13:"emailVerified";s:18:"dher1992@gmail.com";s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";N;s:4:"city";N;s:3:"zip";N;}', 'a:7:{s:41:"hauth_session.twitter.token.request_token";s:49:"s:41:"TwfZaWL3OgSL9WvxVYq9dfAL2azK7ujGZRAAsAjf0";";s:48:"hauth_session.twitter.token.request_token_secret";s:48:"s:40:"eGEfNR1khYj2o9VOcEtmV3TCAn3ED8aflpMLYf7Q";";s:39:"hauth_session.google.token.access_token";s:86:"s:78:"ya29.1.AADtN_X3zRsXzBqyhiTqnZqqyyETMZcxVkPKkSaSMhDnGxGiHuS5ZB3O8uyg9TsmYd66u5I";";s:40:"hauth_session.google.token.refresh_token";s:7:"s:0:"";";s:37:"hauth_session.google.token.expires_in";s:7:"i:3598;";s:37:"hauth_session.google.token.expires_at";s:13:"i:1394553281;";s:33:"hauth_session.google.is_logged_in";s:4:"i:1;";}'),
(0, 'Twitter', '103671285', 'a:22:{s:10:"identifier";i:103671285;s:10:"webSiteURL";N;s:10:"profileURL";s:26:"http://twitter.com/Lackkk_";s:8:"photoURL";s:90:"http://pbs.twimg.com/profile_images/3437822388/dc9d7a5e22cf67ee54ec00c7f2aaeaec_normal.png";s:11:"displayName";s:7:"Lackkk_";s:11:"description";s:33:"Toxic player on League of Legends";s:9:"firstName";s:6:"Lackkk";s:8:"lastName";N;s:6:"gender";N;s:8:"language";N;s:3:"age";N;s:8:"birthDay";N;s:10:"birthMonth";N;s:9:"birthYear";N;s:5:"email";N;s:13:"emailVerified";N;s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";s:9:"Manrussia";s:4:"city";N;s:3:"zip";N;}', 'a:5:{s:35:"hauth_session.facebook.is_logged_in";s:4:"i:1;";s:41:"hauth_session.facebook.token.access_token";s:208:"s:199:"CAAHgk5JfyOsBAKBZCQguBuCkwFYzZABmpWN0RzhgdH3LfvtoAT0DRpCZCVZAZBFYZCwnOH9vm8V89UjXlFemFQVB20ne8YcK31yKLSPIvDotZCaXJAnAeseRbjHh8b10KIQSEKuGrb8AmZAsfHgZBr6ABy1101hwIkd5NqGMIpbaaqDN9qQ27qXAtjdbCY5UzAPYZD";";s:40:"hauth_session.twitter.token.access_token";s:58:"s:50:"103671285-ZSaoJcEKlNH0SxkARGN5lWm56VsSOHoOMu8ykpL4";";s:47:"hauth_session.twitter.token.access_token_secret";s:53:"s:45:"80zNgvvl3bWuU1fNXut62UHSFdAsSqraryZh1KbMVEarl";";s:34:"hauth_session.twitter.is_logged_in";s:4:"i:1;";}');

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
