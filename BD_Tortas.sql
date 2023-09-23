-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tortas
CREATE DATABASE IF NOT EXISTS `tortas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tortas`;

-- Volcando estructura para tabla tortas.corte
CREATE TABLE IF NOT EXISTS `corte` (
  `T_tortas` int(11) DEFAULT NULL,
  `T_refre` int(11) DEFAULT NULL,
  `Gastos` float DEFAULT NULL,
  `Beneficios` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tortas.corte: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tortas.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `NumPedido` int(11) NOT NULL AUTO_INCREMENT,
  `NumTortas` int(11) DEFAULT NULL,
  `CantRefre` int(11) DEFAULT NULL,
  `DescPedido` varchar(50) DEFAULT NULL,
  `Monto` float DEFAULT NULL,
  PRIMARY KEY (`NumPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tortas.pedidos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tortas.transferencia
CREATE TABLE IF NOT EXISTS `transferencia` (
  `NumPedido` int(11) DEFAULT NULL,
  `Monto` float DEFAULT NULL,
  `NumTortas` int(11) DEFAULT NULL,
  KEY `NumPedido` (`NumPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tortas.transferencia: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
