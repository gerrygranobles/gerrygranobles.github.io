-- MySQL Script generated by MySQL Workbench edited by Geraldine Granobles
-- Tue Dec  4 20:07:01 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


USE `geraldinegranobles` ;

-- -----------------------------------------------------
-- Table `geraldinegranobles`.`incident`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geraldinegranobles`.`incident` ;

CREATE TABLE IF NOT EXISTS `geraldinegranobles`.`incident` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `typeID` INT NOT NULL,
  `date` DATE NOT NULL,
  `state` VARCHAR(7) NOT NULL,
  `ipAddressID` INT NOT NULL,
  `victimNumber` INT NOT NULL,
  `commentID` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geraldinegranobles`.`victim`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geraldinegranobles`.`victim` ;

CREATE TABLE IF NOT EXISTS `geraldinegranobles`.`victim` (
  `victimNumber` INT NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(15) NOT NULL,
  `lastName` VARCHAR(15) NOT NULL,
  `jobTitle` VARCHAR(45) NOT NULL,
  `emailAddress` VARCHAR(45) NOT NULL,
  `id` INT NOT NULL,
  PRIMARY KEY (`victimNumber`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geraldinegranobles`.`comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geraldinegranobles`.`comment` ;

CREATE TABLE IF NOT EXISTS `geraldinegranobles`.`comment` (
  `commentID` INT NOT NULL AUTO_INCREMENT,
  `handlerName` VARCHAR(45) NOT NULL,
  `comment` LONGTEXT NOT NULL,
  `id` INT NOT NULL,
  PRIMARY KEY (`commentID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geraldinegranobles`.`ipAddress`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geraldinegranobles`.`ipAddress` ;

CREATE TABLE IF NOT EXISTS `geraldinegranobles`.`ipAddress` (
  `ipAddressID` INT NOT NULL AUTO_INCREMENT,
  `ipAddress` VARCHAR(39) NOT NULL,
  `id` INT NOT NULL,
  PRIMARY KEY (`ipAddressID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geraldinegranobles`.`type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geraldinegranobles`.`type` ;

CREATE TABLE IF NOT EXISTS `geraldinegranobles`.`type` (
  `typeID` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`typeID`))
ENGINE = InnoDB;


ALTER TABLE `victim` AUTO_INCREMENT = 1;
ALTER TABLE `incident` AUTO_INCREMENT = 1;
ALTER TABLE `type` AUTO_INCREMENT = 1;
ALTER TABLE `comment` AUTO_INCREMENT = 1;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
