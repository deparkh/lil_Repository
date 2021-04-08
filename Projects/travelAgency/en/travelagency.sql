-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2021 г., 21:37
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travelagency`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutblock`
--

CREATE TABLE `aboutblock` (
  `aboutImgSrc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutImgSrc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutImgSrc3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutImgSrc4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutSmallHeading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutBigHeading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutText` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutLi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutLi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutLi3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `aboutblock`
--

INSERT INTO `aboutblock` (`aboutImgSrc1`, `aboutImgSrc2`, `aboutImgSrc3`, `aboutImgSrc4`, `aboutSmallHeading`, `aboutBigHeading`, `aboutText`, `aboutLi1`, `aboutLi2`, `aboutLi3`) VALUES
('1.jpg', '2.jpg', '5.jpg', '4.jpg', 'About TravelAgency', 'World Best Travel Agency Since 2021', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo deleniti ex iste aperiam molestias, atque quibusdam rerum. Ad officiis vitae facere repudiandae maxime repellat voluptas quisquam quis, modi obcaecati libero necessitatibus, omnis, adipisci assumenda magnam temporibus rerum debitis numquam optio saepe quidem. Eaque natus assumenda fuga, recusandae molestiae eligendi?', 'Lorem ipsum, dolor sit amet consectetur, adipisicing.', 'Lorem ipsum, dolor sit amet consectetur, adipisicing.', 'Lorem ipsum, dolor sit amet consectetur, adipisicing.');

-- --------------------------------------------------------

--
-- Структура таблицы `counterblock`
--

CREATE TABLE `counterblock` (
  `counterId` int(11) NOT NULL,
  `counterNubmer` int(15) NOT NULL,
  `counterHeading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `counterblock`
--

INSERT INTO `counterblock` (`counterId`, `counterNubmer`, `counterHeading`) VALUES
(1, 2000, 'Awesome Hikers'),
(2, 70, 'Stunning Places'),
(3, 1200, 'Miles to Hike'),
(4, 15, 'Years in Service');

-- --------------------------------------------------------

--
-- Структура таблицы `popularblock`
--

CREATE TABLE `popularblock` (
  `id` int(11) NOT NULL,
  `popularImgSrc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularHeading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularDuration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularLocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularText` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularTextBig` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `popularblock`
--

INSERT INTO `popularblock` (`id`, `popularImgSrc`, `popularHeading`, `popularDuration`, `popularLocation`, `popularText`, `popularTextBig`, `popularPrice`) VALUES
(1, 'p1.png', 'THE TWO CAPITALS OF GEORGIA', '7 Hours', 'Tbilisi', 'Tbilisi city tour is a sightseeing tour of the highlights of Tbilisi. Explore the Old Town.', 'Tbilisi city tour is a sightseeing tour of the highlights of Tbilisi. Explore the Old Town. The architecture in the city’s historic district is a mixture of Georgian, Byzantine, Oriental and Neo-Classical European styles.\r\n<br>\r\nYou will visit:<br>\r\n Metekhi church<br>\r\n  Monument of Vakhtang Gorgasali, the legendary founder of Tbilisi<br>\r\n  4th century Narikala Fortress (cable-car)<br>\r\n  Water fall<br>\r\n  Sulphur bath houses<br>\r\n  Visit Sioni Cathedral<br>\r\n  Rezo Gabriadze Theatre<br>\r\n  Peace bridge<br>\r\n Funicular Rail lift<br>', ''),
(2, 'p2.png', 'KAZBEGI TOUR', '9 Hours', 'Chattahoochee', 'One-day tour to Kazbegi with the itinerary from the capital city Tbilisi to the snow-capped peak of the Mount Kazbek will open up an enchanting Georgia.', 'One-day tour to Kazbegi with the itinerary from the capital city Tbilisi to the snow-capped peak of the Mount Kazbek will open up an enchanting Georgia. Visit the scenic town of Stepantsiminda, where life ticks by at a relaxing pace. Take in top local attractions such as the 14th-century century Gergeti Trinity Church on the Chkheri River, and enjoy breathtaking views over the mighty Darial Gorge.<br>\r\nOn the way to Kazbegi you will visit:<br>\r\n  Ananuri Fortified Castle Ensemble<br>\r\n  Jinvali Water Reservoir<br>\r\n  Fasanauri - Place where white and black Aragvi Reunite<br>\r\n Ski resort – Gudauri<br>\r\nVisit the scenic town of Stepantsiminda, where life ticks by at a relaxing pace. Take in top local attractions such as the 14th-century century Gergeti Trinity Church on the Chkheri River, and enjoy breathtaking views over the mighty Darial Gorge.', ''),
(3, 'p3.png', 'MEMORABLE DAY IN KAKHETI', '7 Hours', 'Kakheti', 'The one-day tour in Kakheti is a fascinating journey into the eastern part of Georgia, during which you can enjoy the mountain views, picturesque villages, ancient temples, and observe the life Kakhetians.', 'Kakheti – wine region in Georgia.\r\nThe one-day tour in Kakheti is a fascinating journey into the eastern part of Georgia, during which you can enjoy the mountain views, picturesque villages, ancient temples, and observe the life Kakhetians.\r\nAbundance of grape varieties with Georgia can compete only in France.<br>\r\nAnd then, if we compare the number of varieties not grapes, and cheese: in Georgia grows more than 400 varieties of grapes in France, more than 400 varieties of cheese<br>\r\nThe culture of wine as well as wine drinking in Georgia goes to the far-distant past, as the land goes deep into the root of the Georgian vine.<br>\r\n  Visit local wine factory - One of the largest wine and spirits producing companies in Georgia. The company produces wine, brandy, sparkling wine and chacha. Visitors are able to get introduced to the Georgian culture and taste some delicious Georgian wines.<br>\r\n  Bodbe monastery complex of St. George, where are kept the remains of Saint Nino of Kappadokia.\r\n Sighnaghi - miniature city of love, which impresses with its history. It is the only city in Georgia that has fully preserved the fortress walls that are crowned with watchtowers, where one can climb to get the magnificent view of the Alazani valley.\r\n', ''),
(4, 'p4.png', 'GUDAURI SKI RESORT', '9 Hours', 'Gudauri', 'One-day tour to Gudauri with the itinerary from the capital city Tbilisi to the snow-capped Mountains', 'The resort is well suited for skiers of all ability levels. A range of beginner runs are perfect for learning, numerous intermediate and advanced runs are great for tuning the skills, and off-piste skiing is allowed everywhere for the experts.<br>\r\nDue to the mid-mountain selection of not-so-steep off-piste options, Gudauri is a wonderful place for aspiring freeriders. Steeper expert runs can be accessed by the 3 highest lifts, which is more than enough for experienced skiers on a good powder day. Advanced skiers with proper avalanche training or a guide will also be impressed with the easy access to great backcountry runs.<br>\r\nA growing number of activities exist in Gudauri apart from skiing, eating, and drinking. Nonetheless, if you are really intent on dragging someone along for more than a day or two who does not like to ski, consider leaving them in Tbilisi or taking them to a place like Austria, where there are more options for non-skiers.<br>\r\nDuring the day, paragliding, snowmobiling, and snow tubing are all options, and during the evening a visit to the banya (bath house) can be a nice experience. Marco Polo Hotel also has a small bowling alley, billiards bar, and video game room open to the public.', ''),
(5, 'p5.png', 'SKI RESORT BAKURIANI', '9 Hours', 'Borjomi', 'Located at 1,700 m in the Borjomi region of Georgia, Bakuriani is nestled in the shadows of the breathtaking Caucasus Mountains, only a three-hour drive from Tbilisi.', 'Located at 1,700 m in the Borjomi region of Georgia, Bakuriani is nestled in the shadows of the breathtaking Caucasus Mountains, only a three-hour drive from Tbilisi. Home to dozens of alpine slopes and cross-country trails, it offers some of the most spectacular skiing and snowboarding in Europe.<br>\r\nOriginally developed as an Olympic training facility, unsurprisingly, Bakuriani is Georgia’s most popular winter sports and recreation destination. Enjoy the downhill ski runs, cross-country trails, horseback tours, sledding or simply take long walks through beautiful snowy forests.', ''),
(6, 'p6.png', 'MARTVILI CANYON & PROMETHEUS CAVE', '12 Hours', 'Samegrelo-Zemo', 'This wonderful place is located in Samegrelo-Zemo Svaneti region, in Georgia', 'Martvili Canyon - This wonderful place is located in Samegrelo-Zemo Svaneti region, in Georgia. Small city of Martvili, st four hour driving time from Tbilisi. Martvili district is truly one of the greatest places in Georgia – combining unique natural environment with historical monuments. It is a place with lots of waterfalls and sky blue water! You can lend a boat with a boatman and he will take you to unforgettable journey between high rocks in Canyon.<br>\r\nOn the shore among the trees there are special wooden tables and chairs where you can have a nice picnic. There is also a small footpath which will lead you to the Dadiani\'s \"swimming pool\" (this is a place of the river, looked like a pool). Great place to have an adventure with a family, friends or co-workers. <br>\r\nPrometheus cave - with stalactites and stalagmites. Named after famous hero Prometheus, who, according legend, was chained here. Here we take a boat ride on the underground river', ''),
(7, 'p7.png', 'SATAPLIA & OKATSE CANYON', '12 Hours', 'Sataplia', 'Visit Sataplia Cave and Nature Reserve(It is famous for fine speleothems and the dinosaur footprints nearby', 'Visit Sataplia Cave and Nature Reserve(It is famous for fine speleothems and the dinosaur footprints nearby. The tour enters the through‐cave on one hillside, crosses the hill underground and then goes back on the surface past the dinosaur\r\nfootprints.)<br>\r\nvisit Okatse Canyon – this place has already attracted and amazed large number of tourists with its magnificent wild nature, astonishing waterfalls and breathtaking views. A visitor’s centre is located along with a hanging path 250 m in length, as well as a 500 m path through the canyon and forest, a walking path of 2 km and an observation spot with panoramic views of the entire valley. There are also several natural stone bridges on the river and caves in the canyon, from where Karst waters flow.', ''),
(8, 'p8.png', 'UPLISTSIKHE CAVE CITY AND BORJOMI NATIONAL PARK', '9 Hours', 'Borjomi', 'Uplistsikhe, literally ‘Fortress of God’, is an ancient rock-hewn town which played a significant role in Georgian history', 'Uplistsikhe, literally ‘Fortress of God’, is an ancient rock-hewn town which played a significant role in Georgian history over a period of approximately 3,000 years.<br> Archaeological excavations have revealed extraordinary artifacts dating from the late Bronze Age all the way up to the late Middle Ages.<br>\r\nAccoring to Unesco, Uplistsikhe Cave Town-Fortress is situated on a rocky massif in 15 km eastwards to town Gori on the left bank of the river Mtkvari. The fortress is mentioned in chronicles from earliest times. Its history begins in the I-II millennium B.C. Uplistsikhe was an important religious, political and cultural centre in the Hellenistic and the late Antique periods (IV c. B.C. – IV c. A.D.).<br>\r\n Beautiful resort Borjomi - the world-famous mineral springs and beautiful Park Borjomi. In the park you will taste legendary and world famous Borjomi mineral water from the spring.', ''),
(9, 'p9.png', 'VARDZIA CAVE CITY AND BORJOMI NATIONAL PARK', '11 Hours', 'Vardzia', 'Vardzia is one of the highlights of the trip and stretches over half a kilometer along the river Mtkvari, with 19 tiers.', 'Vardzia cave town (12th century). Vardzia is one of the highlights of the trip and stretches over half a kilometer along the river Mtkvari, with 19 tiers. There used to be about 3000 caves here, but now there are just over 500. It has a church hewn out of rock with amazing 12th century frescoes. The Complex also includes living quarters, small hall-type churches, and refectories, wine cellar, etc.<br>\r\nBeautiful resort Borjomi - the world-famous mineral springs and beautiful Park', ''),
(10, 'p10.png', 'RABATI CASTLE AND BORJOMI NATIONAL PARK', '11 Hours', 'Akhaltsikhe', 'The fortress was built in the 13th century and was completely reconstructed', 'Rabati Castle - medieval castle complex in Akhaltsikhe, Georgia. The fortress was built in the 13th century and was completely reconstructed in 2011-2012. Rabati castle developed under the influence of the different cultures over subsequent centuries and this is reflected in its architecture. Within the 7 hectares’ castle complex there is a Church, a Mosque, a Minaret and a Synagogue.<br>\r\nBeautiful resort Borjomi - the world-famous mineral springs and beautiful Park Borjomi. In the park you will taste legendary and world famous Borjomi mineral water from the spring.', ''),
(11, 'p11.png', 'BATUMI HALF DAY WALKING TOUR', '3 Hours', 'Batumi', 'After Breakfast starts Batumi city tour\r\nYou will visit outstanding sights', 'After Breakfast starts Batumi city tour\r\nYou will visit:<br> Moving sculpture of Ali and Nino<br> Piazza Square <br> Europe Square <br> Old Batumi<br> Batumi Boulevard Free time', ''),
(12, 'p12.png', 'BOTANICAL GARDEN AND CABLE CAR ARGO', '3 Hours', 'Batumi', 'Visit the Botanical garden, one of the biggest in the world', 'Batumi Botanical Garden, located at the distance of 9 km from the center of Batumi, occupies the area of 108, 7 hectare of approximately 1 km stripe of Southern-Western section of the coastline located between the river Chakvistskali estuary and the Green Cape, being spread to the height of 0-220 meters from the sea level, which not long time ago was totally covered with Kolkheti type forest (beech, chestnut, linden) and evergreen sub-forest.<br>\r\ntake a ride on Argo Cable Car - attraction located on Anuria Mountain in Batumi, 250 meters high from the sea level. The complex offers spectacular views of the town, The Black Sea and the surrounding mountains. The center comprises in itself restaurants, Gift shops, Wine House, open air halls and podium. Building design is meaningfully enriched by the use of ARGO symbols, the ship by which Jason and Argonauts sailed to Kolkhida.!<br>', ''),
(13, 'p13.png', 'MESTIA', '10 hours', 'Mestia', 'Mestia - the central town of Upper (Zemo) Svaneti, located 456 km away from Tbilisi.', 'The central town of Upper (Zemo) Svaneti, located 456 km away from Tbilisi  Short stop on Enguri Dam. The Enguri Dam is a hydroelectric dam on the Enguri River in Georgia. Currently it is the world\'s second highest concrete arch dam with a height of 271.5 metres<br>\r\n<br> arrival in Mestia - the central town of Upper (Zemo) Svaneti, located 456 km away from Tbilisi. At 1,500 meters above sea level, the city is the starting point for many trips throughout the region. From the center of Mestia, you can\r\nhike up to glaciers at the bottom of Ushba, ride a horse to alpine meadows, learn the Svan culture, and ski if you visit it during the winter months.<br>\r\n<br> Margiani House-Museum (located in Mestia in an old Svan residential complex. This museum is the property of the famous Margiani dinasty. They also owned 8 towers, of which only 4 remained. The height of the towers and their number spoke of the wealth and strength of the clan.)\r\n<br> ХKhergiani house-museum (the Khergiani Museum in Mestia is located in the house where the climber lived, and consists of four rooms: ethnographic, the history hall of Soviet mountaineering, the climbing hall of Mikhail Khergiani, the climber’s personal room and the athlete’s memory hall.)\r\n<br> Visit to the Svan tower\r\n<br> Ethnographic Museum (Valuable pieces of gold and silver collected at different times are exhibited here: icons, jewelry, coinage, hunting accessories, military armor, coins, and many other masterpieces of applied art. A rich collection of ancient Georgian manuscripts from the 9th to 11th centuries occupies a special place.', ''),
(14, 'p14.png', 'USHGULI', '10 Hours', 'Ushguli', 'Ushguli - UNESCO world heritage site is the highest permanently inhabited village in Europe', 'Transfer on 4x4 Delica to Ushguli - UNESCO world heritage site is the highest permanently inhabited village in Europe, located in Svaneti. The village is located in some 45 km from Mestia town – the center of Svaneti region. The mountainous region of Svaneti in the northwestern part of Georgia is one of the most remote and inaccessible regions of the country. The superb location of Ushguli and the unique lifestyle of the people in the village turn the place into a popular destination to visit. The severe location isolates Ushguli from the rest of modernized Georgia, and as a result, many Svanetian religious and cultural traditions have remained virtually intact.', '');

-- --------------------------------------------------------

--
-- Структура таблицы `reviewsblock`
--

CREATE TABLE `reviewsblock` (
  `id` int(11) NOT NULL,
  `reviewText` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewAuthor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewAuthorWork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewImgSrc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviewsblock`
--

INSERT INTO `reviewsblock` (`id`, `reviewText`, `reviewAuthor`, `reviewAuthorWork`, `reviewImgSrc`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus eveniet omnis similique tempora, dignissimos, dicta?', 'Laura Smith', 'Traveler', '21.jpg'),
(2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus eveniet omnis similique tempora, dignissimos, dicta?', 'Mike Hardson', 'Traveler', '22.jpg'),
(3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus eveniet omnis similique tempora, dignissimos, dicta?', 'Any Johnson', 'Traveler', '23.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `whyblock`
--

CREATE TABLE `whyblock` (
  `whyId` int(11) NOT NULL,
  `whyImgSrc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyText` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `whyblock`
--

INSERT INTO `whyblock` (`whyId`, `whyImgSrc`, `whyText`) VALUES
(1, '2.jpg', 'Lorem Porem'),
(2, '2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus eveniet omnis similique tempora, dignissimos, dicta?'),
(3, '1.jpg', 'aifseio8gviorsdeaghb'),
(4, '4.jpg', 'loremru20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `counterblock`
--
ALTER TABLE `counterblock`
  ADD PRIMARY KEY (`counterId`);

--
-- Индексы таблицы `popularblock`
--
ALTER TABLE `popularblock`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviewsblock`
--
ALTER TABLE `reviewsblock`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `whyblock`
--
ALTER TABLE `whyblock`
  ADD PRIMARY KEY (`whyId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `counterblock`
--
ALTER TABLE `counterblock`
  MODIFY `counterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `popularblock`
--
ALTER TABLE `popularblock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `reviewsblock`
--
ALTER TABLE `reviewsblock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `whyblock`
--
ALTER TABLE `whyblock`
  MODIFY `whyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
