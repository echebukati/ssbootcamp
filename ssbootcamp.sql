--
-- Database: `ssbootcamp`
--
CREATE DATABASE IF NOT EXISTS `ssbootcamp` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ssbootcamp`;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'emmanuel', 'emmanuelpassword'),
(2, 'james', 'jamespassword'),
(3, 'stacy', 'stacypassword');

--
-- Indexes for table `users`
--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `users`
--

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

CREATE USER IF NOT EXISTS 'bootcamp'@'%' IDENTIFIED BY 'wC!viIkBek@6';
GRANT SELECT ON `ssbootcamp`.* TO 'bootcamp'@'%';
