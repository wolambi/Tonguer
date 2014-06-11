SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_crea` int(11) NOT NULL,
  `date` date NOT NULL,
  `delet` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=58 ;

INSERT INTO `project` VALUES(51, 'proj1', 'proj1', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(52, 'proj2', 'proj2', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(53, 'projTest', 'test', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(54, 'Proj test2', 'aze', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(55, 'Proj test3', 'aze', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(56, 'azerty', 'azerty.be', 41, '2014-06-09', 0);
INSERT INTO `project` VALUES(57, 'paspas', 'mon site', 44, '2014-06-11', 0);

CREATE TABLE `project_col` (
  `id_invitation` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_project` tinyint(4) NOT NULL,
  `id_trad` tinyint(4) NOT NULL,
  `id_dev` tinyint(4) NOT NULL,
  `name_dev` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_trad` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_project` varchar(255) COLLATE utf8_bin NOT NULL,
  `deadline` varchar(255) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `accept` tinyint(4) NOT NULL,
  `langue1` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix1` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_invitation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

INSERT INTO `project_col` VALUES(13, 51, 40, 41, 'dev', 'trad', 'proj1', 'vite', 0x636f75636f752070657469742074657374, 1, 'English', '0.14', '2014-06-09');
INSERT INTO `project_col` VALUES(14, 51, 40, 41, 'eyurtyu', 'rtyu', 'rtyurtyu', 'rtyurtyu', 0x7274797572747975, 1, 'Erty', 'erty', '0000-00-00');
INSERT INTO `project_col` VALUES(15, 55, 40, 41, 'dev', 'trad', 'Proj test3', 'tres vite', 0x636f75636f75205e5e, 1, 'English', '0.11', '2014-06-09');
INSERT INTO `project_col` VALUES(16, 56, 40, 41, 'dev', 'trad', 'azerty', 'demain soir', 0x6a5c2761692070617320646520636f6d6d656e7461697265, 1, 'German', '0.15', '2014-06-09');
INSERT INTO `project_col` VALUES(17, 57, 45, 44, 'wolambi', 'Frefre', 'paspas', 'TRES vite', 0x506574697420636f6d6d656e7461697265, 1, 'Russian', '0.14', '2014-06-11');

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` char(255) COLLATE utf8_bin NOT NULL,
  `password` char(255) COLLATE utf8_bin NOT NULL,
  `email` char(255) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(1000) COLLATE utf8_bin NOT NULL,
  `company` char(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `town` varchar(255) COLLATE utf8_bin NOT NULL,
  `zip` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(1000) COLLATE utf8_bin NOT NULL,
  `addressnumber` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `presentation` text COLLATE utf8_bin NOT NULL,
  `maternal_language` varchar(255) COLLATE utf8_bin NOT NULL,
  `delete` tinyint(4) NOT NULL DEFAULT '0',
  `creatdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

INSERT INTO `user` VALUES(40, '1', 'trad', 'aze', 'trad@trad.be', 'trad', 'trad', 'trad', 'trad', 'trad', 'trad', 'trad', 'trad', 0x617a65, '3', 0, '2014-06-07 12:57:41');
INSERT INTO `user` VALUES(41, '2', 'dev', 'aze', 'dev@dev.be', 'dev', 'dev', 'dev', 'dev', 'dev', 'dev', 'dev', 'dev', 0x617a6572, '2', 0, '2014-06-07 12:58:31');
INSERT INTO `user` VALUES(42, '1', 'Aze', 'aze', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00 00:00:00');
INSERT INTO `user` VALUES(43, '1', 'Heaj', 'heaj', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00 00:00:00');
INSERT INTO `user` VALUES(44, '2', 'Wolambi', '123', 'blabla@blabl.be', 'Antonin', 'Lol', 'be', 'Fauvillers', '6637', '27', '063', '6846856184', 0x436f75636f75, '3', 0, '2014-06-11 12:01:21');
INSERT INTO `user` VALUES(45, '1', 'Frefre', '123', 'frefre@gmail.fr', 'qdfgdsgsdg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdg', 'sdfgsdfg', 'sdfgsdfgsdf', 'sdfgsdg', 'fdgsdfgs', 0x436f75636f75206a65206d652070726573656e7465, '2', 0, '2014-06-11 12:08:57');
