-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bolsa_trabajo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bolsa_trabajo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bolsa_trabajo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `bolsa_trabajo` ;

-- -----------------------------------------------------
-- Table `bolsa_trabajo`.`t_admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bolsa_trabajo`.`t_admin` (
  `id_admin` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(125) NULL DEFAULT NULL,
  `materno` VARCHAR(125) NULL DEFAULT NULL,
  `paterno` VARCHAR(125) NULL DEFAULT NULL,
  `correo` VARCHAR(125) NULL DEFAULT NULL,
  `contrasenia` VARCHAR(125) NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `bolsa_trabajo`.`t_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bolsa_trabajo`.`t_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `id_admin` INT NOT NULL,
  `nombre_categoria` VARCHAR(125) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`),
  INDEX `id_admin` (`id_admin` ASC) VISIBLE,
  CONSTRAINT `t_categoria_ibfk_1`
    FOREIGN KEY (`id_admin`)
    REFERENCES `bolsa_trabajo`.`t_admin` (`id_admin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `bolsa_trabajo`.`t_municipios_alcaldias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bolsa_trabajo`.`t_municipios_alcaldias` (
  `id_municipios_alcaldias` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(125) NULL DEFAULT NULL,
  PRIMARY KEY (`id_municipios_alcaldias`))
ENGINE = InnoDB
AUTO_INCREMENT = 81
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `bolsa_trabajo`.`t_reclutador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bolsa_trabajo`.`t_reclutador` (
  `id_reclutador` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(125) NULL DEFAULT NULL,
  `materno` VARCHAR(125) NULL DEFAULT NULL,
  `paterno` VARCHAR(125) NULL DEFAULT NULL,
  `numero_telefonico` TEXT NULL DEFAULT NULL,
  `correo` TEXT NULL DEFAULT NULL,
  `contrasenia` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_reclutador`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `bolsa_trabajo`.`t_trabajos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bolsa_trabajo`.`t_trabajos` (
  `id_trabajo` INT NOT NULL AUTO_INCREMENT,
  `id_reclutador` INT NULL DEFAULT NULL,
  `nombre_trabajo` VARCHAR(255) NULL DEFAULT NULL,
  `salario` VARCHAR(225) NULL DEFAULT NULL,
  `municipio_alcaldia` VARCHAR(225) NULL DEFAULT NULL,
  `direccion` VARCHAR(225) NULL DEFAULT NULL,
  `horario_entrada` VARCHAR(225) NULL DEFAULT NULL,
  `horario_salida` VARCHAR(225) NULL DEFAULT NULL,
  `dias_semana` VARCHAR(225) NULL DEFAULT NULL,
  `requisitos` TEXT NULL DEFAULT NULL,
  `tiempo_contratacion` VARCHAR(225) NULL DEFAULT NULL,
  `fecha_insersion` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_trabajo`),
  INDEX `id_reclutador` (`id_reclutador` ASC) VISIBLE,
  CONSTRAINT `t_trabajos_ibfk_1`
    FOREIGN KEY (`id_reclutador`)
    REFERENCES `bolsa_trabajo`.`t_reclutador` (`id_reclutador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 28
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
#llenamos la tabla t_municipios_alcaldias
INSERT INTO t_municipios_alcaldias (nombre)VALUES ('acambay de ruíz castañeda'), ('acolman'), ('aculco'), ('almoloya de alquisiras'), ('almoloya de juarez'), ('almoloya del rio'),('amanalco'),('amatepec'),
			('amecameca'), ('apaxco'), ('atenco'), ('atizapan'), ('atizapan de zaragoza'), ('atlacomulco'),('atlautla'),('axapusco'), ('ayapango'),('calimaya'),('chalpulhuac'),('coacalco de berriozabal'),('coatepec harinas'),('cocotitlan'),
            ('coyotepec'), ('cuautitlan'), ('chalco'), ('chapa de mota'), ('chapultepec'), ('chiaultla'),('chicoloapan'),('chiconcuac'), ('chimalhuacan'),('donato guerra'),('ecatepec de morelos'),('ecatzingo'),('huehuetoca'),('huehuetoca'),
            ('hueypoxtla'), ('huixquilucan'), ('isidro fabela'), ('ixtapaluca'), ('ixtapan de la sal'), ('ixtapan del oro'),('ixtalhuaca'),('xalatalco'), ('jaltenco'),('jilotepec'),('jilotzingo'),('jiquiplico'),('jocotitlan'),('joquincingo'),
            ('juchitepec'), ('lerma'), ('malinalco'), ('melchor ocampo'), ('metepec'), ('Mexicaltzongo'),('morelos'),('axapusco'), ('la paz'),('ozumba'),('papalotlan'),('temamatla'),('santo tomas'),('ocuilan');
INSERT INTO t_municipios_alcaldias (nombre)VALUES ('albaro obregon'), ('azcapotzalco'), ('benito juarez'), ('coyoacan'), ('Cuajimalpa'),('cuautemoc'),('gustavo a. madero'), ('izatacalco'), ('iztapalapa'),('magdalena contreras'),('miguel hidalgo'), ('milpa alta'), ('tlahuac'), ('talpan'), ('venustiano carranza'), ('xochimilco');