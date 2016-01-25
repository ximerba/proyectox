-- Estructura de tabla para la tabla `aplicacion`
--

CREATE TABLE IF NOT EXISTS `aplicacion` (
  `numero` int(10) NOT NULL,
  `nombre` text COLLATE utf32_spanish_ci NOT NULL,
  `apellido` text COLLATE utf32_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `lavado` tinyint(1) NOT NULL,
  `sms` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `aplicacion`
--

INSERT INTO `aplicacion` (`numero`, `nombre`, `apellido`, `direccion`, `lavado`, `sms`) VALUES
(9, '', '', '', 0, 0),
(91111111, '111lklk', 'lklklk', 'lklklkl', 0, 0),
(92222222, 'prueba2', 'prueba22', 'pepe pepe', 0, 0),
(92568978, 'prueba3', 'prueba3', 'prueba 1234', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `userid` int(2) NOT NULL,
  `usuario` varchar(12) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(6) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`userid`, `usuario`, `password`) VALUES
(1, 'ximena', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicacion`
--
ALTER TABLE `aplicacion`
  ADD PRIMARY KEY (`numero`),
  ADD UNIQUE KEY `celular` (`numero`),
  ADD UNIQUE KEY `celular_2` (`numero`);
