-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 16-06-2020 a las 05:11:38
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: cms
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla categoria
--

CREATE TABLE categoria (
  id int(11) NOT NULL,
  nombre varchar(255) NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  deleted_at datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla categoria
--

INSERT INTO categoria (id, nombre, created_at, updated_at, deleted_at) VALUES
(1, 'Cat 1', '2020-06-15 22:56:38', '2020-06-15 22:56:38', NULL),
(2, 'Cat 2', '2020-06-15 22:56:40', '2020-06-15 22:56:40', NULL),
(3, 'Cemento Camba', '2020-06-15 23:02:32', '2020-06-15 23:02:32', '2020-06-15 22:02:37'),
(4, 'Cat 3', '2020-06-15 23:06:45', '2020-06-15 23:06:45', '2020-06-15 22:06:51'),
(5, 'Cat 2', '2020-06-15 23:19:04', '2020-06-15 23:19:04', NULL),
(6, 'Cat 3', '2020-06-15 23:19:10', '2020-06-15 23:19:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla comentario
--

CREATE TABLE comentario (
  id int(11) NOT NULL,
  usuario_id int(11) NOT NULL,
  pagina_id int(11) NOT NULL,
  contenido text NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  deleted_at datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla entrada
--

CREATE TABLE entrada (
  id int(11) NOT NULL,
  titulo varchar(255) NOT NULL,
  contenido varchar(999) CHARACTER SET utf8mb4  NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  deleted_at datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla entrada
--

INSERT INTO entrada (id, titulo, contenido, created_at, updated_at, deleted_at) VALUES
(3, 'Titulo 1', 'contenido 1', '2020-06-15 00:57:18', '2020-06-15 00:57:18', NULL),
(4, 'piedra papel tijera', '$model->insert($data);\r\n        var_dump($model);', '2020-06-15 10:41:58', '2020-06-15 10:41:58', '2020-06-15 23:02:29'),
(5, 'piedra papel tijera 2', 'qsd', '2020-06-15 10:48:59', '2020-06-15 10:48:59', '2020-06-15 23:02:35'),
(6, 'piedra papel tijera 22', 'qqqqqqqqw', '2020-06-15 10:51:15', '2020-06-15 10:51:15', '2020-06-15 23:02:27'),
(7, 'piedra papel tijera 222', 'qqqqqqqqqqqqzzs', '2020-06-15 10:52:10', '2020-06-15 10:52:10', '2020-06-15 23:02:26'),
(8, 'piedra papel tijera 2222', 'qqqqqqqqqqqqzsz', '2020-06-15 10:53:16', '2020-06-15 10:53:16', '2020-06-15 23:02:30'),
(9, 'piedra papel tijera 22222', 'qqqqqqqqqqqqzzs', '2020-06-15 10:54:23', '2020-06-15 10:54:23', '2020-06-15 23:02:33'),
(10, 'piedra papel tijera 3', 'qqqqqqqqqqqqzzzs', '2020-06-15 10:59:09', '2020-06-15 10:59:09', '2020-06-15 23:02:33'),
(11, 'cuarzo papiro navaja', 'asdas', '2020-06-15 19:28:18', '2020-06-15 19:28:18', '2020-06-15 23:02:24'),
(12, 'Titulo 2', 'Contenido 2\r\n', '2020-06-15 23:06:17', '2020-06-15 23:06:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla pagina
--

CREATE TABLE pagina (
  id int(11) NOT NULL,
  titulo varchar(255) NOT NULL,
  contenido varchar(999) NOT NULL,
  categoria_id int(11) NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  deleted_at datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla pagina
--

INSERT INTO pagina (id, titulo, contenido, categoria_id, created_at, updated_at, deleted_at) VALUES
(3, 'piedra papel tijera', '$model->insert($data);\r\n        var_dump($model);', 2, '2020-06-15 23:48:24', '2020-06-15 23:48:24', '2020-06-15 22:49:27'),
(4, 'piedra papel tijera', '$model->insert($data);\r\n        var_dump($model);', 1, '2020-06-15 23:49:50', '2020-06-15 23:49:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla usuario
--

CREATE TABLE usuario (
  id int(11) NOT NULL,
  nombre varchar(255) NOT NULL,
  correo varchar(255) NOT NULL,
  contraseña varchar(255) NOT NULL,
  permisos int(1) NOT NULL DEFAULT '1',
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  deleted_at datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla categoria
--
ALTER TABLE categoria
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla comentario
--
ALTER TABLE comentario
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla entrada
--
ALTER TABLE entrada
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla pagina
--
ALTER TABLE pagina
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla usuario
--
ALTER TABLE usuario
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla categoria
--
ALTER TABLE categoria
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla comentario
--
ALTER TABLE comentario
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla entrada
--
ALTER TABLE entrada
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla pagina
--
ALTER TABLE pagina
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla usuario
--
ALTER TABLE usuario
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
