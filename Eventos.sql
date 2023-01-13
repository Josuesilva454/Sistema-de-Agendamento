SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  `saida` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


