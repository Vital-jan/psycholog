<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Психолог Галина Кравченко. Консультации психотерапевта в Киеве.">
    <meta name='author' content='Vitalii Kolomiiets, Kyiv, Ukraine, vitaljan@gmail.com viber:+380632209770'>
    <title>Психолог Галина Кравченко (Киев)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/plugin/explorer.js"></script>
    <script src="assets/ajax/mysqlajax.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugin/explorer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<?

    $main_content = array( // масив, що формує контент сайту
        // type = ["", "full-width", "full-width-center", "footer"]
        // "" - звичайний модуль, йому додається клас .main__module
        // "full-width" - модуль на повну ширину екрану, йому додається клас .main__module_full-width
        // "full-width-center" - модуль на повну ширину екрану відцентрований, йому додається клас .main__module_full-width .center
        // "footer" - розділ <footer>

        array("menu_item"=>"Про меня", "type"=>"", "class"=>"",
        "header"=>"Про меня", 
        "text"=>"
        <div class='flex-blocks'>
        <div class='flex-blocks__img'><img src='assets/img/photo.jpg'></div>
        <div class='flex-blocks__text'>
            <p>
                Галина Кравченко. Практикующий психолог и психотерапевт. Психоаналитик. Член ассоциации практикующих психологов и психотерапевтов Украины.
            </p>
            <p>
                Психотерапией занимаюсь с 1992 года. На моем опыте ........
            </p>
            <p>
                Провожу консультации в Киеве, в центре города, недалеко от Софиевской площади.
            </p>
            <div class='read-more education'>
                <ul>
                <h2>Образование:</h2>
                <li>Киевский государственный университет 1995-2000 (5 лет, магистр)</li>
                <li>Украинский национальный ... 1990-1995 (5 лет, магистр)</li>
                <li>..............................</li>
                </ul>
            </div>
        </div>
        </div>
        "),
        
        array("menu_item"=>"Главное", "type"=>"", "class"=>"", 
        "header"=>"На что рассчитывать?", 
        "text"=>"<p>
            <ul>
                <li><img class='phone-icon' src='assets/img/ok.png'>Вы идете <strong>не</strong> на исповедь, <strong>не</strong> на суд, и <strong>не</strong> на дружескую беседу.</li>
                <li><img class='phone-icon' src='assets/img/ok.png'>Здесь примут таким, как Вы есть.</li>
                <li><img class='phone-icon' src='assets/img/ok.png'>Не осудят. Не высмеют. Не дадут оценок и полезных советов.</li>
                <li><img class='phone-icon' src='assets/img/ok.png'>Не раскроют ваши тайны.</li>
                <li><img class='phone-icon' src='assets/img/ok.png'>Постараются помочь.</li>
                <li>&nbsp;</li>
                <li><img class='phone-icon' src='assets/img/close.png'>&quot;На что жалуетесь, голубчик?&quot; - такой вопрос здесь не прозвучит.</li>
                <li><img class='phone-icon' src='assets/img/close.png'>Избитое &quot;Хотите об этом поговорить?&quot; - Вы здесь тоже не услышите.</li>
                <li><img class='phone-icon' src='assets/img/close.png'>&quot;Все равно мне никто не поможет&quot; - опыт психотерапевта плюс Ваше желание обязательно дадут результат.</li>

            </ul>
        </br>
         Как сделать первый шаг?
         </br></br>
         <p class='read-more'>- Вам не надо готовиться, как к экзамену. Первый шаг Вы можете сделать прямо сейчас, задав вопрос психологу онлайн.</p>
 
        </p>
               "),

        array("menu_item"=>"Поддержка", "type"=>"", "class"=>"", 
        "header"=>"Моя помощь и поддержка", 
        "text"=>"
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
            </p>
            <div class='flex-blocks'>
                <div class='flex-blocks__text3 specialization'>
                    <h2>Специализация 1</h2>
                    <ul>
                        <li>Проблема 1.1</li>
                        <li>Проблема 1.2</li>
                        <li>Проблема 1.3</li>
                        <li>Проблема 1.4</li>
                        <li>Проблема 1.5</li>
                        <li>Проблема 1.6</li>
                    </ul>
                </div>
                <div class='flex-blocks__text3 specialization'>
                    <h2>Специализация 2</h2>
                    <ul>
                        <li>Проблема 2.1</li>
                        <li>Проблема 2.2</li>
                        <li>Проблема 2.3</li>
                        <li>Проблема 2.4</li>
                        <li>Проблема 2.5</li>
                        <li>Проблема 2.6</li>
                    </ul>
                </div>
                <div class='flex-blocks__text3 specialization'>
                    <h2>Специализация 3</h2>
                    <ul>
                        <li>Проблема 3.1</li>
                        <li>Проблема 3.2</li>
                        <li>Проблема 3.3</li>
                        <li>Проблема 3.4</li>
                        <li>Проблема 3.5</li>
                        <li>Проблема 3.6</li>
                    </ul>
                </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid recusandae doloremque libero architecto sed voluptatem incidunt veniam neque provident aperiam?
                </p>
        "),

        array("menu_item"=>"Отзывы", "type"=>"", "class"=>"", 
        "header"=>"Отзывы и рекомендации",
        "text"=>"
        <p>
        </p>
        "),

        array("menu_item"=>"", "type"=>"", "class"=>"",
        "header"=>"",
        "text"=>"
            <div class='module_action'>
                <div class='action'><span>Вопрос психологу &raquo;</span></div>
                <div class='action quickly'><span>Срочая помощь &raquo;</span></div>
            </div>
            "),

        array("menu_item"=>"Контакты", "type"=>"footer", "class"=>"",
        "header"=>"Связаться со мной можно:",
        "text"=>"
        <ul>
            <li>
                <a href='tel:+380958964399'><img class='phone-icon' src='assets/img/phone.png'>
                +38 (095) 8964399</a>
            </li>
            <li>
                <a href='mailto:kravchenko.galina@outlook.com'><img class='phone-icon' src='assets/img/email.png'>
                kravchenko.galina@outlook.com</a>
            </li>
            ")
        );
?>

<body>
    <nav>

        <div class="nav__logo"> <!-- блок логотип-->
            <!-- <img src="assets/img/vj.png" alt="CV js developer"> -->
            <div class="nav__logo__text">
                <ul>
                    <li>Галина Кравченко</li>
                    <li class='separator'></li>
                    <li>Практикующий психолог и психотерапевт</li>
                </ul>
            </div>
        </div>

        <div class="nav__menu"> <!-- блок меню -->
        <?
            // створюємо головне меню
                $n = 0;
                foreach($main_content as $key=>$value) {
                    $id = ($value['type'] == 'footer') ? "footer" : "module{$n}";
                    $n++;
                    if ($value['menu_item'])
                    echo "
                    <span class='nav__elem' data-id='{$id}'>{$value['menu_item']}</span>
                    ";
                }
            // створюємо смарт-меню
                echo "
                    <div class='nav__smartmenu'>
                    <ul>
                    <li class='nav__smartmenu__close'><span id='nav-smart-menu-close'>&#10006;</span></li>
                    ";
                $n = 0;
                foreach($main_content as $key=>$value) {
                    $id = ($value['type'] == 'footer') ? "footer" : "module{$n}";
                    $separate = '';
                    if ($value != end($main_content)) $separate = "<li class='separator'></li>";
                    $n++;

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
        <?
        // створюємо розділи сайту
            $n = 0;
            foreach($main_content as $key=>$value) {
                if ($value['type'] == 'footer') continue;
                $id = "module{$n}";
                $class = "main__module";
                if ($value["type"] == 'full-width') $class .= ' main__module_full-width';
                if ($value["type"] == 'full-width-center') $class .= ' main__module_full-width center';
                if ($value['class']) $class .= ' '.$value['class'];

                $h12 = ($n == 0) ? 'h1' : 'h2';
                $sub = $value['menu_item'] ? '' : 'sub-';
                $header = $value['header'] ? "<{$h12} class='main__module__{$sub}header'>{$value['header']}</{$h12}>" : "";
                $img1 = $value['img1'] ? "<div class='main__module__content__img1'><img src='{$value['img1']}'></div>" : '';
                $img2 = $value['img2'] ? "<div class='main__module__content__img2'><img src='{$value['img2']}'></div>" : '';
                echo "
                <div class='{$class}' id='{$id}'>
                    {$header}
                    <div class='main__module__content'>
                        {$img1}
                        {$img2}
                        {$main_content[$n]['text']}
                    </div>
                </div>
                ";
                $n++;
            }
        ?>
        
    </main>

    <footer>
        <?
            foreach($main_content as $value) {
                if ($value['type'] == 'footer') {
                    echo "
                    <div id='footer'>
                        <h2 class='footer__header'>{$value['header']}</h2>
                        <div class='footer__content'>{$value['text']}</div>
                    </div>

                    <div class='footer-copyright'>
                    </div>

                    ";
                }
            }
        ?>
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
            btn.classList.add('read-more-button');
            btn.setAttribute('data-readmore','true');
        })

        document.addEventListener('click', (event)=>{ // клік по Read more - розгортання
            if (event.target.dataset.readmore) {
                $(event.target.previousElementSibling).animate({maxHeight: 10000}, 1000);
                event.target.style.display = 'none';
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
            let target = document.querySelector(`#${id}`);
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

document.querySelectorAll('.action').
forEach((i)=>{
    i.addEventListener('mouseenter', (event)=>{
        $(event.target).animate({top: '+=5px'}, 50).animate({top: '-=5px'}, 50);
    })
    i.addEventListener('click', (event)=>{
        if (i.classList.contains('quickly')) { // отказать
        }
        else { //пригласить
        }
    })

})


}); // DOMContentLoaded
    </script>
</body>
</html>