-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2020 at 11:52 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myMoscow`
--
CREATE DATABASE IF NOT EXISTS `myMoscow` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myMoscow`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `aboutText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `aboutText`) VALUES
(1, 'Мы&nbsp;&mdash; команда тех, кто любит Москву и&nbsp;ее историю.'),
(2, 'Maecenas ante arcu, placerat et mauris id, faucibus semper mi. Maecenas eget vulputate justo. Nulla elit risus,  convallis vitae erat ac, hendrerit rhoncus purus. In sed sapien tortor. Vestibulum eget tempor dolor. Phasellus nec facilisis nisi, condimentum luctus enim. Proin id erat id odio feugiat efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi semper vulputate ante vitae iaculis. Vestibulum finibus a eros et eleifend.'),
(3, 'Aliquam quis efficitur mi. Mauris eget eros in nisl gravida scelerisque. Curabitur placerat gravida leo eu convallis. Duis aliquam augue vitae urna pharetra luctus.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `workHours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `service`, `email`, `tel`, `workHours`) VALUES
(1, 'Заказать экскурсию', 'trip@mymoscow.ru', '8 (499) 722-22-37', '12.00&ndash;21.00, без выходных'),
(2, 'Заказать фотосессию', 'foto@mymoscow.ru', '8 (499) 722-22-37', '12.00&ndash;21.00, без выходных'),
(3, 'Клуб', 'friends@mymoscow.ru', '8 (499) 722-22-38', '12.00&ndash;22.00, без выходных'),
(4, 'Сувенирная лавка', 'souvenires@mymoscow.ru', '8 (499) 722-22-39', '10.00&ndash;22.00, без выходных'),
(5, 'Закупки', 'purchase@mymoscow.ru', '8 (499) 722-22-36', '10.00&ndash;19.00, пн-пт'),
(6, 'Партнерство', 'partnership@mymoscow.ru', '8 (499) 722-22-35', '10.00&ndash;19.00, пн-пт');

-- --------------------------------------------------------

--
-- Table structure for table `contactsGeneral`
--

CREATE TABLE `contactsGeneral` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactsGeneral`
--

INSERT INTO `contactsGeneral` (`id`, `address`, `email`, `tel`) VALUES
(1, 'Москва, Большая Спасская, 12', 'moscow@mymoscow.ru', '8 (499) 722-22-37');

-- --------------------------------------------------------

--
-- Table structure for table `fotoReports`
--

CREATE TABLE `fotoReports` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `altText` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fotoReports`
--

INSERT INTO `fotoReports` (`id`, `foto`, `altText`) VALUES
(1, '1_Embankment.jpg', 'Набережная у Нескучного сада'),
(2, '2_MoscowCity.jpg', 'Москва-сити'),
(3, '3_Polytech.jpg', 'Новая площадь'),
(4, '4_Ship.jpg', 'Речные прогулки'),
(5, '5_MGU.jpg', 'МГУ'),
(6, '6_Zhivopisny_Bridge.jpg', 'Живописный мост'),
(7, '7_Mosfilm.jpg', 'Мосфильмовская'),
(8, '8_Kremlin.jpg', 'Кремль');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newsDate` varchar(255) NOT NULL,
  `newsText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newsDate`, `newsText`) VALUES
(1, '31 октября 2019', 'Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra,\r\n                    per inceptos himenaeos.'),
(2, '10 октября 2019', 'Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'),
(3, '26 сентября 2019', 'Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.');

-- --------------------------------------------------------

--
-- Table structure for table `pages_all_intro`
--

CREATE TABLE `pages_all_intro` (
  `id` int(10) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages_all_intro`
--

INSERT INTO `pages_all_intro` (`id`, `page_name`, `title`, `description`) VALUES
(1, 'main', 'Необычная Москва', '<p><span class=\"logoT\"><span>My</span>.Moscow</span>&nbsp;&mdash; агентство интересных маршрутов&nbsp;&mdash; приглашает на самые разные экскурсии по&nbsp;Москве: автобусные и&nbsp;пешеходные, на&nbsp;целый день или несколько часов, на&nbsp;свежем воздухе или по&nbsp;музеям&nbsp;&mdash; у&nbsp;нас более двадцати авторских экскурсий по&nbsp;городу.</p>\r\n<p>Выбирайте маршрут и&nbsp;узнавайте Москву вместе с&nbsp;нами!</p>'),
(2, 'routs', 'Маршруты', '<p><span class=\"logoT\"><span>My</span>.Moscow</span>&nbsp;&mdash; агентство интересных маршрутов&nbsp;&mdash; приглашает на самые разные экскурсии по&nbsp;Москве: автобусные и&nbsp;пешеходные, на&nbsp;целый день или несколько часов, на&nbsp;свежем воздухе или по&nbsp;музеям&nbsp;&mdash; у&nbsp;нас более двадцати авторских экскурсий по&nbsp;городу.</p>\r\n<p>Выбирайте маршрут и&nbsp;узнавайте Москву вместе с&nbsp;нами!</p>'),
(3, 'contacts', 'Обратная связь', '<p>Если у&nbsp;вас есть вопросы, идеи маршрутов, конструктивные замечания или предложения&nbsp;&mdash; пожалуйста, свяжитесь с&nbsp;нами любым удобным для вас способом&nbsp;&mdash; мы открыты для общения! А&nbsp;еще лучше&nbsp;&mdash; приезжайте к&nbsp;нам в&nbsp;гости и&nbsp;вступайте в&nbsp;наш клуб&nbsp;&mdash; там, помимо замечательных людей и&nbsp;интересного общения, есть еще вкусный кофе, чай и печенье!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `routs`
--

CREATE TABLE `routs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `altText` varchar(255) NOT NULL,
  `routName` varchar(255) NOT NULL,
  `routDescription` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routs`
--

INSERT INTO `routs` (`id`, `image`, `altText`, `routName`, `routDescription`, `duration`, `price`) VALUES
(1, 'Moscow_City.jpg', 'Москва-сити', 'Экскурсия в комплекс Москва-сити', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis rhoncus nunc. In in dolor iaculis, accumsan nisi at, facilisis risus. Morbi pharetra ac risus non congue. Nulla facilisi. Phasellus eget sapien at ligula vestibulum tincidunt a rhoncus orci. Aenean ac fermentum odio. Duis dolor arcu, porttitor at maximus in, bibendum vel urna. Nam iaculis eget velit sed finibus. Quisque rhoncus luctus libero eget cursus.\r\n</p>\r\n<p>\r\nIn hac habitasse platea dictumst. Maecenas molestie ultricies dictum. Mauris imperdiet purus lectus, non aliquam mauris malesuada ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper pellentesque risus, at pharetra sapien ornare sit amet. Vestibulum at purus volutpat.\r\n</p>', '2 часа', '2300 руб.'),
(2, 'Stalin.jpg', 'МГУ', 'Легенды Сталинских высоток', '<p>\r\nNulla facilisi. Sed ornare urna dolor, facilisis aliquet orci scelerisque in. Curabitur tristique, turpis at tristique faucibus, diam nisi mollis odio, vitae molestie magna dui vel sapien. Maecenas placerat tincidunt turpis, ac gravida nisi dictum id.\r\n</p>\r\n<p>\r\nUt placerat dictum pulvinar. Curabitur mattis ex egestas, vulputate arcu nec, pellentesque purus. Sed vitae ultrices lectus. Ut eget congue erat. Quisque in fermentum sapien. Cras et tellus massa.  \r\n</p>', '3 часа', '2900 руб.'),
(3, 'Bulgakov.jpg', 'Булгаковская Москва', 'По следам Мастера и Маргариты', '<p>\r\nEtiam euismod auctor justo, eget porttitor libero convallis ac. In quis rutrum lorem. Aenean rutrum magna libero, id dapibus erat eleifend vel. Fusce mollis eu nisl at laoreet. Fusce turpis arcu, ultricies rhoncus posuere id, lacinia eget dolor. Fusce vitae auctor ante, in ultricies erat. Nam a justo leo.\r\n</p>\r\n<p>\r\nMauris gravida sem libero, nec semper ligula pellentesque luctus. Fusce et porta ante. Praesent vitae odio tempor, fringilla mauris quis, finibus odio. Nunc purus leo, mattis eu dolor vitae, tincidunt hendrerit est. Donec eu massa posuere, facilisis nisi quis, volutpat magna. Integer nunc mauris, fermentum at ex id, porta dignissim turpis. Sed ac lectus quis sapien scelerisque sollicitudin.\r\n</p>', '1.5 часа', '1900 руб.'),
(4, 'Metro.jpg', 'Московское метро', 'Московское метро', '<p>\r\nProin ut eros ut odio sollicitudin accumsan id quis massa. Integer nibh massa, euismod eu condimentum a, consequat eget diam. Aliquam vitae volutpat arcu. Curabitur venenatis ligula ac arcu aliquam sagittis. Nullam suscipit, elit a aliquet auctor, neque ligula dapibus erat, at consectetur diam lacus eget ipsum. Phasellus gravida dui vitae rutrum placerat. Morbi elementum auctor sem id facilisis. Aenean fringilla vulputate convallis. Mauris neque diam, interdum nec tortor eget, tempus porttitor neque. Cras eu laoreet eros, in viverra massa. Curabitur vulputate at magna id facilisis. Donec dapibus nunc orci, id dignissim magna molestie ac. Ut sed consequat neque.\r\n</p>', '1 час', '1500 руб.');

-- --------------------------------------------------------

--
-- Table structure for table `routsReserved`
--

CREATE TABLE `routsReserved` (
  `id` int(11) NOT NULL,
  `routID` int(11) NOT NULL,
  `routName` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routsReserved`
--

INSERT INTO `routsReserved` (`id`, `routID`, `routName`, `userID`, `comment`) VALUES
(1, 2, 'Легенды Сталинских высоток', 8, ''),
(2, 4, 'Московское метро', 2, ''),
(3, 1, 'Экскурсия в комплекс Москва-сити', 6, ''),
(4, 3, 'По следам Мастера и Маргариты', 9, 'Пожалуйста, звоните только в эти часы: 11.00–20.00.'),
(5, 3, 'По следам Мастера и Маргариты', 10, ''),
(6, 3, 'По следам Мастера и Маргариты', 11, ''),
(7, 3, 'По следам Мастера и Маргариты', 12, 'Лучше связываться по e-mail.'),
(8, 2, 'Легенды Сталинских высоток', 13, 'Нужно забронировать 3 места'),
(9, 1, 'Экскурсия в комплекс Москва-сити', 15, 'А сколько человек в группе?'),
(10, 1, 'Экскурсия в комплекс Москва-сити', 18, ''),
(15, 4, 'Московское метро', 26, '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `altText` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `altText`, `serviceName`, `serviceDescription`) VALUES
(1, 'map.png', 'Карта', 'Необычные маршруты', 'Мы обязательно порадуем вас необычными маршрутами Москвы, которые прокладывают наши опытные гиды таким образом, чтобы показать город с&nbsp;совершенно иного ракурса!'),
(2, 'compass.png', 'Компас', 'Интересные экскурсии', 'У нас более двадцати различных экскурсий, во&nbsp;время которых можно познакомиться с&nbsp;главными городскими достопримечательностями, побывать в&nbsp;замечательных музеях и&nbsp;картинных галереях или&nbsp;же просто прогуляться по&nbsp;старинным пешеходным улицам Москвы, узнавая их историю и&nbsp;делая красивые фотографии.'),
(3, 'discussion.png', 'Общение', 'Новые знакомства', 'Мы не&nbsp;просто агентство, но еще и&nbsp;целый клуб, где после прогулок и&nbsp;экскурсий можно обмениваться впечатлениями, продолжать общение и&nbsp;знакомиться с&nbsp;новыми людьми, которым интересна Москва.'),
(4, 'picture.png', 'Фотографии', 'Фотосессии в Москве', 'Мы сотрудничаем с&nbsp;замечательными фотографами и&nbsp;можем организовать как индивидуальную фотосессию в&nbsp;городе, так и&nbsp;репортажную фотосъемку во&nbsp;время экскурсии по&nbsp;Москве.'),
(5, 'souvenir.png', 'Сувенир', 'Сувениры на память', 'У&nbsp;нас есть собственный магазин сувениров, придуманных и&nbsp;разработанных нашей командой специально для вас! В&nbsp;нашем магазине есть даже авторские, выполненные в&nbsp;единственном экземпляре симпатичные вещицы&nbsp;&mdash; заходите к&nbsp;нам в&nbsp;гости!'),
(6, 'sun.png', 'Солнце', 'Яркие впечатления', 'Самое важное, к&nbsp;чему мы стремимся,&nbsp;&mdash; это подарить вам хорошие воспоминания, яркие эмоции и&nbsp;отличное настроение!');

-- --------------------------------------------------------

--
-- Table structure for table `socialNetworks`
--

CREATE TABLE `socialNetworks` (
  `id` int(11) NOT NULL,
  `href` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `altText` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socialNetworks`
--

INSERT INTO `socialNetworks` (`id`, `href`, `icon`, `altText`) VALUES
(1, 'https://vk.com', 'vk.svg', 'vkontakte'),
(2, 'https://www.facebook.com', 'fb.svg', 'facebook'),
(3, 'https://www.instagram.com/?hl=ru', 'insta.svg', 'instagram');

-- --------------------------------------------------------

--
-- Table structure for table `userComments`
--

CREATE TABLE `userComments` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userComment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userComments`
--

INSERT INTO `userComments` (`id`, `avatar`, `userName`, `userComment`) VALUES
(1, 'Nastya.png', 'Анастасия', 'Vivamus pretium augue eu feugiat lacinia. Aliquam tincidunt nisi id leo volutpat pulvinar. Nam vel ex suscipit, bibendum dolor in, varius elit. Vestibulum tincidunt sed mi in finibus. Phasellus nibh ipsum, tristique quis tristique in, ultricies a nisl. Proin ac lobortis neque. Morbi semper vulputate ante vitae iaculis.'),
(2, 'Sofiko.png', 'Софико', 'Proin id erat id odio feugiat efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi semper vulputate ante vitae iaculis. Vestibulum finibus a eros et eleifend. Morbi vitae leo efficitur, cursus diam a, aliquet ante. Ut nec ipsum vitae leo sodales interdum.'),
(3, 'Dima.png', 'Дмитрий', 'Maecenas ante arcu, placerat et mauris id, faucibus semper mi. Maecenas eget vulputate justo. Nulla elit risus, convallis vitae erat ac, hendrerit rhoncus purus. In sed sapien tortor. Vestibulum eget tempor dolor. Phasellus nec facilisis nisi, condimentum luctus enim.'),
(4, 'Shayori.png', 'Шайори', 'Aliquam quis efficitur mi. Mauris eget eros in nisl gravida scelerisque. Curabitur placerat gravida leo eu convallis. Duis aliquam augue vitae urna pharetra luctus. Sed sollicitudin nec metus sagittis molestie. In vitae suscipit nulla, et euismod elit. Pellentesque feugiat rhoncus sem quis maximus.'),
(5, 'Athan.png', 'Этан', 'Cras ac ante eu erat sagittis tristique ac vel orci. Curabitur facilisis turpis ac tortor imperdiet, vel sollicitudin orci elementum. Vivamus tristique volutpat nisl, eget eleifend leo efficitur eu. Nulla vel turpis semper, finibus libero feugiat, maximus turpis. Curabitur sollicitudin sit amet lectus non tincidunt.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`) VALUES
(1, 'Андрей', 'a@mail.ru', '123456789'),
(2, 'Борис', 'b@mail.ru', '912345678'),
(3, 'Валентина', 'v@mail.ru', '891234567'),
(4, 'Геннадий', 'g@mail.ru', '789123456'),
(5, 'Дмитрий', 'd@mail.ru', '678912345'),
(6, 'Егор', 'e@mail.ru', '567891234'),
(7, 'Жанна', 'j@mail.ru', '456789123'),
(8, 'Зинаида', 'z@mail.ru', '345678912'),
(9, 'Инна', 'i@mail.ru', '234567891'),
(10, 'Кирилл', 'k@mail.ru', '132457689'),
(11, 'Леонид', 'l@mail.ru', '241368579'),
(12, 'Мария', 'm@mail.ru', '574613289'),
(13, 'Николай', 'n@mail.ru', '918273645'),
(15, 'Олег', 'o@mail.ru', '987654321'),
(18, 'Петр', 'p@mail.ru', '876543219'),
(19, 'Роман', 'r@mail.ru', '765432198'),
(25, 'Светлана', 's@mail.ru', '654321987'),
(26, 'Фёдор', 'f@mail.ru', '543219876');

-- --------------------------------------------------------

--
-- Table structure for table `usersMessages`
--

CREATE TABLE `usersMessages` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usersMessages`
--

INSERT INTO `usersMessages` (`id`, `userID`, `userMessage`) VALUES
(1, 1, 'Хочу предложить вам новый маршрут.'),
(2, 2, 'Предложить вам новый маршрут хочу.'),
(3, 3, 'Вам новый маршрут хочу предложить.'),
(4, 4, 'Новый маршрут хочу предложить вам.'),
(5, 5, 'Маршрут хочу предложить вам новый.'),
(6, 4, 'Настаиваю на новом маршруте! Отзовитесь!'),
(7, 3, 'Ой, у вас уже есть такой маршрут, не заметила. Мои извинения!'),
(8, 6, 'А можно ли заказать авторский маршрут? То есть по тем местам, где мы хотели бы побывать?'),
(9, 7, 'А вы не хотите организовать экскурсии и по близлежащему Подмосковью?'),
(20, 19, 'А можно ли забронировать экскурсию за полгода?'),
(22, 25, 'На каких языках могут проводиться экскурсии?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsGeneral`
--
ALTER TABLE `contactsGeneral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotoReports`
--
ALTER TABLE `fotoReports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_all_intro`
--
ALTER TABLE `pages_all_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routs`
--
ALTER TABLE `routs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routsReserved`
--
ALTER TABLE `routsReserved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialNetworks`
--
ALTER TABLE `socialNetworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userComments`
--
ALTER TABLE `userComments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersMessages`
--
ALTER TABLE `usersMessages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactsGeneral`
--
ALTER TABLE `contactsGeneral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fotoReports`
--
ALTER TABLE `fotoReports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages_all_intro`
--
ALTER TABLE `pages_all_intro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routs`
--
ALTER TABLE `routs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `routsReserved`
--
ALTER TABLE `routsReserved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socialNetworks`
--
ALTER TABLE `socialNetworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userComments`
--
ALTER TABLE `userComments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usersMessages`
--
ALTER TABLE `usersMessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
