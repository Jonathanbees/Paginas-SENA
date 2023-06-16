-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2022 a las 23:02:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cell2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_cliente` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(40) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_cliente`, `Nombre`, `Telefono`, `Direccion`) VALUES
(12, 'Jaime                                             ', '3041430611                              ', 'Cra 7 Nº 12-49'),
(13, 'Sonia                                             ', '3232980708                              ', 'Rionegro'),
(14, 'Marina', '3127269276                              ', 'Rioverde'),
(15, 'Lorena                                            ', '3146279757                              ', 'subestación'),
(16, 'Marcela                                 ', '3226950334                              ', 'Rioverde'),
(17, 'Yeider                                         ', '3207186670                              ', 'soledad'),
(18, 'elkin                                             ', '3117329966                              ', 'Galeria Nº 96'),
(19, 'Isabel                                         ', '3207180021                              ', 'Cra 10 Nº 11-12'),
(20, 'Luzdelia', '3217140092', 'Rioverde'),
(21, 'Santiago                                          ', '3136728867                              ', 'Roblalito A'),
(22, 'Andres', '3106259535', 'Chaverras'),
(23, 'Bibiana', '3128487496', 'Chaverras'),
(24, 'Nelson', '3206901027', 'Galeria'),
(25, 'Jorge                                             ', '3122579738                              ', 'Cra 9 N° 5-13'),
(26, 'Hector                                            ', '3147010519                              ', 'Galeria'),
(27, 'Wilson', '3193492701', 'Calle 1 N° 1-12'),
(28, 'Wilson', '3193492701', 'Calle 1 N° 1-12'),
(29, 'Anlly', '3233474058', 'Bogota'),
(30, 'Monica', '3135467501', 'Bogota'),
(31, 'Edueimer', '3145950662', 'Tapete'),
(32, 'Olivia', '3117662974', 'Medellin'),
(33, 'Camilo', '3003491196', 'Medellin'),
(34, 'Cristian', '3157896045', 'Sonson'),
(35, 'Jhon', '3156618860', 'Sonson'),
(36, 'Edwin                                             ', '3107261080                              ', 'Tapete'),
(37, 'Julian', '3158068549', 'Sonson'),
(38, 'Diego', '3505273085', 'Tasajo'),
(39, 'Jhon Jairo', '3152415169', 'Buenos aires'),
(40, 'Adiela', '3173458180', 'Rioverde'),
(41, 'Kelly', '3207072092', 'Guamal'),
(42, 'Jhonatan', '314684541', 'Sonson'),
(43, 'Camilo L', '3136940726', 'Sonson'),
(44, 'Cristian V', '3217350376', 'Chaverras'),
(45, 'Yissela', '3015168485', 'La Ceja'),
(46, 'Alba', '3206467880', 'Subestacion'),
(47, 'Jhonatan', '3043910313', 'Medellin'),
(48, 'Alexander', '3127182373', 'Rioverde'),
(49, 'Fernando', '313423680', 'Rioverde'),
(50, 'Manuel', '46722974826', 'Buenos aires'),
(51, 'Dahiana', '3103572881', 'Argelia'),
(52, 'Yeison', '3146944057', 'Rosa Maria'),
(53, 'Mabel', '3128509582', 'La onda'),
(54, 'Dilan', '3148004923', 'Tapete'),
(55, 'Daniel M', '3106038972', 'Sonson'),
(56, 'Claudia', '3127111205', 'Galeria'),
(57, 'Hernando', '3122754926', 'Galeria'),
(58, 'Rosemilia', '3206177497', 'La loma'),
(59, 'Norbey', '3242993048', 'La loma'),
(60, 'Marisela                                          ', '3128178666                              ', 'Tapate'),
(61, 'Maria', '3234318324', 'Rio arriba'),
(62, 'Anlly C', '3104271859', 'Buenos aires'),
(63, 'Deison', '3134809555', 'Bogota'),
(64, 'Yuli', '3135759771', 'Manzanares'),
(65, 'Tatiana', '3105302070', 'Tasajo'),
(66, 'Carlos O', '3125669574', 'Medellin'),
(67, 'Juan Camilo', '3135127654', 'La Loma'),
(68, 'Jaider', '350379678', 'Sonson'),
(69, 'Duvan', '3138966796', 'Argelia'),
(70, 'Sergio', '3128537952', 'Sonson'),
(71, 'Paola L', '3146883938', 'Sonson'),
(72, 'Mauricio', '315009910', 'Galeria'),
(73, 'Laura', '3105203045', 'Sonson'),
(74, 'Patricia', '3207564433', 'Cra 10 N° 12'),
(75, 'Aracely', '3128304456', 'Rio arriba'),
(76, 'Carolina', '3107472385', 'Sonson'),
(77, 'Deisy', '3146974954', 'Sonson'),
(78, 'Sorany', '3123596123', 'Buenos aires'),
(79, 'Vanesa', '3005783672', 'Guamal'),
(80, 'Albenis', '3113272648', 'Argelia'),
(81, 'Alejandro', '3113451512', 'fatima'),
(82, 'Lia', '3106604137', 'fatima'),
(83, 'Felipe', '3153270625', 'Galeria'),
(84, 'Estela', '3103983020', 'Tapete'),
(85, 'Mona C', '3122055971', 'Galeria'),
(86, 'Neider', '3128130939', 'Rioverde'),
(87, 'Nallely', '3166084689', 'Rio arriba'),
(88, 'Luisangel', '3104727103', 'Sonson'),
(89, 'Sandra', '3147746551', 'Tasajo'),
(90, 'Sorany Loaiza', '3503774447', 'Chaverras'),
(91, 'Olga', '3103635561', 'Sonson'),
(92, 'Wilmar Carmona', '3214532354', 'Sonson'),
(93, 'Wilmar Loaiza', '312264039', 'Rioverde'),
(94, 'Stiven', '312345766', 'Sonson'),
(95, 'Cesar', '3104447766', 'Buenos aires'),
(96, 'yorleida', '3024032199', 'Bogota'),
(97, 'Carolina D', '3168893412', 'Manzanares'),
(98, 'Daniela                                           ', '3168893613                              ', 'Manzanares'),
(99, 'Sebastian', '3134108899', 'Chaverras'),
(100, 'Esteban R', '3128899410', 'Sonson'),
(101, 'Caren', '323941012', 'Sonson'),
(102, 'Lucia', '3137643216', 'La onda'),
(103, 'Pedro', '3135889977', 'Sonson'),
(104, 'Cindy', '312590046', 'Galeria'),
(105, 'Yorman', '3152667788', 'Galeria'),
(106, 'Ivan', '3126778949', 'Sonson'),
(107, 'Andres Felipe', '3127111205', 'Cra 7 N°12-47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_pedido` int(30) NOT NULL,
  `Id_producto` int(50) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cantidad` int(30) NOT NULL,
  `Fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Id_pedido`, `Id_producto`, `Nombre`, `Cantidad`, `Fecha`) VALUES
(13, 13, 'Audifonos-iphone              ', 5, '2022-02-20'),
(14, 14, 'Audifonos-xiaomi              ', 10, '2022-02-20'),
(15, 16, 'Audifonos-spartan             ', 5, '2022-02-20'),
(16, 15, 'Audifonos-Realme              ', 5, '2022-02-20'),
(17, 17, 'Audifonos-huawei              ', 3, '2022-02-20'),
(19, 22, 'Audifonos-inpods              ', 4, '2022-02-20'),
(20, 89, 'Vidrios', 40, '2022-02-20'),
(21, 28, 'Cargador-Motorola', 8, '2022-02-20'),
(22, 24, 'Cargador-Samsung', 10, '2022-02-25'),
(23, 68, 'Memorias 32GB', 4, '2022-02-25'),
(24, 34, 'cargador-Huawei-economico', 8, '2022-02-25'),
(26, 54, 'Bafle E-15', 3, '2022-02-28'),
(27, 74, 'Aros-pequeños                 ', 3, '2022-02-28'),
(28, 69, 'Memorias 64GB', 4, '2022-02-28'),
(29, 28, 'Cargador-Motorola', 10, '2022-03-01'),
(30, 23, 'Audifonos-Airdots', 3, '2022-03-01'),
(31, 31, 'Cargador-Huawei', 5, '2022-03-01'),
(32, 12, 'Audifono -samsung             ', 7, '2022-03-08                    '),
(33, 47, 'Teclado-gamers', 3, '2022-03-08                    '),
(34, 71, 'Adaptador-USB', 5, '2022-03-08                    '),
(35, 62, 'Estuche-silicona', 20, '2022-03-08                    '),
(36, 72, 'Cables uno por uno', 6, '2022-03-15                    '),
(37, 59, 'Mouse-gaming', 8, '2022-03-15                    '),
(38, 100, 'Manilla_smart', 5, '2022-03-15                    '),
(39, 105, 'Vidrios-tablet', 10, '2022-03-15                    '),
(40, 106, 'Estuche-space', 15, '2022-03-15                    '),
(41, 58, 'Mouse-inalambrico', 4, '2022-03-19                    '),
(42, 56, 'Diadema-sony', 3, '2022-03-19                    '),
(43, 64, 'Bateria J5-J7', 6, '2022-03-19                    '),
(44, 43, 'Cabeza-cargador-carro', 10, '2022-03-19                    '),
(45, 35, 'Cargador-xiaomi', 5, '2022-03-19                    '),
(46, 29, 'Cargador-motorola', 8, '2022-03-19                    '),
(47, 46, 'Diademas-gato-calamar-oso', 7, '2022-03-19                    '),
(48, 45, 'Diademas-music', 4, '2022-03-19                    '),
(49, 57, 'Mause-cable', 6, '2022-03-20                    '),
(50, 55, 'Bafle-raton', 8, '2022-03-20                    '),
(51, 70, 'Memoria-micro SD 128gb', 3, '2022-03-20                    '),
(52, 77, 'Control-play2', 2, '2022-03-20                    '),
(53, 75, 'Power-bank', 5, '2022-03-20                    '),
(54, 80, 'Control_xbox360', 2, '2022-03-22                    '),
(55, 90, 'Protetor-cable', 20, '2022-03-22                    '),
(56, 79, 'Control-play4', 2, '2022-03-22                    '),
(57, 89, 'Vidrios-templados', 30, '2022-03-22'),
(58, 30, 'Cargador-huawei', 6, '2022-03-22'),
(59, 42, 'Cabeza-cargador-Sparta', 5, '2022-03-22'),
(60, 40, 'Cabeza-universal', 10, '2022-03-22'),
(61, 37, 'Cabeza-iphone', 4, '2022-03-22'),
(62, 91, 'Alfombra-mouse', 4, '2022-03-24'),
(63, 92, 'Bolsa-agua-celular', 4, '2022-03-24'),
(64, 98, 'Lapiz-tactil', 10, '2022-03-24'),
(65, 96, 'Soporte-celular-moto', 3, '2022-03-24'),
(66, 62, 'Estuche-silicona', 10, '2022-03-24'),
(67, 61, 'Estuche-diseño', 10, '2022-03-24'),
(68, 68, 'Memoria-micro SD 32gb', 5, '2022-03-24'),
(69, 67, 'Memoria-micro SD 16gb', 5, '2022-03-24'),
(70, 73, 'Aro de luz', 3, '2022-03-24'),
(71, 74, 'Aro de luz-pequeño', 3, '2022-03-24'),
(72, 83, 'Popsocket', 10, '2022-03-26'),
(73, 82, 'Microfono-karaoke', 3, '2022-03-26'),
(74, 86, 'Holg-game', 5, '2022-03-26'),
(75, 85, 'car-blutooth', 3, '2022-03-26'),
(76, 107, 'Manilla-estuche', 10, '2022-03-28'),
(77, 104, 'Manilla_smart', 5, '2022-03-28'),
(78, 93, 'Palito-selfi', 6, '2022-03-28'),
(79, 91, 'Alfombra-mouse', 4, '2022-03-28'),
(80, 89, 'Vidrios-templados', 20, '2022-03-28'),
(81, 76, 'Power-bank-5000A', 3, '2022-03-28'),
(82, 84, 'reloj-smart', 5, '2022-03-28'),
(83, 74, 'Aro de luz-pequeño', 5, '2022-03-28'),
(84, 59, 'Mouse-gaming', 4, '2022-03-28'),
(85, 29, 'Cargador-motorola', 8, '2022-03-28'),
(86, 31, 'Cargador-huawei', 6, '2022-03-28'),
(87, 37, 'Cargador-iphone', 5, '2022-03-28'),
(88, 35, 'Cargador-xiaomi', 10, '2022-03-28'),
(89, 43, 'Cabeza-cargador-carro', 6, '2022-03-30'),
(90, 40, 'Cargadores-universales', 10, '2022-03-30'),
(91, 65, 'Memoria-micro SD 4gb', 5, '2022-03-30'),
(92, 72, 'Cables uno por uno', 10, '2022-03-30'),
(93, 62, 'Estuche-silicona', 15, '2022-03-30'),
(94, 12, 'Audifono -samsung             ', 10, '2022-03-30'),
(95, 13, 'Audifono-galaxi   S6 S10      ', 8, '2022-03-30'),
(96, 14, 'Audifonos-xiaomi              ', 6, '2022-03-30'),
(97, 17, 'Audifonos-huawei              ', 4, '2022-03-30'),
(98, 20, 'Audifonos-iphone', 5, '2022-03-30'),
(99, 24, 'Cargador-samsung', 11, '2022-03-30'),
(100, 23, 'Audifono-AirDots              ', 4, '2022-03-30'),
(101, 27, 'Cargador-motorola', 9, '2022-03-30'),
(102, 22, 'Audifonos-Inpods-12           ', 8, '2022-03-30'),
(103, 19, 'Audifono -music', 3, '2022-03-30'),
(104, 42, 'Cabeza-cargador-Sparta', 5, '2022-03-30'),
(105, 36, 'Cargador-iphone', 5, '2022-03-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(15) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Cantidad` int(30) NOT NULL,
  `Precio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Nombre`, `Descripcion`, `Cantidad`, `Precio`) VALUES
(12, 'Audifonos                                         ', 'Samsung                                           ', 89, 15000),
(13, 'Audifonos                                         ', 'Galaxi-S6-S10                                     ', 70, 10000),
(14, 'Audifonos                                         ', 'Xiaomi                                            ', 5, 25000),
(15, 'Audifonos                                         ', 'Realme                                            ', 19, 22000),
(16, 'Audifonos                                         ', 'Spartan                                           ', 8, 10000),
(17, 'Audifonos                                         ', 'Huawei                                            ', 20, 14000),
(19, 'Audifonos                                         ', 'Music                                             ', 10, 24000),
(20, 'Audifonos                                         ', 'iphone                                            ', 11, 110000),
(22, 'Audifonos', 'Inpods-12', 11, 63000),
(23, 'Audifonos                                         ', 'AirDots                                           ', 9, 70000),
(24, 'Cargador                                          ', 'Samsung                                           ', 11, 24000),
(25, 'Cargador', 'Samsung', 10, 18000),
(26, 'Cargador                                          ', 'Samsung                                           ', 10, 8000),
(27, 'Cargador                                          ', 'Motorola                                          ', 10, 24000),
(28, 'Cargador                                          ', 'Motorola                                          ', 13, 18000),
(29, 'Cargador                                          ', 'Motorola                                          ', 11, 8000),
(30, 'Cargador                                          ', 'Huawei                                            ', 10, 24000),
(31, 'Cargador', 'Huawei', 2, 18000),
(32, 'Cargador', 'Huawei', 6, 12000),
(33, 'Cargador', 'Xiaomi', 10, 18000),
(34, 'Cargador', 'Huawei', 10, 8000),
(35, 'Cargador                                          ', 'Xiaomi                                            ', 10, 24000),
(36, 'Cargador', 'iphone', 2, 12000),
(37, 'Cargador', 'iphone', 4, 45000),
(38, 'Cargador', 'Iphone-original', 10, 70000),
(39, 'Cargador                                          ', '1103-V8-6101                                      ', 10, 5000),
(40, 'Cargadores                                        ', 'Universales                                       ', 5, 10000),
(41, 'Cargador', 'Carro', 11, 18000),
(42, 'Cabeza-Cargador                                   ', 'Spartan                                           ', 10, 12000),
(43, 'Cabeza-Cargador', 'Carro', 11, 16000),
(44, 'Cabeza-Cargador', 'Harvic-car', 11, 15000),
(45, 'Diademas', 'Music', 11, 50000),
(46, 'Diademas', 'Gato-calamar-oso', 11, 70000),
(47, 'Teclado', 'Gaming', 1, 60000),
(48, 'Bafle', 'Ram-technology', 1, 450000),
(49, 'Bafle', 'Mobile-speaker', 10, 185000),
(50, 'Bafle', 'Wireles-speaker', 11, 145000),
(51, 'Bafle', 'Wireles-speaker', 11, 120000),
(52, 'Bafle', 'Wireles-speaker', 0, 160000),
(53, 'Bafle', 'Wireles-speaker', 1, 49000),
(54, 'Bafle                                             ', 'E15                                               ', 3, 59000),
(55, 'Bafle', 'Raton', 11, 40000),
(56, 'Diadema', 'Sony', 1, 24000),
(57, 'Mouse', 'Cable', 11, 10000),
(58, 'Mouse', 'Inalambrico-harvic', 11, 26000),
(59, 'Mouse', 'Gaming', 0, 45000),
(61, 'Estuches', 'Diseño', 20, 15000),
(62, 'Estuche', 'Silicona-Arcoiris', 29, 20000),
(63, 'Baterias', 'Nokia', 11, 10000),
(64, 'Bateria', 'J5-J7', 12, 35000),
(65, 'Memorias-micro SD', '4GB', 11, 18000),
(66, 'Memorias-micro SD', '8GB', 11, 26000),
(67, 'Memorias-micro SD                                 ', '16GB                                              ', 13, 32000),
(68, 'Memorias-micro SD', '32-GB', 10, 38000),
(69, 'Memorias-micro SD', '64-GB', 11, 50000),
(70, 'Memorias-micro SD', '128-GB', 1, 115000),
(71, 'Adaptadores                                       ', 'Usb                     ', 11, 10000),
(72, 'Cable', 'Uno por uno', 11, 10000),
(73, 'Aros', 'De luz ', 11, 95000),
(74, 'Aros-pequeños                                     ', 'De luz                                            ', 11, 15000),
(75, 'Power-bank', '24000-A', 11, 50000),
(76, 'Power-bank', '5000-A', 11, 25000),
(77, 'Control', 'Play-2', 1, 40000),
(78, 'Control', 'Play-3', 0, 55000),
(79, 'Control', 'Play-4', 12, 120000),
(80, 'Control', 'Xbox-360', 0, 140000),
(81, 'Control', 'Tablet-Celular', 2, 95000),
(82, 'Microfono', 'Karaoke', 11, 35000),
(83, 'Popsocket', 'Soporte-celular', 8, 6000),
(84, 'Reloj', 'Inteligente-smart', 0, 120000),
(85, 'Car', 'Bluetooth', 2, 13000),
(86, 'Hold', 'Game', 11, 10000),
(87, 'Sincares', 'Tigo-Claro-Movistar-Virgin', 11, 5000),
(89, 'Vidrios', 'Templados', 13, 12000),
(90, 'Proctetor', 'Cable', 20, 1000),
(91, 'Alfombra', 'Mouse', 11, 15000),
(92, 'Bolsa-agua', 'Para celular', 2, 10000),
(93, 'Palito', 'Selfi', 1, 15000),
(94, 'Palito-selfi', 'Bluetooth', 0, 45000),
(95, 'Soporte-celular', 'Carro', 11, 12000),
(96, 'Soporte-celular', 'Moto', 1, 25000),
(97, 'Gorras', 'Nike-Adidas', 11, 30000),
(98, 'Lapiz', 'Tactil', 9, 10000),
(99, 'Bluetooth', 'Bafle-carro', 2, 13000),
(100, 'Manilla', 'Reloj-Smart', 11, 10000),
(101, 'Celular', 'Moto e5 play', 2, 250000),
(102, 'Celular', 'Samsung A01', 11, 280000),
(103, 'Celular', 'j7', 0, 300000),
(104, 'Manilla', 'Smart', 1, 15000),
(105, 'vidrios', 'Tablet', 11, 15000),
(106, 'Estuches ', 'Space', 11, 15000),
(107, 'Manilla', 'Estuche', 11, 8000),
(108, 'Audifonos', 'Iphone', 10, 100000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Id_proveedor` int(50) NOT NULL,
  `Id_pedido` int(30) NOT NULL,
  `Nombre_proveedor` varchar(80) NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Id_proveedor`, `Id_pedido`, `Nombre_proveedor`, `Cantidad`, `Ciudad`) VALUES
(22, 14, 'Sebastian                                                                       ', 10, 'Medellin'),
(23, 13, 'Sebastian                                                                       ', 5, 'Medellin'),
(24, 15, 'Sebastian                                                                       ', 5, 'Medellin'),
(25, 16, 'Sebastian                                          ', 5, 'Medellin'),
(26, 17, 'Sebastian                                                                       ', 3, 'Medellin'),
(27, 19, 'Duvis MQ                                                                        ', 4, 'Medellin'),
(28, 20, 'Duvis MQ', 40, 'Medellin'),
(29, 21, 'Duvis MQ', 8, 'Medellin'),
(30, 22, 'Duvis MQ', 10, 'Medellin'),
(31, 23, 'Duvis MQ', 4, 'Medellin'),
(32, 24, 'Jaime-Elite                                                                     ', 8, 'Medellin'),
(33, 26, 'Jaime-Elite                                          ', 3, 'Medellin'),
(34, 27, 'Jaime-Elite                                                                     ', 3, 'Medellin'),
(35, 28, 'Jaime-Elite                                                                     ', 4, 'Medellin'),
(36, 29, 'Jaime-Elite                                          ', 10, 'Medellin'),
(37, 23, 'Jaime-Elite                                                                     ', 3, 'Medellin'),
(38, 31, 'Jaime-Elite                                                                     ', 5, 'Medellin'),
(39, 32, 'Luciana', 7, 'Rionegro'),
(40, 33, 'Luciana                                               ', 3, 'Rionegro'),
(42, 34, 'Luciana', 5, 'Rionegro'),
(43, 35, 'Luciana', 20, 'Rionegro'),
(44, 36, 'Erika                                               ', 6, 'Medellin'),
(45, 37, 'Erika', 8, 'Medellin'),
(46, 38, 'Erika', 15, 'Medellin'),
(47, 39, 'Erika', 10, 'Medellin'),
(48, 40, 'Erika', 15, 'Medellin'),
(49, 41, 'Camilo', 4, 'Medellin'),
(50, 42, 'Camilo', 3, 'Medellin'),
(51, 43, 'Camilo', 6, 'Medellin'),
(52, 44, 'Camilo', 10, 'Medellin'),
(53, 45, 'Camilo', 5, 'Medellin'),
(54, 46, 'Camilo                                               ', 8, 'Medellin'),
(55, 47, 'Camilo', 7, 'Medellin'),
(56, 48, 'Camilo', 4, 'Medellin'),
(57, 49, 'Laura', 6, 'Rionegro'),
(58, 50, 'Laura', 8, 'Rionegro'),
(59, 51, 'Laura', 3, 'Rionegro'),
(60, 52, 'Laura', 2, 'Rionegro'),
(61, 53, 'Laura', 5, 'Rionegro'),
(62, 54, 'Leidy', 2, 'Medellin'),
(63, 55, 'Leidy', 20, 'Medellin'),
(64, 56, 'Leidy', 2, 'Medellin'),
(65, 57, 'Leidy', 30, 'Medellin'),
(66, 58, 'Leidy', 6, 'Medellin'),
(67, 59, 'Leidy', 6, 'Medellin'),
(68, 60, 'Leidy', 10, 'Medellin'),
(69, 61, 'Leidy', 4, 'Medellin'),
(70, 62, 'Danilo', 4, 'Rionegro'),
(71, 62, 'Danilo', 4, 'Rionegro'),
(72, 63, 'Danilo', 10, 'Rionegro'),
(73, 64, 'Danilo', 3, 'Rionegro'),
(74, 65, 'Danilo', 10, 'Rionegro'),
(75, 66, 'Danilo', 10, 'Rionegro'),
(76, 67, 'Danilo', 5, 'Rionegro'),
(78, 68, 'Danilo', 5, 'Rionegro'),
(79, 69, 'Danilo', 3, 'Rionegro'),
(80, 70, 'Danilo', 3, 'Rionegro'),
(81, 71, 'Mariana', 3, 'Medellin'),
(82, 72, 'Mariana', 5, 'Medellin'),
(83, 73, 'Mariana', 3, 'Medellin'),
(84, 74, 'Mariana', 3, 'Medellin'),
(85, 75, 'Felipe', 5, 'Rionegro'),
(86, 76, 'Felipe', 10, 'Rionegro'),
(87, 77, 'Felipe', 5, 'Rionegro'),
(88, 78, 'Felipe', 6, 'Rionegro'),
(89, 79, 'Felipe', 4, 'Rionegro'),
(90, 80, 'Felipe', 20, 'Rionegro'),
(91, 81, 'Felipe', 3, 'Rionegro'),
(92, 82, 'Felipe', 5, 'Rionegro'),
(93, 83, 'Felipe', 5, 'Rionegro'),
(94, 84, 'Felipe', 4, 'Rionegro'),
(95, 85, 'Felipe', 8, 'Rionegro'),
(96, 86, 'Felipe', 6, 'Rionegro'),
(97, 87, 'Felipe', 5, 'Rionegro'),
(98, 88, 'Felipe', 10, 'Rionegro'),
(99, 89, 'Carlos                                                                          ', 6, 'Bogota'),
(100, 90, 'Carlos                                                                          ', 10, 'Bogota'),
(101, 91, 'Carlos                                                                          ', 5, 'Bogota'),
(102, 92, 'Carlos                                                                          ', 10, 'Bogota'),
(103, 93, 'Carlos                                                                          ', 15, 'Bogota'),
(104, 94, 'Carlos                                                                          ', 10, 'Bogota'),
(105, 95, 'Carlos                                                                          ', 8, 'Bogota'),
(106, 96, 'Carlos                                                                          ', 6, 'Bogota'),
(107, 97, 'Carlos                                                                          ', 4, 'Bogota'),
(108, 98, 'Carlos                                                                          ', 5, 'Bogota'),
(109, 99, 'Carlos                                                                          ', 11, 'Bogota'),
(110, 100, 'Carlos                                                                          ', 4, 'Bogota'),
(111, 101, 'Carlos                                                                          ', 9, 'Bogota'),
(112, 102, 'Carlos                                                                          ', 8, 'Bogota'),
(113, 103, 'Carlos                                                                          ', 3, 'Bogota'),
(114, 104, 'Carlos                                                                          ', 5, 'Bogota'),
(115, 105, 'Carlos                                                                          ', 5, 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(3000) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `apellido`, `usuario`, `contraseña`, `imagen`) VALUES
(2, 'natalia', 'duran', 'nata', '$2y$10$UVsL16kn3psNWztApUcfPu9AnbBqNOU79nGpQv5LI6MJA8zEkfo6G', ''),
(3, 'kelly', 'duran', 'natalia', '$2y$10$I5bwULB8pQ1Ml5ND3A3R8uP46iX9UvRUiOsnddXqn9cnMBFTGHNWa', ''),
(4, 'miguel', 'buitrago', 'miguel', '$2y$10$nuSHyuFI1aCHqhmAsmxZreAzQEJ56f8YimBnTkdyLWlNx.Dimpzz.', ''),
(6, 'Natalia', 'Duran', 'Natalia', '$2y$10$5Trw2bWu7gCR.R7a/Ia7fuSeRU92La6dQWw99kEj06ZzlR382ZNSG', ''),
(7, 'santiago', 'ossa', 'santiago', '$2y$10$wvGhMWnL1IwvcPamaRifvuX/FR58tsAJfhuTISE6E/5GlIND00ws2', ''),
(8, 'santiago', 'ossa', 'santiago', '$2y$10$cMDGEIj2e9R.oYkHX9vPmeyhdC57Bxk5zWN8XvDnSgIJUWBQXTELa', ''),
(10, 'Santiago', 'Ossa', 'santi', '$2y$10$3Vvd3104bHjRn22LMBhCpeORkPb0Pg.1nrWBZ1VrYhgVVMqgdNsy.', ''),
(11, 'calos', 'zuluaga', 'carlos', '$2y$10$njNWbmx.6mX4QmyzMW2NKOpbLXTZmkSfBcyDdSVaFygAN5h540Zaa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_venta` int(50) NOT NULL,
  `Id_producto` int(50) NOT NULL,
  `Id_cliente` int(50) NOT NULL,
  `Id_usuario` int(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Precio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_venta`, `Id_producto`, `Id_cliente`, `Id_usuario`, `Fecha`, `Cantidad`, `Precio`) VALUES
(1, 14, 12, 6, '2022-02-21', 1, 25000),
(16, 13, 13, 6, '2022-02-21', 1, 10000),
(17, 22, 19, 6, '2022-02-21', 1, 63000),
(20, 14, 16, 6, '2022-02-21', 1, 25000),
(21, 24, 17, 6, '2022-02-21', 1, 24000),
(22, 19, 22, 6, '2022-02-21', 1, 24000),
(23, 25, 18, 6, '2022-02-21', 1, 18000),
(24, 27, 15, 6, '2022-02-21', 1, 24000),
(28, 62, 12, 6, '2022-02-25', 3, 60000),
(29, 20, 22, 6, '2022-02-25', 1, 110000),
(31, 28, 20, 6, '2022-02-25', 1, 18000),
(40, 43, 26, 6, '2022-02-25', 1, 16000),
(41, 46, 32, 6, '2022-02-25', 1, 12000),
(43, 38, 41, 6, '2022-02-26', 1, 70000),
(44, 42, 51, 6, '2022-02-26', 1, 12000),
(45, 13, 23, 6, '2022-02-26', 1, 10000),
(46, 28, 51, 6, '2022-02-26', 1, 18000),
(47, 28, 52, 6, '2022-02-26', 1, 18000),
(50, 45, 56, 6, '2022-02-27', 1, 50000),
(51, 44, 44, 6, '2022-02-27', 1, 15000),
(52, 46, 47, 6, '2022-02-27', 1, 70000),
(53, 89, 25, 6, '2022-02-27', 1, 12000),
(54, 64, 55, 6, '2022-02-28', 1, 30000),
(55, 74, 23, 6, '2020-02-27', 1, 15000),
(56, 61, 34, 6, '2022-02-27', 2, 30000),
(57, 65, 45, 6, '2022-02-27', 1, 18000),
(58, 22, 107, 6, '2022-02-27', 1, 63000),
(59, 73, 59, 6, '2022-02-28', 1, 95000),
(60, 66, 56, 6, '2022-02-28', 1, 26000),
(61, 35, 57, 6, '2022-02-28', 1, 24000),
(62, 57, 61, 6, '2022-02-28', 1, 10000),
(63, 75, 72, 6, '2022-03-01', 1, 50000),
(64, 90, 56, 6, '2022-03-01', 2, 2000),
(65, 28, 49, 6, '2022-03-01', 1, 18000),
(66, 63, 50, 6, '2022-03-01', 1, 10000),
(67, 61, 24, 6, '2022-03-01', 2, 30000),
(68, 105, 86, 6, '2022-02-01', 1, 15000),
(69, 22, 44, 6, '2022-03-01', 1, 63000),
(70, 97, 26, 6, '2022-03-01', 1, 30000),
(71, 89, 87, 6, '2022-03-01', 1, 12000),
(72, 76, 13, 6, '2022-03-01', 1, 25000),
(73, 29, 31, 6, '2022-03-01', 1, 8000),
(74, 19, 48, 6, '2022-03-02', 1, 24000),
(75, 87, 17, 6, '2022-03-02', 1, 5000),
(76, 95, 31, 6, '2022-03-02', 1, 12000),
(78, 82, 24, 6, '2022-03-02', 1, 130000),
(79, 87, 62, 6, '2022-03-02', 2, 10000),
(80, 61, 69, 6, '2022-03-02', 1, 15000),
(81, 24, 63, 6, '2022-03-02', 1, 24000),
(82, 42, 67, 6, '2022-03-02', 1, 12000),
(83, 65, 85, 6, '2022-03-02', 1, 18000),
(84, 72, 56, 6, '2022-03-02', 1, 10000),
(85, 49, 62, 6, '2022-03-03', 1, 185000),
(86, 22, 68, 6, '2022-03-03', 1, 63000),
(87, 89, 71, 6, '2022-03-03', 1, 12000),
(88, 61, 19, 6, '2022-03-03', 1, 15000),
(89, 86, 26, 6, '2022-03-03', 1, 10000),
(90, 89, 56, 6, '2022-03-04', 1, 12000),
(91, 44, 36, 6, '2022-03-04', 1, 15000),
(92, 100, 23, 6, '2022-03-04', 1, 10000),
(93, 106, 15, 6, '2022-03-04', 1, 15000),
(94, 86, 20, 6, '2022-03-04', 1, 10000),
(95, 24, 71, 6, '2022-03-04', 1, 24000),
(96, 28, 24, 6, '2022-03-04', 1, 18000),
(97, 29, 88, 6, '2022-03-20', 1, 8000),
(98, 71, 40, 6, '2022-03-20', 1, 10000),
(99, 91, 23, 6, '2022-03-20', 1, 15000),
(100, 50, 107, 6, '2022-03-20', 1, 145000),
(101, 13, 97, 6, '2022-03-20', 1, 10000),
(102, 74, 22, 6, '2022-03-20', 1, 15000),
(103, 22, 80, 6, '2022-03-20', 1, 63000),
(104, 102, 33, 6, '2022-03-20', 1, 280000),
(105, 79, 76, 6, '2022-03-25', 1, 120000),
(106, 51, 75, 6, '2022-03-25', 1, 120000),
(107, 19, 80, 6, '2022-03-25', 1, 24000),
(108, 100, 81, 6, '2022-03-25', 1, 10000),
(109, 14, 81, 6, '2022-03-25', 1, 25000),
(110, 105, 43, 6, '2022-03-25', 1, 15000),
(111, 74, 81, 6, '2022-03-25', 1, 15000),
(112, 17, 29, 6, '2022-03-25', 2, 28000),
(113, 19, 48, 6, '2022-04-10', 1, 24000),
(114, 73, 81, 6, '2022-04-10', 1, 15000),
(115, 105, 43, 6, '2022-04-10', 2, 30000),
(116, 58, 62, 6, '2022-04-10', 1, 26000),
(117, 24, 107, 6, '2022-04-10', 1, 24000),
(118, 13, 81, 6, '2022-04-16', 1, 10000),
(119, 87, 22, 6, '2022-04-16', 3, 15000),
(120, 89, 81, 6, '2022-04-16', 1, 15000),
(121, 63, 107, 6, '2022-04-16', 1, 10000),
(122, 72, 22, 6, '2022-04-16', 1, 10000),
(123, 22, 48, 6, '2022-04-16', 2, 126000),
(124, 62, 48, 6, '2022-04-17', 3, 60000),
(125, 107, 22, 6, '2022-04-17', 1, 7000),
(126, 69, 81, 6, '2022-04-17', 1, 50000),
(127, 22, 23, 6, '2022-04-17', 1, 63000),
(128, 41, 62, 6, '2022-04-18', 1, 18000),
(129, 72, 107, 6, '2022-04-18', 1, 10000),
(130, 89, 81, 6, '2022-04-18', 1, 12000),
(131, 87, 48, 6, '2022-04-18', 1, 5000),
(132, 55, 48, 6, '2022-04-18', 1, 40000),
(133, 12, 20, 6, '2022-03-02', 1, 15000),
(134, 12, 20, 6, '2022-03-02', 1, 15000),
(135, 12, 20, 6, '2022-03-03', 1, 24000),
(136, 12, 20, 6, '2022-03-03', 1, 24000),
(137, 20, 30, 6, '2022-03-02', 1, 110000),
(138, 20, 16, 6, '2022-03-03', 1, 110000),
(139, 17, 20, 6, '2022-03-04', 1, 14000),
(140, 17, 20, 6, '2022-03-04', 1, 14000),
(141, 17, 20, 6, '2022-03-04', 1, 14000),
(142, 17, 20, 6, '2022-03-04', 1, 14000),
(143, 19, 40, 6, '2022-03-02', 1, 24000),
(144, 23, 17, 6, '2022-02-21', 1, 24000),
(145, 23, 17, 6, '2022-02-21', 1, 24000),
(146, 14, 14, 6, '2022-02-21', 1, 25000),
(147, 39, 12, 6, '2022-03-02', 1, 5000),
(148, 39, 16, 6, '2022-03-02', 1, 5000),
(149, 39, 23, 6, '2022-03-02', 1, 5000),
(150, 35, 12, 6, '2022-02-21', 1, 24000),
(151, 33, 17, 6, '2022-02-21', 1, 18000),
(152, 34, 12, 6, '2022-02-21', 1, 8000),
(153, 42, 42, 6, '2022-02-21', 2, 12000),
(154, 12, 34, 6, '2022-03-02', 2, 15000),
(155, 27, 34, 6, '2022-02-21', 1, 24000),
(156, 12, 56, 6, '2022-02-21', 1, 15000),
(157, 29, 55, 6, '2022-02-21', 1, 8000),
(158, 29, 34, 6, '2022-02-21', 1, 8000),
(159, 29, 34, 6, '2022-02-21', 1, 8000),
(160, 29, 34, 6, '2022-02-21', 1, 8000),
(161, 30, 34, 6, '2022-02-21', 1, 24000),
(162, 30, 56, 6, '2022-02-21', 1, 24000),
(163, 14, 56, 6, '2022-03-02', 1, 25000),
(164, 27, 45, 6, '2022-03-04', 1, 24000),
(165, 12, 43, 6, '2022-03-03', 1, 19000),
(166, 23, 60, 6, '2022-03-04', 1, 70000),
(167, 26, 67, 6, '2022-03-04', 1, 8000),
(168, 13, 56, 6, '2022-03-02', 1, 10000),
(169, 13, 60, 6, '2022-03-03', 1, 10000),
(170, 24, 60, 6, '2022-03-03', 1, 24000),
(171, 24, 60, 6, '2022-03-03', 1, 24000),
(173, 42, 34, 6, '2022-03-02', 1, 19000),
(174, 19, 17, 6, '2022-03-03', 1, 24000),
(175, 19, 60, 6, '2022-03-04', 1, 24000),
(176, 19, 60, 6, '2022-03-04', 1, 24000),
(177, 19, 60, 6, '2022-03-04', 1, 24000),
(178, 19, 15, 6, '2022-03-04', 1, 24000),
(179, 19, 15, 6, '2022-03-04', 1, 24000),
(180, 24, 60, 6, '2022-03-03', 1, 24000),
(181, 14, 50, 6, '2022-03-05', 1, 24000),
(182, 26, 70, 6, '2022-03-03', 1, 8000),
(183, 27, 80, 6, '2022-03-04', 1, 24000),
(184, 28, 69, 6, '2022-03-04', 1, 60000),
(185, 27, 60, 6, '2022-03-04', 1, 24000),
(186, 13, 71, 6, '2022-03-05', 1, 10000),
(187, 13, 71, 6, '2022-03-05', 1, 10000),
(188, 13, 71, 6, '2022-03-05', 1, 10000),
(196, 12, 80, 6, '2022-02-21', 1, 24000),
(197, 12, 69, 6, '2022-03-04', 1, 15000),
(198, 12, 60, 6, '2022-03-04', 1, 15000),
(199, 13, 68, 6, '2022-03-03', 1, 19000),
(200, 15, 90, 6, '2022-03-04', 2, 10000),
(201, 15, 90, 6, '2022-03-04', 3, 24000),
(202, 15, 90, 6, '2022-03-04', 3, 24000),
(203, 13, 45, 6, '2022-03-03', 1, 24000),
(204, 16, 98, 6, '2022-03-03', 1, 10000),
(205, 16, 98, 6, '2022-03-03', 1, 10000),
(207, 12, 67, 6, '2022-03-02', 1, 15000),
(208, 12, 67, 6, '2022-03-02', 1, 15000),
(209, 13, 78, 6, '2022-03-04', 2, 10000),
(215, 12, 80, 6, '2022-03-03', 1, 15000),
(216, 12, 90, 6, '2022-03-04', 1, 15000),
(217, 12, 78, 6, '2022-03-04', 1, 15000),
(218, 12, 80, 6, '2022-03-04', 1, 15000),
(219, 12, 80, 6, '2022-03-04', 1, 15000),
(220, 12, 80, 6, '2022-03-04', 1, 15000),
(221, 12, 89, 6, '2022-03-04', 1, 12000),
(222, 12, 89, 6, '2022-03-04', 1, 12000),
(223, 12, 89, 6, '2022-03-04', 1, 12000),
(224, 12, 89, 6, '2022-03-04', 1, 12000),
(225, 12, 89, 6, '2022-03-04', 1, 12000),
(226, 12, 90, 6, '2022-03-04', 1, 19000),
(227, 12, 90, 6, '2022-03-04', 1, 19000),
(228, 12, 90, 6, '2022-03-04', 1, 19000),
(229, 12, 90, 6, '2022-03-04', 1, 19000),
(230, 12, 90, 6, '2022-03-04', 1, 19000),
(231, 12, 90, 6, '2022-03-04', 1, 19000),
(232, 12, 89, 6, '2022-03-02', 1, 20000),
(233, 13, 89, 6, '2022-03-03', 1, 10000),
(234, 13, 89, 6, '2022-03-04', 1, 20000),
(235, 12, 80, 6, '2022-03-02', 1, 12000),
(236, 12, 80, 6, '2022-03-02', 1, 12000),
(237, 12, 80, 6, '2022-03-02', 1, 12000),
(238, 12, 80, 6, '2022-03-02', 1, 12000),
(239, 12, 80, 6, '2022-03-02', 1, 12000),
(240, 13, 80, 6, '2022-03-03', 1, 10000),
(241, 14, 80, 6, '2022-03-02', 5, 12000),
(242, 12, 98, 6, '2022-03-02', 1, 12000),
(243, 23, 80, 6, '2022-03-03', 2, 70000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id_proveedor`),
  ADD KEY `Id_pedido` (`Id_pedido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_venta`),
  ADD KEY `Id_producto` (`Id_producto`),
  ADD KEY `Id_cliente` (`Id_cliente`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_cliente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id_pedido` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `Id_proveedor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_venta` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`Id_pedido`) REFERENCES `pedidos` (`Id_pedido`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`Id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
