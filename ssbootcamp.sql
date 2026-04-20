CREATE DATABASE IF NOT EXISTS `ssbootcamp` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ssbootcamp`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'emmanuel', 'emmanuelpassword'),
(2, 'james', 'jamespassword'),
(3, 'stacy', 'stacypassword');

CREATE USER IF NOT EXISTS 'bootcamp'@'%' IDENTIFIED BY 'wC!viIkBek@6';
GRANT SELECT ON `ssbootcamp`.* TO 'bootcamp'@'%';
FLUSH PRIVILEGES;
