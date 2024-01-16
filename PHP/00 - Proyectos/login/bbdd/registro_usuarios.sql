-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2024 a las 10:16:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'pc', 'pc montado', 500.00),
(2, 'MSI Vigor GK50 Low Profile TKL Teclado Gaming Negro', 'Tome la leyenda del teclado galardonado: Vigor GK50 Low Profile en un factor de forma sin teclas y obtenga el rendimiento para llevarlo a una experiencia de juego de siguiente nivel con los interruptores Kailh de bajo perfil y un diseño clásico elegante pero resistente.', 89.00),
(3, 'MSI Clutch DM07 Ratón Gaming Óptico 4200 DPI Negro', 'El sensor óptico PixArt PAW 3519 de última generación del ratón MSI Clutch DM07, con un DPI de hasta 4200, permite un seguimiento rápido y preciso.\r\n\r\nY disfruta de años de juego con interruptores con una capacidad de más de 10 millones de clics y un conector USB chapado en oro.', 43.00),
(4, 'MSI PRO MP243W 23.8\" LED IPS FullHD 75Hz', 'MSI Eye Care: tecnología antiparpadeo + menos luz azul + pantalla antideslumbrante. Las tecnologías MSI Anti-Flicker, Less Blue Light y el panel antideslumbrante ayudan a proteger sus ojos durante períodos prolongados de visualización de datos e investigación.', 142.00),
(5, 'MSI MAG CH120 Silla Gaming Negro/Rojo', 'La silla para juegos MSI MAG CH120 está hecha de acero pintado que puede evitar la oxidación en el uso prolongado, para un gran soporte CH120 usó la espuma de alta densidad en el asiento, puede obtener una sensación de soporte cómoda cuando se sienta sobre ella.', 316.00),
(6, 'MSI MPG Gungnir 110M Cristal Templado USB 3.2 RGB Negro', 'Destaque con la serie MPG GUNGNIR 110, el epítome de los altos estándares en un chasis de torre media. Diseñado con versatilidad, construido con materiales de alta calidad y nacido dar el mejor rendimiento. Abrace la excelencia.\r\n\r\nEl MPG GUNGNIR 110M está diseñado con un aspecto memorable de alto rendimiento para impresionar a primera vista. Un elegante panel frontal de vidrio ofrece una vista deslumbrante de la iluminación interior que resalta la calidad de las piezas en el resto del sistema.\r\n\r\n', 100.00),
(7, 'Corsair K100 RGB Teclado Mecánico Gaming Switch Óptico OPX Negro', 'El elegante diseño del K100 RGB cuenta con una robusta estructura de aluminio y retroiluminación dinámica por cada tecla per-clave retroiluminación RGB rematado por LightEdge RGB de 44 zonas y tres lados.', 259.00),
(8, 'Corsair Sabre RGB Pro Champion Series Ratón Gaming Óptico 18000 DPI', 'El ratón para juegos Corsair Sabre RGB Pro ha sido diseñado para y probado por profesionales de eSports, cuenta con un peso ultraligero de 74 g y está equipado con un cable Paracord flexible que reduce el arrastre, por los que sus movimientos serán siempre ágiles y sin obstáculos. Los botones CORSAIR QUICKSTRIKE aseguran que cada clic sea inmediato y reactivo, mientras que la tecnología de hiperprocesamiento CORSAIR AXON ofrece entradas al PC hasta ocho veces más rápidas con un sondeo de 8.000 Hz.', 170.00),
(9, 'Corsair T1 Race 2018 Silla Gaming Negra', 'La silla Corsair T1 Race ofrece comodidad y diseño inspirados en las carreras, combinados con materialesde la mejor calidad para una experiencia de juegos profesional.', 448.00),
(10, 'Asus Rog Strix XG27AQ 27\" LED IPS WQHD 170Hz G-Sync Compatible', 'Imágenes y contraste muy detallados. Cuenta con un panel WQHD (2560 x 1440) que ofrece hasta un 77% más de espacio en el escritorio en pantalla que las pantallas estándar Full HD (1920 x 1080). Además, elimina una asombrosa relación de contraste de 1,000: 1.', 647.00),
(11, 'Corsair iCUE 4000D RGB AIRFLOW Cristal Templado USB 3.2 Negra', 'CORSAIR 4000D RGB AIRFLOW es un chasis ATX semitorre con diseño de alto flujo de aire y tres ventiladores CORSAIR AF120 RGB ELITE incluidos que proporcionan una refrigeración excepcional para sus componentes.', 131.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `administrador` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`, `administrador`) VALUES
(1, 'moises', 'moisliyo@gmail.com', '$2y$10$7fut.LCJ6d.5JQnqJFzRv.GL1RjWY90CFcSTspqvSWv.q5a/ef90W', 'si'),
(2, 'miriam', 'miriam@gmail.com', '$2y$10$7JQ5GSPCA2PQ2OT2I.L7YuTqYpKCrgEgOua8RCygZcHB837XJGPbG', 'no'),
(8, 'adrian', 'adrian@gmail.com', '', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
