-- MySQL Script generated by MySQL Workbench
-- Mon Oct 31 17:00:39 2016
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema brm2_f4c3db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema brm2_f4c3db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `brm2_f4c3db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `brm2_f4c3db` ;

-- -----------------------------------------------------
-- Table `brm2_f4c3db`.`abs_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brm2_f4c3db`.`abs_pedido` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` TEXT NULL COMMENT '',
  `tipoDocumento` VARCHAR(45) NULL COMMENT '',
  `documento` VARCHAR(15) NULL COMMENT '',
  `fechaNacimiento` DATE NULL COMMENT '',
  `direccion` TEXT NULL COMMENT '',
  `apartamento` VARCHAR(75) NULL COMMENT '',
  `ciudad` VARCHAR(75) NULL COMMENT '',
  `telefono` VARCHAR(15) NULL COMMENT '',
  `email` VARCHAR(150) NULL COMMENT '',
  `celular` VARCHAR(75) NULL COMMENT '',
  `cantidadCombo1` INT NULL COMMENT '',
  `cantidadCombo2` INT NULL COMMENT '',
  `cantidadCombo3` INT NULL COMMENT '',
  `cantidadCombo4` INT NULL COMMENT '',
  `totalValor` VARCHAR(75) NULL COMMENT '',
  `horusId` VARCHAR(75) NULL COMMENT '',
  `fecha` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
