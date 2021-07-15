CREATE DATABASE bolsa_trabajo;
USE bolsa_trabajo;
CREATE TABLE IF NOT EXISTS t_admin (
    id_admin INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_categoria INT NOT NULL,
    nombre VARCHAR(125),
    materno VARCHAR(125),
    paterno VARCHAR(125),
    correo VARCHAR(125),
    contrasenia VARCHAR(125)
)  ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS t_reclutador (
    id_reclutador INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(125),
    materno VARCHAR(125),
    paterno VARCHAR(125),
    numero_telefonico TEXT,
    correo TEXT,
    contrasenia TEXT
)  ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS t_trabajos (
    id_trabajo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_reclutador INT,
    nombre_trabajo VARCHAR(125),
    salario VARCHAR(125),
    municipio_alcaldia VARCHAR(125),
    direccion VARCHAR(125),
    horario_entrada VARCHAR(125),
    horario_salida VARCHAR(125),
    dias_semana VARCHAR(125),
    requisitos VARCHAR(125),
    tiempo_contratacion VARCHAR(125),
    fecha_insersion DATETIME
)  ENGINE=INNODB;
#Creación de la tabla categoria.
CREATE TABLE IF NOT EXISTS t_categoria (
    id_categoria INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_categoria VARCHAR(125),
    descripcion TEXT
)  ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS t_municipios_alcaldias (
    id_municipios_alcaldias INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(125)
)  ENGINE=INNODB;

INSERT INTO t_municipios_alcaldias (nombre)VALUES ('acambay de ruíz castañeda'), ('acolman'), ('aculco'), ('almoloya de alquisiras'), ('almoloya de juarez'), ('almoloya del rio'),('amanalco'),('amatepec'),
			('amecameca'), ('apaxco'), ('atenco'), ('atizapan'), ('atizapan de zaragoza'), ('atlacomulco'),('atlautla'),('axapusco'), ('ayapango'),('calimaya'),('chalpulhuac'),('coacalco de berriozabal'),('coatepec harinas'),('cocotitlan'),
            ('coyotepec'), ('cuautitlan'), ('chalco'), ('chapa de mota'), ('chapultepec'), ('chiaultla'),('chicoloapan'),('chiconcuac'), ('chimalhuacan'),('donato guerra'),('ecatepec de morelos'),('ecatzingo'),('huehuetoca'),('huehuetoca'),
            ('hueypoxtla'), ('huixquilucan'), ('isidro fabela'), ('ixtapaluca'), ('ixtapan de la sal'), ('ixtapan del oro'),('ixtalhuaca'),('xalatalco'), ('jaltenco'),('jilotepec'),('jilotzingo'),('jiquiplico'),('jocotitlan'),('joquincingo'),
            ('juchitepec'), ('lerma'), ('malinalco'), ('melchor ocampo'), ('metepec'), ('Mexicaltzongo'),('morelos'),('axapusco'), ('la paz'),('ozumba'),('papalotlan'),('temamatla'),('santo tomas'),('ocuilan');
INSERT INTO t_municipios_alcaldias (nombre)VALUES ('albaro obregon'), ('azcapotzalco'), ('benito juarez'), ('coyoacan'), ('Cuajimalpa'),('cuautemoc'),('gustavo a. madero'), ('izatacalco'), ('iztapalapa'),('magdalena contreras'),('miguel hidalgo'), ('milpa alta'), ('tlahuac'), ('talpan'), ('venustiano carranza'), ('xochimilco');
#creaciones de llaver foraneas
ALTER TABLE t_admin ADD FOREIGN KEY(id_categoria) REFERENCES t_categoria(id_categoria) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE t_trabajos ADD FOREIGN KEY (id_reclutador)REFERENCES t_reclutador(id_reclutador) ON DELETE CASCADE ON UPDATE CASCADE;
