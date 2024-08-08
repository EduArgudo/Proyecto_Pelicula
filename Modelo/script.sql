
CREATE DATABASE pelicula;
USE pelicula;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE `movie` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `idtipo` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `idtipo` (`idtipo`),
  CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `tipos` (`idtipo`)
);

CREATE TABLE `tipos` (
  `idtipo` int NOT NULL AUTO_INCREMENT,
  `descriptipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
);

INSERT INTO `tipos` (`idtipo`, `descriptipo`) VALUES
(1, 'Terror'),
(2, 'Accion'),
(3, 'Ciencia Ficcion'),
(4, 'Romance'),
(5, 'Comedia');