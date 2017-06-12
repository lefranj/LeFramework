
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `LeFramework` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `LeFramework`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_hash` varchar(32) NOT NULL,
  `u_name` varchar(128) NOT NULL,
  `u_email` varchar(64) NOT NULL,
  `u_password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`u_id`, `u_hash`, `u_name`, `u_email`, `u_password`) VALUES
(1, '0', 'Admin', 'admin@system.com', '21232f297a57a5a743894a0e4a801fc3');

ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
