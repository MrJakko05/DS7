-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 11:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elegantsuites`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_hospedajes` ()   BEGIN 
	SELECT id, nombre, imagen, descripcion, categoria, rating, precio FROM hospedajes; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_hospedajes_filtro` (IN `param_campo` VARCHAR(255), IN `param_valor` VARCHAR(255))   BEGIN
	SET @s = CONCAT("SELECT id, nombre, imagen, descripcion, categoria, rating, precio
                 	FROM hospedajes WHERE ", param_campo ," LIKE CONCAT('%", param_valor ,"%')");
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hospedajes`
--

CREATE TABLE `hospedajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospedajes`
--

INSERT INTO `hospedajes` (`id`, `nombre`, `imagen`, `descripcion`, `categoria`, `rating`, `precio`) VALUES
(1, 'Hotel La Concordia', './assets/images/boutique/laConcordia.jpg', 'Los huéspedes tienen acceso a recepción abierta 24 horas, conserje y servicio de habitaciones durante su estancia en La Concordia Boutique Hotel. Además, La Concordia Boutique Hotel ofrece desayuno incluido, lo que hará tu viaje a Ciudad de Panamá incluso más gratificante. Y otra ventaja es que hay aparcamiento privado de pago cerca disponible para los huéspedes.', 'Boutique', 4.9, 199.00),
(2, 'The Westin Playa Bonita', './assets/images/playa/westing.jpg', 'Encontrará muchas oportunidades para relajarse y al mismo tiempo mantener su nivel de productividad. Los vacacionistas se deleitarán en las tres piscinas sin límite, los cinco restaurantes y el Sensory Spa. Los viajeros de negocios podrán aprovechar los 20 espacios para reuniones y nuestro Westin Club.', 'Playa', 4.5, 186.00),
(3, 'Bristol Panama', './assets/images/lujo/bristol.jpg', 'Ubicado en el corazón de la Ciudad de Panamá (Distrito Financiero) Bristol Panamá es una de las ubicaciones premier de la ciudad para estadías ejecutivas y vacaciones. Anualmente reconocida como \"El Mejor Hotel en Panamá\" y entre \"Los 10 mejores en América Latina\" por Condé Nast Traveler.', 'Lujo', 4.5, 177.00),
(4, 'Central Hotel - Casco Viejo', './assets/images/lujo/central.jpg', 'El Central Hotel Panamá es el hotel de preferencia para los viajeros más exigentes y sofisticados en la Ciudad de Panamá, donde la calidad de sus instalaciones y servicios, unido a una exquisita experiencia culinaria, harán que su paso por Panamá se convierta en un recuerdo especial para nunca olvidar.', 'Lujo', 4.5, 180.00),
(5, 'Hotel La Compañía', './assets/images/lujo/laCompañia.jpg', 'El Hotel La Compañia es un oasis urbano de lujo, donde la elegancia moderna se fusiona con la calidez acogedora. Sus habitaciones exquisitamente diseñadas ofrecen vistas panorámicas impresionantes, mientras que su servicio impecable y sus comodidades de clase mundial brindan una experiencia inolvidable para los huéspedes más exigentes.', 'Lujo', 4.6, 315.00),
(6, 'Waldorf Astoria Panama', './assets/images/lujo/waldorf.jpg', 'Como está cerca de la mayoría de los puntos de referencia de Ciudad de Panamá, como Iglesia del Carmen (0,7 km) y Habla Ya Spanish for Travelers - Day Classes (1,9 km), Waldorf Astoria Panama es un fantástico destino para turistas.', 'Lujo', 4.7, 210.00),
(7, 'Sortis Hotel, Spa & Casino', './assets/images/lujo/sortis.jpg', 'La privilegiada ubicación del Hotel Spa Sortis en el centro de la ciudad de Panamá, justo en el corazón de su distrito financiero, es el lugar perfecto para disfrutar de los atractivos turísticos que tiene la cuida como las compras, pero también atracciones locales, tales como el sitio arqueológico El Caño, el Parque Nacional El Gaital y montaña de la India Dormida, entre otros lugares ideales para visitar y practicar ecoturismo', 'Lujo', 4.6, 190.00),
(8, 'Las Clementinas Hotel', './assets/images/lujo/lasClementinas.jpg', 'Las Clementinas Hotel es un hotel de lujo con televisor de pantalla plana, aire acondicionado y cocinita en las habitaciones, y es fácil permanecer conectado durante la estancia, ya que ofrece wifi gratuito para los huéspedes.', 'Lujo', 4.1, 90.00),
(9, 'Dreams Playa Bonita Panama', './assets/images/playa/dreams.jpg', 'Restaurantes gourmet a la carta, bares y lounges están incluidas en la experiencia Unlimited-Luxury®. Cerca, nuestros huéspedes pueden visitar el Canal de Panamá, o el distrito colonial de la ciudad de Panamá, designada por la UNESCO como herencia mundial, o también puede visitar el centro comercial más grande en las Américas.', 'Playa', 4.2, 290.00),
(10, 'Hilton Panama', './assets/images/boutique/hilton.jpg', 'Hilton Panama ofrece recepción abierta 24 horas, servicio de habitaciones y terraza en la azotea. Además, como huésped de Hilton Panama, puedes disfrutar de piscina y desayuno disponibles allí mismo. Los huéspedes que lleguen en coche tienen acceso a aparcamiento privado de pago allí mismo.', 'Boutique', 4.8, 305.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospedajes`
--
ALTER TABLE `hospedajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospedajes`
--
ALTER TABLE `hospedajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
