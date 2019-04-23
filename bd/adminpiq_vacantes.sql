-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-04-2019 a las 12:39:09
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminpiq_vacantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE `provedores` (
  `id` int(254) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `giro` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `contacto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `rfc` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sitioweb` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Referencia1` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Referencia2` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Referencia3` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pdf` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`id`, `nombre`, `giro`, `contacto`, `direccion`, `telefono`, `rfc`, `correo`, `sitioweb`, `Referencia1`, `Referencia2`, `Referencia3`, `pdf`) VALUES
(46, 'SIMBAU', 'Recubrimientos Industriales', 'Dulce Bautista', 'Av. Tecnologico 100 Int.412 Col.Centro', '4423595771', 'BALD930119HN7', 'bdulce132@gmail.com', 'http://simbau.mx/', 'UNIVEX', 'EXPOR SAN ANTONIO', 'no especiicado', '  '),
(47, 'LUBRIQRO', 'VENTA DE ACEITES Y LUBRICANTES', 'MARIO ORDOÃ‘EZ', 'Urbi Villa del Real Mariana no 34', '4428273089', 'GARJ600928B46', 'mario.ordonez@lubriqro.com', 'no especificado', 'no especificado', 'no especificado', 'no especificado', '   '),
(48, 'DP SOLUCIONES EN MOBILIARIO PARA OFICINA S.A DE C.V', 'FABRICACION Y DISTRIBUCION DE MOBILIARIO PARA OFICINA', 'ventas3@dpmobel.com.mx	', 'BOULEVARD BERNARDO QUINTANA No.191', '4425430661', 'DSM1507033S7', 'ventas3@dpmobel.com.mx', 'www.dpmobel.com.mx', 'Planta alta', 'no especificado', 'no especiicado', '  '),
(49, 'Chevrolet Zona Industrial', 'Automotriz', 'Juanita Villalobos', '	Ave 5 de Febrero', '4421199684', 'no especificado', 'no_especificado@no.no', 'no especificado', 'no especificado', 'no especificado', 'no especificado', '  '),
(50, 'CAESSA', 'AIRE ACONDICIONADO Y SISTEMA DE EXTRACCION', 'ING. ANGEL ADOLFO GARCIA FERRUSCA', 'POPOCATEPETL # 400 COL. LOMA BONITA, SANTIAGO DE QUERETARO, QRO.', '0444423637717', 'GAFI7704195R7', 'sacra.casta@hotmail.com', 'no especificado', 'no especificado', 'no especificado', 'no especiicado', '  '),
(51, 'CAMPO VIEJO', 'BAGUETTES Y ENSALADAS', 'FERNANDA RABAGO', '	CARRETERA CHICHIMEQUILLAS 39100-19A', '4422409647', 'RASF801024UQ5', 'campoviejopiq@gmail.com', 'www.campoviejo.com.mx', 'no especificado', 'no especificado', 'no especiicado', '  '),
(52, 'PERMACHEF', 'UNIFORMES PARA CHEF', 'Cinthya Cabrera', 'Av. Los Arcos No. 36; Local 11, Carretas Santiago de QuerÃ©taro', '442131878', 'CME900828QV8', 'queretaro@permachef.com', 'www.permachef.com', 'RESTAURANTE VIPS', '	UVM', 'PAULINA ABASCAL', '  '),
(53, 'QUINTA DEL LAGO', 'HOTEL, EVENTOS Y CENTRO DE NEGOCIOS', 'LIC. PATRICIA ZARATE', '	POHANG 134 COREA SANTA ROSA JAUREGUI, QRO.', '2136329', 'MOC-060404-IR4', 'gerencia@quintadellago.com.mx', 'www.quintadellago.com.mx	', 'reservaciones@quintadellago.com.mx', 'Facebook Quinta del Lago', 'no especificado', '  '),
(54, 'consultores en seguridad privada y protecciÃ³n del BajÃ­o', 'seguridad', 'jeniffer vega', 'manuela medina 302 int 13 col burÃ³crata queretaro', '2230308', 'CSP020909PR8	', 'ventas_bajio@seguridadgc.com', 'no especificado', 'no especificado', 'no especificado', 'no especiicado', 'PresentaciÃ³n.pdf'),
(55, 'ARGA CONSTRUCTORA SA DE CV', 'INGENIERIA, ARQUITECTURA, CONSTRUCCIÃ“N', 'L.A. CAROLINA RIOS TRUJILLO', 'Naranxan 369-A, Felix Ireta Morelia Michoacan', '4433175728', 'ARG1607115I4', 'argaadm@hotmail.com', 'www.argaconstructora.com.mx', 'no especificado', 'no especificado', 'no especificado', 'C.E. ARGA CONSTRUCTORA.pdf'),
(56, 'Jose Simon BolaÃ±os', 'Fabricante de Arandelas Tipo Belleville, Arandelas de Seguridad, Pernos Dowel, Tornilleria Norma DIN, Arandelas de Seguridad', 'Jose Simon BolaÃ±os Balderas', 'Balderas	El Marquez Queretaro.', '4422461000', 'SGM080806H66', 's.bolanos@schnorr.com.mx', 'http://www.schnorr.com.mx/', 'no especificado', 'no especificado', 'no especificado', 'SCHNORR & BÃ–GER 2019.pdf'),
(57, 'AQUARA', 'TRATAMIENTO DE AGUA', 'JAVIER IBARROLA', 'no especificado', '4423344609', 'IACJ660525HX0', 'direccion@aquaramx.com', 'www.aquaramx.com	', 'no especificado', 'no especificado', 'no especificado', 'Carta de PresentaciÃ³n.pdf'),
(58, 'PROTECCIÃ“N TÃ‰CNICA INTERNACIONAL AGENTE DE SEGUROS Y FIANZAS SA DE CV', 'CORREDOR DE SEGUROS Y FIANZAS', 'SANDRA GALLEGO SOTO', 'LAGO EL VALLE NO. 120 CUMBRES DEL LAGO', '4422534014', 'PTI0907237B3', 'sandra.pina@protec.com.mx', 'www.protecint.com', 'no especificado', 'no especificado', 'no especificado', 'PROTEC PRESENTACION CURRICULUM.pdf'),
(59, 'RazÃ³n Social: Grupo Gira del Noroeste, S.C. Nombre Comercial: ', 'Servicios de CapacitaciÃ³n en Liderazgo y Desarrollo Organizacional, Conferencias de Talento Humano, Teambuilding, Eventos recreativos y temÃ¡ticos, Convenciones y Congresos', 'Benny Neyra; Asociada Comercial para QuerÃ©taro, CDMX y BCS', 'Gira cuenta con 4 puntos de operaciÃ³n a nivel nacional, por lo que es posible operar servicios simultaneamente en cualquier regiÃ³n del paÃ­s.', '5516988873', 'GGN-101202-G62', 'benny@girarecreacion.com', 'www.girarecreacion.com	', '	Productos Pennsylvania (fuera del PIQ)', 'Mann + Hummel', 'Scania (fuera del PIQ)', 'PresentaciÃ³n de Servicios Gira_2019 (1).pdf'),
(60, 'Coaching de Negocios del BajÃ­o, S.C.', 'Engagement, Coaching de Negocios, CapacitaciÃ³n y entrenamiento integral, Otdoor y sistema caÃ³rdico del aprendizaje.', 'Claudia Alejandra Velasco Celaya', 'Celaya	Calle Paseo Cuesta Bonita No. 315 B col. Cuesta Bonita QuerÃ©taro, Qro. cp 76063', '1606172', 'CNB1606172IA	', 'engage@actioncoachqueretaro.com.mx', 'www.egiberoamerica.com , www.engageandgrowglobal.com ', 'Empresa AUTECHNIK contacto Empresario Ing. JosÃ© Ortega cel. 4421799781', 'Empresa CESBA contacto Empresario Lic. Paolo Arondo cel. 4612008620', 'Empresa GROSHI contacto Empresario Lic. Felipe Guerrero cel. 9211383618', 'ACTIOCOAH & ENGAGE filmina.pdf'),
(61, 'Leasing de QuÃ©retaro', '	Arrendadora de vehÃ­culos, equipos de oficina y cÃ³mputo, equipo para carga o construcciÃ³n y equipo de maquinaria industrial, entre muchas otras opciones.', 'HÃ©ctor Anuar SÃ¡nchez', 'Av prolongacion Nte 950 D despacho 3 E', '4421755600', 'LQU100423BZ7	', 'hector@leasingdequeretaro.mx', 'http://www.leasingdequeretaro.mx/', 'no especificado', '	http://www.leasingdequeretaro.mx/', 'no especificado', 'brochure leasing .jpg'),
(62, 'GRUPO ALARIC SEGURIDAD PRIVADA S.A DE C.V', 'SEGURIDAD PRIVADA', 'DIRECTOR COMERCIAL RUFINO SANCHEZ MERIDA', '2a.Calle del laurel 114', '5576720171', 'GAS180110CR5', 'alaric.admon@gmail.com', 'www.alaricseguridadprivada.com.mx', 'CLEVER GLOBAL', 'GRS', 'S.I', 'PRESENTA ALARIC (POLANCO) (1).pdf'),
(63, 'La Bodega del Cafe	', 'istribuciÃ³n de cafÃ© orgÃ¡nico Chiapaneco y Veracruzano', 'Lic. Rodrigo FernÃ¡ndez / Lic. Marisa Fernandez', 'San Isidro Juriquilla CP 76226', '4424021934', '442-402-1934', 'ventas@labodegadelcafe.mx', 'www.labodegadelcafe.mx', 'Sonora Grill', 'Colegio NWL', '	Barcode', 'InvitaciÃ³n.pdf'),
(64, 'Coaching de Negocios del BajÃ­o, S.C.', 'Engagement, Coaching de Negocios, CapacitaciÃ³n y entrenamiento integral, Otdoor y sistema caÃ³rdico del aprendizaje.', 'Claudia Alejandra Velasco Celaya', 'Calle Paseo Cuesta Bonita No. 315 B col. Cuesta Bonita QuerÃ©taro, Qro. cp 76063', '4421188401', 'CNB1606172IA', 'engage@actioncoachqueretaro.com.mx', 'www.egiberoamerica.com  www.engageandgrowglobal.com ', 'Empresa AUTECHNIK contacto Empresario Ing. JosÃ© Ortega cel. 4421799781', 'Empresa CESBA contacto Empresario Lic. Paolo Arondo cel. 4612008620', 'Empresa GROSHI contacto Empresario Lic. Felipe Guerrero cel. 9211383618', 'PRESENTACION RESCEM 2019.pdf'),
(65, 'RESCEM', 'SORTEADORA', 'JOSUE GABRIEL LUNA RODRIGUEZ', 'MEZTLI 103 COL. TEOTIHUACAN C.P. 76116', '6673758935', 'LURJ9009151M3', 'josue_luna.rescem@outloo.es', 'https://www.facebook.com/RESCEMQRO/?ref=bookmarks', 'AECELOMITAL TUBULAR PRODUCTS MONTERREY SA DE CV', 'TECNOSTAMP TRIULZI', 'PLASTICOS W', 'PRESENTACION RESCEM 2019.pdf'),
(66, 'EEPAT DE MEXICO SA DE CV', 'SEGURIDAD ELECTRICA', 'GERARDO FELIX CAZARES	', 'ANTONIO CASO 65-C COL. SAN RAFAEL DEL. CUAUHTEMOC, CDMX', '5579021420', '	EME040824LS7', 'VENTAS08@EEPAT.COM', 'www.eepat.com', 'no especificado', 'no especificado', 'no especificado', 'catalogo 2018_ok.pdf'),
(67, 'Sergio Rionda Camacho', 'Suministro de Sopladores de Aire para plantas de tratamiento de aguas residuales', 'Sergio Rionda Camacho', 'Rio Bravo No 20 col Ojo de agua segunda seccion Tultitlan Edo de Mexico', '015562861153', 'SME-140922AGO', 'ventas@sopladoresmexico.com', 'no especificado', 'no especificado', 'no especificado', 'no especificado', '  '),
(68, 'Carlos Eduardo Uriegas Ruiz', 'Grupo Esscala Constructora', 'Carlos Uriegas, relaciones pÃºblicas', 'no especificado', '4422262531', 'no especificado', 'carlos@grupoesscala.mx', 'www.grupoesscala.,x', 'no especificado', 'no especificado', 'no especificado', 'book_esscala2019.pdf'),
(69, 'MARUMA VISIÃ“N Cecilia RÃ­os RÃ­os', 'Ã“ptica', 'Cecilia RÃ­os', 'Av. Santa Teresa 100 col. MisiÃ³n Candiles. Corregidora, QuerÃ©taro', '5549283253', 'TOJM7708152L5', 'Cecilia@maruma.com.mx', 'www.marumavision.com', 'Hotel Hotsson', 'Gitamsa', '	Grupo GastronÃ³mico Pampas', 'MARUMA stan2019 (3).pdf'),
(70, 'Taylor Dunn MÃ©xico', 'ComercializaciÃ³n vehÃ­culos elÃ©ctricos industriales', 'Mario Hernandez Lobera	', 'Calle 4 No. 5 BIS Naucalpan Estado de MÃ©xico', '0445551659025', 'TDM960829SR3', 'mahernandez@taylor-dunn.com.mx', 'http://taylor-dunn.com.mx/', 'Coca Cola', 'Volkswagen', 'Nissan', 'Taylor-Dunn GENERAL BROCHURE_2019.pdf'),
(71, 'aplicaciones silidriel', '	electricidad', 'no especificado', 'CERRO DE LAS CAMPANAS', '2177393', 'ASI900314CZ3', 'martinsoto@silidriel.com', '	http://www.silidriel.com/', 'no especificado', 'no especificado', 'no especificado', 'PresentaciÃ³n Silidriel.pdf'),
(72, 'ESTRUCTURA INTEGRAL DE CLIMAS S.A DE C.V.', 'Servicio de mantenimiento de aire acondicionado preventivo y correctivo', 'Viridiana Hernandez', 'NICOLAS BRAVO', '0000000000', 'EIC170714NIA', 'EICLISA.FACTURACION@YAHOO.COM', 'insproi@prodigy.net.mx', 'no especificado', 'no especificado', 'no especiicado', 'CARTA DE PRESENTACION EICLISA.docx'),
(73, 'ESTRUCTURA INTEGRAL DE CLIMAS S.A DE C.V.', 'Servicio de mantenimiento de aire acondicionado preventivo y correctivo', 'Viridiana Hernandez', 'NICOLAS BRAVO	', '0000000000', 'EIC170714NIA', 'EICLISA.FACTURACION@YAHOO.COM', 'insproi@prodigy.net.mx', 'no especificado', 'no especificado', 'no especificado', 'CARTA DE PRESENTACION EICLISA (2).docx'),
(74, 'SECOVISA, S.A. de C.V.', 'RefrigeraciÃ³n Comercial e Industrial -Aire Acondicionado -Sistemas VRF (Volumen de Refrigerante Variable) -Electricidad baja y media tensiÃ³n -Cocinas Industriales -Cableado Estructurado -Remodelaciones y Adecuaciones', 'Marco Antonio Cardona Valdez', 'AV. Universidad Poniente Las Rosas. C.P. 76164', '3313457361', 'SCV8906218AA', 'ventas1@secovisabajio.com.mx', 'www.secovisa.com.mx', 'no especificado', 'no especificado', 'no especificado', '  '),
(75, 'SISPE', 'Ventas/ReparaciÃ³n de Sistemas de Pesaje.', 'Gustavo GarcÃ­a Parra', 'cordillera ventana #1879 col. colinas del poniente cp:116', '3120505', 'GATG6209056C8', 'gustavo.parra@sispe.com.mx', 'www.sispe.com.mx	', 'Metecno', 'Eckerle', 'Co-oplanar', 'PresentaciÃ³n ( SISPE ) (2).pdf'),
(76, 'Proveedora de Metales Industriales Rrrase SAPI de CV', 'Recicladora', 'IvÃ¡n Jacobo', 'Baja California 211', '4612792371', 'PMI160405993', 'compras@gruporrrase.com', 'http://www.gruporrrase.com/', '.', '.', '.', 'RRRASE PRESENTACION.pdf'),
(77, 'SysRed', 'TI', 'Emilio GarcÃ­a Serrano', 'Cerro Alto 221, Privada Juriquilla, Qro', '4423411132', 'gase620618lf0', 'emilio.garcia@sysred.com.mx', 'www.sysred.com.mx', 'SEW Eurodrive', 'Young Chem', 'JyC Tech', 'Datos Bancarios EMILIO GARCÃA SERRANO.PDF'),
(78, 'Libertad Servicios Financieros, S.A. de C.V.', 'Servicios financieros: Ahorro, inversiÃ³n, crÃ©ditos al consumo y crÃ©ditos con descuento vÃ­a nÃ³mina', 'Cuauhtemoc JosÃ© Castillo Rangel', 'Blvd. Bernardo Quintana no. 9791, Centro Sur, C.P. 76090', ' 4421863888', ' LSF970101N35', 'ccastill@libertad.com.mx', 'libertad.com.mx', 'Gobierno del estado de Queretaro', 'Municipio de QuerÃ©taro', 'Gobierno del Estado de MÃ©xico', NULL),
(79, 'Grupo La Central Productos de Limpieza', 'Comercializadora de Productos de Limpieza', 'CP Carolina Niembro', 'Plaza Capuchinas 137 Col. Plazas del Sol 2a Secc', ' 4422234948', ' VAHM660429IT', 'ventas@gpolacentral.com', 'www.gpolacentral.com', 'Limpieza', 'QuÃ­micos', 'Papel de baÃ±o', NULL),
(80, 'Inspiranet QuerÃ©taro', 'Papeleria, ImpresiÃ³n.', 'Laura RodrÃ­guez', 'Hidalgo 185 Centro', ' 5543586253', ' RORD9310074K4', 'inspiranetqueretaro@gmail.com', 'Http:inspir@net', 'Hitech', 'Storage Services Renta Bodegas', 'CiTapia', NULL),
(81, 'MSN EQUIPOS INDUSTRIALES', 'INDUSTRIAL', 'SOCORRO ORDOÃ‘EZ IBARRA', '99A', ' 4424715670', ' MEI180131M19', 'zoeibarra17@hotmail.com', ' www.msnequiposindustriales.com', '4424715852', '5543549019', '4425032730', NULL),
(82, 'GRUPO PONCE DE LEON CONSTRUCCIONES S.A. DE C.V.', 'Calefaccion Infrarroja y venta de calderas de vapor', 'Mauricio Beltran', 'ALCANFORES 40, LAS AGUILAS, ALVARO OBREGON', ' 59144000', ' GPL100903859', 'mauricio@gplc.mx', 'www.gplc.mx', 'Draexlmaier Components Automotive de Mexico, S. de R. L. de C. V.', 'Bombardier Transportation Mexico S.A. de C.V.', 'AUTOLIV Steering Wheels Mexico S. de R.L. de C.V.', NULL),
(83, 'OFICOM   / SARA MORALES GÃ“MEZ', 'VENTA DE MOBILIARIO DE OFICINA', 'DINORAH NÃšÃ‘EZ', 'EJERCITO REPUBLICANO # 123-B    COL. CARRETAS', ' 4422240207', ' MOGS54073018', 'oficomventas@yahoo.com.mx', 'no especificado', 'no especificado', 'no especificado', 'no especificado', NULL),
(84, 'EUROELECTRICA S.A. DE C.V.', 'DISTRIBUCIÃ“N DE MATERIAL Y EQUIPO ELÃ‰CTRICO ', 'Octavio Badillo GonzÃ¡lez ', 'AV. AÃ‘O DE JUAREZ 253', ' 0445585934010', ' EUR930324493', 'euroventas125@euroelectrica.com.mx', 'www.euroelectrica.com.mx', 'Rassini suspensiones SA de CV : Edgar Anaya Mendoza Tel. 56991300', 'Bio Pappel SAB de CV : Ing. Sandra Marisol Gonzalez Alba Tel. 5880063', 'DISTRIBUIDORA ELECTRICA INDUSTRIAL JJA SA : Juan Reyes Tel. 53066240', NULL),
(85, 'Isuzu Queretaro', 'Comercializacion de camiones ligeros ', 'Norberto Gasca ', 'Blvd Bernanrdo Quintana 5002 San Pablo', ' 0445531002467', ' GAPN740930TC', 'norberto.gasca@isuzu-queretaro.com.mx', 'http://www.isuzuqueretaro.mx/', 'GAS NIETO', 'UNILEVER', 'GREENLAND', NULL),
(86, 'OFFICE DEPOT DE MÃ‰XICO SA DE CV', 'Venta de papelerÃ­a, artÃ­culos de oficina, mobiliario y electrÃ³nicos.', 'Carlos AlahÃ­n Camacho', 'Ezequiel Montes No. 8 Col. San Pablo TecnolÃ³gico, QuerÃ©taro.', ' 4422101849', ' ODM950324V2A', 'crivera@officedepot.com.mx', 'https://www.officedepot.com.mx/officedepot/en/', 'CJ LOGISTICS MEXICO SA DE CV ', 'SEAH PRECISION MEXICO SA DE CV', 'ISHIMITSU INDUSTRY MEXICO SA DE CV', NULL),
(87, 'THINK-IN', 'CURSOS DE IDIOMAS', 'LAURA VILLAFAÃ‘A', 'JURIQUILLA', ' 4422196510', ' VIJL670411', 'info@think-in.com.mx', 'https://www.facebook.com/thinkinmexico/', 'HABEN INMOBILIARIA', 'ALPACEL', 'RUCKSA', NULL),
(88, 'ENIGM4 SEC', 'SERVICIOS AVANZADOS DE SEGURIDAD INFORMÃTICA', 'MAURICIO JÃšAREZ', 'JURIQUILLA', ' 4426116440', ' JUMM651126', 'info@enigm4sec.com', 'https://enigm4sec.com', 'MITSUBISHI', 'FORD MEXICO', 'HABEN INMOBILIARIA', NULL),
(89, 'Llaga Creativos ', 'ProducciÃ³n Audio Visual', 'Oscar GarcÃ­a Islas', 'Av Constituyentes 100,Maestranza,42060 Pachuca de Soto,Hgo.', ' 7713597560', ' AAMJ77110845', 'llaga.relaciones.publicas@gmail.com', 'http://www.llaga.mx  ', 'DINA (Videos Institucionales y de seguridad)', 'UAEH  Video Informes', 'GreenBrier ( Videos Institucionales y de seguridad).', NULL),
(90, 'Laminas, Perfiles y Manufacturas  S de RL . de CV . ', 'SERVICIOS DE MAQUILA DE ACERO ', 'CLAUDIA ABARCA AGUILAR', 'CARRETERA LIBRE A CELAYA KM 6 COL . EL PUEBLITO', ' 6641516670', ' LPM110608NV6', 'ventas@lapyma.com.mx', 'www.lapyma.com.mx', 'REMODELACION  AMPLIACION AEROPUERTO QRO ', 'CASETA A  PALMILLAS ', 'TRABAJOS A  INDUSTRIA ( PEMEX, BACHOCO , RICSA ) ', NULL),
(91, 'TRACSA SAPI DE CV', 'Venta, renta, servicio y refacciones montacargas CATERPILLAR, MITSUBISHI, JUNGHEINRICH,KALMAR, ', 'Eduardo LÃ³pez', 'Carret. Libre a Celaya Km. 8+800 Fracc. Industrial Balvanera', ' 2110339', ' TRA800423S25', 'elopez@tracsa.com.mx', 'www.tracsa.com..mx', 'MARTINREA HONSEL', 'IMI PRECISION', 'KLUBER', NULL),
(92, 'CIESA LOGISTICS BAJIÃ“', 'LOGISTICA, Transporte, Agentes Aduanales , ALMACENAMIENTO ,IMMEX , VMI , Inhouse.', 'Omar Carranco SÃ¡nchez', 'Parque Industrial el Marques, El Marques QuerÃ©taro Qro.', ' 4612599586', ' CEI890926KG4', 'omar.carranco@ciesa.com.mx', 'www.ciesa.com.mx', 'Robert Bosch', 'Valeo', 'Carcoustics', NULL),
(93, 'TARIMAS RPM', 'FabricaciÃ³n de tarimas, cajones y huacales', 'Cristian Zarate', 'Av. Universidad 1710 Col. El Paseo, San Luis PotosÃ­, SLP, MÃ©xico. CP. 78320', ' 4448284778', ' ZAOC830517RF', 'tarimasrpm@gmail.com', 'http://www.maderamtc.com.mx', 'MAXION WHEELS', 'EATON', '.', NULL),
(94, 'RicohTech Printing Services', 'DiseÃ±o grÃ¡fico, publicidad e impresos digitales', 'Adriana Valencia', 'ProlongaciÃ³n TecnolÃ³gico SA de CV', ' 4422240316', ' RTE0707312R8', 'adriana.valencia@ricoh-ps.com', 'http://ricoh-ps.com/', 'Tribunal superior de Justicia del Estado de QuerÃ©taro', 'Instituto Queretano de la Mujer', 'Instituto Cinco de Mayo', NULL),
(95, 'CENTRO INTEGRAL DEL DESARROLLO EMPRESARIAL , ADMINITRACIÃ“N Y LOGÃSTICA', 'CAPACITACIÃ“N Y CONSULTORIA EMPRESARIAL', 'HONORINA GARCIA', 'J. Guadalupe Posada #106, Los Eucaliptos, Queretaro, QRO C.P 76150', ' 4424030930', ' GARH8002276L', 'capacitacion@cideal.com.mx', 'http://www.iso9001-2015.com.mx/', 'PISOS Y RECUBRIMIENTOS EPOXICOS', 'COPEFI, COMPONENTS FOR AUTOMOTIVE S.A.', 'PRETTEL DE MÃ‰XICO', NULL),
(96, 'SECOVI SAPI DE CV', 'REGULACIÃ“N Y RESPALDO DE ENERGÃA ELÃ‰CTRICA', 'FERNANDO LOPEZ ALVAREZ', 'CALLE ISLOTE 3091 COL SANTA EDUWIGES', ' 8115723329', ' SEC020910KC3', 'flopez@secovi.com', 'www.secovi.com', 'DANA EJES', 'ALESTRA', 'AXTEL', NULL),
(97, 'MRO911 SA DE CV', 'COMERCIALIZADORA', 'VANESSA HJERPE', 'AV EURIPIDES 1666 INT 9 EL REFUGIO', ' 1', ' MRO180529RJA', 'administracion@mro911.com.mx', 'www.mro911.com.mx', 'EguÃ­a Proyectos y Servicios', 'Safefit', 'Laser & Manufacturing', NULL),
(98, 'ConsultorÃ­a Empresarial ', 'Servicios de CapacitaciÃ³n, ConsultorÃ­a y AsesorÃ­a', 'Rosalba Jimenez Rodriguez', 'Calle 43 poniente 2305 Col. Granjas Atoyac Puebla', ' 2227193830', ' AARM720502CM', 'improving.systems@hotmail.com', 'http://www.improving-systems.com/', 'Tork Electro Sistemas', 'Trefilados Inoxidables de MÃ©xico', 'Wallenius Wilhelmsen Logistics Puebla', NULL),
(99, 'PROVEEDOR INDUSTRIAL SANTIAGO', 'FABRICACION DE MECANISMOS, SOLDADURA Y PAILERIA', 'JOSE LUIS VAZQUEZ RODRIGUEZ', 'GRANATE 209 SN PEDRITO PEÃ‘UELAS CP.76148 QUERETARO', ' 4424796589', ' VARL780616V7', 'ventas1@provinsa.mx', 'www.provinsa.mx', 'LETICIA GARZA 442 1926700', 'ALEJANDRA GONZALEZ 442 2283170', 'LUIS ARTURO LOPEZ 442 8000080', NULL),
(100, 'Lava Seco de QuerÃ©taro', 'Servicios de Limpieza y Venta de Maquinaria de Limpieza', 'Alejandro de la Rosa', 'Sierra de Anichapan 104 Col. Villas del Sol', ' 2', ' LSQ1410277Q2', 'ventas@lava-seco.com', 'http://www.lava-seco.com/', 'Mann+Hummel', 'AdministraciÃ³n Parque Industrial QuerÃ©taro', 'Crown Montacargas', NULL),
(102, 'QGAHT S.A DE C.V.', 'GRASAS Y LUBRICANTES INDUSTRIALES', 'RAMON GARZA H.', 'ANACLETO NO. 3100 COL. LAS GRANJITAS LA SILLA GUADALUPE NUEVO LEON.', ' 8122649802', ' QGA1009061E0', 'ventas.queretaro@qgaht.com.mx', 'WWW.QGAHT.COM.MX', 'JUAN FRANCISCO LOYOLA', 'ANDRES GARZA RAMIREZ', 'LUIS BELTRAN GONZALEZ', NULL),
(103, 'CIASA COMERCIAL', 'COMERCIO INDUSTRIAL', 'EDITH GABRIELA ESCOBAR GONZALEZ', 'BLVD. ADOLFO LOPEZ MATEOS #1143 COL. BARRIO DEL COECILLO LEON GTO', ' 4774012450', ' CCO851108HG7', 'ventasleon2@ciasamexico.com', 'www.ciasamexio.com', 'compactadora o prensa vertical', 'perforadora de carton', 'destructora de documentos', NULL),
(104, 'AGENCIA DE VIAJES MERI', 'SERVICIOS DE TRANSPORTE Y HOSPEDAJE EMPRESARIAL', 'IRIS ENRIQUEZ', 'CORDILLERA DE LOS ANDES 602 ( PLANTA ALTA )  C.P. 76118 ', ' 4424833423', ' EIHI771109DM', 'iris@agenciadeviajesmeri.com', 'www.agenciadeviajesmeri.com', 'MERTOCAL', 'INMOBILIARIA ARRALLANES', 'MABESA', NULL),
(105, 'ORGANIZACIÃ“N CONSULTORA DE PROYECTOS S.A. DE C.V. ', 'CONSTRUCCIÃ“N ', 'KARLA CEDILLO ', 'FERMIN ESPINOZA ARMILLITA NO. 959 CP. 25000 SALTILLO, COAHUILA.', ' 8119770495', ' OCP1003089R5', 'kcedillo@ocp.mx', 'www.ocp.mx', 'Refacciones NeumÃ¡ticas la Paz, S.A. de C.V. DIRECCION: Manzana C Lote 1 Parque Industrial C.P. 78760 Matehuala, S.L.P.       CONTACTO: Yadira Perales MartÃ­nez       TELEFONO: 488 8 82 04 43', 'Copachisa, S.A. de. C V.       DIRECCION: Ave. Eugenio Garza Sada NÂ° 4601 Col. Condesa C.P. 64880 Monterrey, N.L.       CONTACTO: Enrique Reyes Quezada       TELEFONO: 614 161 16 79', 'Turck Mexic, S. de R.L. de C.V. DIRECCION: Blvd. MÃ©xico NÂ° Arteaga, Coah.       CONTACTO: Liz Margarita Cedillo Murillo       TELEFONO: 844 4 11 66 50', NULL),
(106, 'ICS Group Inc. - CARLISLE', 'Membranas - ImpermeabilizaciÃ³n', 'EUNICE JIMENEZ', '2355 Crenshaw Blvd., Suite 160 Torrance, CA, 90501 â€¢ USA', ' 5569706385', ' NA', 'e.jimenez@carlisle-lac.com', 'www.carlisle-lac.com', 'ARENA GUADALAJARA - MEMBRANA IMPERMEABILIZANTE TPO', 'HEINEKEN COLOMBIA - MEMBRANA IMPERMEABILIZANTE TPO', 'PLANTA KIA PESQUERÃA N.L. - MEMBRANA IMPERMEABILIZANTE TPO', NULL),
(107, 'HIDROSISTEMAS BAJA S DE RL DE CV', 'SISTEMAS CONTRA INCENDIO', 'FRANCISCO LICHTEMBERG ORDAZ', 'Carr. Qro-SLP #22101 Micro Industrial Integra int. 14 Col. Santa Rosa Jauregui, Queretaro, Qro. CP 76220 ', ' 524422191407', ' HBA970404S58', 'FLICHTEMBERG@HB.COM.MX', 'www.hb.com.mx', 'VESTA', 'NOVEM', 'EATON', NULL),
(108, 'Comercial de Portatroqueles y Accesorios SA de CV', 'Refacciones para Troqueles y moldes de InyecciÃ³n de plÃ¡stico y fundiciÃ³n a presiÃ³n', 'Antonio GarcÃ­a Bouchain  o AngÃ©lica Blanco SolÃ­s', 'Acceso II #16 Local 6 Fracc. Industrial Benito JuÃ¡rez QuerÃ©taaro Qro.', ' 1958991', ' CPT840820M37', 'antoniogarciab@cpacsa.com', 'www.cpacsa.com', 'Troquelados Queretaro', 'ViÃ±oplastic', 'New Mold', NULL),
(109, 'CIDESI', 'Desarrollo tecnolÃ³gico, investigaciÃ³n y servicios', 'Cesar Eduardo Martinez Moreno', 'Av. Playa Pie de la Cuesta 702', ' 2119800', ' CID840309UG7', 'cmartinez@cidesi.edu.mx', 'https://www.cidesi.com', 'CIDETEQ', 'Eurotranciatura', 'Valeo', NULL),
(110, 'KOLMENERO BIENES RAICES', 'VENTA Y RENTA DE CASAS Y DEPARTAMENTOS EN JURIQUILLA Y ALREDEDORES', 'OSCAR VAZQUEZ', 'LOMA DE AJUCHITLAN 73', ' 4427900031', ' VAMO710224', 'ovazquez71@gmail.com', 'http://www.kolmenero.com/', '4421406912', '4423419547', '4423419547', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tvacantes`
--

CREATE TABLE `tvacantes` (
  `id_vac` int(11) NOT NULL,
  `emp_vac` varchar(80) DEFAULT NULL,
  `puesto` varchar(80) DEFAULT NULL,
  `Perfil_puesto` longtext NOT NULL,
  `expe` longtext,
  `idioma_add` varchar(30) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `rfc` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tvacantes`
--

INSERT INTO `tvacantes` (`id_vac`, `emp_vac`, `puesto`, `Perfil_puesto`, `expe`, `idioma_add`, `nom`, `tel`, `correo`, `add_date`, `rfc`) VALUES
(104, 'Fabri Quilt', 'Aux. AlmacÃ©n ', 'Sexo  Masculino, de 18 a 42 aÃ±os, secundaria terminada, experiencia mÃ­nima 6 meses, disponibilidad de horario. ', '6 meses ', 'EspaÃ±ol ', 'Mayra Barcenas', '4422420905', 'mbarcenas@fabri-quilt.com', '2019-04-22', 'FQM000215LI6'),
(102, 'Fracsa Alloys', 'Ayudante General', 'Mayor de edad, Disponibilidad rolar turnos. Preferentemente hombres', 'ninguna', 'espaÃ±ol', 'Maribel Arvizu', '4424138761', 'maribel.arvizu@fracsa.com.mx', '2019-04-03', 'FAS150302EZ4'),
(103, 'Fracsa Alloys', 'Montacargas', 'Sexo masculino. Disponibilidad de rolar turnos. DC-3', 'Licencia como Montacargas DC-3', 'espaÃ±ol', 'Maribel Arvizu', '4424138761', 'maribel.arvizu@fracsa.com.mx', '2019-04-03', 'FAS150302EZ4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tvacantes`
--

CREATE TABLE `Tvacantes` (
  `id_vac` int(11) NOT NULL,
  `emp_vac` varchar(80) DEFAULT NULL,
  `puesto` varchar(80) DEFAULT NULL,
  `profesion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `escol` varchar(150) DEFAULT NULL,
  `edad` varchar(30) DEFAULT NULL,
  `ingles` varchar(50) DEFAULT NULL,
  `exp` blob,
  `obser` blob NOT NULL,
  `idioma_add` varchar(30) DEFAULT NULL,
  `conocimientos` blob,
  `nom` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `add_date` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `rfc` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`, `rfc`) VALUES
(72, 'Brian Aguado Mora', 'b.aguado7176@gmail.com', 'rightgaurd7176', 'AUMB950527GH8'),
(61, 'Zaida Aldape Castillo', 'zaida.aldape@gmail.com', 'DFje9377_', 'AACZ960930IV9'),
(60, 'Juan Manuel MuÃ±oz GonzÃ¡lez', 'juanm48munoz@hotmail.com', 'pandas48', 'MUGJ920804G85'),
(8, 'ROSA ISELA CALDERON CISNEROS', 'rossis_cc1928@live.com', 'calderon28', 'CACR931228S3A'),
(9, 'Larisa Cortinas Ruiz', 'cortinaslarisa@gmail.com', 'jjlc2504', 'CORL2506948L2'),
(10, 'Blanca Robles ', 'blancarp7@gmail.com', 'fresas30', 'ROPB6408302R5'),
(11, 'Mariel PÃ©rez BeltrÃ¡n', 'Mariel_diciembre@hotmail.com', '240617', 'Peba921227'),
(12, 'MarÃ­a Azucena Quies', 'correo@correo.com', '123456', 'GCO811024P40'),
(13, 'iveth Patricia AlarcÃ³n RamÃ­rez ', 'iveth.alarconramirez@yahoo.com', 'palomitas16', 'AARI920816EU7'),
(14, 'Michelle Mendoza', 'mich020795@hotmail.com', 'Ma620261', 'MEVM950702MDFNGC06'),
(15, 'Julio Alejandro Reyes Santiago', 'julioreyes1402@gmail.com', 'R3Y35.1402', 'resj940214lz9'),
(16, 'PATRICIA', 'ramirpat@hotmail.com', 'ramirpat', 'RABP680328'),
(17, 'Karina ResÃ©ndiz', 'kariresher@gmail.com', 'justanothergirl', 'REHK960216IV3'),
(18, 'Carlos Alfredo CatalÃ¡n CatalÃ¡n', 'charlesing92@gmail.com', 'ACDClive92', 'CACC920420AA06'),
(19, 'Horacio Perea Ibarra', 'horacioperea859@gmail.com', 'sonidoberlin2092', 'PEIH920420JG6'),
(20, 'Ramon Eduardo Ramos Borbon', 'eduardo.ramos6@gmail.com', 'Volovan65', 'Hermosillo, Sonora'),
(21, 'Diana Clarisa Loza Meza', 'dianaloza@gmail.com', '05021983', 'LOMD830205'),
(22, 'Ramon Eduardo Ramos Borbon', 'eduardo.ramos6@gmail.com', 'Volovan65', 'RABR8108299w3'),
(23, 'Rafael Moreno Ortiz', 'rafamor97@gmail.com', 'moreno199222', 'MOOR920922TN6'),
(24, 'Francisco Toriz Briones', 'paco_ftb@hotmail.com', '7225toro', 'TOBF901221P29'),
(25, 'Manuel Moises ', 'manuel.hguerrero@hotmail.com', 'entersandman', 'Ingeniero de Mantenimiento'),
(26, 'MARIA FERNANDA PIÃ‘A RODRIGUEZ', 'm_f_p_r@hotmail.com', 'amp10sep98', 'PIRF710924'),
(27, 'Jeher Antonio HernÃ¡ndez Zepeda', 'jeherhernandez.ili@gmail.com', 'Jeherparque', 'HEZJ950118AF0'),
(28, 'MARIA YEMILE BARRON RAZO', 'mybr_18@hotmail.com', 'narkia99', 'BARY931218G54'),
(29, 'Lidia', 'lidia092@hotmail.com', 'angelica789', 'cusl9208036c9'),
(30, 'Yaneli Islas', 'yaneislass@hotmail.com', 'empleo1', 'IALY9104273F8'),
(31, 'Karina Viveros Albarran', 'karina.va054@gmail.com', '23KVAKPOP', 'VIAK9405234E8'),
(32, 'Lizbeth Ursua', 'ursuacruz@gmail.com', 'aventura2293', 'UUCL930922UMA'),
(33, 'abraham diaz', 'abraham.diazkim@gmail.com', '200%Prohibida', 'N/A'),
(34, 'Jonatan Abisay', 'inge-jonajarillo-26@hotmail.com', '26santiaGo04', 'JRRMJN91032613H'),
(35, 'Jonatan Abisay Jarillo RamÃ­rez', 'inge-jonajarillo-26@hotmail.com', '23santiaGo04', 'JRRMJN91032613H'),
(36, 'RaÃºl Adur MustafÃ¡ Navarrete', 'adurmn@gmail.com', 'Tacos@1993', 'MUNR9310212Q9'),
(37, 'Adrian Alderete Tolentino', 'adrian_alderete93@hotmail.es', 'jesyadrian93', 'AETA9307021R4'),
(38, 'Blanca Robles ', 'administracion@piq.com.mx', 'fresas30', 'ROPB6408302R5'),
(39, 'JAIRO AGUSTIN ZARATE TINAJERO', 'jairo.zarate@homtail.com', 'jairozarate7', 'ZATJ970607V89'),
(40, 'JAIRO AGUSTIN ZARATE TINAJERO', 'jairo.zarate@hotmail.com', 'jairozarate7', 'ZATJ970607V89'),
(41, 'Iridian', 'iridianpin@gmail.com', 'Ipili95*', 'PILI9507201L5'),
(42, 'Laura Elena RamÃ­rez Blass', 'inglaurablass@outlook.com', 'carita0404', 'RABL830706J86'),
(43, 'Horacio Olea Salgado', 'olea_horacio@yahoo.com', 'lachin74', 'OESH740822PL2'),
(44, 'Marcela AlcÃ¡zar Manzo', 'marce33211@hotmail.com', 'Ranita1215!!', 'AAMM9003101Z0'),
(45, 'Gerardo LÃ³pez MartÃ­nez', 'gerardooes@gmail.com', 'ledzeppelin86', 'LOMG860506JI1'),
(46, 'Andres NuÃ±ez Balcazar', 'e.nunezbalcazar@gmail.com', 'endyqueretaro', 'NUBA9311197P9'),
(47, 'Marcela', 'perezmarce94@gmail.com', '123456789', 'PESM940514MHGRNR01'),
(48, 'Francisco Toriz Briones', 'paco_ftb@hotmail.com', '7225toro', 'TOBF901221P29'),
(49, 'Octavio Antonio Quintana Llamas', 'octavioaqu@gmail.com', '96quintanaO', 'QULX960403SB5'),
(50, 'Roberto Rostro', 'jr_rostro@outlook.com', 'Luca1009', 'rogr820528'),
(51, 'Aurea Magdalena', 'aurea.rendon@gmail.com', 'Amrc2213', 'RECA9603265I5'),
(52, 'CÃ©sar Gerardo PeÃ±a Tapia', 'cesargpt@gmail.com', 'empleo/2019', 'PETC870719BR9'),
(53, 'Maribel Arvizu', 'maribel.arvizu@fracsa.com.mx', 'FRACSA2019', 'FAS150302EZ4'),
(54, 'MARIA DE JESUS', 'goy_iram@hotmail.com', 'mariadejesus', 'RAEJ920226MB8'),
(55, 'Patricia Isabel Villanueva GarcÃ­a ', 'patito_cenaajohn@hotmail.com', 'ilovesebastian', 'VIGP950629VB8'),
(56, 'Miguel Resendiz', 'mikolresendiz@gmail.com', 'ch1l3kas', 'REGM9008011G4'),
(57, 'facturacion', 'comadministracion@administracion.com', '123456', 'RFCDPRUEBA'),
(71, 'JoaquÃ­n Emilio CortÃ©s MejÃ­a', 'JoaquinECM@outlook.com', 'DamonBaird2211942403', 'COMJ941122HMNRJQ08'),
(59, 'LUIS ANGEL AVILA OLVERA ', 'angelavilaolvera@hotmail.com', 'motocross11', 'AIOL950127HR8'),
(64, 'administracion1', 'facturapiq@piq.com.mx', 'FACTPIQ2019', 'ROPB6408302R5'),
(65, 'administracion2', 'contabilidadpiq@piq.com.mx', 'FACTPIQ2019', 'ROPB6408302R5'),
(66, 'administracion3', 'mtrejo@piq.com.mx', 'FACTPIQ2019', 'ROPB6408302R5'),
(70, 'HORUS INMOBILIARIA SA DE CV', 'rvillanueva@piq.com.mx', 'DRMENA5209', 'HIN050726ED1'),
(69, 'ASOCIACION PARQUE INDUSTRIAL QUERETARO AC', 'facturaapiq@piq.com.mx', '654321', 'API990623912'),
(73, 'RODOLFO MARTINEZ', 'RODOLFOZENIT@GMAIL.COM', '01JUNIO1993', 'MAMR930601FB4'),
(74, 'Gustavo Israel Cisneros VÃ¡zquez', 'gicv123@gmail.com', 'emperador', 'civg760930dj3'),
(75, 'Karla Guzman Carrasco', 'karlagc7@hotmail.com', 'job2020', 'guck841115mvzzrr09'),
(76, 'EDGAR CANCINO VERA', 'edgarcvecv1991@outlook.es', '1991ecv1', 'CAVE910802I28'),
(77, '\r\nBlanca Robles', 'administracionproveedores@piq.com.mx', 'blancarp30', 'ROPB6408302R5'),
(79, 'azucena', 'azuquig@hotmail.com', '1234567', 'ABCDEF'),
(80, 'DIYANI LOO MÃ‰NDEZ SUÃREZ  ', 'diyani0594@hotmail.com', '052508dja', 'MESD940605BI3'),
(81, 'Ana Patricia Frias Rosas', 'f.rosas.patricia@gmail.com', 'fira940617', 'FIRA940617IM1'),
(82, 'Zayde Elizabeth NÃºÃ±ez Montoya', 'zayde_nunez@hotmail.com', 'SWeden-Stockholm723', 'NUMZ940729'),
(83, 'interactuamkt', 'programacion@interactua-mkt.mx', 'interactua2019', 'ABI850726CM7F'),
(84, 'Jazmin Guadalupe HernÃ¡ndez Reyes', 'jazmin.hdzr@outlook.com', 'gustavo29', 'HERJ911221Q85'),
(85, 'Fabri Quilt de MÃ©xico ', 'mbarcenas@fabri-quilt.com', 'piqfabri042', 'FQM000215LI6'),
(86, 'ISRAEL GONZALEZ CERDA', 'isra_taba@hotmail.com', 'webos1906', 'GOCI880402RX4'),
(87, 'Daniel', 'danielreyescruz13@gmail.com', 'Queretaro13', 'RECD931113BD2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_facturacion`
--

CREATE TABLE `usuarios_facturacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rfc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_facturacion`
--

INSERT INTO `usuarios_facturacion` (`id`, `nombre`, `correo`, `clave`, `rfc`) VALUES
(1, 'administracion1', 'facturapiq@piq.com.mx', 'FACTPIQ2019', 'ROPB6408302R5'),
(2, 'interactuamkt', 'programacion@interactua-mkt.mx', 'interactua2019', 'ABI850726CM7F');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tvacantes`
--
ALTER TABLE `tvacantes`
  ADD UNIQUE KEY `id_vac` (`id_vac`);

--
-- Indices de la tabla `Tvacantes`
--
ALTER TABLE `Tvacantes`
  ADD UNIQUE KEY `id_vac` (`id_vac`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_facturacion`
--
ALTER TABLE `usuarios_facturacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `tvacantes`
--
ALTER TABLE `tvacantes`
  MODIFY `id_vac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `Tvacantes`
--
ALTER TABLE `Tvacantes`
  MODIFY `id_vac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `usuarios_facturacion`
--
ALTER TABLE `usuarios_facturacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
