

CREATE TABLE IF NOT EXISTS `caption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoId` int(11) NOT NULL,
  `startpoint` int(11) NOT NULL,
  `endpoint` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `caption` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `caption`
--

INSERT INTO `caption` (`id`, `videoId`, `startpoint`, `endpoint`, `accuracy`, `language`, `caption`) VALUES
(1, 1, 20, 25, 85, 'english', 'but we cannot understood it if we do not first run the language and grasp'),
(2, 1, 99, 101, 85, 'english', 'pair pants and the pair pants before the\r\nsale even as'),
(3, 1, 101, 105, 85, 'english', 'is about 20 bucks and that is about how\r\nmuch I spend on my pants'),
(4, 1, 101, 122, 126, 'english', 'times the twenty dollars so you would\r\nsay your discount'),
(5, 1, 155, 156, 80, 'english', 'non discount non discount price'),
(6, 1, 209, 211, 80, 'english', 'and I can substituted in for axe and\r\nthen I can essentially multiply point'),
(7, 1, 400, 403, 0, 'english', '[no recognition done]'),
(8, 1, 406, 408, 0, 'english', '[no recognition done]'),
(9, 1, 410, 413, 0, 'english', '[no recognition done]');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `translations`
--

CREATE TABLE IF NOT EXISTS `translations` (
  `translationId` int(11) NOT NULL AUTO_INCREMENT,
  `captionId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `translation` mediumtext NOT NULL,
  PRIMARY KEY (`translationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `translations`
--

INSERT INTO `translations` (`translationId`, `captionId`, `userId`, `translation`) VALUES
(1, 1, 2, 'text'),
(2, 1, 1, 'but we cannot understood it if we do not first run the language and grasp'),
(3, 1, 3, 'but we cannot understood it if we do not first run the language and grasp'),
(4, 1, 1, 'but we cannot understood it if we do not first lear the language and grasp'),
(5, 1, 1, 'but we cannot understood it if we do not first learn the language and grasp'),
(6, 1, 1, 'but we cannot understood it if we do not first learn the language and grasp');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`userId`, `name`, `rating`) VALUES
(1, 'Mehdi Siami', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `video`
--

INSERT INTO `video` (`id`, `url`, `subject`) VALUES
(1, 'http://www.youtube.com/embed/kpCJyQ2usJ4', 'math');