<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Психолог Галина Кравченко. Індивідуальні та сімейні консультації психотерапевта в Києві. Групові та корпоративні психологічні тренінги.">
    <meta name='author' content='Vitalii Kolomiiets, Kyiv, Ukraine, vitaljan@gmail.com'>
    <title>Психолог Галина Кравченко (Київ)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/plugin/explorer.js"></script>
    <script src="assets/ajax/mysqlajax.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugin/explorer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<?
    $main_menu = array (
        array ("menu_item" => "Про мене", "id" => "about"),
        array ("menu_item" => "Підтримка", "id" => "support"),
        array ("menu_item" => "Послуги", "id" => "service"),
        array ("menu_item" => "Відгуки", "id" => "comments"),
        array ("menu_item" => "Контакти", "id" => "contacts"),
    );

?>

<body>
    <nav>

        <div class="nav__logo"> <!-- блок логотип-->
            <div class="nav__logo__text">
                <ul>
                    <li>Галина Кравченко</li>
                    <li class='separator'></li>
                    <li><h1>Психолог та психотерапевт</h1></li>
                </ul>
            </div>
        </div>

        <div class="nav__menu"> <!-- блок меню -->
        <?
            // створюємо головне меню
                $n = 0;
                foreach($main_menu as $key=>$value) {
                    $n++;
                    if ($value['menu_item'])
                    echo "
                    <span><a class='nav__elem action' href='#{$value['id']}'>{$value['menu_item']}</a></span>
                    ";
                }
            // створюємо смарт-меню
                echo "
                    <div class='nav__smartmenu'>
                    <ul>
                    <li class='nav__smartmenu__close'><span id='nav-smart-menu-close'>&#10006;</span></li>
                    ";
                $n = 0;
                foreach($main_menu as $key=>$value) {
                    $separate = '';
                    if ($value != end($main_menu)) $separate = "<li class='separator'></li>";
                    $n++;

                    $id = $value['id'];
                    if ($value['menu_item'])
                    echo "
                    <a href='#{$value['id']}'>
                    <li class='nav__smartmenu__elem'>
                    {$value['menu_item']}
                    </li>
                    </a>
                    {$separate}
                    ";
                }
                    echo "
                </ul>
                </div>
                ";

            ?>
        </div>
    </nav>

    <main>
        <div id="home-arrow" class='hidden-elem'></div>
        
        <div class="main__module" id="about">
            <div class="main__module__header">
                Про мене
            </div>
            <div class="main__module__content flex-blocks about">

                <div class='about__img'>
                    <img src='assets/img/photo.jpg' alt='Галина Кравченко. Психолог. Психотерапевт. Индивидуальные и семейные консультации психолога в Київе. Корпоративные психологические тренинги. Онлайн консультации психотерапевта.'>
                </div>

                <div class='about__text flex-blocks'>
                    <p >
                        <span>Психолог. Психотерапевт. Травмотерапевт. Арт-терапевт. Сімейний медіатор.</span>
                    </p>
                    <p class='flex-blocks'>
                        <span>Штатний психолог в &laquo;Pizza Veterano&raquo;</span> <span style = "margin-left: 30px"><a class="no-underline" href="https://kyiv.veteranopizza.com/" rel="nofollow" target="blanc"><img src="assets/img/veterano.jpg" alt="Психолог veterano pizza"></a></span>
                    </p>
                    <p>
                        Починаючи з 2015 року - приватна психотерапевтична практика.
                    </p>
                    <p class='think'>
                        ... Весь мій життєвий шлях - це розуміння людини, як надзвичайно складної системи. Здійснюючи супровід, важливо враховувати всі складові - психічні та фізіологічні особливості, життя, потреби, смисли, рівень опірності до стресів, культурні та релігійні відмінності.
                    </p>
                </div>
                <div>
                    <p>
                        Проводжу <a href="#service-personal">індивідуальні</a> та <a href="#service-family">сімейні консультації</a>, <a href="#service-online">онлайн консультації</a>, <a href="#service-group">групові та корпоративні тренінги</a>.
                    </p>
                    <p>
                        Консультації проводяться в Києві, в центрі міста, неподалік Софієвської площі.
                    </p>
                    <div class='read-more' data-text='Освіта, досвід, біографія ...'>
                        <div>
                            <ul class='education'>
                                <li><img src='assets/img/experience.png'><span class='about__education__text'>Український центр медіації та НГО "Родина Кольпінга". Медіатор, сімейний медіатор.</span>  </li>
                                <li><img src='assets/img/experience.png'><span class='about__education__text'>Regent University (Virginia Beach, USA, 2019) Травмотерапевт.</span></li>
                                <li><img src='assets/img/experience.png'><span class='about__education__text'>МЕГІ, Intrnational Education Cociety (2016) Магістратура, спеціальність: психолог.</span></li>
                                <li><img src='assets/img/experience.png'><span class='about__education__text'>Донецький державний університет (1996) Кандидат філологічних наук, доцент кафедри української філології і культури.</span></li>
                            </ul>
                        </div>
                        <div class="separator"></div>
                        <div id="biography" class="read-more" data-text="Моя біографія &#9660;">
                            <p>
                            Чим більше поворотів у житті, тим різноманітнішого досвіду  набуває людина. Колізії можна сприймати як невдачі, а можна, як нові можливості.
                            </p>
                            <p>Неочікувані повороти в житті  дозволили мені набути багатого досвіду та різноманітних знань. Що крок за кроком привело мене до психології.</p> 

                            <p>Після закінчення школи на Полтавщині, я потрапила до мегаполісу на хлібозавод. На той час здебільшого там працювали ті, хто повертався з місць обмеження волі. Це були люди з різним мисленням, досвідом та прагненнями. Їх пізнання - перша сходинка до психології. Цей досвід зародив у мені інтерес до людей.</p>

                            <p>Після вступу до Донецького державного університету на спеціальність «українська мова» я отримала додаткову спеціалізацію - культурологія.  Як жили люди колись і тепер, тут і десь? Як вони мислили, що любили? Як переживали та справлялись зі своїми проблемами? Встановлення зв'язків між світоглядом, потребами та продуктом життя  - моя друга сходинка до психології. Цей досвід випрацював здатність дивитись системно.</p>

                            <p>Після закінчення вишу, я вступила до аспірантури, потрапивши на кафедру "Української філології і культури". Основна дисципліна  -  українське ділове мовлення, як на мене, була страшенно нудною. Перше завдання для себе - вибудувати курс, щоб він став цікавим. Почалися пошуки - як мислять юристи, а як журналісти, фізики, і чим живе сучасна молодь, і через який життєвий досвід можна до них достукатись. Вивчення  маси літератури з методики і психології і стали третьою сходинкою до психології. Ця навичка пробудила пошуки в підходах у роботі з ситуацією.</p>

                            <p>З відкриттям на кафедрі спеціалізації культурологія збільшилась кількість предметів, які довелось розробляти - теорія культури, історія релігії, PR, історія мистецтва. Це дало можливість синтезувати знання з різних дисциплін.  А далі - найцікавіше - виробилась навичка дивитись на  той самий предмет під різним кутом зору, наче б різними очима, чи з різних стільців... Це та навичка, яка допомогла мені справитися з багатьма ситуаціями, навіть такими, як війна і втрати, відшукавши в них новий зміст і новий старт. Я почала займатись психологією культури. І це - четверта сходинка.</p>

                            <p>Якось один дуже мудрий викладач сказав мені: "Не можна вчити інших того, чого не вмієш сам". Я це прочитала так: "Шукай знання не через книги, а через свій досвід". Общини мусульман, християн, буддистів, ромів, афро-американців, арабів. Їх звичаї, релігійні погляди, страви, особливості спілкування. Далі шикарний тренер з тайцзицюань, занурений в культуру, китайський майстер цигун. Дипломні роботи студентів з психології культури.  Власний досвід - п`ята сходинка. Навичка проживати інший досвід розвинула розуміння та емпатію.</p>

                            <p>Одного разу мене запросили в спортивний клуб "Легіон",  де передбачались  творчі майстерні для всіх вікових груп. Дорослі йшли в спорт, а діти - у творчість. Дитяча психологія - це зовсім інший світ. Десятки журналів з дитячої педагогіки й психології, навчання й консультації, відкриття своєї внутрішньої дитини, погляд на світ очима дитини чи підлітка - це шоста сходинка.</p>

                            <p>А далі була війна. Вона вибила з-під мене стільця, на якому я так зручно сиділа. Старі смисли втратили значимість. Тому... Магістратура з психології, велика кількість курсів і тренінгів по роботі з травмою, ПТСР, депресією, робота з військовими в зоні бойових дій, з цивільними, які були змушені втікати від війни, з ветеранами, в громадських організаціях, безліч проектів з відновлення для людей, що постраждали від війни. Війна навчила навичкам відділяти основне від другорядного. Робота з наслідками війни - це сьома сходинка мене, тепер уже як психолога.</p>

                            <p>Робота з людьми, що потребують допомоги,  передбачає створення безпечної атмосфери, і найперше - це родина. Потреба роботи з родиною привела мене в сімейну медіацію. Восьма сходинка - ненасильницьким спілкуванням і робота над навичками чути себе й іншого.</p>

                            <p>Зараз я працюю психологом на підприємстві, відкритому ветераном для ветеранів "Pizza "Veterano".  Люди, що повертаються з війни і потрапляють в інший світ, мають потребу в адаптації, безпечній території - віднайти себе і стати частиною колективу, при цьому не розчинившись у ньому. Корпоративна культура - дев`ята сходинка. Навички роботи  в корпорації - це про пошук рольових моделей, формування ідеології, народження  віри.</p>

                            <p>Весь мій життєвий шлях  - це розуміння людини як надзвичайно складної системи. Здійснюючи супровід, важливо враховувати всі складові - психічні та фізіологічні особливості, життєвий шлях, потреби, смисли, рівень опірності до стресів, культурні та релігійні відмінності.</p>

                            <p>Із додаткового навчання маю сертифікат тренера та інструктора із запобігання та лікування ПТСР в Україні.</p>

                            <p>Тренінги: «Робота з ПТСР та стресовими розладами  серед військовослужбовців та їх родин», «Самоврядування посттравматичним стресовим розладом», «Запобігання та лікування посттравматичного стресового розладу», «Соціально-психологічна підтримка адаптації ветеранів АТО», «ПТРС і СР та робота з ветеранами війни та їх сім’ями», «Практичні аспекти роботи з втратою. Психологічна допомога при надмірній тривозі або агресії», «Підтримка профілактики ПТСР і вживання шкідливих речовин серед військовослужбовців та членів їх сімей в Україні», «Соматична та психосоматична декомпресія для вироблення стійкості військових до стресу», «ДПДГ».</p>

                            
                            <p>Працювала в ГО «Українська асоціація фахівців з подолання наслідків психотравмуючих подій» («Психологічна кризова спілка») - супровід військових у зоні АТО, науково-методична діяльність пов’язана з подоланням проблем насилля та конфліктів, викликаних війною - ГО «Спілка ветеранів АТО Деснянського району м.Києва», ГО «Ветеранський рух України», «Всеукраїнський рух «Захисники Вітчизн», «Територія Новий Схід», «Родини ветеранів АТО». </p>
                        </div> <!-- read more -->
                    </div>
                </div>
            </div>
        </div> <!-- main__module -->
        
        <div class="main__module" id="support">

            <div class="main__module__header flex-blocks center-blocks main-info-header">
                <span>На що розраховувати</span>
                <div class='flex-blocks center-blocks'>
                    <img src='assets/img/quession.png'alt='Допомога психолога, Київ'><img src='assets/img/quession.png'alt='Допомога психотерапевта, Київ'><img src='assets/img/quession.png' alt='Допомога психолога, Київ'>
                </div>
            </div>

            <div class="main__module__content">
                <p>
                    <ul>
                        <li class='list-marker'><img src='assets/img/list-ok.png'><span>Ви йдете <strong>не</strong> на сповідь, <strong>не</strong> на суд, <strong>не</strong> на дружню бесіду.</span></li>
                        <li class='list-marker'><img src='assets/img/list-ok.png'><span>Тут приймуть таким, яким Ви є.</span></li>
                        <li class='list-marker'><img src='assets/img/list-ok.png'><span>Тут не засуджують. Не глузують. Не дають оцінок та корисних порад.</span></li>
                        <li class='list-marker'><img src='assets/img/list-ok.png'><span>Зберігають Ваші таємниці.</span></li>
                        <li class='list-marker'><img src='assets/img/list-ok.png'><span>Стараються допомогти.</span></li>
                        <li>&nbsp;</li>
                        <li class='list-marker'><img class='close'src='assets/img/list-close.png'><span>&laquo;На что жалуетесь?&raquo; - таке питання Ви тут не почуєте.</span></li>
                        <li class='list-marker'><img class='close'src='assets/img/list-close.png'><span>Заїжджене &laquo;Хочете про це поговорити?&raquo; - не почуєте також.</span></li>
                        <li class='list-marker'><img class='close'src='assets/img/list-close.png'><span>&laquo;Все рівно мені ніхто не допоможе...&raquo; - Ваше бажання + досвід психотерапевта обов'язково дадуть результат.</span></li>
                    </ul>
                    <br><br>
                    <h2 class='main__module__sub-header'>Як зробити перший крок ?</h2>
                    <div class='read-more center' data-text="Детальніше ... &raquo;">
                        <p>
                            - Вам не треба готуватись, як до іспиту. Перший крок Ви можете зробити прямо зараз, поставивши <span class='action quession quession_common'>питання психологу</span> онлайн.
                        </p>
                        <div class='flex-blocks center-blocks'>
                            <img src='assets/img/step.png' style='height: 250px' alt='Питання психологу'>
                            <div class='action-button quession quession_common'>Питання психологу &raquo;</div>
                        </div>
                    </div>
                </p>
            </div> <!-- main__module__content -->
        </div> <!-- main__module -->

        <div class="main__module">

            <div class="main__module__header">
                <div class="help flex-blocks center-blocks">
                    <span>Допомога та підтримка</span>
                </div>
            </div> <!-- main__module__header -->

            <div class="main__module__content full-width">

            <p>
                Трапляється, що буває складно відповісти на безліч питаннь. З приводу власних почуттів. З приводу того, що турбує. Як сприймати інших та як сприймають тебе. Чого насправді хочеться та чого бракує.
            </p>

            <div class='flex-blocks full-height'>
                <div class='flex-blocks_3 specialization'>
                <div class='img'><img src='assets/img/head1.png' alt='Допомога психолога. Київ.'></div>
                <h2>Особистісне зростання</h2>
                <ul>
                    <h3 class='specialization_h3'>Виробимо стратегію поведінки в ситуаціях:</h3>
                    <li>&nbsp;</li>
                    <li>&#183; Труднощів із самоідентифікацією</li>
                    <li>&#183; Неадекватної самооцінки та самоцінності</li>
                    <li>&#183; Втрати смислів, цінностей в житті</li>
                    <li>&#183; Нереалізованості </li>
                    <li>&#183; Труднощів у прийнятті рішень</li>
                    <li>&#183; Складнощів комунікації, розуміння себе та іншого, міжособистісному спілкуванні</li>
                    <li>&#183; Розмитості кордонів своїх та іншого</li>
                    <li>&nbsp;</li>
                    <li>Подолаємо негативні звички </li>
                </ul>
                </div>
                <div class='flex-blocks_3 specialization'>
                    <div class='img'><img src='assets/img/head2.png' alt='Допомога психолога. Київ.'></div>
                    <h2>Сімейна терапія</h2>
                    <h3 class='specialization_h3'>Допоможе тим, хто переживає незадоволення, зраду, відчуженість, сварки, відмінність у поглядах на цінності, виховання, побут.</h3>
                    <ul>
                        <li>&#183; Переживемо складні кризові моменти сіменого життя</li>
                        <li>&#183; Налагодимо сімейні стосунки  різних поколінь</li>
                        <li>&#183; Вирішимо труднощі стосунків у парах, зокрема в подружжях з великою різницею у віці, нестандартних сім'ях</li>
                        <li>&#183; Подолаємо труднощі у взаємодії з дітьми</li>
                        <li>&#183; Вибудуємо гендерні ролі</li>
                        <li>&#183; Станемо почутими</li>
                        <li>&#183; Прояснимо потреби власні та партнера</li>
                    </ul>
                </div>
                <div class='flex-blocks_3 specialization'>
                <div class='img'><img src='assets/img/head3.png' alt='Допомога психолога. Київ.'></div>

                    <h2>Супровід у роботі з травмою, втратою, депресією</h2>
                    <ul>
                        <li>&nbsp;</li>
                        <h3 class='specialization_h3'>Допоможу подолати страхи, фобії, тривожність, панічні атаки</h3>
                        <h3 class='specialization_h3'>Забезпечу супровід і підтримку у переживанні втрати та горя</h3>
                        <h3 class='specialization_h3'>Відновимо погіршення психічного здоров'я, спричиненого: </h3>
                        <li>&#183; депресивними станами</li>
                        <li>&#183; розладами настрою</li>
                        <li>&#183; соматичними (тілесними) розладами</li>
                        <li>&#183; панічними атаками</li>
                        <li>&#183; порушенням адаптації, пов'язаним зі складною ситуацією.</li>
                        <li>&nbsp;</li>
                        <li>Освоїмо опанування почуттів, емоцій та станів (злість, провина, агресивність, безпорадність, відчуженість байдужість, самотність прив'язаність, нав'язливі думки.</li>
                        <li>Вибудуємо поведінку в ситуаціях емоційного і фізичного насилля.</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                </div>
                <p>
                    За зазначеними напрямками проводиться групова робота.  
                </p>
                <p>
                    Робота в групі значно прискорює особистісне зростання, подолання проблемних ситуацій, розширює коло можливостей.
                </p>
            </div>

        <div class="main__module" id="service">
            <div class="main__module__header">
                Послуги психотерапевта
            </div>
            <div class="main__module__content">
                <p class='flex-blocks justify-blocks service quession quession_personal' id='service-personal'>
                    <span class='service_description'>Індивідуальні консультації психотерапевта</span>
                    <span class="service__item">
                        <img src='assets/img/single.png' alt='Індивідуальні консультації психотерапевта'>
                        <span>800 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_family' id='service-family'>
                    <span class='service_description'>Сімейні консультації психотерапевта</span>
                    <span class="service__item">
                        <img src='assets/img/family.png' alt='Сімейні консультації психотерапевта'>
                        <span>1000 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_group' id='service-group'>
                    <span class='service_description'>Групові психологічні тренінги</span>
                    <span class="service__item">
                        <img src='assets/img/human.png' alt='Групові психологічні тренінги'>
                        <span>500 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_group' id='service-group'>
                    <span class='service_description'>Корпоративні психологічні тренінги</span>
                    <span class="service__item">
                        <img src='assets/img/corporate.png' alt='Корпоративні психологічні тренінги'>
                        <span>от 2000 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_online' id='service-online'>
                    <span class='service_description'>Для тих, хто далеко від Києва, психотерапевт надає онлайн консультації в skype.</span>
                    <span class="service__item" >
                        <img src='assets/img/skype-img.png' alt='Онлайн консультації психолога'>
                        <span>600 грн</span>
                    </span>
                </p>
            </div>
        </div> <!-- main__module -->
        
        <div class="main__module" id="comments">
            <div class="main__module__header">
                Відгуки та рекомендації
            </div>
            <div class="main__module__content flex-blocks">
            <a class="flex-blocks no-underline" href="https://www.facebook.com/photo.php?fbid=2539326189444159&set=a.298455810197886&type=3&theater" rel="nofollow" target="blanc">
            <img class="img-round" src="assets/img/olga.jpg" alt="">
                <span>Ольга Лєбєдєва</span>
            </a>
            <a class="flex-blocks no-underline" href="https://www.facebook.com/photo.php?fbid=744042376018545&set=a.109080772848045&type=3&theater" rel="nofollow" target="blanc">
            <img class="img-round" src="assets/img/stefany.jpg" alt="">
                <span>Стефанія Іоффе</span>
            </a>
            <a class="flex-blocks no-underline" href="https://www.facebook.com/photo.php?fbid=935166060200324&set=a.830297564020508&type=3&theater" rel="nofollow" target="blanc">
            <img class="img-round" src="assets/img/tetiana.jpg" alt="">
                <span>Тетяна Ільченко</span>
            </a>
            </div>
            <div class="main__module__content">

            </div>
        </div> <!-- main__module -->
        
        <div class="main__module">
            <div class="main__module__content flex-blocks">
                <div class='action-button quession quession_common'><span>Звернутись до психолога &raquo;</span></div>
                <div class='action-button quession quession_quickly'><span>Термінова допомога &raquo;</span></div>
            </div>
        </div> <!-- main__module -->
        
        
    </main>

    <footer id="contacts">
        <div class="footer__header">
            Зі мною можна зв'язатись:
        </div>
        <div class="footer__content">
            <ul>
                <li>
                    <a class="no-underline" href='mailto:kravchenko.galina@outlook.com'><img class='phone-icon' src='assets/img/email.png' alt='Галина Кравченко. Психотерапевт. Україна, м.Київ'>
                    kravchenko.galina@outlook.com</a>
                </li>
                <li>
                    Галина Кравченко. Психотерапевт. Україна, м.Київ
                </li>
            </ul>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", ()=>{

        let nav = document.querySelector('nav');
        let main = document.querySelector('main');
        let smartMenu = document.querySelector('.nav__smartmenu');
        let homeArrow = document.querySelector('#home-arrow');
        let homeArrowY = parseInt(getComputedStyle(homeArrow).bottom);
        let homeArrowVisible = false;

        document.querySelectorAll('.read-more').forEach((i)=>{ // створюємо кнопки "Read more" для всіх елементів з відповідним класом
            let btn = document.createElement('button');
            $(btn).insertAfter(i);
            if (i.classList.contains('center')) btn.classList.add('center');
            btn.classList.add('read-more-button');
            btn.setAttribute('data-readmore','true');
            btn.innerHTML = 'Read more ...';
            if (i.dataset.text) btn.innerHTML = i.dataset.text;
        })

        let navButton = document.createElement('span'); // створюємо кнопку меню-смартфон
        navButton.innerHTML = "&#9776;";
        navButton.classList.add('nav__button');
        nav.appendChild(navButton);
        navButton.addEventListener('click', (event)=>{
            event.stopPropagation();
            navButton.classList.add('hidden');
            $(smartMenu).show(100);
            smartMenu.classList.add('nav__smartmenu_active');
            })

        document.addEventListener('click', (event)=>{ // глобальний обробник
        let el = event.target;

            if (el.dataset.readmore) { // клік по Read more - розгортання
                $(el.previousElementSibling).animate({maxHeight: 10000}, 1000);
                el.style.display = 'none';
            }

            let aTag =  el.closest('a');
            if (aTag) { // обробник кліків посилань-якорів
                let link = aTag.getAttribute('href');
                if (!link) return;
                if (link.charAt(0) != '#') return;
                event.preventDefault();
                moduleView(link);
            }
        })

        function moduleView(id, navItem) { // скролить вікно та показує обраний в меню модуль сайту
            let prefix = (id.charAt(0) == '#') ? '' : '#';
            let target = document.querySelector(`${prefix}${id}`);
            let y1 = target.getBoundingClientRect().y;
            let y2 = parseInt(getComputedStyle(nav).height) + 100;
            let dy = y1 - y2;
            if (dy < 0) {dy = '-=' + Math.abs(dy)} else
            if (dy > 0) dy = '+=' + dy;
            let steps = 0;
            if (dy) $('html').animate({scrollTop: dy}, {step: ()=>{steps++}}, 1000);
            if (steps <= 1) $(target).fadeTo(100, .5).fadeTo(200, 1);
            // let delay = 1000/Math.abs(dy);
            // let steps = 40;
            // let n = 1;
            // let offset = 0;
            // let scrolled = false;
            // let interval = setInterval (()=>{
            //     if (n >= steps) {
            //         clearInterval(interval);
            //         // if (navItem) setTimeout(()=>{navItem.classList.add('nav__elem_active')}, 500);
            //         if (!scrolled) $(`#${id}`).fadeTo(100, .5).fadeTo(200, 1);
            //         return;
            //     }
            //     n++;
            //     offset = target.getBoundingClientRect().y;
            //     window.scrollBy(0, -dy/steps);
            //     offset -= target.getBoundingClientRect().y;
            //     if (offset != 0) scrolled = true;
            //     if (offset == 0) n = steps;
            // }, 10);
        }

        nav.addEventListener('click',(event)=>{ // обробник кліку панелі навігації
            if (event.target.dataset.id) 
                moduleView(event.target.dataset.id);
        });

        smartMenu.addEventListener('mouseleave', (event)=>{ // закриття smartmenu
            $(smartMenu).hide(100);
            smartMenu.classList.remove('nav__smartmenu_active');
        });

        smartMenu.addEventListener('click', (event)=>{ // клік по ел-ту smartmenu
            // event.stopPropagation();
                $(smartMenu).hide(100);
                smartMenu.classList.remove('nav__smartmenu_active');
        });

        homeArrow.addEventListener('mouseenter', (event)=>{ // анімація кнопки "додому"
            $(event.target).animate({bottom: '-=5'}, 100).animate({bottom: '+=5'}, 100);
        })

        homeArrow.addEventListener('click', ()=>{ // клік кнопки "додому" - повернення до 1-го ел-ту класу main__module
            moduleView(document.querySelector('.main__module').getAttribute('id'));
        })

window.onscroll = ()=>{

            if (window.pageYOffset > 300) {// показати/сховати кнопку "додому"
                if (!homeArrowVisible) 
                {
                    homeArrowVisible = true;
                    homeArrow.style.bottom = homeArrowY + 'px';
                    homeArrow.classList.remove('hidden-elem');
                    $(homeArrow).animate({bottom: '25px'}, 1000);
                }
            } 
            else 
            {
                homeArrow.classList.add('hidden-elem');
                homeArrowVisible = false;
                };
        }

// ---------------------------------------------------------------------------------- кінець шаблону сайту

setScroll(document.querySelector('#biography'), undefined, undefined, undefined, {backgroundColor: '#ce92bc', height: '50px'});

let email_form = [
        {"class":"quession_common", "subject":"Питання психологу", "message":"Добрий день. Потрібна Ваша допомога. Зв'яжіться, будь ласка, зі мною."},
        {"class":"quession_personal", "subject":"Індивідуальна терапія", "message":"Добрий день. У мене питання з приводу индивідуальних консультацій. Зв'яжіться, будь ласка, зі мною."},
        {"class":"quession_family", "subject":"Сімейна терапія", "message":"Добрий день. У мене питання з приводу сімейної терапії. Зв'яжіться, будь ласка, зі мною."},
        {"class":"quession_online", "subject":"Онлайн консультації", "message":"Добрий день. У мене питання з приводу онлайн консультацій. Зв'яжіться, будь ласка, зі мною."},
        {"class":"quession_group", "subject":"Групові заняття", "message":"Добрий день. У мене к Вам питання з приводу групових занять. Зв'яжіться, будь ласка, зі мною."},
        {"class":"quession_quickly", "subject":"-=!!!=- Термінова допомога!", "message":"Добрий день. Я почуваюсь жахливо! Мені терміново потрібна Ваша Допомога!"}
];

document.querySelectorAll('.action-button').
forEach((i)=>{
    i.addEventListener('mouseenter', (event)=>{
        $(event.target).animate({top: '+=5px'}, 50).animate({top: '-=5px'}, 50);
    })
})

document.addEventListener('click', (event)=>{
    let el = event.target.closest('.quession');
    if (el) {
        email_form.forEach((i, n)=>{
            if (el.classList.contains(i.class)) {
                modalWindow(
                    'Дякую, що звернулись!',
                    `Ваше повідомлення буде надіслано мені на email та телеграм. Я відповім Вам найближчим часом.
                    <form name='mail' class='explorer-form'>
                        <input name='username' class='input_text' type='text' placeholder='Ваше им&apos;я'>
                        <input name='useremail' class='input_text' type='text' placeholder='Ваш email'>
                        <input name='userphone' class='input_text' type='text' placeholder='Ваш телефон'>
                        <textarea name='usermsg' class='input_textarea' type='text' placeholder='Ваше повідомлення'></textarea>
                    </form>
                    `,
                    ['Надіслати', 'Повернутись'],
                    (n)=>{

                        if (n == 1) { // кнопка повернутись
                            closeWindow('send-mail');
                            return;
                        }

                        // кнопка надіслати:
                        let form = document.forms.mail;
                        // веріфікація
                        if (form.useremail.value.length < 7 && form.userphone.value.length < 7)
                            {explorerPopUp("Щоб психолог міг з Вами зв'язатись, зазначте Ваш телефон або email.");}
                        else
                        { // надсилання email
                            sendMail ('kravchenko.galina@outlook.com', form.subj,
                                'Від кого: ' + form.username.value + '\n' + 'email: ' + form.useremail.value + '\n' + 'Телефон: ' + form.userphone.value + '\n' + form.usermsg.value + '\n', 'psycholog.net.ua', (response)=>{
                                    if (response.send) {
                                        explorerPopUp(`Ваше повідомлення надіслано на мій email. Я обов'язково зв'яжусь з Вами за першої можливості. Якщо я не відповідаю, перевірте Ваші контактні дані та надішліть повідомлення ще раз.`);
                                        closeWindow('send-mail');
                                    }
                                }, 'assets/ajax/');
                            // надсилання в телеграм
                            ajax(form.subj + "%0AВід кого: " + form.username.value + "%0aemail: " + form.useremail.value + "%0aТелефон: " + form.userphone.value + "%0a" + form.usermsg.value, (response)=>{
                                if (response && response.ok) explorerPopUp(`Ваше повідомлення надіслано мені на telegram. Я обов'язково зв'яжусь з Вами за першої можливості. Якщо я не відповідаю, перевірте Ваші контактні дані та надішліть повідомлення ще раз.`);
                            },'api.php',"");

                        }
                    }, undefined, 0, 'send-mail'
                ) // modalwindow
                document.forms.mail.usermsg.value = i.message;
                document.forms.mail.subj = i.subject;
            }
        });
    }
})

}); // DOMContentLoaded
    </script>
</body>
</html>