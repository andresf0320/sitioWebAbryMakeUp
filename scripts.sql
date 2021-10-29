

CREATE SCHEMA IF NOT EXISTS `db_usuarios` DEFAULT CHARACTER SET utf8 ;
USE `db_usuarios` ;

CREATE TABLE  `db_usuarios`.`persona` (
  `pers_id` INT(11) NOT NULL AUTO_INCREMENT,
  `pers_nombre` VARCHAR(40) NOT NULL,
  `pers_apellido1` VARCHAR(40) NOT NULL,
  `pers_apellido2` VARCHAR(40) NOT NULL,
  `pers_identificacion` INT(20) NOT NULL,
  `pers_celular` INT(11) NOT NULL,
  `pers_ciudad` VARCHAR(40) NOT NULL,
  `pers_direccion` VARCHAR(60) NOT NULL,
  `pers_barrio` VARCHAR(40) NOT NULL,
  `pers_correo` VARCHAR(40) NOT NULL,
  `pers_usuario` VARCHAR(40) NOT NULL,
  `pers_contraseña` VARCHAR(40) NOT NULL,
   PRIMARY KEY (`pers_id`)) ENGINE = InnoDB;
  
