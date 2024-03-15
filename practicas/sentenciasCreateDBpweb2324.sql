CREATE TABLE `Puestos` (
	`id_puesto` INT NOT NULL AUTO_INCREMENT,
	`username_puesto` VARCHAR(50) NOT NULL,
	`password_puesto` VARCHAR(50) NOT NULL,
	`name_puesto` VARCHAR(50) NOT NULL,
	`nif_puesto` INT NOT NULL,
	`phone_puesto` VARCHAR(50) NOT NULL,
	`numero_puesto` TINYINT NOT NULL,
	`type_puesto` ENUM('Charcutería y Carnicería', 'Frutería y Verdulería', 'Pescadería', 'Panadería', 'Floristería', 'Quesería y huevos', 'Café') NOT NULL,
	`description_puesto` VARCHAR(250) NOT NULL DEFAULT '',
	PRIMARY KEY (`id_puesto`),
	UNIQUE INDEX `id_puesto` (`id_puesto`),
	UNIQUE INDEX `username_puesto` (`username_puesto`),
	UNIQUE INDEX `nif_puesto` (`nif_puesto`)
)
COLLATE='latin1_swedish_ci'
;

CREATE TABLE `consumers` (
	`id_consumer` INT(11) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`name_consumer` VARCHAR(50) NOT NULL,
	`phone_consumer` VARCHAR(50) NOT NULL,
	`address_consumer` VARCHAR(50) NOT NULL,
	`bornDate_consumer` DATE NOT NULL,
	PRIMARY KEY (`id_consumer`),
	UNIQUE INDEX `id_consumer` (`id_consumer`),
	UNIQUE INDEX `username` (`username`)
)
COLLATE='latin1_swedish_ci'
;

CREATE TABLE `productores` (
	`id_productor` INT(11) NOT NULL,
	`username_productor` VARCHAR(50) NOT NULL,
	`password_productor` VARCHAR(50) NOT NULL,
	`name_productor` VARCHAR(50) NOT NULL,
	`nif_productor` VARCHAR(50) NOT NULL,
	`phone_productor` VARCHAR(50) NOT NULL,
	`address_productor` VARCHAR(50) NOT NULL,
	`description_productor` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_productor`),
	UNIQUE INDEX `id_productor` (`id_productor`),
	UNIQUE INDEX `nif_productor` (`nif_productor`)
)
;

CREATE TABLE `productos` (
	`id_producto` INT(11) NOT NULL,
	`name_producto` VARCHAR(50) NOT NULL,
	`type_producto` ENUM('Charcutería y Carnicería','Frutería y Verdulería','Pescadería','Panadería','Floristería','Quesería y huevos','Café') NOT NULL,
	`expiryDate_producto` DATE NULL DEFAULT NULL,
	`description_product` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_producto`),
	UNIQUE INDEX `id_producto` (`id_producto`)
)
;

CREATE TABLE `productosproductores` (
	`id_productoProductor` INT(11) NOT NULL,
	`id_productoFK` INT(11) NOT NULL,
	`id_productorFK` INT(11) NOT NULL,
	`quantity_producto` INT(11) NOT NULL,
	`unitPrice_producto` DOUBLE NOT NULL,
	PRIMARY KEY (`id_productoFK`, `id_productorFK`),
	UNIQUE INDEX `id_productoProductor` (`id_productoProductor`),
	INDEX `productos_productosProductores` (`id_productorFK`),
	CONSTRAINT `producto_productosProductores` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
	CONSTRAINT `productos_productosProductores` FOREIGN KEY (`id_productorFK`) REFERENCES `productores` (`id_productor`)
)
;

CREATE TABLE `pedidos` (
	`id_pedido` INT(11) NOT NULL AUTO_INCREMENT,
	`id_puestoFK` INT(11) NOT NULL,
	`id_productorFK` INT(11) NOT NULL,
	`id_productoFK` INT(11) NOT NULL,
	`date_pedido` TIMESTAMP NOT NULL,
	`quantity_producto` INT(11) NOT NULL,
	`unitPrice_producto` DOUBLE NOT NULL,
	PRIMARY KEY (`id_puestoFK`, `id_productorFK`, `id_productoFK`, `date_pedido`),
	UNIQUE INDEX `id_pedido` (`id_pedido`),
	INDEX `pedido_productor` (`id_productorFK`),
	INDEX `pedido_producto` (`id_productoFK`),
	CONSTRAINT `pedido_producto` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
	CONSTRAINT `pedido_productor` FOREIGN KEY (`id_productorFK`) REFERENCES `productores` (`id_productor`),
	CONSTRAINT `pedido_puesto` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
)
;

CREATE TABLE `productospuestos` (
	`id_productoPuestos` INT(11) NOT NULL AUTO_INCREMENT,
	`id_puestoFK` INT(11) NOT NULL,
	`id_productoFK` INT(11) NOT NULL,
	`quantity_producto` INT(11) NOT NULL,
	`unitPrice_producto` DOUBLE NOT NULL,
	PRIMARY KEY (`id_puestoFK`, `id_productoFK`),
	UNIQUE INDEX `id_productoPuestos` (`id_productoPuestos`),
	INDEX `id_productosFK` (`id_productoFK`),
	CONSTRAINT `productos_productosPuestos` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
	CONSTRAINT `puesto_productosPuestos` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
)
;

CREATE TABLE `entregas` (
	`id_entregas` INT(11) NOT NULL AUTO_INCREMENT,
	`id_consumidorFK` INT(11) NOT NULL,
	`id_puestoFK` INT(11) NOT NULL,
	`date_entrega` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id_entregas`),
	UNIQUE INDEX `id_entregas` (`id_entregas`),
	INDEX `consumidor_entrega` (`id_consumidorFK`),
	INDEX `puesto_entrega` (`id_puestoFK`),
	CONSTRAINT `consumidor_entrega` FOREIGN KEY (`id_consumidorFK`) REFERENCES `consumers` (`id_consumer`),
	CONSTRAINT `puesto_entrega` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
)
;

CREATE TABLE `productosEntregas` (
	`id_productosEntregas` INT(11) NOT NULL AUTO_INCREMENT,
	`id_entregaFK` INT(11) NOT NULL,
	`id_productoFK` INT(11) NOT NULL,
	`quantity_producto` INT(11) NOT NULL,
	`unitPrice_producto` DOUBLE NOT NULL,
	PRIMARY KEY (`id_entregaFK`, `id_productoFK`),
	UNIQUE INDEX `id_productosEntregas` (`id_productosEntregas`),
	INDEX `producto_productosEntregas` (`id_productoFK`),
	CONSTRAINT `entrega_productosEntregas` FOREIGN KEY (`id_entregaFK`) REFERENCES `entregas` (`id_entregas`),
	CONSTRAINT `producto_productosEntregas` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`)
)
;

CREATE TABLE `resena` (
	`id_resena` INT(11) NOT NULL AUTO_INCREMENT,
	`id_consumidorFK` INT(11) NOT NULL,
	`id_puestoFK` INT(11) NOT NULL,
	`date_resena` TIMESTAMP NOT NULL,
	`score_resena` INT(11) NULL DEFAULT NULL,
	`comment_resena` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id_resena`),
	UNIQUE INDEX `id_resena` (`id_resena`),
	INDEX `consumidor_resena` (`id_consumidorFK`),
	INDEX `puesto_resena` (`id_puestoFK`),
	CONSTRAINT `consumidor_resena` FOREIGN KEY (`id_consumidorFK`) REFERENCES `consumers` (`id_consumer`),
	CONSTRAINT `puesto_resena` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
)
;

CREATE TABLE `sensors` (
	`id_sensor` INT(11) NOT NULL AUTO_INCREMENT,
	`type_sensor` ENUM('temp','dB') NOT NULL,
	`puestoNumber_sensor` INT(11) NOT NULL,
	PRIMARY KEY (`id_sensor`),
	UNIQUE INDEX `id_sensor` (`id_sensor`)
)
;

CREATE TABLE `sensorsDates` (
	`id_sensorDate` INT(11) NOT NULL AUTO_INCREMENT,
	`id_sensorFK` INT(11) NOT NULL,
	`date_sensorDate` TIMESTAMP NOT NULL,
	`value_sensorDate` DOUBLE NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_sensorFK`, `date_sensorDate`),
	UNIQUE INDEX `id_sensorDate` (`id_sensorDate`),
	CONSTRAINT `sensor_sensorsDates` FOREIGN KEY (`id_sensorFK`) REFERENCES `sensors` (`id_sensor`)
)
;

