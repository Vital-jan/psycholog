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
                    $id = ($value['id']) ? $value['id'] : "module{$n}";
                    $n++;
                    if ($value['menu_item'])
                    echo "
                    <span class='nav__elem action' data-id='{$id}'>{$value['menu_item']}</span>
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
                    <li class='nav__smartmenu__elem' data-id='{$id}'>
                    {$value['menu_item']}
                    </li>
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
                        <span>Психолог. Психотерапевт. Травмтерапевт. Арт-терапевт. Сімейний медіатор.</span>
                    </p>
                    <p class='flex-blocks'>
                        <span>Штатний психолог в &laquo;Pizza Veterano group&raquo;</span> <span><a class="no-underline" href="https://kyiv.veteranopizza.com/" rel="nofollow" target="blanc"><img src="assets/img/veterano.png" alt="Психолог veterano pizza"></a></span>
                    </p>
                    <p>
                        Починаючи з 2015 року - приватна психотерапевтична практика.
                    </p>
                    <p class='think'>
                        ... Весь мій життєвий шлях - це розуміння людини, як надзвичайно складної системи. Здійснюючи супровід, важливо враховувати всі складові - психічні та фізіологічні особливості, життєвий шлях, потреби, смисли, рівень опірності до стресів, культурні та релігійні відмінності.
                    </p>
                </div>
                <div>
                    <p>
                        Проводжу <a href="#service-personal">індивідуальні</a> та <a href="#service-family">сімейні консультації</a>, <a href="#service-online">онлайн консультації</a>, <a href="#service-group">групові та корпоративні тренінги</a>.
                    </p>
                    <p>
                        Консультації проводяться в Києві, в центрі міста, неподалік Софієвської площі.
                    </p>
                    <div class='read-more' data-text='Детальніше ...'>
                        <div class='flex-blocks'>
                            <img class='about__education__img' src='assets/img/experience.png' alt='Консультації психолога в Києві. Досвід та освіта.'>
                            <ul class='about__education__text'>
                                <li>Regent University (Virginia Beach, USA, 2019) Травмтерапевт, арт-терапевт, сімейний медіатор.</li>
                                <li>МЕГІ, Intrnational Education Cociety (2016) Магістратура, спеціальність: психолог.</li>
                                <li>Донецький державний університет (1996) Кандидат філологічних наук, доцент кафедри української філології і культури.</li>
                            </ul>
                        </div>
                        <div class="separator"></div>
                        <p>
                            Після закінчення школи на Полтавщині, я потрапила до великого мегаполісу. На завод, де здебільшого працювали ті, хто повернувся з місць позбавлення волі. Це були люди з різним мисленням, досвідом та прагненнями. Їх пізнання – моя перша сходинка до психології. Цей досвід породив мій інтерес до людей.
                        </p>
                        <div class="read-more" data-text="Моя біографія детальніше &#9660;">
                            <p>
                                Далі – університет, аспірантура, викладацька діяльність, додаткова освіта. Вивчення теорії культури, історії релігії, PR, історії мистецтва, психології культури. Як жили люди колись і тепер? Як вони мислили, що любили? Як переживали і справлялися зі своїми проблемами? Як мислять юристи, а як журналісти, фізики, і чим живе сучасна молодь, і через який життєвий досвід можна до них достукатись.
                            </p>
                            <p>
                                Якось один дуже мудрий викладач сказав мені: "Не можна вчити інших того, чого не вмієш сам". Я це прочитала так: "Шукай знання не через книги, а через свій досвід". Общини мусульман, християн, буддистів, ромів, афро-американців, арабів. Їх звичаї, релігійні погляди, страви, особливості спілкування. Досвід тренера з тайцзицюань, китайського майстра цигун.
                            </p>
                            <p>
                                Зовсім інший світ - дитяча психологія. Десятки журналів з дитячої педагогіки й психології, навчання й консультації, відкриття своєї внутрішньої дитини, погляд на світ очима дитини чи підлітка – чергова моя сходинка.
                            </p>
                            <p>
                                А далі була війна. Вона вибила з-під мене стільця, на якому я так зручно сиділа. Старі смисли втратили значимість. Тому... Магістратура з психології, велика кількість курсів і тренінгів по роботі з травмою, ПТСР, депресією, робота з військовими в зоні бойових дій, з цивільними, які були змушені втікати від війни, з ветеранами, в громадських організаціях.
                            </p>
                            <p>
                                Війна навчила відділяти основне від другорядного. Робота з наслідками війни – ще одна сходинка для мене, тепер уже як психолога.
                            </p>
                            <p>
                                Робота з людьми, що потребують допомоги, передбачає створення безпечної атмосфери, і найперше - це родина. Потреби роботи з родиною привела мене в сімейну медіацію. Чергова сходинка - ненасильницьке спілкування, робота з навичками чути себе та іншого.
                            </p>
                            <p>
                                Весь мій життєвий шлях - це розуміння людини як надзвичайно складної системи. Здійснюючи супровід, важливо враховувати всі складові - психічні та фізіологічні особливості, життєвий шлях, потреби, смисли, рівень опірності до стресів, культурні та релігійні відмінності.
                            </p>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
            </p>

            <div class='flex-blocks'>
                <div class='flex-blocks_3 specialization'>
                <div class='img'><img src='assets/img/head1.png' alt='Допомога психолога. Київ.'></div>
                <h2>Специализация 1</h2>
                <ul>
                <li class='action'>Проблема 1.1</li>
                <li class='action'>Проблема 1.2</li>
                <li class='action'>Проблема 1.3</li>
                <li class='action'>Проблема 1.4</li>
                <li class='action'>Проблема 1.5</li>
                <li class='action'>Проблема 1.6</li>
                </ul>
                </div>
                <div class='flex-blocks_3 specialization'>
                    <div class='img'><img src='assets/img/head2.png' alt='Допомога психолога. Київ.'></div>
                    <h2>Специализация 2</h2>
                    <ul>
                        <li class='action'>Проблема 2.1</li>
                        <li class='action'>Проблема 2.2</li>
                        <li class='action'>Проблема 2.3</li>
                        <li class='action'>Проблема 2.4</li>
                        <li class='action'>Проблема 2.5</li>
                        <li class='action'>Проблема 2.6</li>
                    </ul>
                </div>
                <div class='flex-blocks_3 specialization'>
                <div class='img'><img src='assets/img/head3.png' alt='Допомога психолога. Київ.'></div>

                    <h2>Специализация 3</h2>
                    <ul>
                        <li class='action'>Проблема 3.1</li>
                        <li class='action'>Проблема 3.2</li>
                        <li class='action'>Проблема 3.3</li>
                        <li class='action'>Проблема 3.4</li>
                        <li class='action'>Проблема 3.5</li>
                        <li class='action'>Проблема 3.6</li>
                    </ul>
                </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
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
                        <span>500 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_family' id='service-family'>
                    <span class='service_description'>Сімейні консультації психотерапевта</span>
                    <span class="service__item">
                        <img src='assets/img/family.png' alt='Сімейні консультації психотерапевта'>
                        <span>700 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_group' id='service-group'>
                    <span class='service_description'>Групові та корпоративні психологічні тренінги</span>
                    <span class="service__item">
                        <img src='assets/img/human.png' alt='Групові та корпоративні психологічні тренінги'>
                        <span>от 2000 грн</span>
                    </span>
                </p>
                <p class='flex-blocks justify-blocks service quession quession_online' id='service-online'>
                    <span class='service_description'>Для тих, хто далеко від Києва, психотерапевт надає онлайн консультації в skype.</span>
                    <span class="service__item" >
                        <img src='assets/img/skype-img.png' alt='Онлайн консультації психолога'>
                        <span>300 грн</span>
                    </span>
                </p>
            </div>
        </div> <!-- main__module -->
        
        <div class="main__module" id="comments">
            <div class="main__module__header">
                Відгуки та рекомендації
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
        let currentNavElement = document.querySelector('.nav__elem');

        document.querySelectorAll('.read-more').forEach((i)=>{ // створюємо кнопки "Read more" для всіх елементів з відповідним класом
            let btn = document.createElement('button');
            $(btn).insertAfter(i);
            if (i.classList.contains('center')) btn.classList.add('center');
            btn.classList.add('read-more-button');
            btn.setAttribute('data-readmore','true');
            btn.innerHTML = 'Read more ...';
            if (i.dataset.text) btn.innerHTML = i.dataset.text;
        })

        document.addEventListener('click', (event)=>{ // клік по Read more - розгортання
        let el = event.target;
            if (el.dataset.readmore) {
                $(el.previousElementSibling).animate({maxHeight: 10000}, 1000);
                el.style.display = 'none';
            }

            if (el.matches('a')) {
                if (!el.id) return;
                if (el.id.charAt(0) != '#') return;
                moduleView(el.getAttribute('href'));
                event.preventDefault();
            }
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

        function moduleView(id, navItem) { // скролить вікно та показує обраний в меню модуль сайту
            let prefix = '#';
            if (id.charAt(0) == '#') prefix = '';
            let target = document.querySelector(`${prefix}${id}`);
            let y1 = target.getBoundingClientRect().y;
            let y2 = parseInt(getComputedStyle(nav).height) + 100;
            let dy = y2 - y1;
            let delay = 1000/Math.abs(dy);
            let steps = 40;
            let n = 1;
            let offset = 0;
            let scrolled = false;
            let interval = setInterval (()=>{
                if (n >= steps) {
                    clearInterval(interval);
                    if (navItem) setTimeout(()=>{navItem.classList.add('nav__elem_active')}, 500);
                    if (!scrolled) $(`#${id}`).fadeTo(100, .5).fadeTo(200, 1);
                    return;
                }
                n++;
                offset = target.getBoundingClientRect().y;
                window.scrollBy(0, -dy/steps);
                offset -= target.getBoundingClientRect().y;
                if (offset != 0) scrolled = true;
                if (offset == 0) n = steps;
            }, 10);
        }

        nav.addEventListener('click',(event)=>{ // обробник кліку панелі навігації
            if (event.target.dataset.id) {
                if (currentNavElement) currentNavElement.classList.remove('nav__elem_active');
                currentNavElement = event.target;
                moduleView(event.target.dataset.id, currentNavElement);
        }
        });

        smartMenu.addEventListener('mouseleave', (event)=>{ // закриття smartmenu
            $(smartMenu).hide(100);
            smartMenu.classList.remove('nav__smartmenu_active');
        });

        smartMenu.addEventListener('click', (event)=>{ // клік по ел-ту smartmenu
            event.stopPropagation();
            if (event.target.dataset.id) {
                $(smartMenu).hide(100);
                smartMenu.classList.remove('nav__smartmenu_active');
                moduleView(event.target.dataset.id);
            }
            if (event.target.id == 'nav-smart-menu-close') {
                $(smartMenu).hide(100);
                smartMenu.classList.remove('nav__smartmenu_active');
            }
        });

        homeArrow.addEventListener('mouseenter', (event)=>{ // анімація кнопки "додому"
            $(event.target).animate({bottom: '-=5'}, 100).animate({bottom: '+=5'}, 100);
        })

        homeArrow.addEventListener('click', ()=>{ // клік кнопки "додому" - повернення до 1-го ел-ту класу main__module
            currentNavElement.classList.remove('nav__elem_active');
            currentNavElement = document.querySelector('.nav__elem');
            moduleView(document.querySelector('.main__module').getAttribute('id'), currentNavElement);
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
            if (currentNavElement) currentNavElement.classList.remove('nav__elem_active');

        }
// ---------------------------------------------------------------------------------- кінець шаблону сайту
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
                    `Ваше повідомлення буде надіслано мені на email. Я відповім Вам найближчим часом.
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
                        { // отправка email
                            sendMail ('kravchenko.galina@outlook.com', form.subj,
                                'Від кого: ' + form.username.value + '\n' + 'email: ' + form.useremail.value + '\n' + 'Телефон: ' + form.userphone.value + '\n' + form.usermsg.value + '\n', 'psycholog.net.ua', (response)=>{
                                    if (response.send) {
                                        explorerPopUp(`Ваше повідомлення надіслано на мій email. Я обов'язково зв'яжусь з Вами за першої можливості.`);
                                        closeWindow('send-mail');
                                    }
                                }, 'assets/ajax/');
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