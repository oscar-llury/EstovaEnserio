CREATE TABLE `cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `fecha_created` VARCHAR(25) NULL,
  `fecha_updated` VARCHAR(25) NULL,
  `activo` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));

CREATE TABLE `categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `fecha_created` VARCHAR(25) NULL,
  `fecha_updated` VARCHAR(25) NULL,
  `activo` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));

CREATE TABLE `etiqueta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `fecha_created` VARCHAR(25) NULL,
  `fecha_updated` VARCHAR(25) NULL,
  `activo` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));

INSERT INTO `cliente` (`nombre`, `fecha_created`) VALUES ('Lio studio', '1666864020');
INSERT INTO `etiqueta` (`nombre`, `fecha_created`) VALUES ('Moda', '1666864020');
INSERT INTO `categoria` (`nombre`, `fecha_created`) VALUES ('Contenido digital', '1666864020');

CREATE TABLE `proyecto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `presentacion` VARCHAR(500) NULL,
  `sinopsis` VARCHAR(1000) NULL,
  `makingoff` VARCHAR(1000) NULL,
  `cliente` INT NULL,
  `categoria` INT NULL,
  `etiqueta` INT NULL,
  `fecha_created` VARCHAR(25) NULL,
  `fecha_updated` VARCHAR(25) NULL,
  `activo` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_CLIENTE`
    FOREIGN KEY (`cliente`)
    REFERENCES `estovaenserio`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CATEGORIA`
    FOREIGN KEY (`categoria`)
    REFERENCES `estovaenserio`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_ETIQUETA`
    FOREIGN KEY (`etiqueta`)
    REFERENCES `estovaenserio`.`etiqueta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO `proyecto` (`nombre`, `cliente`, `categoria`, `etiqueta`, `fecha_created`) VALUES ('Lio Studio', '1', '1', '1', '1666864020');
UPDATE `proyecto` SET `presentacion` = 'Creación de contenido digital más base de website para 710 studio desde sus inicios, con fotografía y vídeo para ecommerce y campañas de moda.'
 WHERE (`id` = '1');
UPDATE `proyecto` SET `sinopsis` = 'Marca de prendas polivalentes. Son una marca que apuesta por la sostenibilidad, y con tejidos Pyratex. Comprometidas con el medio ambiente, 710 Studio trabaja con materiales reciclados, además de ello suman un QR a sus prendas el cual se activa cuando la prenda comienza a ser perjudicial para el medioambiente. Así el consumidor puede devolver la prenda a cambio de descuentos y el tejido volverá a formar parte de la cadena de producción.'
 WHERE (`id` = '1');