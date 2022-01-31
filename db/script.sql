create database if not exists escuela;

use escuela;

CREATE TABLE `escuela`.`estudiante` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATETIME NOT NULL,
  PRIMARY KEY (`codigo`));