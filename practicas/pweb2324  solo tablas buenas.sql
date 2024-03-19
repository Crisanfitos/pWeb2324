-- pweb2324.consumers definition

CREATE TABLE `consumers` (
  `id_consumer` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_consumer` varchar(50) NOT NULL,
  `phone_consumer` varchar(50) NOT NULL,
  `address_consumer` varchar(50) NOT NULL,
  `bornDate_consumer` date NOT NULL,
  PRIMARY KEY (`id_consumer`),
  UNIQUE KEY `id_consumer` (`id_consumer`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


-- pweb2324.productores definition

CREATE TABLE `productores` (
  `id_productor` int(11) NOT NULL AUTO_INCREMENT,
  `username_productor` varchar(50) NOT NULL,
  `password_productor` varchar(50) NOT NULL,
  `name_productor` varchar(50) NOT NULL,
  `nif_productor` varchar(50) NOT NULL,
  `phone_productor` varchar(50) NOT NULL,
  `address_productor` varchar(50) NOT NULL,
  `description_productor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_productor`),
  UNIQUE KEY `id_productor` (`id_productor`),
  UNIQUE KEY `nif_productor` (`nif_productor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


-- pweb2324.productos definition

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `name_producto` varchar(50) NOT NULL,
  `type_producto` enum('Charcutería y Carnicería','Frutería y Verdulería','Pescadería','Panadería','Floristería','Quesería y huevos','Café') NOT NULL,
  `expiryDate_producto` date DEFAULT NULL,
  `description_product` varchar(50) NOT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;


-- pweb2324.puestos definition

CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL AUTO_INCREMENT,
  `username_puesto` varchar(50) NOT NULL,
  `password_puesto` varchar(50) NOT NULL,
  `name_puesto` varchar(50) NOT NULL,
  `nif_puesto` varchar(50) NOT NULL DEFAULT '',
  `phone_puesto` varchar(50) NOT NULL,
  `numero_puesto` tinyint(4) NOT NULL,
  `type_puesto` enum('Charcutería y Carnicería','Frutería y Verdulería','Pescadería','Panadería','Floristería','Quesería y huevos','Café') NOT NULL,
  `description_puesto` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_puesto`),
  UNIQUE KEY `id_puesto` (`id_puesto`),
  UNIQUE KEY `username_puesto` (`username_puesto`),
  UNIQUE KEY `nif_puesto` (`nif_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


-- pweb2324.sensors definition

CREATE TABLE `sensors` (
  `id_sensor` int(11) NOT NULL AUTO_INCREMENT,
  `type_sensor` enum('temp','dB') NOT NULL,
  `puestoNumber_sensor` int(11) NOT NULL,
  PRIMARY KEY (`id_sensor`),
  UNIQUE KEY `id_sensor` (`id_sensor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- pweb2324.entregas definition

CREATE TABLE `entregas` (
  `id_entregas` int(11) NOT NULL AUTO_INCREMENT,
  `id_consumidorFK` int(11) NOT NULL,
  `id_puestoFK` int(11) NOT NULL,
  `date_entrega` timestamp NOT NULL,
  PRIMARY KEY (`id_entregas`),
  UNIQUE KEY `id_entregas` (`id_entregas`),
  KEY `consumidor_entrega` (`id_consumidorFK`),
  KEY `puesto_entrega` (`id_puestoFK`),
  CONSTRAINT `consumidor_entrega` FOREIGN KEY (`id_consumidorFK`) REFERENCES `consumers` (`id_consumer`),
  CONSTRAINT `puesto_entrega` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- pweb2324.pedidos definition

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_puestoFK` int(11) NOT NULL,
  `id_productorFK` int(11) NOT NULL,
  `id_productoFK` int(11) NOT NULL,
  `date_pedido` timestamp NOT NULL,
  `quantity_producto` int(11) NOT NULL,
  `unitPrice_producto` double NOT NULL,
  PRIMARY KEY (`id_puestoFK`,`id_productorFK`,`id_productoFK`,`date_pedido`),
  UNIQUE KEY `id_pedido` (`id_pedido`),
  KEY `id_productorFK` (`id_productorFK`),
  KEY `producto_Pedidos` (`id_productoFK`),
  CONSTRAINT `producto_Pedidos` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
  CONSTRAINT `productor_Pedidos` FOREIGN KEY (`id_productorFK`) REFERENCES `productores` (`id_productor`),
  CONSTRAINT `puesto_Pedidos` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


-- pweb2324.productosentregas definition

CREATE TABLE `productosentregas` (
  `id_productosEntregas` int(11) NOT NULL AUTO_INCREMENT,
  `id_entregaFK` int(11) NOT NULL,
  `id_productoFK` int(11) NOT NULL,
  `quantity_producto` int(11) NOT NULL,
  `unitPrice_producto` double NOT NULL,
  PRIMARY KEY (`id_entregaFK`,`id_productoFK`),
  UNIQUE KEY `id_productosEntregas` (`id_productosEntregas`),
  KEY `producto_productosEntregas` (`id_productoFK`),
  CONSTRAINT `entrega_productosEntregas` FOREIGN KEY (`id_entregaFK`) REFERENCES `entregas` (`id_entregas`),
  CONSTRAINT `producto_productosEntregas` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- pweb2324.productosproductores definition

CREATE TABLE `productosproductores` (
  `id_productoProductor` int(11) NOT NULL AUTO_INCREMENT,
  `id_productoFK` int(11) NOT NULL,
  `id_productorFK` int(11) NOT NULL,
  `quantity_producto` int(11) NOT NULL,
  `unitPrice_producto` double NOT NULL,
  PRIMARY KEY (`id_productoFK`,`id_productorFK`),
  UNIQUE KEY `id_productoProductor` (`id_productoProductor`),
  KEY `productor_productosProductores` (`id_productorFK`),
  CONSTRAINT `producto_productosProductores` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
  CONSTRAINT `productor_productosProductores` FOREIGN KEY (`id_productorFK`) REFERENCES `productores` (`id_productor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


-- pweb2324.productospuestos definition

CREATE TABLE `productospuestos` (
  `id_productoPuestos` int(11) NOT NULL AUTO_INCREMENT,
  `id_puestoFK` int(11) NOT NULL,
  `id_productoFK` int(11) NOT NULL,
  `quantity_producto` int(11) NOT NULL,
  `unitPrice_producto` double NOT NULL,
  PRIMARY KEY (`id_puestoFK`,`id_productoFK`),
  UNIQUE KEY `id_productoPuestos` (`id_productoPuestos`),
  KEY `id_productosFK` (`id_productoFK`),
  CONSTRAINT `producto_productosPuestos` FOREIGN KEY (`id_productoFK`) REFERENCES `productos` (`id_producto`),
  CONSTRAINT `puesto_productosPuestos` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- pweb2324.resena definition

CREATE TABLE `resena` (
  `id_resena` int(11) NOT NULL AUTO_INCREMENT,
  `id_consumidorFK` int(11) NOT NULL,
  `id_puestoFK` int(11) NOT NULL,
  `date_resena` timestamp NOT NULL,
  `score_resena` int(11) DEFAULT NULL,
  `comment_resena` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_resena`),
  UNIQUE KEY `id_resena` (`id_resena`),
  KEY `consumidor_resena` (`id_consumidorFK`),
  KEY `puesto_resena` (`id_puestoFK`),
  CONSTRAINT `consumidor_resena` FOREIGN KEY (`id_consumidorFK`) REFERENCES `consumers` (`id_consumer`),
  CONSTRAINT `puesto_resena` FOREIGN KEY (`id_puestoFK`) REFERENCES `puestos` (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- pweb2324.sensorsdates definition

CREATE TABLE `sensorsdates` (
  `id_sensorDate` int(11) NOT NULL AUTO_INCREMENT,
  `id_sensorFK` int(11) NOT NULL,
  `date_sensorDate` timestamp NOT NULL,
  `value_sensorDate` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_sensorFK`,`date_sensorDate`),
  UNIQUE KEY `id_sensorDate` (`id_sensorDate`),
  CONSTRAINT `sensor_sensorsDates` FOREIGN KEY (`id_sensorFK`) REFERENCES `sensors` (`id_sensor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;