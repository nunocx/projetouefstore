-- MySQL Script generated by MySQL Workbench
-- 10/31/14 16:33:32
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema u961758316_uefs
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u961758316_uefs` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `u961758316_uefs` ;

-- -----------------------------------------------------
-- Table `u961758316_uefs`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(255) NOT NULL,
  `Nome` VARCHAR(255) NOT NULL,
  `Senha` VARCHAR(255) NOT NULL,
  `Telefone1` VARCHAR(255) NOT NULL DEFAULT 0,
  `Data_Nascimento` DATE NOT NULL,
  `Sexo` CHAR NOT NULL,
  `Telefone2` VARCHAR(255) NULL DEFAULT 0,
  `Foto` VARCHAR(255) NULL,
  `Strikes` INT NULL DEFAULT 0,
  `Status` INT NULL DEFAULT 0,
  `VotosPositivos` INT NULL DEFAULT 0,
  `VotosNegativos` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`, `Email`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`categors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`categors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`servicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `Descricao` TEXT NOT NULL,
  `Preco` DOUBLE NOT NULL,
  `Data_Publicacao` DATE NOT NULL,
  `Data_Vencimento` DATE NOT NULL,
  `Foto_Video` VARCHAR(255) NULL,
  `Bloqueado` INT NULL DEFAULT 0,
  `Expirado` INT NULL DEFAULT 0,
  `ACombinar` INT NULL DEFAULT 0,
  `usuario_id` INT NOT NULL,
  `categor_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_servicos_usuarios1_idx` (`usuario_id` ASC),
  INDEX `fk_servicos_categors1_idx` (`categor_id` ASC),
  CONSTRAINT `fk_servicos_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u961758316_uefs`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_categors1`
    FOREIGN KEY (`categor_id`)
    REFERENCES `u961758316_uefs`.`categors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `Descricao` TEXT NOT NULL,
  `Preco` DOUBLE NOT NULL,
  `Data_Publicacao` DATE NOT NULL,
  `Data_Vencimento` DATE NOT NULL,
  `Quantidade` INT NOT NULL DEFAULT 0,
  `Foto_Video` VARCHAR(255) NULL,
  `Bloqueado` INT NULL DEFAULT 0,
  `Expirado` INT NULL DEFAULT 0,
  `CondicaoUso` TEXT NULL,
  `usuario_id` INT NOT NULL,
  `categor_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produtos_usuarios1_idx` (`usuario_id` ASC),
  INDEX `fk_produtos_categors1_idx` (`categor_id` ASC),
  CONSTRAINT `fk_produtos_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u961758316_uefs`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_categors1`
    FOREIGN KEY (`categor_id`)
    REFERENCES `u961758316_uefs`.`categors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`comentarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Data` DATE NOT NULL,
  `Texto` TEXT NOT NULL,
  `usuario_id` INT NOT NULL,
  `servico_id` INT NULL,
  `produto_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comentarios_usuarios1_idx` (`usuario_id` ASC),
  INDEX `fk_comentarios_servicos1_idx` (`servico_id` ASC),
  INDEX `fk_comentarios_produtos1_idx` (`produto_id` ASC),
  CONSTRAINT `fk_comentarios_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u961758316_uefs`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarios_servicos1`
    FOREIGN KEY (`servico_id`)
    REFERENCES `u961758316_uefs`.`servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarios_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `u961758316_uefs`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`administradors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`administradors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(255) NOT NULL,
  `Nome` VARCHAR(255) NOT NULL,
  `Senha` VARCHAR(255) NOT NULL,
  `Telefone1` VARCHAR(255) NOT NULL DEFAULT 0,
  `Telefone2` VARCHAR(255) NULL DEFAULT 0,
  `Data_Nascimento` DATE NOT NULL,
  `Foto` VARCHAR(255) NULL,
  `Status` INT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`mensagems`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`mensagems` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Assunto` VARCHAR(255) NOT NULL,
  `Texto` TEXT NOT NULL,
  `Data` DATE NOT NULL,
  `administrador_id` INT NULL,
  `usuariosR_Email` VARCHAR(255) NULL,
  `usuariosE_Email` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mensagems_administradors1_idx` (`administrador_id` ASC),
  INDEX `fk_mensagems_usuarios1_idx` (`usuariosR_Email` ASC),
  INDEX `fk_mensagems_usuarios2_idx` (`usuariosE_Email` ASC),
  CONSTRAINT `fk_mensagems_administradors1`
    FOREIGN KEY (`administrador_id`)
    REFERENCES `u961758316_uefs`.`administradors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagems_usuarios1`
    FOREIGN KEY (`usuariosR_Email`)
    REFERENCES `u961758316_uefs`.`usuarios` (`Email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagems_usuarios2`
    FOREIGN KEY (`usuariosE_Email`)
    REFERENCES `u961758316_uefs`.`usuarios` (`Email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`anuncioterceiros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`anuncioterceiros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `NomeEmpresa` VARCHAR(255) NOT NULL,
  `Imagem` VARCHAR(255) NULL,
  `ValorPago` DOUBLE NOT NULL,
  `DataInicio` DATE NOT NULL,
  `administrador_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_anuncioTerceiros_administradors1_idx` (`administrador_id` ASC),
  CONSTRAINT `fk_anuncioTerceiros_administradors1`
    FOREIGN KEY (`administrador_id`)
    REFERENCES `u961758316_uefs`.`administradors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `u961758316_uefs`.`reports`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u961758316_uefs`.`reports` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Texto` TEXT NOT NULL,
  `Data` DATE NOT NULL,
  `produto_id` INT NULL,
  `servico_id` INT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_reports_produtos1_idx` (`produto_id` ASC),
  INDEX `fk_reports_servicos1_idx` (`servico_id` ASC),
  INDEX `fk_reports_usuarios1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_reports_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `u961758316_uefs`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reports_servicos1`
    FOREIGN KEY (`servico_id`)
    REFERENCES `u961758316_uefs`.`servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reports_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u961758316_uefs`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
