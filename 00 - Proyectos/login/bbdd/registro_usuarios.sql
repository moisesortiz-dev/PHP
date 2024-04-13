-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2024 a las 11:01:52
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
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`) VALUES
(1, 'MSI Vigor GK30', 'Cuando lo llevas a la batalla, tener un teclado así de robusto es definitivamente un \"plus\". El GK30 está equipado con switches que dan la sensación de ser mecánicos, estos ofrecen hasta 12 millones de pulsaciones. Puedes personalizar GK30 con millones de colores y hasta 10 efectos de luz pre-definidos en 6 zonas.', 158, 100),
(2, 'MSI Clutch DM07 Ratón Gaming Óptico', 'El sensor óptico PixArt PAW 3519 de última generación del ratón MSI Clutch DM07, con un DPI de hasta 4200, permite un seguimiento rápido y preciso.\r\n\r\nY disfruta de años de juego con interruptores con una capacidad de más de 10 millones de clics y un conector USB chapado en oro.', 91, 100),
(3, 'MSI PRO MP243W 23.8', 'MSI Eye Care: tecnología antiparpadeo + menos luz azul + pantalla antideslumbrante. Las tecnologías MSI Anti-Flicker, Less Blue Light y el panel antideslumbrante ayudan a proteger sus ojos durante períodos prolongados de visualización de datos e investigación.', 300, 100),
(4, 'MSI MAG CH120 Silla Gaming Negro/Rojo', 'La silla para juegos MSI MAG CH120 está hecha de acero pintado que puede evitar la oxidación en el uso prolongado, para un gran soporte CH120 usó la espuma de alta densidad en el asiento, puede obtener una sensación de soporte cómoda cuando se sienta sobre ella.', 316, 100),
(5, 'MSI MAG FORGE 112R Cristal Templado', 'La serie MAG nació a través de rigurosas pruebas de calidad y se diseñó para ser un símbolo de robustez y durabilidad. Centrada en brindar la mejor experiencia de usuario, la serie MAG tiene un proceso de instalación simple junto con una interfaz de usuario amigable, lo que la convierte en la mejor opción para los jugadores principiantes.', 120, 100),
(6, 'ASUS WT425 Ratón Óptico Inalámbrico', 'El mouse inalámbrico óptico ASUS WT425 presenta tecnología de seguimiento avanzada con resoluciones de hasta 1600 DPI. Un interruptor dedicado le permite seleccionar fácilmente niveles de sensibilidad de 1000 y 1600 DPI; mientras que su diseño de clic silencioso del mouse significa que puede usarlo en entornos silenciosos.', 21, 0),
(7, 'ASUS ROG Azoth Teclado Mecánico', 'Teclado personalizado para juegos ROG Azoth con factor de forma de teclado 75, montaje de junta, espuma amortiguadora de tres capas y cubierta superior de metal, altamente personalizable con interruptores mecánicos ROG NX prelubricados e intercambiables en caliente, estabilizadores de teclado ROG, teclas PBT de doble disparo y kit de lubricación, tri -modo de conexión con tecnología SpeedNova de 2,4 GHz, pantalla OLED, perilla de control de tres vías, tres ángulos de inclinación y compatibilidad con Mac.', 313, 0),
(8, 'Valk Nyx Silla Gaming de Tela Lila Místico', 'La versión en tela transpirable de NYX, nuestro jugador franquicia, tiene todo lo que buscas en una silla gaming de tela pero a un precio que no te esperas. Una silla con un diseño atrevido que hereda el nombre de la diosa de la noche, tan poderosa que incluso Zeus temía enfrentarse a ella', 239, 0),
(9, 'Samsung Odyssey G6 ', 'Crea el entorno de juego de tus sueños con la pantalla Samsung Odyssey G6 . Con un panel VA curvado de 27\", este modelo ofrece unos efectos visuales óptimos y un alto rendimiento en los juegos (240 Hz, 1 ms, FreeSync Premium Pro). También te beneficiarás de un diseño ergonómico, un modo Smart TV y una completa conectividad adaptada a tus necesidades.', 550, 0),
(10, 'MSI MPG SEKIRA 100P', 'La caja PC MSI MPG SEKIRA 100P MSI MPG ofrece un estilo Gaming sobrio y asertivo con una ventana de vidrio templado. Compatible con las placas base ATX / Mini-ITX / Micro-ATX y E-ATX , incorpora 4 ventiladores de serie y tiene 2 ranuras vacías adicionales para una refrigeración óptima. También podrás instalar un sistema de refrigeración liquida con un radiador que puede medir 360 mm como máximo.', 171, 0);

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
(1, 'Moises', 'moisliyo@gmail.com', '$2y$10$nBQP7SyxZXr7S2Vqqbbjn.wjukb6Ne7D6x6Phsd5Y3CpV80GC5cr2', 'si'),
(2, 'miriam', 'miriam@gmail.com', '', 'no');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
