-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2016 г., 21:55
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Scarbnica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(128) NOT NULL,
  `comment_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Comment`
--

INSERT INTO `Comment` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `product_id`) VALUES
(1, 'Шикарно!!!', '2016-12-17', 1, 3),
(2, 'Прекрасный динамический трек!!!', '2016-12-18', 2, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(32) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` mediumtext,
  `date_add` date NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`product_id`, `product_name`, `short_description`, `description`, `date_add`, `type_id`, `user_id`, `source`) VALUES
(1, 'Косяк сардин', '', '', '2016-12-17', 1, 1, 'первое.jpg'),
(2, 'Ни снега, ни льда?', '', '', '2016-12-17', 1, 2, 'второе.jpg'),
(3, 'Студия тупика', '', '', '2016-12-17', 1, 3, 'третье.jpg'),
(4, 'За пределами штаб-квартиры Faceb', '', '', '2016-12-17', 1, 4, 'четвертое.jpg'),
(5, 'Утащу тебя в лес', '', '', '2016-12-17', 1, 5, 'пятое.jpg'),
(6, 'Formation', 'Beyonce', '', '2016-12-17', 4, 6, 'Formation.mp4'),
(7, 'Детские игры', '— Мне бы крылья... Родятся ведь ', '— Мне бы крылья... Родятся ведь люди с хвостами, и шестипалые, и всякие другие уроды. А мне бы — крылья вместо лопаток от какой-нибудь вымершей птицы, хоть перепончатые, абы только держали меня на лету. Уж я бы воспарил тогда над грешной землею и летел бы до тех пор, пока силы мои не иссякли, до самого последнего взмаха стремился бы я за облака, чтоб не видеть и не слышать всего, что осталось бы подо мною. И так бы упился я желанной свободой, так бы наглотался ее пьяного воздуху, что плюнул бы сверху на все да ка-ак грохнулся головой об землю и сразу бы помер. И чтоб хоронить нечего было: чтоб одно мокрое место от меня осталось. Это чтоб какая-нибудь тварь над могилой моей надругаться не смогла б! Исчезнуть желаю! Испариться! Пропасть! Чтоб никто меня не мог обвинить в вашем обмане! Не виноват я! Видит Бог — не виноват!', '2016-12-17', 3, 7, ''),
(8, 'Должник', '— Животная, она почему такая квелая? — Иван Иванович подождал, пока дед Жуков выцедит стопарик, и продолжил: — Ее человек такой сделал!', '— Животная, она почему такая квелая? — Иван Иванович подождал, пока дед Жуков выцедит стопарик, и продолжил: — Ее человек такой сделал! Запер в стайку, как в смертную камеру: сиди, жирей, покуда не прирезали. Вот у нее от этого и всякие притупления в мозгах. А между прочим — и температура, и давление — как у людей. Как у тебя!\r\n— Выходит, если меня кругом обмерить, а фамилии не называть, то я свинья свиньей получаюсь?\r\n— Вот именно! Только — в возрасте...\r\n Дед Жуков усмехнулся до самых десен, показал могучие желтые зубы. Иван Иваныч сообразил, что малость перегнул, но не извинился.\r\n— У нее, у чушки этой, и болячки, как у нас. И характер... И тоска-а... От жизни. Все она соображает, а морду довольную, как мы, сделать не сможет. Мышца слабовата!.. Один черт, если я к Машке — по-людски, то она — хрю! Вроде соглашается, в ответку. Доверчивая, стерва, ласковая. Баба, как-никак...\r\nДед еще раз крякнул. Но Иван Иваныч это понял по-своему:\r\n— Душа в душу жили и — на тебе! Провалилась! А ты бы посмотрел, какие она глаза выкатила, когда ее из погреба перли! Взгляд вопиющего в пустыне!.. Ветеринара вызывал — перелом таза бедренного, говорит. Режь, советует, пудов на десять, дура, потянет... А? “Режь”! Его бы самого. А еще врач называется!\r\nРечь оборвалась. Иван Иваныч словно проглотил что-то большое и тяжелое и разом обмяк, опустив потускневший взор.\r\nПосле долгого молчания дед Жуков встал взглянуть в окно на лошадь, изваянием стоявшую у раскрытых ворот. Невысокий парень в телогрейке — перед ней, руки в карманах, ссутулился.\r\n— Пашка из рядов прибыл?\r\n— Вчера после обеда. Хлеб твой рассматривал, поминал тебя.\r\nДед Жуков неожиданно рассердился:\r\n— Покойников поминают! Сдвинулся ты на своей свинье, Ванюха! У тебя сын вон откуда вернулся, а ты сопли роняешь. Жил бы да радовался — с мясом теперь!\r\n— Седни зарежем, — безразлично отозвался Иван Иваныч. — Сосед обещался. Сам-то я не смогу — рука не подымается...\r\n— А-а!.. — Жуков махнул рукой. — Могила тебя исправит!\r\nОн сунул в карман чистую тряпицу, в которой принес из своего хлебного фургона буханку, и, не прощаясь, хлопнул дверью.\r\nЛошадь во дворе повернула на звук морду, вздохнула, узнав хозяина. Парень не пошевелился.\r\nС полминуты постояв на крыльце, немного успокоившись, дед Жуков подошел к ним.\r\n— Пашутка, здорово, боец.\r\nДед был на голову выше парня. Чтобы ответить, тому пришлось высоко задрать подбородок. Они молча рассмотрели друг друга, будто впервые встретившись. Пашкин взгляд чуть потеплел, и он тихо произнес:\r\n— Здравствуйте.\r\nПротянутую руку Пашка неловко пожал своей левой рукой. У деда запершило в горле. Он прокашлялся, намеренно продлил это кособокое рукопожатие и кивнул на Пашкину правую:\r\n— Мать-то знает?\r\nПарень поморщился и кивнул отрицательно — “нет”.\r\n— Цела хоть? Покажи.\r\nА Пашка будто не услышал. Освободился от дедовой клешни и вновь уставился на лошадь.\r\n— Крышку я вчера в погребе плохо закрыл, — сказал он невпопад чуть погода.\r\n— Да уж слышал...\r\nДеду вдруг неудобно стало расспрашивать его, хотя поговорить и хотелось, и ждал он этого Пашку, как ждут возвращения те, которые через это уже прошли. А теперь ему показалось, что разговаривать, наверное, ни к чему. Особенно сейчас. Но и уехать, ничего не промолвив о своем ожидании, дед не решался.\r\n— На кровушку-то позовешь? А то я с магазина поеду — к вам заверну... Там, у отца-то, еще с твоих проводов самогонки осталось. Два года по стопарику за твое здоровье принимал. Буханочку положу — выпью... За интернациональный долг... — Пашку не проняло. Тогда дед сплюнул, отвязал вожжи и взобрался на передок телеги. — Да-а... Получается, по паре принимать надо было...\r\nВзгляд парня с лошадиной морды переполз на деда, прощупал его. И хотя лицо Пашки оставалась бесстрастным, губы произнесли:\r\n— Нормально. А вдруг бы по паре на два года не хватило?\r\nДеда покоробило. Он проклял себя за свой язык, хлестнул лошадь и бросил на прощанье слишком жестоко и зло:\r\n— Тады я сегодня три приму. За всех вас, должников. Не возражаешь?\r\nПашка не ответил, только передернул плечами, а когда фургон скрылся за поворотом, вдруг начал рыться в карманах. Потом побежал домой, потом назад и, выбежав на дорогу с зажатой в руке монетой, хотел было кинуться за хлебовозом, но тут столкнулся с матерью. — Паша, ты куда?\r\n— Да вот... — Он замялся. — Жукова хотел догнать...\r\n— Что он тебе? — Мать почувствовала его смятение, пристально всмотрелась в лицо. -Ляпнул чего? Ты его не слушай! Старый что малый... Пойдем к Степану сходим. Позовем...\r\nПашка с неохотой поплелся за нею. Они направились к дому соседа.\r\nНаконец, не выдержав молчания, она остановила его. Повернула к себе лицом.\r\n— Ну, говори, чего он там ляпнул? — Спросила строго. Она всегда была строга с ним, с младшим. Секретов от семьи не допускалось. Пашка знал, что теперь мать не отстанет, пока все не выпытает. Лучше выложить все сразу.\r\n— Должен я ему. Давно, пацаном. Ты хлеб посылала покупать, а мы с ребятами деньги оставляли на сигареты, а буханки... Ящик-то у него сзади открывается, а лошадь еле ползет...\r\n— И все?\r\n— Все.\r\nМать взяла его за рукав.\r\n— Дурь это. Он пропил больше. Пошли.\r\n— Нет, — скрипнув зубами, Пашка стряхнул ее руку. — Ты... Он...\r\nТело его напряглось.\r\n— Я там всех вспоминал.. А его... Забыл, понимаешь? А он помнит! Помнит!! \r\nМать смягчилась.\r\n— Отдашь, — она аккуратно развернула его за плечи и повлекла за собой. — Он сегодня еще приедет. Не пропустит! У него на жареное и на водку — нюх!\r\nСтепана застали во дворе у собачьей конуры. Рыжий кобель кусками заглатывал из миски тушенку. Степан подкладывал ему еще.\r\n— Бог в помощь, — поздоровалась мать. — Не подох еще?\r\n— Это ты про меня, Петровна?\r\n— А хоть бы и про тебя! — Ответила за Пашкину мать Валентина, Степанова жена. — Проходите, здравствуйте.\r\nОна спустилась с крыльца, оставив дверь открытой. Оттуда вышел мальчик лет трех с огромной красной морковью в руках. Валентина вылила из ведра помои в приямок и подошла ближе.\r\n— Пашка, а чего-то ты и не вырос совсем? Так, какой-то сморщенный... — сказала она и, не дожидаясь ответа, переключилась на мужа: — Давай-ка завязывай. Видишь, люди сами за тобой пришли.\r\nСтепан отреагировал тем, что начал открывать вторую банку тушенки. Все внимательно смотрели, как он ловко управляется с ножом.\r\n— Много еще осталось? — не вытерпела Пашкина мать.\r\n— Еще с ящик, — ответила Валентина. — Пусть жрет! И сгущенку ему еще скормлю. А то ведь чего надумал — мальца угощать! Не-ет! Пусть сам глотает, если кобелю жалко!\r\n— Зачем? — спросил Пашка.\r\n— А ты не знаешь? — Валентина подхватила на руки шлепнувшегося в грязь сына, отерла о подол морковку и сунула ему доедать. — Отец у нас, Пашутка, идейный! В Чернобыль добровольцем поехал! Говорит: деньгу зашибу! Зашиб!! Тушенки оттуда припер, сгущенки... Вот пусть теперь с кобелем сами ее и жрут!\r\nКобель с благословения хозяйки смело принялся за вторую банку. Сложив нож, Степан встал и с упреком покачал головой.\r\n— Дура ты, дура! Мне-то не жалко, пусть подавится, — кивнул он на кобеля. — А вот если бы такие, как я, туда не поехали, вас, дур, послушав, — глядишь, с четвертого-то блока и досюда ветерком дотянуло...\r\n— Угу, поговори, поговори... Прям такой герой! Ты, что ль, его взрывал? А? Или я? Или — он! — Она потрясла ребенком в воздухе, и морковка выпала у мальчика из руки. Это добавило Валентине жару. — А ведь он у тебя спросит: Бра-а-тика хочу! А ты ему — что?!\r\n— Постыдилась бы, Валь, — Степан опустил шишковатую голову. -Я ж тебе объяснял. Все нормально будет.\r\n— А мне не надо “будет”! Мне надо, чтоб “было”! Чтоб, может, сейчас! — Валентина даже ногой пристукнула и втолкала морковку в самую жижу. Мальчик, все время тянувший руку вниз, громко заплакал.\r\nПетровна нагнулась, шлепнула Валентину по ноге, вытащила из грязи морковь и, отобрав у нее ребенка, понесла плачущего малыша в дом. Накричавшись досыта, и Валентина вскоре отправилась за ними.\r\nСтепан с Пашкой остались стоять у собачьей будки. Задетый за живое Степан все не мог успокоиться:\r\n— Нет, вот ты скажи, вот ты бы поехал? Вот был бы ты шахтер, и тебе бы сказали: кто честный, мужики, надо помочь! Поехал бы?\r\nПашка пожал плечами.\r\n— И я сначала так же! — продолжал сосед, заводясь, — а потом подумал: вдруг эта зараза расползется? А я мог — и не поехал! И такие вот, как мой пацан, передохли бы? Они-то в чем виноваты? По гроб жизни был бы им должен!!\r\nПоследняя фраза заставила Пашку вздрогнуть. А Степан все требовал ответа, тряся его за больное плечо. Пашка отбросил руку Степана и отступил на шаг. Степана как осенило:\r\n— Что? Что?? И ты заразы боишься? — сосед начал наступать на него. — Афганец, твою мать.. Сам-то вон отсиделся небось на кухне! А ребята в пеналах цинковых...\r\n...Скошенный Пашкиным ударом, Степан упал, и кобель захлебнулся в лае.\r\n— Сука! — заворочался в грязи Степан. — Убью паскуду!\r\nПашка нагнулся над ним:\r\n— Ты-ы... Если еще раз... Если ты хоть слово...\r\nГубы у Пашки побелели. Степан поймал его взгляд и притих, незаметно продвигая руку к карману с ножом. Пашка не глядя, резко наступил на нее. И сосед взвыл не хуже кобеля.\r\nНа крики и лай с крыльца скатились Петровна и Валентина. Мать успела добежать первой, оттащить Пашку на безопасное расстояние...\r\nВозвращались молча.\r\nТам, у соседа, хоть и кончилось добром, потому как женщины скандал замяли, договорившись по-своему, и сам Степан, с неохотой извинившись за горячность, вроде отмяк и дал согласие прийти помочь через часок, — Пашке лег на душу еще один камень: “И перед ними я должен за тех, кто там остался. И перед теми, кто остался — тоже, за то, что живой! И перед Жуковым! Перед кем еще?!”\r\nА мать едва сдерживалась, чтобы не вымолвить вслух: “Правильно, сынок! Ты-то Родине долг отдавал, а этот крохобор три тыщи за долг заработал! О тушенке сердце у него болит, а не о чужих детях. Не верь никому! Он и свинью-то прибежит колоть, потому что я Вальке свеженинки посулила...”\r\nУ дома она пропустила сына вперед, плотно закрыв калитку на щеколду.\r\nИван Иванович готовился к убийству. Именно так. И так бы он ответил любому, кто спросил бы у него, чем это он занимается. Но никто не спрашивал. Жена с сыном прошли мимо, даже не заметив его. Поэтому Иваныч бубнил сам себе:\r\n— Сволочь человек все-таки! Хуже зверя! Зверь хоть за кусок мяса на бой идет, версты ногами меряет, выбирает кого поплоше, больного. Любой хищник — санитар. А тут? Всю жизнь вахлак-человек может на траве прожить... Ну на молоке, на яйцах... Нет! Надо кровь пустить! Чтоб мясо белое было, да помоложе, поздоровей... Доверием пользуется, приручает и — режет! И жрет потом, будто никого не обманул! Нажрется и книги пишет: ах, коровка, ах, овечка... Чего уж там о свинье! Свинья она и есть — свинья. Даже прилагательного не надо...\r\nИван Иваныч еще раз заглянул в стайку, где на боку лежала пострадавшая любимица. Достал из кармана сахарку и потер им свинье под пятачком. Хрюкнув, та приняла кусочек и, три раза двинув челюстями, проглотила.\r\n— Ты еще с ней поцелуйся! — вдруг раздалось у него над головой. Это в стайку зашла Петровна. Не оборачиваясь, Иван Иваныч отвечал:\r\n— Надо будет — и расцелую на прощанье... — Помолчал и уже совсем другим, просящим голосом добавил: — А может, сдадим? Пусть там, где-нибудь... Деньгами возьмем...\r\n— Что ты, Ваня! А вдруг сдохнет? Продать всегда успеем. Зима впереди. Едок-то вон какой теперь у нас!\r\nПетровна села рядом, проговорила шепотом:\r\n— Лег Пашка-то... Может, болит у него чего? Ты бы спросил.\r\n— А сама?\r\n— Боюсь чего-то... К Степану ходили — так Пашка его чуть не убил.\r\n— Да ты что?\r\n— Сильно ударил... Тот все с Чернобылем ко всем лезет, перед Валькой оправдывается. Ну, видно, и Пашку задел...\r\n— Как это — “задел”? Ты что это говоришь-то? Тот задел, а этот сопляк убивать? Ишь ты! Герой хренов! Медаль нацепил, так теперь, что ли, все можно?\r\nИван Иваныч встал, шипя от возмущения.\r\n— Ты куда это собрался? — спросила Петровна.\r\n— Всыплю ему пойду! Спать, говоришь, завалился? Ночью надо спать! А то все ходит, курит...\r\nЖена было попробовала его остановить, но Иван Иваныч остался неумолимым. Приказав ей настрого не вмешиваться, он оставил ее в стайке, а сам потопал в дом.\r\n— Дрыхнешь? — ворвался он в комнату к сыну. — А ну-ка, вставай! Ты что это себе позволяешь?\r\nЛежавший навзничь Пашка повернулся на бок и сел на кровати. Отец встал перед ним.\r\n— Подними глаза-то! — Иван Иваныч дернул его за подбородок. — За что Степана бил?\r\n Пашка с жалостью посмотрел на отца.\r\n— Остынь, батя, не лезь. Разобрались уже.\r\n— Вот давай еще со мной разберемся!\r\n— Давай, — глаза у Пашки чуть сузились. \r\nХолодное спокойствие сына не остудило отца. Он медленно вытянул ремень из брюк.\r\n— Штаны снимать? — спросил Пашка.\r\n— Обязательно.\r\nИ Пашка начал раздеваться.\r\nИз дому первым вышел Иван Иванович. Петровна, ожидавшая его с нетерпением, кинулась навстречу:\r\n— Что это вы там так тихо?\r\n Иван Иваныч взял ее под руку и отвел подальше от дома.\r\n— Не стал я его будить. Постоял, посмотрел... Пусть отдохнет. И со Степаном этим...\r\n — Что со Степаном?\r\n— Да подумал: разве такой у нас человек Пашка, чтобы ни за что на человека кидаться?\r\n— Конечно.\r\n— Ну и вот...\r\n— Что?\r\n— Ну и все! — Иван Иваныч даже удивился, о чем еще можно спрашивать, и немедленно отправил супругу за водой. — Давай, давай, мать, вон уж и Степан идет, сейчас мы ее, стерву, запорем...\r\nСтепан пришел со своим ножом и со своей паяльной лампой. Он был угрюм, но на то, что его час назад убивали — похоже не было. Это Иван Иваныч определил точно.\r\nНачали решать, как вытаскивать свинью из стайки.\r\n— Говорил ведь: нечего было ее туда переть! -разглагольствовал Степан. — Полежала бы ночь на дворе, не простыла! А ты — “подумаем”, “подумаем”! — О Пашкиной помощи сосед не вспоминал. — Ну и что теперь? Как вдвоем?\r\nИван Иваныч сходил в сарай за большими санками, перепачканными в навозе.\r\n— Вот, — сказал он. — Положим и вывезем.\r\n— Ну-ну... Коли допрем... — Степан засомневался. — А в дверь-то они хоть пройдут? Померили. Санки в дверь пролезли. Правда, чуть зажимало на повороте. Но решили, что осилят.\r\nПо доскам, кое-как, втащили на них истошно визжавшую свинью. Она била передними ногами. И, когда уже с полметра, натужась, протащили санки к выходу, Машка сползла на землю. Под умоляющие крики Иван Иваныча “не повредить” вернувшаяся с водой Петровна и Степан начали привязывать животное к перепачканному настилу. Привязали. Попробовали протащить еще, на этот раз сил хватило на целый метр. Но поворачивая свинью, видимо, задели больным местом о стену. Она взревела и опрокинулась вместе с санками так, что застряла в проходе и вызволить ее оттуда оказалось невмочь.\r\nСтепан громко ругался, стараясь перекричать визг испуганного животного. Схватясь за голову, Иван Иваныч сел на землю. В эту минуту к дому подъехал Жуков.\r\n— Дед, давай сюда! — крикнул ему Степан.\r\nПетровна распахнула ворота. Пока лошадь сдавала назад, пока фургон разворачивался, и привязывали к нему веревку, с крыльца спустился Пашка. Незамеченный, он встал в стороне, наблюдая за работой.\r\nОтец со Степаном обмотали свинью веревкой поперек туловища.\r\n — Дергай! — скомандовал Степан Жукову.\r\nДед стеганул лошадь.\r\nЕсли бы Иваныч знал, что его Машка может так визжать, он бы заткнул уши прежде, чем это случилось. Он опоздал на какие-то секунды, но и этого хватило, чтобы, схватив нож, хозяин бросился к любимице и полоснул им по буксиру.\r\n— Режь! Режь прям здесь! — прокричал он, протягивая нож Степану. — Не могу больше!\r\nСтепан отказывался, отбивался от брызжущего слюной Ивана Иваныча, просил еще раз попробовать. Дед Жуков, глядя на них, пытался связать перерезанные концы. А свинья все визжала, и, почувствовав недоброе, лошадь боком подалась со двора. \r\n— Ну чего ты там стоишь?! — прикрикнул дед, первым заметив Пашку. — Конягу подержи!.. Петровна, или сама давай!\r\nМать, оглянувшись на безучастного сына, пошла останавливать лошадь. И в этот момент Пашка очнулся.\r\nОн будто заново увидел всех. Голосящего отца, постаревшего, смешно взмахивающего руками. Соседа, ссутулившегося, подавленного беспричинным криком. Перепуганную мать, повисшую на поводе ошалелой лошади. Жукова, трясущимися пальцами и желтыми зубами вязавшего узел. И свинью — огрузневшую, опрокинутую навзничь, которая, почти не открывая рта, издавала звук работающей пилорамы.\r\n“Из-за нее! — мелькнуло в мозгах у Пашки. — Из-за этой сволочи люди с ума сходят!”\r\nПашка сам забрал у отца нож и, упав перед свиньей на колени, начал всаживать нож в жирную тушу — в горло, в грудь, опять в горло и опять...\r\nХлестала кровь, визг не утихал, пока подскочивший сзади Степан не вырвал у Пашки нож и не ударил сам...\r\n— Убил? — осторожно спросил в полной тишине Иван Иваныч.\r\nСтепан что-то пробурчал себе под нос, встал и, не глядя на хозяина, крикнул Жукову:\r\n— Тащи, старый хрен! Что вылупился? Крови не видел?\r\nКрови было действительно много. Руки и рукава Пашкиной фуфайки оказались сплошь забрызганными ею. За окровавленной тушей, отбуксированной к середине двора, протянулся грязно-бурый след. Чавкая сапогами по этой грязи, Пашка подошел к ведрам с водой.\r\n— Мам, полей, — попросил он, видя, что Петровна спешит к мужикам с алюминиевой кружкой.\r\nМать была не в себе. Черпнув из ведра, она полила ему на руки, струйка старалась убежать от них, и тогда Пашка заметил, что смотрит она на мужиков, а не на него. Он оглянулся. Степан что -то колдовал с ножом над тушей. А дед Жуков манил Петровну пальцем.\r\nПоследнюю кружку мать вылила Пашке на рукав.\r\n“Что они там нашли?” — с недобрым предчувствием подумал Пашка.\r\nКогда они подошли поближе, дед, торопясь, принял у Петровны посуду.\r\n— Иди-ка! — Жуков отстранил Степана. Кружку он запустил свинье в глубоко разделанную грудь и, нацедив в нее теплой крови, туг же приложил к губам. Щетинистый кадык запрыгал. Допив, дед, не раздумывая, сунул кружку внутрь туши за второй порцией.\r\n— Что, Пашутка? Противно? — приговаривал он. — Смотри, смотри... А то сразу руки отмывать! И так вон сколько добра спустил! — дед кивнул на лужу перед стайкой. — Я, когда с фронта вернулся, поломанный, только ею и вылечился, родимой. Как на собаке все зажило!.. Отец-то убег... Видеть не могу, говорит. А Петровна, она знает! Да, Петровна?\r\n— Упырь ты и есть упырь! — сплюнула мать и пошла к дому.\r\nДед ухмыльнулся. Вынув полную кружку, он протянул ее Степану.\r\n— На, Степа! Что сморщился? Не будешь? Тогда ты, Пашутка. Бери. Нам-то с тобой сам Бог велел...\r\nПашку замутило.\r\n— Да пей же, дурак! Пей! Ты на них не смотри, они и полжизни не прожили. А мы с тобой дважды рожденные таперича. Пей! После нее никакая зараза не возьмет! На меня взгляни, — дед встал во весь рост. — Видал? А? Кто мне восемьдесят даст?\r\nЕсли бы не Степан, сверлящий Пашку смеющимися глазами, кружка так и осталась бы в руках у деда. Но сосед все глядел, издеваясь, и уже неважно было, что полминуты назад он сам от питья отказался. Пашка вырвал из рук Жукова перепачканную посудину и, подавив тошноту, выпил кровь залпом, не почувствовав ни вкуса, ни запаха. Как парное молоко.\r\n— Боец! — одобрительно проговорил дед. — Сто лет проживешь!\r\nПашка догадался, что дед был уже пьяный. И тут же пожалел, что выпил.\r\nПока дед нацеживал себе еще, Степан, прихватив паяльную лампу, увел Пашку в сарай, где у Ивана Иваныча стояла бочка с бензином. Пошарив вокруг нее, сосед спросил:\r\n— Где воронка-то? Я ж ему давеча давал...\r\n Степан выругался.\r\n— Ну что ты таращишься? Мать позови, а то самого-то теперь за огородами не сыщешь...\r\n— Ты не ругайся, — серьезно посоветовал Пашка. — Наклони, я так подержу.\r\n— Подержи, подержи...\r\nСтепан покачал недоверчиво головой, но бочку наклонил, залив Пашке бензином оба рукава, а заодно и паяльную лампу.\r\n— Подержал? — в голосе его прозвучала издевка. Он поставил бочку на место и присел рядом с Пашкой. — Ты, парень, успокойся, не гоношись. Что ты все в бутылку лезешь? То убивать кидаешься, то кровь глотаешь... Ты вспомни, кто ты есть: крестьянский сын. Ну хлебнул ты горя. Ну, может, зазря — и злость тебя берет. Вот на них, кто тебя туда послал, и злись! А все-то причем?! Все такие ж, как и ты. Да еще с какой стороны глядеть. Дед Жуков всю войну прошел, на нем живого места нет, так-то — за нас уродовался, за детей да за внуков. Мать твоя — четверых вырастила, костьми ложилась, чтобы вы, дураки, хоть на старости лет о ней подумали. А ты? Скандалы устраиваешь, на рожон лезешь... Это она тебе туда писала: “Служи честно, начальника слушай”. А здесь? К Валентине реветь ходила, как письма от тебя долго не было. Позеленела вся! Да ты по гроб жизни должен перед ней на карачках ползать! Ты хоть это понимаешь?\r\nПашка ниже нагнул голову и промолчал.\r\n— Ни черта ты не понимаешь! — Степан начал злиться. — А отец твой! Да Бог с ним, с этим погребом! Иван Иваныч, он ведь молчун был. А как тебя забрали, совсем язык откусил. Ты хоть знаешь, что они с Петровной о тебе не разговаривали? Боялись, понимаешь. Испугать друг друга боялись! Так вот, отец эту свинью для разговоров завел! Понял? Я прихожу раз, а он перед ней душу изливает: за что, мол, ребята гибнут? А! Что? Спросить-то не у кого! Вот свинья ему и дороже товарища стала... А ты, поди, думаешь, чокнулся батя!\r\nПашка не ответил. Он разогнул колени и молча направился к дверям.\r\n— Далеко, ненормальный? — окликнул его Степан.\r\n— Должок верну.\r\n— Ну, давай. Ведро прихвати, как назад пойдешь, лампу заправим.\r\nСтепан устроился в уголке покурить, а Пашка вышел во двор. Проходя мимо ведер, он выплеснул из одного воду и направился с ним к Жукову, разворачивающему лошадь.\r\n— Пашутка, — полупьяной улыбкой встретил его дед. — А что с ведром? На ведро там уже не нацедишь! — Жуков кивнул на свиную тушу.\r\n“За что? За что он так?!” — сам себя спросил Пашка, перебарывая желание оскорбить деда. С трудом сдержался и протянул ему на ладони две двадцатикопеечные монеты.\r\n— Чего это?\r\n— Долг. За хлеб... Бери, дед, и... Молча бери, не спрашивай!\r\n Все дедово лицо сморщилось в презрительную гримасу. Он с сожалением дернул головой и процедил:\r\n— А ты, парень, слабак. Тебе еще титьку сосать, а не кровь... Н-но!!\r\nДрогнув, фургон круто развернулся, но Пашка все-таки успел подскочить к лошади и дернуть ее за узду.\r\n— Стой! — Пашкин голос взмыл в надрыве. — А ну, слезай! Слезай к ядреней матери!\r\nДед натянул вожжи, что лошадь присела на задние ноги. К нему с монетами в руке двинулся Пашка.\r\n— Бери, говорю! Или мало ?! А!\r\n Дед, будто нехотя, слез с телеги, встал перед ним.\r\n— Спрячь деньги, — сказал он свистящим шепотом. — Спрячь от греха... Кого стращаешь, сосунок? Или ты их заработал?\r\nРука у Пашки задрожала от нестерпимого желания запустить этими деньгами прямо по желтым зубам деда, и монеты скатились с ладони ему под ноги.\r\n— Подними! — приказал Жуков, сжав костистые кулаки, и еще резче добавил не терпящим оговорок тоном: — Подбирай, щенок!\r\nВ глазах у Пашки помутилось от жгучей, неутоленной обиды, от полного непонимания, которое невозможно, да и ни к чему было деду объяснять. Он опустился в грязь и так сильно сжал в ладони глинистый кусочек с монетами, что бурые червячки выползли между пальцев, а больное плечо пронзила острая боль. Завалившись на бок, Пашка тяжело охнул, но тут же оперся здоровой ладонью о землю и встал, выпрямившись и будто протрезвев.\r\n“Все. Больше ни к кому соваться не буду. Хватило... Если он даже не может понять”.\r\nПашка даже чуть улыбнулся, грустно, осуждающе. А дед остался доволен его поступком.\r\n— Научись людей уважать, — наставительно проговорил Жуков. — И геройством своим не кичись. Я таких, как ты, знаешь, сколько повидал? Все поперек лезли. И все сгорели!.. Тебе вот кажется, что жизнь там осталась, а здесь она не настоящая? Нет, сынок! Жизнь как раз — здесь! А там — война была... Да и война ли? Что ты про войну знаешь?!\r\nВидя, что Пашка молчит, дед вновь забрался на телегу, тронул и уже на ходу досказал:\r\n— Здеся, чем дольше живешь, тем больше должен, Пашутка! Не мелочью — тыщами, бывает, за эту жизнь хрен расплатишься!\r\nЖуков выехал за ворота, а Пашка, подцепив грязной рукой ведро, медленно двинулся к Степану в сарай.\r\nСосед успел задремать. Разбудив его, Пашка взялся за бочку. Бензин перелили в ведро. Из него — заправили лампу. Оставшиеся полведра с бензином Пашка за Степаном вынес к свиной туше, молча поставил с другим ведром. Принялись палить.\r\n— Куда это Петровна пропала? — надеясь разговорить Пашку, спрашивал Степан. — Родичи у тебя, я тебе скажу... Вот Валька все время, чуть что — показывает на твоих. Гляди, говорит, как жить надо! Гуськом друг за другом ходят, ни слова лишнего никогда, не то, чтобы обиду изливать или драться! А мы — как кошка с собакой. И жить мы начинали, а уж выбрехали все. И все талдычит — ребеночков ей надо! А — куда? Нищету плодить? Я вот тоже на твоих киваю: гляди, говорю, четверых вырастили, а толку? Где они все? Будто ветром сдуло, только за картошкой и приезжают, или денег надо... Что пять, что вспять — нужны, покуда должны...\r\nПашка нахмурился, а Степан продолжал:\r\n— Не, паря, если ты и дальше так гнуть будешь, не житье тебе здесь! Езжай в город, пооботрись, потом, может, вернешься...\r\n— Так ты только что пел: родителей не бросай...\r\n— А я и говорю: вернешься! — Степан вскинул голову. — И не скрипи зубами! Слушай, что говорят!\r\nСкрипнула калитка. Во двор вошла Валентина с пацаном в одной и с большой эмалированной миской в другой руке.\r\n— Еще не опалили? — притворно удивилась она. — Я уж думала, разделали...\r\n Подошла ближе.\r\n— А ты чего один-то палишь, Степан? Так и до ночи не управитесь! Иван Иваныч-то где? Чай, со страху не помер? Визжали на весь проулок!.. А Петровна?.. Да и ты-то чего волком смотришь? А!? — Валентина уставилась на Пашку. — Ему в ночь на работу идти, а ты дурня валяешь! Давай, давай, помогай! Любишь мяско-то небось? А то отвык там...\r\nОни оба встали над свиной тушей и повернулись к Валентине.\r\n— Дура ты! — рявкнул на жену Степан, но было уже поздно.\r\n— Пошли вон отсюда! — приказал Пашка, схватившись за паяльную лампу.\r\n Валентина оторопела.\r\n— Че-го?\r\n— Пошли вон! Катитесь!\r\nЛампу он вырвал у Степана и направил на нее.\r\nЗадом, задом чета отступила к воротам, и только когда калитка захлопнулась — заплакал ребенок, и Валентина понесла: \r\n— Придурок! Тебя лечить надо! Подавитесь своими свиньями!\r\nЗаперев калитку, Пашка вернулся к туше. Палить было неудобно, налившиеся тяжестью руки дрожали, да и Пашка не умел этого делать. Да и не до этого было. Думалось какими-то рваными кусками, неопределенно. Дрянная соль ела глаза. Как подошла мать, он не заметил. Петровна помолчала, посмотрела на его бессильные попытки закончить работу, а кинуться помочь — не решалась. Только что, оглушенный кровью, Иваныч рассказал ей о сыне, о ранах его и остался сидеть там, в доме, у окна, безразлично и затравленно глядя на Пашку, на “свое последнее отражение в зеркале жизни”. Петровне не хотелось трогать его. Они знали друг друга. Потому она вышла к сыну одна. И плакала теперь тихо, почти без слез, наблюдая за его руками. Огонь в лампе поослаб.\r\n — Подкачай, сынок, — советовала осторожно Петровна.\r\nЗдесь он увидел ее!\r\n — Мама?.. Сейчас подкачаю...\r\n Пашка весь напрягся, чтобы руки не подвели его перед матерью, и тут же ошибся. Пламя лизнуло пропитанные бензином рукава фуфайки. Рукава вспыхнули. И Пашка упал на землю. Он начал кататься по ней, чтобы сбить огонь, он знал, как это сделать. И вдруг увидел над собой мать с ведром в руках и с обезумевшими от ужаса глазами. \r\n— Мамочка! Не-е-ет! — прокричал он, успев оглянуться на те два ведра: с бензином и с водой, что стояли у свиной туши и уже успев понять, что одно из них в руках у матери, но остановить ее не смог. \r\nПетровна выполнила свой долг. Вылила из ведра все до капли, пытаясь спасти, стараясь попасть на огонь...', '2016-12-17', 3, 7, ''),
(9, 'Нет меня больше', 'Нет меня больше, нет меня,\r\nвсё пустота и блеф...', 'Нет меня больше, нет меня,\r\nвсё пустота и блеф...\r\nЯ себя просто выменял\r\nу старика по имени \r\nкаменный старый лев...\r\n\r\nОн заплатил мгновением,\r\nимя моё отняв,\r\nи забросал каменьями,\r\nпросто за неимением\r\nимени для меня...', '2016-12-17', 2, 8, ''),
(10, 'Смерть находит причину', 'Альбом.', 'Cмерть находит причину,\r\nа жизнь не нуждается в ней.\r\nПросто дождь отшумел.\r\nПросто скоро закончится лето,\r\nи такою прохладой потянет\r\nс родимых полей,\r\nчто залетные птицы\r\nподнимутся в небо с рассветом.\r\nИ зайдется душа\r\nна какой-то предельной черте,\r\nни в слезах и ни в слове\r\nеще не умея излиться...\r\nА мгновение жизни\r\nвсе длится, и длится, и длится\r\nна почти нежилой,\r\nбезвоздушной почти высоте.', '2016-12-17', 2, 9, ''),
(11, 'Жить в кайф', '', NULL, '2016-12-17', 5, 11, '01_maks_korzh_zhit_v_kaif_myzuka'),
(12, 'Live to rise', '', NULL, '2016-12-18', 5, 12, '01_soundgarden_live_to_rise_myzuka.fm.mp3'),
(13, 'Держаться за воздух', '', NULL, '2016-12-18', 5, 13, '04_bi_2_derzhatsya_za_vozduh_myzuka.fm.mp3'),
(14, 'Hero', '', NULL, '2016-12-18', 5, 14, '18_nickelback_hero_b_side_myzuka.fm.mp3'),
(15, 'Phenomenon', '', NULL, '2016-12-18', 5, 15, '01_thousand_foot_krutch_phenomenon_myzuka.fm.mp3'),
(16, 'Heartache Every Moment ', '', NULL, '2016-12-18', 5, 16, '02_h_i_m_heartache_every_moment_myzuka.fm.mp3'),
(17, 'Extreme Ways исполнителя ', '', NULL, '2016-12-18', 5, 17, '20_moby_extreme_ways_myzuka.fm.mp3');

-- --------------------------------------------------------

--
-- Структура таблицы `Type`
--

CREATE TABLE IF NOT EXISTS `Type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Type`
--

INSERT INTO `Type` (`type_id`, `type_name`) VALUES
(1, 'фото'),
(2, 'стихи'),
(3, 'проза'),
(4, 'видео'),
(5, 'музыка');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `user_id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `user_name` varchar(32) DEFAULT NULL,
  `user_lastname` varchar(32) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `is_male` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`user_id`, `login`, `password`, `email`, `user_name`, `user_lastname`, `phone`, `birthday`, `is_male`) VALUES
(1, 'lecoeur', '1111', 'lecoeur@outlook.by', 'Greg', 'Lecoeur', '332222222', '1990-01-01', 1),
(2, 'waymire', '2222', 'waymire@outlook.by', 'Patty', 'Waymire', '333333333', '1990-01-01', 1),
(3, 'porraz', '3333', 'porraz@outlook.com', 'Mario Suarez', 'Porraz', '333333333', '1990-01-01', 1),
(4, 'McCan', '4444', 'McCan@outlook.com', 'Chris', 'McCan', '334444444', '1990-01-01', 1),
(5, 'aditya', '5555', 'aditya@outlook.com', 'Varum', 'Aditya', '335555555', '1990-01-01', 1),
(6, 'beyonce', '6666', 'beyonce@outlook.com', 'Beyonce', '', '336666666', '1981-09-04', 1),
(7, 'rudnev', '7777', 'rudnev@outlook.com', 'Геннадий ', 'Руднев', '337777777', '1990-01-01', 1),
(8, 'libolev', '8888', 'libolev@outlook.com', 'Лев ', 'Либолев', '338888888', '1990-01-01', 1),
(9, 'ludmila', '9999', 'ludmila@outlook.com', 'Людмила ', 'Парщикова', '339999999', '1990-01-01', 0),
(10, 'glushakov', '11110', 'glushakov@outlook.com', 'Евгений ', 'Глушаков', '331111110', '1990-01-01', 1),
(11, 'korg', '11111', 'korg@outlook.com', 'Макс', 'Корж', '331111100', '1990-01-01', 1),
(12, 'sound', '11112', 'sound@gmail.com', 'Soundgarden', NULL, NULL, '1990-01-01', NULL),
(13, 'bi_2', '11113', 'bi@outlook.com', 'Би-2', '', '331111000', '1990-01-01', 0),
(14, 'Nickel', '11114', 'Nickel@gmail.com', 'Nickelback', NULL, NULL, '1990-01-01', NULL),
(15, 'Thousand', '11115', 'Thousand@mail.ru', 'Thousand Foot Krutch', NULL, NULL, '1990-01-01', NULL),
(16, 'HIM', '11116', 'HIM@mail.ru', 'HIM', NULL, NULL, '1990-01-01', NULL),
(17, 'Moby', '11116', 'Moby@outlook.com', 'Moby', NULL, NULL, '1990-01-01', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`type_id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Comment`
--
ALTER TABLE `Comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `Type`
--
ALTER TABLE `Type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
