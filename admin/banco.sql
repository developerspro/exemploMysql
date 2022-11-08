 CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `usuario` varchar(100) NOT NULL unique,
  `senha` varchar(100) NOT NULL);