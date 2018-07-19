-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2018 г., 18:43
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `general_information` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_opinion` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`, `name_en`, `country_id`, `general_information`, `personal_opinion`) VALUES
(1, 'Краков', 'Krakow', 1, '', ''),
(2, 'Закопане', 'Zakopane', 1, '', ''),
(3, 'Варшава', 'Warsawa', 1, '', ''),
(4, 'Белосток', 'Bialystok', 1, '', ''),
(5, 'Неаполь', 'Napoli', 2, '...', 'В наш последний день в Италии мы вернулись на автобусе из Салерно в Неаполь, заселились в отель недалеко от ж.д. вокзала\r\n и отправились осматривать оставшиеся достопримечательности города.\r\nРайон ж.д. вокзала просто ужасный - очень грязно, шумно, много мигрантов, которые заняли все тротуары, разложив всевозможное барахло на продажу. \r\nМы остановились в отеле в этом районе на одну ночь перед вылетом, для более длительного проживания советовала бы выбирать другие районы.\r\nОтель был стандартный бюджетный с душем и кондиционером, в данном районе вообще было много отелей, даже четырехзвездочные встречались, \r\nно район, несмотря на удобное местоположение,  крайне неприятный.\r\nЗаселившись отправились к дворцу Каподимонте. Дворец расположен далеко от центра и ехать туда пришлось сначала на метро до музея археологии, потом на автобусе.\r\nАвтобусы не очень понравились - много людей, остановки не объявляют и на электронных табло не пишут, постоянно приходилось сверяться с навигатором.\r\nВо дворце расположена художественная галерея с богатым собранием не только итальянской, но и европейской живописи. Дворцовых интерьеров сохранилось крайне мало.\r\nИнтересно, что определенные залы открываются по расписанию - напр. европейское барокко открылось на 20 минут в установленное время, запустили всех желающих (нас в том числе),\r\nа потом вход закрылся. Можно не спеша все рассматривать хоть час, но назад вернуться нельзя, т.к. залы последовательно закрываются.\r\nВход стоил 8 евро(?). Кондиционера не оказалось и в этом музее, только слабенькие вентиляторы. Плотные гардины частично препятствовали нагреванию залов, но было очень душно.\r\nВозле дворца разбит небольшой красивый парк.\r\nДалее мы пошли пешком через площадь Данте к пешеходной главной улице Неаполя - Спакконаполи (условное название улицы, состоящей из нескольких).\r\nТ.к. время приближалось к вечеру открылись после сиесты церкви города, вход в большинство бесплатный.\r\nМы посетили Джезу-Нуово, Санта-Клара, Сан-Доменико и кафедральный собор Св. Януария.\r\nВнешне наиболее запомнился темный и мрачный Джезу-Нуово, внутри было ослепительное барокко.\r\nСанта-Клара и Сан-Доменико представляли строгую готику.\r\nСамым красивый ожидаемо оказался кафедральный собор, особенно его баптистерий.\r\nДалее прошли к замку и воротам Капуане(?). Замок впечатляющий, если бы оставалось время обязательно его бы посетили.\r\nИ наконец вернулись пешком в отель. К вечеру район стал еще более многолюдным, было практически невозможно перейти улицу - на зебре автомобили не пропускают пешеходов,\r\nдвижение транспорта хаотическое, пробки огромные. В общем, брать машину напрокат в Неаполе не стоит.\r\nМы провели в общей сложности в Неаполе 2,5 дня (не считая дня в Помпеях), но конечно все достопримечательности города не увидели.\r\nИз того, что хотели бы посетить, но не успели - часовня Сан-Северо, подземный город под Сан-Лоренцо, катакомбы, монастырь Санта-Клара, пригородный дворец Казерта, Геркаланум.'),
(6, 'Салерно', 'Salerno', 2, '...', 'На 10 дней нашего путешествия по Италии мы решили остановиться в небольшом городе Салерно в Кампании на берегу Салернского залива.\r\nСалерно было выбрано по причине удобного местоположения и транспортного сообщения с наиболее интересными местами региона, \r\nа также значительным выбором относительно бюджетного жилья, что как оказалось для данного региона редкость. Цены в начале августа в курортных городах  просто зашкаливают.\r\nВ теории добраться от Неаполя до Салерно на общественном транспорте не представляет труда - между городами курсируют поезда, электрички и автобусы.\r\nМы решили остановиться на автобусе, т.к. наши апартаменты в Салерно располагались недалеко от аналога местной диспетчерской.\r\nЭто был не лучший выбор и наверное стоило остановится на поезде. \r\nВо-первых, найти остановку, от которой отравляются автобусы из Неаполя в Салерно оказались практически не реально.\r\nЕсли для автобусов дальних направлений еще есть какое-то подобие платформ и автовокзала, то до близлежащего Салерно этого нет.\r\nПри покупке билета в кассе, нам не удалось у кассира узнать направления остановки, он просто указал направление за пределами автовокзала. \r\nГугл-навигатор только примерно указывал место предполагаемой остановки - улицу. \r\nКак на одной, так и на второй стороне улицы было несколько предполагаемых остановок и никаких подсказок, где останавливается автобус, следующий в Салерно.\r\nС вещами мы были вынуждены переходить с одной стороны улицы на другую в поисках остановки.\r\nВ итоге, в последний момент присоединились к группе людей, возле которой остановился автобус - повезло это оказался нужный нам маршрут.\r\nВторым минусом автобуса были билеты без мест, хотя ехать предстояло около часа, это представляло неудобства.\r\nУчитывая ажиотаж среди пассажиров занять по-быстрее свободные места - в багажник свои чемоданы никто не ставил, все огромные сумки стояли на проходе в салоне \r\nвместе с беднягами, которым не хватило сидячих мест. \r\nВообще, практически все автобусы в августе в этом регионе переполнены и надо быть очень шустрым, чтобы занять сидячее место.\r\nПлюсом автобуса являлось только то, что он относительно современный (с мягкими сиденьями и кондиционером) и скоростной (едет без остановок до Салерно).\r\nДорога  живописная, сначала слева мелькает Везувий, а справа Соррентийский полуостров, затем перевал через Амальфитанские горы и спуск к Салернскому заливу.\r\n\r\nК обеду мы прибыли в наши апартаменты в Салерно. Апаратменты представляли собой двухкомнатную квартиру (в нашем понимании, для европейцев - это однокомнатная): \r\nпросторная спальня, гостиная, переходящая в кухню. В квартире была современная мебель, оборудованная кухня, 2 кондиционера и небольшой балкон. \r\nСам многоквартирный дом отличается от наших по нескольким пунктам:\r\n-красивый и отделанный мрамором подъезд; \r\n-отсутствие мусоропровода или мусорных контейнеров на улице - весь мусор в пакетах выставляется возле входной двери в квартиру каждое утро и его прямо там забирают\r\n-отсутствие парковок, газонов, двора.\r\nОт апартаментов было пара минут пешком до супермаркета, 5 минут до автостанции, 7 до бесплатного пляжа, 10 до ж.д. вокзала и достаточно далеко (около получаса) до старого города.\r\nБесплатный	пляж в Салерно был не очень хороший - галечный и не широкий, но достаточно длинный и свободный. Тирренское море в начале августа было очень теплое, \r\nнесмотря на значительную глубину у самого берега.\r\nВ Салерно была замечательная набережная,на которой было много скамеек в отличие от Неаполитанской. С набережной открывался красивый вид на Амальфитанское побережье.\r\nНо огромным минусом было зачислие иммигрантов-торговцев, которые с наступлением вечера раскидывали свой товар прямо на набережной и портили вечернюю прогулку.\r\nВо время пребывания в Салерно мы ездили в Амальфи, Равелло, о. Капри, Паестум и Виетри-суль-Маре, также мы посетили старый город Салерно, замок Ариче и местный парк.\r\nИсторические центр Салерно похож на Неаполь, но меньше и менее людный и шумный. Такой же лабиринт узких запутанных улочек, старинные церкви, кафедральный собор, дома аристократов.\r\nНаиболее нам понравился кафедральный собор - огромное величественное здание с богато декорированным интерьером.\r\nПосетили Археологический музей, но после Помпей он нас не впечатлил - намного экспонатов периода этрусков и римлян. К тому же в музее не было кондиционера и стояла жуткая духота.\r\nВ конце нашего пребывания в Салерно после обеда мы решили посетить замок Аречи, который возвышается на горе над городом. \r\nДобраться до замка на общественном транспорте было не просто. В данном направлении ходит только один автобус раз в 1-2 часа. Время работы замка  не продолжительное, уже в 17:00 он закрывается.\r\nМы добрались к 15:30, но полтора часа нам вполне хватило, чтобы осмотреть развалины замка, смотровой площадки и небольшой музей.\r\nГлавное, что привлекает туристов в замок - потрясающий вид на раскинувшееся внизу Салерно и залив, а также панорама Амальфитанского побережья.\r\nОт замка сохранились только стены и отдельный помещения, фрагменты немногих сохранившихся интерьеров представлены в местом музее.\r\nОсмотрев замок, мы поняли что ближайший автобус нам ждать около часа и решили спустится пешком. Дорога очень не удобная, идти пришлось по узкой обочине горного серпантина,\r\nпериодически отскакивая от появляющихся из-за поворота автомобилей. Рядом с отдельными домами расположенными на склонах горы,вдоль дороги паслись козы,лошади и коровы.\r\nК счастью, никто из животных не проявил агрессию, хотя мы боялись, особенно козла.\r\nСпуск до города занял минут 25 и еще столько примерно нам пришлось идти до наших апартаментов.');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `name_en`) VALUES
(1, 'Польша', 'Poland'),
(2, 'Италия', 'Italy'),
(3, 'Греция', 'Greece'),
(4, 'Финляндия', 'Finland'),
(5, 'Испания', 'Spain');

-- --------------------------------------------------------

--
-- Структура таблицы `durations`
--

CREATE TABLE `durations` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_from` date NOT NULL,
  `date_till` date NOT NULL,
  `expenses` decimal(6,2) DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `durations`
--

INSERT INTO `durations` (`id`, `date_from`, `date_till`, `expenses`, `country_id`, `city_id`) VALUES
(1, '2018-04-29', '2018-04-30', '108.00', 1, 1),
(2, '2018-04-30', '2018-05-02', '216.00', 1, 2),
(3, '2017-07-30', '2017-07-31', NULL, 2, 5),
(4, '2017-08-12', '2017-08-13', NULL, 2, 5),
(5, '2017-08-02', '2017-08-12', NULL, 5, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `site_id` int(10) UNSIGNED DEFAULT NULL,
  `hotel_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `main_img` text COLLATE utf8mb4_unicode_ci,
  `city_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_03_150658_create_countries_table', 2),
(4, '2018_05_04_131650_create_cities_table', 3),
(5, '2018_05_04_132058_create_sites_table', 4),
(6, '2018_05_04_140332_create_hotels_table', 5),
(7, '2018_05_04_140601_create_galleries_table', 6),
(8, '2018_05_04_142228_reduce_table_country', 7),
(9, '2018_05_04_142444_reduce_table_cities', 8),
(10, '2018_05_04_142609_create_durations_table', 8),
(11, '2018_05_04_144719_add_fields_to_users_table', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sites`
--

CREATE TABLE `sites` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `main_img` text COLLATE utf8mb4_unicode_ci,
  `introtext` mediumtext COLLATE utf8mb4_unicode_ci,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(6,2) DEFAULT NULL,
  `open_hours` text COLLATE utf8mb4_unicode_ci,
  `city_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sites`
--

INSERT INTO `sites` (`id`, `name`, `name_en`, `address`, `main_img`, `introtext`, `text`, `price`, `open_hours`, `city_id`) VALUES
(1, 'Вавель', 'Wawel Hill', NULL, NULL, NULL, NULL, '0.00', '06:00 - 19:00 (6 a.m. - 7 p.m)', 1),
(2, 'дворцу Каподимонте', NULL, NULL, NULL, NULL, 'Дворец расположен далеко от центра и ехать туда пришлось сначала на метро до музея археологии, потом на автобусе.\r\nАвтобусы не очень понравились - много людей, остановки не объявляют и на электронных табло не пишут, постоянно приходилось сверяться с навигатором.\r\nВо дворце расположена художественная галерея с богатым собранием не только итальянской, но и европейской живописи. Дворцовых интерьеров сохранилось крайне мало.\r\nИнтересно, что определенные залы открываются по расписанию - напр. европейское барокко открылось на 20 минут в установленное время, запустили всех желающих (нас в том числе),\r\nа потом вход закрылся. Можно не спеша все рассматривать хоть час, но назад вернуться нельзя, т.к. залы последовательно закрываются.\r\nВход стоил 8 евро(?). Кондиционера не оказалось и в этом музее, только слабенькие вентиляторы. Плотные гардины частично препятствовали нагреванию залов, но было очень душно.\r\nВозле дворца разбит небольшой красивый парк.', NULL, NULL, 5),
(3, 'Спакконаполи', NULL, NULL, NULL, NULL, 'Спакконаполи (условное название улицы, состоящей из нескольких).\r\nТ.к. время приближалось к вечеру открылись после сиесты церкви города, вход в большинство бесплатный.', '0.00', NULL, 5),
(4, 'Джезу-Нуово', NULL, NULL, NULL, NULL, 'Внешне наиболее запомнился темный и мрачный Джезу-Нуово, внутри было ослепительное барокко.', '0.00', NULL, 5),
(5, 'Санта-Клара', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, 5),
(6, 'Сан-Доменико', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, 5),
(7, 'замку и воротам Капуане', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(8, 'кафедральный собор Св. Януария', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'irena.krakavetskaya@gmail.com', '$2y$10$iEcuHdyHIk4MlfwceMZuUeE55ZJqhmR4clpzzFxC7VlHjX33gIWs6', 'Tkn4a16QrEAe20aLodcdXTVn2oKnwPou4BAwHEsc5pWK86LwWqE5Uq7TzvC8', '2018-05-03 11:41:45', '2018-05-03 11:41:45');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_name_index` (`name`),
  ADD KEY `cities_name_en_index` (`name_en`),
  ADD KEY `cities_country_id_index` (`country_id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_name_index` (`name`),
  ADD KEY `countries_name_en_index` (`name_en`);

--
-- Индексы таблицы `durations`
--
ALTER TABLE `durations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `durations_date_from_index` (`date_from`),
  ADD KEY `durations_date_till_index` (`date_till`),
  ADD KEY `durations_expenses_index` (`expenses`),
  ADD KEY `durations_country_id_index` (`country_id`),
  ADD KEY `durations_city_id_index` (`city_id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_site_id_index` (`site_id`),
  ADD KEY `galleries_hotel_id_index` (`hotel_id`);

--
-- Индексы таблицы `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_name_index` (`name`),
  ADD KEY `hotels_name_en_index` (`name_en`),
  ADD KEY `hotels_city_id_index` (`city_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sites_name_index` (`name`),
  ADD KEY `sites_name_en_index` (`name_en`),
  ADD KEY `sites_city_id_index` (`city_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `durations`
--
ALTER TABLE `durations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Ограничения внешнего ключа таблицы `durations`
--
ALTER TABLE `durations`
  ADD CONSTRAINT `durations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `durations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Ограничения внешнего ключа таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `galleries_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`);

--
-- Ограничения внешнего ключа таблицы `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Ограничения внешнего ключа таблицы `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
