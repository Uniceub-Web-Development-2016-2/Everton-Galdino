-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dotaez
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dotaez
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dotaez` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dotaez` ;

-- -----------------------------------------------------
-- Table `dotaez`.`tb_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_user` (
  `idt_user` INT NOT NULL AUTO_INCREMENT,
  `nme_user` VARCHAR(50) NOT NULL,
  `lgn_user` VARCHAR(45) NOT NULL,
  `psw_user` VARCHAR(45) NOT NULL,
  `email_user` VARCHAR(80) NOT NULL,
  `nickdota_user` VARCHAR(50) NOT NULL,
  `status_user` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idt_user`),
  UNIQUE INDEX `idt_user_UNIQUE` (`idt_user` ASC),
  UNIQUE INDEX `lgn_user_UNIQUE` (`lgn_user` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`tb_build`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_build` (
  `idt_build` INT NOT NULL AUTO_INCREMENT,
  `nme_build` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idt_build`),
  UNIQUE INDEX `idt_build_UNIQUE` (`idt_build` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`tb_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_status` (
  `idt_status` INT NOT NULL AUTO_INCREMENT,
  `strenght` INT NOT NULL,
  `agility` INT NOT NULL,
  `intellect` INT NOT NULL,
  PRIMARY KEY (`idt_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`tb_hero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_hero` (
  `idt_hero` INT NOT NULL AUTO_INCREMENT,
  `nme_hero` VARCHAR(45) NOT NULL,
  `type_hero` VARCHAR(45) NOT NULL,
  `cod_status` INT NOT NULL,
  PRIMARY KEY (`idt_hero`, `cod_status`),
  UNIQUE INDEX `idt_hero_UNIQUE` (`idt_hero` ASC),
  INDEX `fk_tb_hero_tb_status1_idx` (`cod_status` ASC),
  CONSTRAINT `fk_tb_hero_tb_status1`
    FOREIGN KEY (`cod_status`)
    REFERENCES `dotaez`.`tb_status` (`idt_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`ta_herobuild`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`ta_herobuild` (
  `cod_hero` INT NOT NULL,
  `cod_build` INT NOT NULL,
  PRIMARY KEY (`cod_hero`, `cod_build`),
  INDEX `fk_tb_hero_has_tb_build_tb_build1_idx` (`cod_build` ASC),
  INDEX `fk_tb_hero_has_tb_build_tb_hero1_idx` (`cod_hero` ASC),
  CONSTRAINT `fk_tb_hero_has_tb_build_tb_hero1`
    FOREIGN KEY (`cod_hero`)
    REFERENCES `dotaez`.`tb_hero` (`idt_hero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_hero_has_tb_build_tb_build1`
    FOREIGN KEY (`cod_build`)
    REFERENCES `dotaez`.`tb_build` (`idt_build`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`tb_skill`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_skill` (
  `idt_skill` INT NOT NULL AUTO_INCREMENT,
  `nme_skill` VARCHAR(45) NOT NULL,
  `effect_skill` LONGTEXT NOT NULL,
  `dano_skill` INT NULL,
  `type_dano_skill` VARCHAR(45) NULL,
  `cod_hero` INT NOT NULL,
  PRIMARY KEY (`idt_skill`, `cod_hero`),
  INDEX `fk_tb_skill_tb_hero1_idx` (`cod_hero` ASC),
  CONSTRAINT `fk_tb_skill_tb_hero1`
    FOREIGN KEY (`cod_hero`)
    REFERENCES `dotaez`.`tb_hero` (`idt_hero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotaez`.`tb_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dotaez`.`tb_item` (
  `idt_item` INT NOT NULL AUTO_INCREMENT,
  `nme_item` VARCHAR(45) NOT NULL,
  `effect_item` LONGTEXT NOT NULL,
  `dano_item` INT NULL,
  `type_item` VARCHAR(45) NULL,
  `tb_build_idt_build` INT NOT NULL,
  PRIMARY KEY (`idt_item`, `tb_build_idt_build`),
  INDEX `fk_tb_item_tb_build1_idx` (`tb_build_idt_build` ASC),
  CONSTRAINT `fk_tb_item_tb_build1`
    FOREIGN KEY (`tb_build_idt_build`)
    REFERENCES `dotaez`.`tb_build` (`idt_build`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_user`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_user` (`idt_user`, `nme_user`, `lgn_user`, `psw_user`, `email_user`, `nickdota_user`, `status_user`) VALUES (1, 'Administrador', 'admin', 'MD5(admin)', 'everton-cs@hotmail.com.br', 'Abraga', true);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_build`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_build` (`idt_build`, `nme_build`) VALUES (1, 'Explosion Seer');

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_status`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_status` (`idt_status`, `strenght`, `agility`, `intellect`) VALUES (1, 22, 12, 29);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_hero`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_hero` (`idt_hero`, `nme_hero`, `type_hero`, `cod_status`) VALUES (1, 'Dark Seer', 'Intellect', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`ta_herobuild`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`ta_herobuild` (`cod_hero`, `cod_build`) VALUES (1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_skill`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_skill` (`idt_skill`, `nme_skill`, `effect_skill`, `dano_skill`, `type_dano_skill`, `cod_hero`) VALUES (1, 'Wall of Replica', 'Cria ilusões de herois inimigos ao passar pela parede', 200%, 'Magico', 1);
INSERT INTO `dotaez`.`tb_skill` (`idt_skill`, `nme_skill`, `effect_skill`, `dano_skill`, `type_dano_skill`, `cod_hero`) VALUES (2, 'Surge', 'Concede velocidade maxima por alguns segundos', NULL, NULL, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dotaez`.`tb_item`
-- -----------------------------------------------------
START TRANSACTION;
USE `dotaez`;
INSERT INTO `dotaez`.`tb_item` (`idt_item`, `nme_item`, `effect_item`, `dano_item`, `type_item`, `tb_build_idt_build`) VALUES (1, 'Shivas', 'Afeta todas unidades inimigas dentro da area', 200, 'Magico', 1);
INSERT INTO `dotaez`.`tb_item` (`idt_item`, `nme_item`, `effect_item`, `dano_item`, `type_item`, `tb_build_idt_build`) VALUES (2, 'Power treads', 'Concede velocidade de movimento e status', NULL, NULL, 1);

COMMIT;

