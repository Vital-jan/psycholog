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

    $main_menu = array( // масив, що формує меню

        array("menu_item"=>"Про меня", "id"=>"about"),
        
        array("menu_item"=>"Главное", "id"=>"main"),
        array("menu_item"=>"Поддержка", "id"=>"support"),

        array("menu_item"=>"Контакты", "id"=>"footer")
        );
?>

<body>
    <nav>

        <div class="nav__logo"> <!-- блок логотип-->
            <!-- <img src="" alt=""> -->
            <div class="nav__logo__text">
                <ul>
                    <li>Галина Кравченко</li>
                    <li class='separator'></li>
                    <li><h1>Практикующий психолог и психотерапевт</h1></li>
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
                    $id = ($value['type'] == 'footer') ? "footer" : "module{$n}";
                    $separate = '';
                    if ($value != end($main_menu)) $separate = "<li class='separator'></li>";
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

        <div class="main__module" id='about'>
            <div class="main__module__header">
                Модуль1 заголовок
            </div>
            <div class="main__module__content full-width">
                <div class='flex-blocks'>
                <div class="block">dfdf</div>
                <div class="block">dfd</div>
                <div class="block">dfdf</div>
                </div>
                Модуль1 текст
                <p class='read-more right' data-text=''>
                    скрытый текст
                </p>
            </div>
        </div>

        <div class="main__module" id="main">
            <div class="main__module__header">
                Модуль2 заголовок
            </div>
            <div class="main__module__content" id="support">
                Модуль2 текст
            </div>
        </div>

        <div class="main__module" id="footer">
            <div class="main__module__header">
                Модуль3 заголовок
            </div>
            <div class="main__module__content">
                Модуль3 текст
            </div>
        </div>
        
    </main>

    <footer id="footer">
        Футер
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
            if (i.classList.contains('right')) btn.classList.add('right');
            btn.classList.add('read-more-button');
            btn.setAttribute('data-readmore','true');
            btn.innerHTML = 'Read more ...';
            if (i.dataset.text) btn.innerHTML = i.dataset.text;
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
            if (!target) return;
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
        } // moduleView

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

document.querySelectorAll('.action-button').
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