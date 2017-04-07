-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 06:17 AM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `matricula_admin` int(11) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id_admin`, `matricula_admin`, `contrasena`) VALUES
(1, 123456, 'admin17');

-- --------------------------------------------------------

--
-- Table structure for table `becas`
--

CREATE TABLE `becas` (
  `id_documento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nombre_archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `becas`
--

INSERT INTO `becas` (`id_documento`, `titulo`, `nombre_archivo`) VALUES
(4, 'Becas familias', 'archivos/becas_familias.pdf');

-- --------------------------------------------------------
CREATE TABLE `certificaciones` (
  `id_documento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nombre_archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `certificaciones` (`id_documento`, `titulo`, `nombre_archivo`) VALUES
(4, 'Becas familias', 'archivos/Informacion_ECE.pdf');


CREATE TABLE `titulacion` (
  `id_documento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nombre_archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `titulacion` (`id_documento`, `titulo`, `nombre_archivo`) VALUES
(4, 'Becas familias', 'archivos/requisitos.pdf');


CREATE TABLE `reglamentos` (
  `id_documento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nombre_archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reglamentos` (`id_documento`, `titulo`, `nombre_archivo`) VALUES
(4, 'Becas familias', 'archivos/estudiantes.pdf');



-- Table structure for table `calendario`
--

CREATE TABLE `calendario` (
  `id_calendario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendario`
--

INSERT INTO `calendario` (`id_calendario`, `nombre`, `foto`) VALUES
(1, 'calendario', 'img/calend.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calificacione`
--

CREATE TABLE `calificacione` (
  `id_calificacion` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `matricula_es` int(11) NOT NULL,
  `parcial1` float NOT NULL,
  `parcial2` float NOT NULL,
  `parcial3` float NOT NULL,
  `cal_cuatri` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calificacione`
--

INSERT INTO `calificacione` (`id_calificacion`, `id_materia`, `matricula_es`, `parcial1`, `parcial2`, `parcial3`, `cal_cuatri`) VALUES
(1, 1, 1716210001, 9.7, 9.3, 9.5, 9.5),
(2, 2, 1716210001, 10, 9.3, 9.5, 9.6),
(3, 3, 1716210001, 9.8, 9.3, 9.5, 9.5),
(4, 4, 1716210001, 9.8, 9.3, 9.5, 9.5),
(5, 5, 1716210001, 9.8, 9.3, 9.5, 9.5),
(6, 6, 1716210001, 9.8, 9.3, 9.5, 9.5),
(7, 7, 1716210001, 9.8, 9.3, 9.5, 9.5),
(8, 1, 1716210002, 9.6, 9.2, 9.9, 9.6),
(9, 2, 1716210002, 9.5, 9.7, 9.5, 9.5),
(10, 3, 1716210002, 9.9, 9.1, 9.5, 9.5),
(11, 4, 1716210002, 9.3, 9.8, 9.5, 9.5),
(12, 5, 1716210002, 9.7, 9.5, 9.3, 9.5),
(13, 6, 1716210002, 9.5, 9.9, 9.7, 9.7),
(14, 7, 1716210002, 9.5, 9.7, 9.5, 9.5),
(21, 1, 1716210003, 9.2, 9.3, 9.3, 9.3);

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`) VALUES
(1, 'Tecnologías de la información y comunicación'),
(2, 'Contaduría'),
(3, 'Energía renovables'),
(4, 'Desarrollo de negocios'),
(5, 'infermería');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `matricula_es` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_pat` varchar(100) NOT NULL,
  `apellido_mat` varchar(100) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`matricula_es`, `nombre`, `apellido_pat`, `apellido_mat`, `contrasena`) VALUES
(1716210001, 'Rose Landjlord', 'Sejour', 'Thall', 'rose96'),
(1716210002, 'Mackendy Jean Junior', 'Anis', 'Vasor', 'anis10'),
(1716210003, 'Raymond', 'Simoly', 'Charles', 'ray777');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id_evento`, `titulo`, `descripcion`, `foto`) VALUES
(2, 'Evento', 'El reconocimiento también se da a los maestros y personal Administrativo en el cuatrimestre Enero-Abril 2017 ¡Felicidades Halcones! #somoshalcones #somosutec', 'img/image1.jpg'),
(3, 'Evento', 'Estudia en Canadá! Se parte de la Movilidad Internacional que la Universidad Tecnológica de Tulancingo te ofrece. #somoshalcones #somosutec', 'img/image2.jpg'),
(4, 'Evento', 'Día lunes 27 de marzo último día para participar, entra a la publicación ¡Gracias por compartirnos sus momentos Halcones!  #somoshalcones #somosutec', 'img/image3.jpg'),
(5, 'Resultado del concurso', 'Entrega de premios a los 6 ganadores del concurso de fotos más atractivas en areas de la utec', 'img/image4.jpg'),
(6, 'Conferencia sobre robo de identidad', 'agradecemos a la licenciada por esta bonita conferencia sobre el robo de identidad', 'img/image5.jpg'),
(7, 'Con los de la carrera h', 'Programa \"Salva una Vida con Tus Manos\", capacitación a Facilitadores en la Universidad Tecnologica de Tulancingo #RCPHidalgo #TodosSomosPacientes #EsPorLaVida', 'img/image6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `matricula_es` int(11) NOT NULL,
  `nombre_grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `id_carrera`, `id_horario`, `matricula_es`, `nombre_grupo`) VALUES
(1, 1, 1, 1716210001, 'Tic51'),
(2, 1, 1, 1716210002, 'Tic51'),
(3, 1, 2, 1716210003, 'Tic52');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`id_horario`, `nombre`, `foto`) VALUES
(1, 'Horario tic51', 'img/horario_tic_51.jpg'),
(2, 'Horario tic52', 'img/horario_tic_52.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `materia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materia`, `materia`) VALUES
(1, 'Integradora'),
(2, 'Exp.Oral y escrita'),
(3, 'Calidad en el desarrollo de software'),
(4, 'Desarrollo de aplicaciones'),
(5, 'Idioma'),
(6, 'Administración de proyectos'),
(7, 'Ingeniería de software');

-- --------------------------------------------------------

--
-- Table structure for table `materia_prof`
--

CREATE TABLE `materia_prof` (
  `id_mat_prof` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materia_prof`
--

INSERT INTO `materia_prof` (`id_mat_prof`, `id_materia`, `id_profesor`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 6),
(4, 4, 3),
(5, 5, 7),
(6, 6, 4),
(7, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_pat` varchar(100) NOT NULL,
  `apellido_mat` varchar(100) NOT NULL,
  `matricula_prof` int(11) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `apellido_pat`, `apellido_mat`, `matricula_prof`, `contrasena`) VALUES
(1, 'Elizabeth', 'García', 'Urbina', 12345, 'el123'),
(2, 'Arianeth', 'Cruz', 'Arroyo', 13245, 'aria234'),
(3, 'Salvador', 'Hernandez', 'Mendoza', 124563, 'sal879'),
(4, 'Maria del Carmen', 'Islas', 'Islas', 374859, 'mar869'),
(5, 'Dante', 'Peña', 'Rojas', 98765, 'dan475'),
(6, 'Margarita', 'DiazGirón', 'Bertch', 9867, 'marg263'),
(9, 'Marta Silvia', 'Vera', 'Alvarez', 2134567, '345678');

-- --------------------------------------------------------

--
-- Table structure for table `talleres`
--

CREATE TABLE `talleres` (
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `talleres`
--

INSERT INTO `talleres` (`id_taller`, `nombre`, `descripcion`) VALUES
(1, 'Radio', 'El objetivo de este taller de radio para jóvenes es alcanzar un conocimiento claro de los mecanismos y formatos con los que un spot de radio pude contar; así como reflexionar sobre los dos temas claves de los dos spots previstos'),
(2, 'Zumba', 'Zumba es un movimiento o disciplina fitness de origen colombiano, enfocado por una parte a mantener un cuerpo saludable y por otra a desarrollar, fortalecer y dar flexibilidad al cuerpo mediante movimientos de baile combinados con una serie de rutinas aeróbicas. '),
(3, 'Guitara', 'El Taller de Guitarra se clasifica en tres géneros: folclórica, popular y clásica.\r\n\r\nComo objetivo general del taller está el contribuir a la formación personal del alumno, reforzando hábitos de estudio y concentración así como también, desarrollar mediante el estudio de la guitarra la valoración de la música y el arte en general.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `matricula_admin` (`matricula_admin`),
  ADD UNIQUE KEY `contrasena` (`contrasena`);

--
-- Indexes for table `becas`
--
ALTER TABLE `becas`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indexes for table `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_calendario`);

--
-- Indexes for table `calificacione`
--
ALTER TABLE `calificacione`
  ADD PRIMARY KEY (`id_calificacion`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`matricula_es`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `materia_prof`
--
ALTER TABLE `materia_prof`
  ADD PRIMARY KEY (`id_mat_prof`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `matricula_prof` (`matricula_prof`),
  ADD UNIQUE KEY `contrasena` (`contrasena`);

--
-- Indexes for table `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id_taller`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `becas`
--
ALTER TABLE `becas`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_calendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calificacione`
--
ALTER TABLE `calificacione`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materia_prof`
--
ALTER TABLE `materia_prof`
  MODIFY `id_mat_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id_taller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
