SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

USE to_do_list;

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `deadline` DATE,
  `status` ENUM('pending', 'in-progress', 'completed') DEFAULT 'pending',
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

COMMIT;

SELECT * FROM todos;



