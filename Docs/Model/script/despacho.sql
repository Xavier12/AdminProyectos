-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema despacho
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema despacho
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `despacho` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `despacho` ;

-- -----------------------------------------------------
-- Table `despacho`.`Materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Materia` (
  `idAsunto` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(35) NOT NULL,
  PRIMARY KEY (`idAsunto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NOT NULL,
  `ApP` VARCHAR(15) NULL,
  `ApM` VARCHAR(15) NULL,
  `Sexo` CHAR(1) NULL,
  `Domicilio` VARCHAR(35) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Caso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Caso` (
  `idCaso` INT NOT NULL AUTO_INCREMENT,
  `estado` CHAR(1) NOT NULL,
  `costo` FLOAT NOT NULL,
  `AsuntoidAsunto` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idCaso`),
  INDEX `fk_Caso_Asunto1_idx` (`AsuntoidAsunto` ASC),
  INDEX `fk_Caso_Cliente1_idx` (`Cliente_idCliente` ASC),
  CONSTRAINT `fk_Caso_Asunto1`
    FOREIGN KEY (`AsuntoidAsunto`)
    REFERENCES `despacho`.`Materia` (`idAsunto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Caso_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `despacho`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Abogado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Abogado` (
  `idAbogado` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NOT NULL,
  `ApP` VARCHAR(15) NOT NULL,
  `ApM` VARCHAR(15) NOT NULL,
  `Sexo` CHAR(1) NOT NULL,
  `Domicilio` VARCHAR(35) NOT NULL,
  `Tipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`idAbogado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Trabaja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Trabaja` (
  `AbogadoidAbogado` INT NOT NULL,
  `CasoidCaso` INT NOT NULL,
  PRIMARY KEY (`CasoidCaso`, `AbogadoidAbogado`),
  INDEX `fk_Abogado_has_Caso_Caso1_idx` (`CasoidCaso` ASC),
  INDEX `fk_Abogado_has_Caso_Abogado_idx` (`AbogadoidAbogado` ASC),
  CONSTRAINT `fk_Abogado_has_Caso_Abogado`
    FOREIGN KEY (`AbogadoidAbogado`)
    REFERENCES `despacho`.`Abogado` (`idAbogado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abogado_has_Caso_Caso1`
    FOREIGN KEY (`CasoidCaso`)
    REFERENCES `despacho`.`Caso` (`idCaso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Secretaria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Secretaria` (
  `idSecretaria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NOT NULL,
  `ApP` VARCHAR(15) NOT NULL,
  `ApM` VARCHAR(15) NOT NULL,
  `Sexo` CHAR(1) NOT NULL,
  `Domicilio` VARCHAR(35) NOT NULL,
  PRIMARY KEY (`idSecretaria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despacho`.`Agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despacho`.`Agenda` (
  `idAgenda` INT NOT NULL AUTO_INCREMENT,
  `Lugar` VARCHAR(35) NOT NULL,
  `Actividad` VARCHAR(35) NOT NULL,
  `Hr` VARCHAR(15) NOT NULL,
  `SecretariaidSecretaria` INT NOT NULL,
  `AbogadoidAbogado` INT NOT NULL,
  PRIMARY KEY (`idAgenda`),
  INDEX `fk_Agenda_Secretaria1_idx` (`SecretariaidSecretaria` ASC),
  INDEX `fk_Agenda_Abogado1_idx` (`AbogadoidAbogado` ASC),
  CONSTRAINT `fk_Agenda_Secretaria1`
    FOREIGN KEY (`SecretariaidSecretaria`)
    REFERENCES `despacho`.`Secretaria` (`idSecretaria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Abogado1`
    FOREIGN KEY (`AbogadoidAbogado`)
    REFERENCES `despacho`.`Abogado` (`idAbogado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
