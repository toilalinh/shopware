# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: issiloo
# Generation Time: 2016-05-19 10:26:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table faq
# ------------------------------------------------------------

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en_question` varchar(500) DEFAULT NULL,
  `vi_question` varchar(500) DEFAULT NULL,
  `en_answer` longtext,
  `vi_answer` longtext,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;

INSERT INTO `faq` (`id`, `en_question`, `vi_question`, `en_answer`, `vi_answer`, `created_date`, `updated_date`)
VALUES
	(1,'Morbi efficitur metus?','Morbi efficitur metus?','Answer 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:12:47','2016-05-11 16:12:47'),
	(2,'Pellentesque faucibus enim vitaearcu aliquam imperdiet?','Pellentesque faucibus enim vitae arcu aliquam imperdiet?','Answer 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:14:18','2016-05-11 16:14:18'),
	(3,'Pellentesque faucibus enim vitaearcu aliquam imperdiet 3?','Pellentesque faucibus enim vitaearcu aliquam imperdiet 3?','Answer 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:35:43','2016-05-11 16:35:43'),
	(4,'Pellentesque faucibus enim vitaearcu aliquam imperdiet 4?','Pellentesque faucibus enim vitaearcu aliquam imperdiet 4?','Answer 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:36:29','2016-05-11 16:36:29'),
	(5,'Pellentesque faucibus enim vitaearcu aliquam imperdiet 5?','Pellentesque faucibus enim vitaearcu aliquam imperdiet 5?','Answer 5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:39:05','2016-05-11 16:39:05'),
	(6,'Pellentesque faucibus enim vitaearcu aliquam imperdiet 6?','Pellentesque faucibus enim vitaearcu aliquam imperdiet 6?','Answer 6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:40:02','2016-05-11 16:40:02'),
	(7,'Pellentesque faucibus enim vitaearcu aliquam imperdiet 7?','Pellentesque faucibus enim vitaearcu aliquam imperdiet 7?','Answer 7 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','Answer 7 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.\n                                    ','2016-05-11 16:40:40','2016-05-11 16:40:40');

/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
