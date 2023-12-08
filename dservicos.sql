-- MySQL Script generated by MySQL Workbench
-- Tue Dec  5 20:02:14 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dservicos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dservicos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dservicos` DEFAULT CHARACTER SET utf8 ;
USE `dservicos` ;

-- -----------------------------------------------------
-- Table `dservicos`.`Telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Telefone` (
  `idTelefone` INT NOT NULL AUTO_INCREMENT,
  `ddd` INT(3) NOT NULL,
  `numero` INT(9) NOT NULL,
  PRIMARY KEY (`idTelefone`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Endereco` (
  `idEndereco` INT NOT NULL AUTO_INCREMENT,
  `cidade` VARCHAR(45) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `cep` VARCHAR(8) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`idEndereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cpf` INT(11) NOT NULL,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `senha` INT(8) NOT NULL,
  `idTelefone` INT NOT NULL,
  `idEndereco` INT NOT NULL,
  PRIMARY KEY (`idUsuario`, `idTelefone`, `idEndereco`),
  INDEX `fk_Usuario_Telefone1_idx` (`idTelefone` ASC),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  INDEX `fk_Usuario_Endereco1_idx` (`idEndereco` ASC),
  CONSTRAINT `fk_Usuario_Telefone1`
    FOREIGN KEY (`idTelefone`)
    REFERENCES `dservicos`.`Telefone` (`idTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Endereco1`
    FOREIGN KEY (`idEndereco`)
    REFERENCES `dservicos`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Especialidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Especialidade` (
  `idEspecialidade` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEspecialidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Servico` (
  `idServico` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` TINYTEXT NOT NULL,
  `preco` FLOAT NOT NULL,
  `idCategoria` INT NOT NULL,
  PRIMARY KEY (`idServico`, `idCategoria`),
  INDEX `fk_Servico_Categoria1_idx` (`idCategoria` ASC),
  CONSTRAINT `fk_Servico_Categoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `dservicos`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Prestador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Prestador` (
  `idPrestador` INT NOT NULL AUTO_INCREMENT,
  `descricao` TINYTEXT NOT NULL,
  `idUsuario` INT NOT NULL,
  `idTelefone` INT NOT NULL,
  `idEndereco` INT NOT NULL,
  `idEspecialidade` INT NOT NULL,
  `idServico` INT NOT NULL,
  `idCategoria` INT NOT NULL,
  PRIMARY KEY (`idPrestador`, `idUsuario`, `idTelefone`, `idEndereco`, `idEspecialidade`, `idServico`, `idCategoria`),
  INDEX `fk_Prestador_Usuario1_idx` (`idUsuario` ASC, `idTelefone` ASC, `idEndereco` ASC),
  INDEX `fk_Prestador_Especialidade1_idx` (`idEspecialidade` ASC),
  INDEX `fk_Prestador_Servico1_idx` (`idServico` ASC, `idCategoria` ASC),
  CONSTRAINT `fk_Prestador_Usuario1`
    FOREIGN KEY (`idUsuario` , `idTelefone` , `idEndereco`)
    REFERENCES `dservicos`.`Usuario` (`idUsuario` , `idTelefone` , `idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prestador_Especialidade1`
    FOREIGN KEY (`idEspecialidade`)
    REFERENCES `dservicos`.`Especialidade` (`idEspecialidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prestador_Servico1`
    FOREIGN KEY (`idServico` , `idCategoria`)
    REFERENCES `dservicos`.`Servico` (`idServico` , `idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Consumidor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Consumidor` (
  `idConsumidor` INT NOT NULL AUTO_INCREMENT,
  `descricao` TINYTEXT NOT NULL,
  `avaliacao` INT(10) NOT NULL,
  `comentarios` TINYTEXT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Usuario_idTelefone` INT NOT NULL,
  `Usuario_idEndereco` INT NOT NULL,
  PRIMARY KEY (`idConsumidor`, `Usuario_idUsuario`, `Usuario_idTelefone`, `Usuario_idEndereco`),
  INDEX `fk_Consumidor_Usuario1_idx` (`Usuario_idUsuario` ASC, `Usuario_idTelefone` ASC, `Usuario_idEndereco` ASC),
  CONSTRAINT `fk_Consumidor_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario` , `Usuario_idTelefone` , `Usuario_idEndereco`)
    REFERENCES `dservicos`.`Usuario` (`idUsuario` , `idTelefone` , `idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dservicos`.`Agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dservicos`.`Agendamento` (
  `idPrestador` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `idTelefone` INT NOT NULL,
  `idEndereco` INT NOT NULL,
  `idEspecialidade` INT NOT NULL,
  `idServico` INT NOT NULL,
  `idCategoria` INT NOT NULL,
  `idConsumidor` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `idTelefone` INT NOT NULL,
  `idEndereco` INT NOT NULL,
  `status` TINYINT NOT NULL,
  `data` DATETIME NOT NULL,
  `descricao` TINYTEXT NOT NULL,
  PRIMARY KEY (`idPrestador`, `idUsuario`, `idTelefone`, `idEndereco`, `idEspecialidade`, `idServico`, `idCategoria`, `idConsumidor`, `idUsuario`, `idTelefone`, `idEndereco`),
  INDEX `fk_Prestador_has_Consumidor_Consumidor1_idx` (`idConsumidor` ASC, `idUsuario` ASC, `idTelefone` ASC, `idEndereco` ASC),
  INDEX `fk_Prestador_has_Consumidor_Prestador1_idx` (`idPrestador` ASC, `idUsuario` ASC, `idTelefone` ASC, `idEndereco` ASC, `idEspecialidade` ASC, `idServico` ASC, `idCategoria` ASC),
  CONSTRAINT `fk_Prestador_has_Consumidor_Prestador1`
    FOREIGN KEY (`idPrestador` , `idUsuario` , `idTelefone` , `idEndereco` , `idEspecialidade` , `idServico` , `idCategoria`)
    REFERENCES `dservicos`.`Prestador` (`idPrestador` , `idUsuario` , `idTelefone` , `idEndereco` , `idEspecialidade` , `idServico` , `idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prestador_has_Consumidor_Consumidor1`
    FOREIGN KEY (`idConsumidor` , `idUsuario` , `idTelefone` , `idEndereco`)
    REFERENCES `dservicos`.`Consumidor` (`idConsumidor` , `Usuario_idUsuario` , `Usuario_idTelefone` , `Usuario_idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;