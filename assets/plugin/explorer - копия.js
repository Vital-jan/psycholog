function parseIntBack(s) { // возвращает числовую часть в конце строки.
// например, на входе: 'abc123', на выходе: '123'.
  return parseInt(s.split('').reverse().join()).toString().split('').reverse().join();
}

// =====================================================================
function setSlider(
// =====================================================================
  max,
  path,
  prefix,
  delay,
  fade,
  sliderId,
  height,
  title = [],
  arrowsVisible = false,
  circlesVisible = false) {
  // аргументы: ==========================================================
  // слайдер будет растянут по всей ширине родителя
  // высота - авто, если не задан аргумент height. В противном случае, низ изображение будет обрезан по высоте height.
  // Пример: setSlider(4, 'assets/img/slider/', 'img', 3, 0.5, 'slider');
  // --------------------------------------------
  // max - к-во изображений
  // path - папка с изображениями для слайдера
  // prefix - префикс имени файла изображения
  // delay - время показа изображения в секундах
  // fade - время набора 100% непрозрачности (от 0 до 1 delay)
  // sliderId - идентификатор контейнера-родителя;
  // height - высота слайдера. Нижняя часть изображения будет обрезана. Если не задано - auto
  // title - подписи к картинкам (массив). если значение не указано, не отображается.
  // arrowsVisible, circlesVisible - наличие стрелок и кружочков
  // ----------------------------------------------------

  let slider = document.querySelector(`#${sliderId}`);
  if (slider == null) return;

  const fps = 25; // частота обновления, кадров/сек
  let counter = 1; // индекс текущего рисунка
  let prevCounter = 0; // индекс предыдущего рисунка
  let opacity = 0; // текущая прозрачность рисунка
  let timeNext = 0; // время смены рисунка
  let paused = false;

  // стили для slider
  slider.classList.add("explorer-slider");
  if (height) slider.style.height = height + 'px';

  // создаем и стилизуем графический контент
  let img = document.createElement('img');
  slider.appendChild(img);
  img.setAttribute('src', `${path}${prefix}${counter}.jpg`);

  let sliderWidth = slider.getBoundingClientRect().width;

  const buttonMargin = 5; // отступ между кнопками
  let buttonWidth = sliderWidth * 0.03;
  let buttonContainerWidth = 0;

  if (arrowsVisible) buttonContainerWidth += buttonWidth * max + buttonMargin * (max - 1); // вычисляем размеры кнопок и их контейнера
  if (circlesVisible) buttonContainerWidth += buttonWidth * 2 + buttonMargin;
  if (buttonContainerWidth > sliderWidth * 0.8) {
    buttonContainerWidth = sliderWidth * 0.8;
    buttonWidth = buttonContainerWidth / (max + 2 + buttonMargin);
  }

  // обработчики для img (пауза в прокрутке)
  img.onmouseenter = () => {
    paused = true;
  };    
  img.onmouseleave = () => {
    paused = false;
  };    

  // создаем подпись под слайдером
  let ttl;
  if (title) {
    ttl = document.createElement('div');
    slider.appendChild(ttl);
    ttl.classList.add('explorer-slider__title');
  }

  // создаем и стилизуем контейнер для элементов-кружочков и стрелок
  let buttonContainer;
  if (circlesVisible || arrowsVisible) {
    buttonContainer = document.createElement('div');
    buttonContainer.classList = 'button-container';
    slider.appendChild(buttonContainer);
    buttonContainer.style.width = buttonContainerWidth + 'px';

    buttonContainer.addEventListener('click', function(event) {
      if (!isNaN(parseIntBack(event.target.id))) {
        prevCounter = counter;
        counter = parseIntBack(event.target.id);
        refresh();
        timeNext = 0;
      }  
    });  
  }  

  // добавляем элементы стрелка влево-вправо
  let arrow = [];
  if (arrowsVisible) {
    for (n = 0; n < 2; n++) {
      arrow[n] = document.createElement('div');
      arrow[n].classList.add('arrow');
      arrow[n].style.width = 0;
      arrow[n].style.height = 0;
      arrow[n].style.borderWidth = `${buttonWidth / 2}px`; // отрисовка стрелки
      arrow[n].style.left = `${buttonWidth / 2 * (n * 2 - 1)}px`; // отрисовка стрелки
      buttonContainer.appendChild(arrow[n]);
    }
    arrow[0].style.transform = 'rotate(180deg)'; // поворачиваем левую стрелку влево
    arrow[0].style.marginRight = buttonMargin + 'px';// задаем margin
  }
  
  // обработчики клика по стрелкам
    if (arrowsVisible) {
      arrow[0].addEventListener('click', function() {
        if (counter > 1) {
          prevCounter = counter;
          counter--;
          timeNext = 0;
          refresh();
        }
      });
      arrow[1].addEventListener('click', function() {
        if (counter < max) {
          prevCounter = counter;
          counter++;
          timeNext = 0;
          refresh();
        }
      });
  }

  // создаем, добавляем и стилизуем элементы-кружочки
  if (circlesVisible) {
    for (var n = 1; n <= max; n++) {
      var el = document.createElement('div');
      buttonContainer.insertBefore(el, arrow[1]);
      el.classList = 'circle';
      el.id = `${sliderId}-circle${n}`;
      el.style.width = `${buttonWidth}px`;
      el.style.height = `${buttonWidth}px`;
      el.style.borderWidth = `${Math.round(buttonWidth / 4)}px`;
      el.style.marginRight = buttonMargin + 'px';
    }
  }

  function refresh(arrowVisible){

    img.setAttribute('src', `${path}${prefix}${counter}.jpg`); // отрисовка изображения

    if (title) {
      if (title[counter - 1]) {
        ttl.innerHTML = title[counter - 1];
      } else {ttl.innerHTML = ''};
    }

    if (prevCounter != 0) {
      let elem = document.querySelector(`#${sliderId}-circle${prevCounter}`); // стираем предыдущий кружочек
      if (elem) elem.style.backgroundColor = 'white';
    }

    elem = document.querySelector(`#${sliderId}-circle${counter}`); // рисуем текущий кружочек
    if (elem) elem.style.backgroundColor = 'black';

    if (arrowsVisible) {
      if (counter == max) {// активируем/деактивируем стрелки влево/право
        arrow[1].classList.add('no-active');
      } else {
        arrow[1].classList.remove('no-active');
      }
      if (counter == 1) {
        arrow[0].classList.add('no-active');
      } else {
        arrow[0].classList.remove('no-active');
      }
    }

  }

  refresh(arrowsVisible);

  // таймер
  let interval = setInterval(function() {

    if (!slider) {// проверяем наличие элемента slider в DOM
      clearInterval(interval);
      return;
    }
    
    if (timeNext >= fps * delay) { // при достижении времени смены изображения:
      
      timeNext = 0;
      opacity = 0;
      prevCounter = counter;
      counter = counter < max ? Number(counter) + 1 : 1;
      img.setAttribute('src',`${path}${prefix}${counter}.jpg`);
      refresh(); // перерисовка
    }

    if (!paused) timeNext++; // если не наведен курсор - инкрементируем счетчик времени

    opacity = opacity < 1 ? opacity + 1 / (fps * fade) : 1; // увеличиваем яркость, пока не будет достигнута максимальная
    img.style.opacity = opacity;
    if (ttl) ttl.style.opacity = opacity;
  }, 1000 / fps);
}

// ==============================================================================
function setPortfolio (id, width = 300, minMargin = 10, height = 400) {

  // id передає ідентифікатор елементу без класу, який повинен містити елементи портфоліо.
  // кожен з елементів портфоліо повинен бути класу .explorer-portfolio__product-list__item.
  // <div id="portfolio1">
  //   <div class='explorer-portfolio__product-list__item'>1-й ел-т портфоліо</div>
  //   <div class='explorer-portfolio__product-list__item__description wine-description'>1-й ел-т портфоліо, зворотній бік </div>
  //     ........
  //   <div class='explorer-portfolio__product-list__item'>n-й ел-т портфоліо</div>
  //   <div class='explorer-portfolio__product-list__item__description wine-description'>n-й ел-т портфоліо, зворотній бік </div>
  // </div>
  // setPortfolio('portfolio1', 'red', 'white')
  // width, minMargin, height - ширина, мінімальний margin, висота ел-тів портфоліо

  let parent = document.querySelector(`#${id}`);
  parent.classList.add('explorer-portfolio');
  parent.style.height = height + 'px';
  
  let parentHTML = parent.innerHTML;
  parent.innerHTML = `
    <div class='explorer-portfolio__arrow left'></div>
    <div class='explorer-portfolio__product-list'>
        ${parentHTML}
    </div>
    <div class='explorer-portfolio__arrow right'></div>
  `;

  let productList = document.querySelector(`#${id} .explorer-portfolio__product-list`); // блок з переліком ел-тів портфоліо

  let blockChain = document.querySelectorAll(`#${id} .explorer-portfolio__product-list__item`); // ланцюжок елементів портфоліо
  blockChain.forEach((i)=>{
    i.style.background = getComputedStyle(document.body).background;
    if (!i.querySelector('.explorer-portfolio__product-list__item__description')) i.style.cursor = 'default';
  })

  let maxProductNumber = blockChain.length; // кількість ел-тів портфоліо
  let currentProductNumber = 1; // поточна кількість видимих ел-тів
  
  let currentProduct = 1; // поточний ел-т портфоліо
  let openElement = null; // розгорнутий ел-т портфоліо
  
  let productWidth; // поточна ширина ел-ту портфоліо
  let margin = minMargin; // поточний margin


  const left = document.querySelector(`#${id} .explorer-portfolio__arrow.left`); // стрілки вліво-право
  const right = document.querySelector(`#${id} .explorer-portfolio__arrow.right`);

  // ------------------------------------------------------------------------------------
  function productRefresh() { // оновлення переліку товарів
  
  currentProduct = 1; // скидаємо вказівник поточного ел-ту

  productListWidth = productList.getBoundingClientRect().width; // визначення поточної ширини батьківського ел.
  productWidth = width; // скидання ширини ел-тів
  margin = minMargin; // скидання значення margin
  currentProductNumber = Math.floor(productListWidth / (productWidth + margin) ); // скільки ел-тів вміщується на екрані
  currentProductNumber = currentProductNumber > maxProductNumber ? maxProductNumber : currentProductNumber;
  currentProductNumber = currentProductNumber < 1 ? 1 : currentProductNumber;
  
  if (productWidth + margin >= productListWidth) margin = 5; // вкладений елемент + margin ширший батьківського
  if (productWidth >= productListWidth) productWidth = productListWidth * 0.95; // вкладений елемент без margin ширший батьківського
  
  // currentProductNumber = Math.floor(productListWidth / (productWidth + margin) );
  if (productWidth < 0) return;
  
  let next; // елемент "зворотній бік" елементу портфоліо
  
  blockChain.forEach((i)=>{ // привласнення значень ширини блоків
    i.style.width = productWidth + 'px';
    next = i.nextElementSibling;
    if (!next) return;
    if (next.classList.contains('explorer-portfolio__product-list__item__description')) next.style.width = productWidth + 'px';
    
  });
  
  let field = productListWidth - (productWidth + margin) * currentProductNumber; // додатковий margin якщо батьківський ел-т ширший, ніж треба для розміщення усіх ел-тів
  field = field < 0 ? 0 : field;
  margin += field / currentProductNumber;
  
  if (currentProductNumber < maxProductNumber) { // видимість стрілок вліво-право якщо всі елементі не вміщуються
    if (currentProduct > 1) {left.style.visibility = 'visible'} else left.style.visibility = 'hidden';
    right.style.visibility = 'visible';
  } else {
    left.style.visibility = 'hidden';
    right.style.visibility = 'hidden';
  }
  let shift = productWidth + margin; // вирахування координат елементів портфоліо

  let leftPos = margin / 2; // привласнення координат елементів портфоліо
  
  blockChain.forEach((i)=>{
      i.style.left = leftPos + 'px';
      next = i.nextElementSibling;
      if (!next) return;
      if (next.classList.contains('explorer-portfolio__product-list__item__description')) next.style.left = leftPos + 'px'; // зворотній бік елементу
  
      leftPos += shift;
  })
}

//----------------------------------------------------------------------------------------------------------------------------------
  function productShift(direction) { // зсув переліку товарів
    //direction - напрямок зсуву анімації

    currentProduct = direction == '+=' ? currentProduct - 1 : currentProduct + 1; // змінюємо значення вказівника поточного ел-ту

    if (currentProduct + currentProductNumber > maxProductNumber) {right.style.visibility = 'hidden'} else right.style.visibility='visible';
    if (currentProduct <= 1) {left.style.visibility = 'hidden'} else left.style.visibility='visible';
  
    let shift = productWidth + margin;

    let next;
    blockChain.forEach((i)=>{
        $(i).animate({left: `${direction}${shift}`});
        next = i.nextElementSibling;
        if (!next) return;
        if (next.classList.contains('explorer-portfolio__product-list__item__description')) $(next).animate({left: `${direction}${shift}`});
    });
  } // productShift -----------------------------------------------------------------------------

  right.addEventListener('click', (event)=>{ // зсув переліку товарів по кліку стрілки
    productShift('-=');
  });
  
  left.addEventListener('click', (event)=>{ // зсув переліку товарів по кліку стрілки
    productShift('+=');
  });

  right.addEventListener('mouseenter', (event)=>{ // анімація стрілки по наведенню
    if (currentProduct < maxProductNumber) {
        $(event.target).animate({top: '+=5'}, 100).animate({top: '-=5'}, 100);;
    }
  });

  left.addEventListener('mouseenter', (event)=>{ // анімація стрілки по наведенню
    if (currentProduct > 1) {
        $(event.target).animate({top: '+=5'}, 100).animate({top: '-=5'}, 100);;
    }
  });

  productRefresh(); // первинний вивід переліку елементів
                
  window.onresize = ()=> { // оновлення переліку елементів після зміни розміру екрану
    productRefresh();
  }

  // ---------------------------------------------------------------------------------
  function rotate (el, back) { // повертання елементів портфоліо
      if (!el || !back) return; // якщо відсутній один з елементів

      let el2Scroll = back.querySelector('.explorer-scroll__block'); // Знаходимо елемент зі скроллом
      let el2ScrollArrow = back.querySelector('.arrow_top'); // знаходимо ел-т стрілка вгору
      let top = 0;
      if (el2ScrollArrow) top = el2ScrollArrow.style.height;
      if (el2Scroll) el2Scroll.style.top = top; // початкове значення скролу після відображення

      let w = 1;
      let interval = setInterval(()=>{
        if (w <= 0) {
          clearInterval(interval);
          el.classList.toggle('explorer-portfolio__product-list__item_hidden');
          back.classList.toggle('explorer-portfolio__product-list__item_visible');
          el.classList.toggle('explorer-portfolio__product-list__item_visible');
          back.classList.toggle('explorer-portfolio__product-list__item_hidden');
          w = 0;
          interval = setInterval(()=>{
            if (w >= 1) clearInterval(interval);
            back.style.transform = `scaleX(${w})`;
            w += 0.05;
          }, 10)
        }

        el.style.transform = `scaleX(${w})`;
        w -= 0.05;
        
      }, 10)
    }; // ------------------  rotate

  productList.addEventListener('click', (event)=> {// обробник кліку на списку елементів портфоліо
    let back;
    let el = event.target.closest('.explorer-portfolio__product-list__item');
    if (el) {
      if (!el.nextElementSibling) return;
      if (!el.nextElementSibling.classList.contains('explorer-portfolio__product-list__item__description')) return;
      if (openElement) rotate(openElement, openElement.previousElementSibling);
      back = el.nextElementSibling;
      openElement = back;
    } 
    else {
      el = event.target.closest('.explorer-portfolio__product-list__item__description');
      if (!el) return;
      back = el.previousElementSibling;
      openElement = null;
    }
    
    rotate (el, back);
  });

  parent.addEventListener ('click', (event)=>{ // обробник кліку по стрілках на предмет згортання розгорнутого ел-та
    if (event.target == left || event.target == right) {
      if (openElement) {
        rotate(openElement, openElement.previousElementSibling);
        openElement = null;
      }
    }
  });

  } // setPortfolio

  // ==========================================================================================================================
            function setScroll(el, step = null, duration = 500, speed = 150, arrowCSS = {}, runnerBarCSS = {}) {
  // ==========================================================================================================================
  // на сенсорних екранах скроллінг відбувається по click, на desktop - по наведенню
    // el - елемент DOM, зміст якого повинен скролитись
    // step - крок скролінгу на 1 клік в px (тільки для сенсорних екранів)
    // duration - тривалість скролінгу на step px (тільки для сенсорних екранів)
    // speed - швидкість скроллу по наведенню (px/sec, тільки desktop)
    // arrowCSS - об'єкт властивостей стрілок. Дозволені властивості:
      // height, color, backgroundColor, background;
    // runnerBarCSS - об'єкт властивостей смуги прокрутки. Дозволені властивості:
              // width, Color.
    // якщо весь контент вміщується в контейнер, кнопки не відображаються та ніяких дій не відбувається.
// ===========!!!!!!!!!!!!================
// слідкувати за тим, щоб контент вміщувався в батьківський контейнер з overflow: hidden

    function getRunnerGradient() { // повертає linear-gradient для смуги прокрутки відповідно поточній прокрутці
      // reset();
      let top = Math.abs(parseInt(scroll.style.top) - arrowHeight);
      let k = top / (overflow + arrowHeight) * 100;
      k = +k.toFixed();
      return `linear-gradient(to bottom, transparent 0%, transparent ${k-5}%, ${runnerBarColor} ${k}%, transparent ${k+5}%)`;
    }

    function reset () {
      viewArea = el.clientHeight; // розмір видимої частини
      fullArea = el.scrollHeight; // розмір повний
      overflow = fullArea - viewArea; // розмір прокрутки
      if (!step) step = viewArea / 3; // зсув по кліку за замовчуванням

    }

    if (!el) return;
    
    let viewArea;
    let fullArea;
    let overflow;
    let arrowHeight;

    reset();

    if (overflow <= 0)  return;

    arrowHeight = 30;
    if (arrowCSS.height && !isNaN(parseInt(arrowCSS.height))) arrowHeight = parseInt(arrowCSS.height); // привласнюємо значення висоти стрілок
    
    let scrollingTouch = false; // чи відбувається скрол-анімація по кліку
    let scrollingHover = false; // чи відбувається скрол-анімація по наведенню
    
    el.classList.add("explorer-scroll"); // додаєм клас
    let html = el.innerHTML; // додаєм вкладені ел-ти
    el.innerHTML = `<div class='explorer-scroll__block'>${html}</div>`;
    
    // додаєм стрілки
    el.innerHTML += `
    <div class='explorer-scroll__arrow arrow_top'><span>&#10148;</span></div>
    <div class='explorer-scroll__arrow arrow_bottom'><span>&#10148;</span></div>
    <div class='explorer-scroll__bar'></div>
    `;
    
    const up = el.querySelector(`.arrow_top`); // стрілки
    const upArrow = up.firstChild;
    const down = el.querySelector(`.arrow_bottom`);
    const downArrow = down.firstChild;
    const scroll = el.querySelector(`.explorer-scroll__block`); // блок, який переміщується
    const bar = el.querySelector('.explorer-scroll__bar');

    // стилізація стрілок
    up.style.height = arrowHeight + 'px';
    down.style.height = arrowHeight + 'px';
    if (arrowCSS.color) up.style.color = arrowCSS.color;
    if (arrowCSS.backgroundColor) up.style.backgroundImage = `linear-gradient(to bottom, ${arrowCSS.backgroundColor}, transparent)`;
    if (arrowCSS.background) up.style.background = arrowCSS.background;
    if (arrowCSS.color) down.style.color = arrowCSS.color;
    if (arrowCSS.backgroundColor) down.style.backgroundImage = `linear-gradient(to top, ${arrowCSS.backgroundColor}, transparent)`;
    if (arrowCSS.background) down.style.background = arrowCSS.background;

    // стилізація смуги прокрутки
    if (runnerBarCSS.width) bar.style.width = runnerBarCSS.width + 'px';
    let runnerBarColor = 'black';
    if (runnerBarCSS.color) runnerBarColor = runnerBarCSS.color;

    scroll.style.top = arrowHeight + 'px';
    bar.style.background = getRunnerGradient();;

  // обробники стрілок
    // ***************************************************************************************************************

    up.addEventListener('mouseenter', (event)=>{
      reset();
      event.stopPropagation();
      if (scrollingTouch || scrollingHover) return;

      if (parseInt(scroll.style.top) >= arrowHeight) {
        scroll.style.top = arrowHeight + 'px';
        bar.style.background = getRunnerGradient();
        return;
      }

      scrollingHover = true; // старт анімації по наведенню

      downArrow.style.opacity = 1; // активуємо кнопку вниз
      down.style.cursor = 'pointer';
      
      $(scroll).animate(
        {top: arrowHeight}, 
        {
          duration: Math.abs(parseInt(scroll.style.top) - arrowHeight) / speed * 1000,
          complete: ()=>{
            scrollingHover = false; // кінець анімації по наведенню
            upArrow.style.opacity = .5;
            up.style.cursor = 'pointer';
          },
          step: function(){
            bar.style.background = getRunnerGradient();
          }});
    }); // up.mouseover

    // ***************************************************************************************************************
    up.addEventListener('mouseleave', (event)=>{ 
      
      event.stopPropagation();
      if (scrollingTouch) return;
      
      if (scrollingHover) { // зупиняємо анімацію по наведенню
        $(scroll).stop();
        scrollingHover = false;
      }
    }); // up.mouseout
    
    // ***************************************************************************************************************
    up.addEventListener('click', (event)=>{
      event.stopPropagation();
    }); // up.click
    
    // ***************************************************************************************************************
    up.addEventListener('touchstart', (event)=>{
      
      reset();

      event.stopPropagation();
      if (scrollingHover) return;

      if (scrollingTouch) {
        $(scroll).stop();
        scrollingTouch = false;
      }

      let dy = arrowHeight - parseInt(scroll.style.top);
      
      if (dy <= 0) {
        scroll.style.top = arrowHeight +'px';
        bar.style.background = getRunnerGradient();
        $(scroll).animate({top: '+=10px'}, 100).animate({top: '-=10px'}, 100);
        upArrow.style.opacity = .5;
        up.style.cursor = 'default';
        return;
      }
      
      if (dy > step) dy = step;
      
      scrollingTouch = true; // початок анімаціїї по кліку
      $(scroll).animate(
        {top: `+=${dy}px`},
        {
          duration: duration,
          step: function() {
            bar.style.background = getRunnerGradient();
          },
          complete: function () {
            downArrow.style.opacity = 1;
            down.style.cursor = 'pointer';
            scrollingTouch = false; // кінець анімації по кліку
          }
        });
      }) // up.touchstart
      
    // ***************************************************************************************************************
    down.addEventListener('mouseenter', (event)=>{
      
      reset();

      event.stopPropagation();
      if (scrollingTouch || scrollingHover) return;
      
      scrollingHover = true;

      upArrow.style.opacity = 1;
      up.style.cursor = 'pointer';

      $(scroll).animate({top: `-${overflow}px`},
      {
        duration: (overflow + 2 * arrowHeight + (parseInt(scroll.style.top) - arrowHeight)) / speed * 1000,
        complete: function()
        {
          scrollingHover = false;
          downArrow.style.opacity = .5;
          down.style.cursor = 'default';
        },
        step: function(){
          bar.style.background = getRunnerGradient();
        }
      });
      bar.style.background = getRunnerGradient();
    }); // down.mouseenter
    
    // ***************************************************************************************************************
    down.addEventListener('mouseleave', (event)=>{
      
      event.stopPropagation();
      if (scrollingTouch) return;
      
      if (scrollingHover) { // кінець анімації по кліку
        $(scroll).stop();
        scrollingHover = false;
      }
    }); // down.mouseout
    
    // ***************************************************************************************************************
    down.addEventListener('click', (event)=>{
      event.stopPropagation();
    }); // down.click
    
    // ***************************************************************************************************************
    down.addEventListener('touchstart', (event)=>{

      reset();

      event.stopPropagation();
      if (scrollingHover) return;

      if (scrollingTouch) {
        $(scroll).stop();
        scrollingTouch = false;
      }

      let dy = overflow + parseInt(scroll.style.top) + arrowHeight;
      if (dy <= 0) {
        scroll.style.top = -overflow - arrowHeight + 'px';
        $(scroll).animate({top: '-=10px'}, 100).animate({top: '+=10px'}, 100);
        downArrow.style.opacity = .5;
        down.style.cursor = 'default';
        return
      };

      if (dy > step) dy = step;
      
      scrollingTouch = true; // початок анімації по кліку
      $(scroll).animate(
        {top: `-=${dy}px`},
        {
          duration: duration,
          step: function () {
            bar.style.background = getRunnerGradient();
          },
          complete: function () {
            upArrow.style.opacity = 1;
            up.style.cursor = 'pointer';
            scrollingTouch = false; // кінець анімації по кліку
          }
        }
    ) // down.touchstart
  });
} // setScroll function



// ==================================================================================
        function closeWindow (id) { // закрытие модального окна
// ==================================================================================
// w - идентификатор модального окна
w = document.querySelector(`#${id}`);
w.style.display = 'none';
document.body.style.overflow = "auto";
}



// ==================================================================================
        function modalWindow(
// ==================================================================================
  caption,
  text,
  buttons = ['Ok'],
  action,
  clickAction,
  btnDefault = 0,
  modalId = 'modal-window',
  userClass,
  mainStyle,
  buttonStyle
  ) {
  // ==================================================================================
  // Управляет отображением модальных окон
  // caption, text - заголовок и содержимое окна. Могут содержать html.
  // buttons - массив, содержащий подписи к кнопкам. Кол-во кнопок будет соответствовать длине массива.
  // action - функция, вызываемая после нажатия одной из кнопок. в качестве аргумента функция action принимает порядковый номер нажатой кнопки, начиная с 0. Модальное окно будет закрыто, если action вернет true.
  // необязательные аргументы:
  // clickAction - функция обработчик события click - позволяет встраивать другие управляющие элементы в тело модального окна
  // btnDefault - номер кнопки по умолчанию
  // modalId - пользовательский идентификатор при необходимости вызова вложенного модального окна
  // userClass - css класс для стилизации содержимого модального окна (строка или массив из нескольких классов)
  // mainStyle - объект css свойств для стилизации окна. Доступны свойства: background, backgroundColor, border, color, width, height, top.
  // buttonStyle - объект css свойств для стилизации кнопок. Доступны свойства: background, backgroundColor, border, color.
  // в качестве аргументов caption, text и buttons может выступать html
// Пример:

  let modalWindow = document.querySelector(`#${modalId}`); // элемент модальное окно

  // валидируем значение btnDefault
  if (buttons) {
    if (btnDefault <0 || !btnDefault) btnDefault = 0; 
    if (btnDefault > buttons.length - 1) btnDefault = buttons.length - 1;
  }

  // если окно уже существует, показываем его
  if (modalWindow) { 
    document.body.style.overflow = "hidden"; // запрет прокрутки
    modalWindow.style.display = "block"; // показать модальное
    modalWindow.querySelectorAll(`.explorer-modal__footer__button`)[btnDefault].focus(); // назначить активную кнопку
    return;
  };
  
  // если окно не существует, создаем, стилизуем его, наполняем контентом, вешаем обработчики
  modalWindow = document.createElement('div');
  modalWindow.setAttribute('id',`${modalId}`);
  modalWindow.classList.add('explorer-modal-window');
  document.body.appendChild(modalWindow);
  modalWindow.innerHTML = `<div class="explorer-modal"></div>`;
  
  wnd = modalWindow.querySelector(`.explorer-modal`); // стилизуем модальное
  
  // назначаем обработчик нажатия Esc (уничтожается при закрытии окна)
  wnd.addEventListener('keydown', escHandler);
  function escHandler(e) {
    if (e.keyCode == 27) {
      closeWindow(modalId);
      // action(null);
    }
  }

  // наполняем окно контентом
  wnd.innerHTML = `
  <div class="explorer-modal__header">
  ${caption}
  </div>
  <div class='explorer-modal__close'></div>
  `;

  wnd.innerHTML += `<div class="explorer-modal-window__content"></div>`;
  let pTeg = wnd.querySelector(`.explorer-modal-window__content`);
  pTeg.style.height = '70%';
  pTeg.innerHTML = text;
  wnd.innerHTML += '<div class="explorer-modal__footer"></div>';
  let footer = wnd.querySelector(`.explorer-modal__footer`);

  // добавляем кнопки
  if (buttons)
  buttons.forEach((i, n)=>{
    let btnStyle = '"';
    if (buttonStyle) {
      if (buttonStyle.background) btnStyle += `background: ${buttonStyle.background};`;
      if (buttonStyle.backgroundColor) btnStyle += `backgroundColor: ${buttonStyle.backgroundColor};`;
      if (buttonStyle.color) btnStyle += `color: ${buttonStyle.color};`;
      if (buttonStyle.border) btnStyle += `border: ${buttonStyle.border};`;
    }
    btnStyle += '"';
    footer.innerHTML += `<button class='explorer-modal__footer__button' type="button" data-action='${n}' style = ${btnStyle}>${i}</button>`;
  });

  if (!userClass) { // стилизуем, если не задан аргумент класс
    wnd.style.borderColor = getComputedStyle(document.body).color;
    wnd.style.background = getComputedStyle(document.body).background;
    wnd.querySelector('.explorer-modal__close').style.borderColor = getComputedStyle(document.body).color;
  } 
  else { // добавляем классы
    if (typeof userClass == 'string') wnd.classList.add(userClass);
    if (typeof userClass == 'object')
      userClass.forEach((i)=>
      {      
        wnd.classList.add(i);
      })
  };

  if (mainStyle) { // стилизуем окно, если указан аргумент mainStyle
    if (mainStyle.background) wnd.style.background = mainStyle.background;
    if (mainStyle.backgroundColor) wnd.style.backgroundColor = mainStyle.backgroundColor;
    if (mainStyle.color) wnd.style.color = mainStyle.color;
    if (mainStyle.border) wnd.style.border = mainStyle.border;
    if (mainStyle.width) wnd.style.width = mainStyle.width;
    if (mainStyle.height) wnd.style.height = mainStyle.height;
    if (mainStyle.top) wnd.style.top = mainStyle.top;
  }

  // обработчик кликов footer
  wnd.querySelector('.explorer-modal__footer').addEventListener('click', (event)=>{
    if (event.target.classList.contains('explorer-modal__footer__button')) {
      event.stopPropagation();
      action(event.target.dataset.action);
    }
  })
  
  //обработчик кликов на теле модального окна
  if (clickAction) wnd.addEventListener('click', clickAction);
  
  // назначаем активную кнопку
  let btns = wnd.querySelectorAll(`.explorer-modal__footer .explorer-modal__footer__button`);
  btns[btnDefault].focus();

  // обработка клавиши tab
  let firstItem = btns[0];
  let lastItem = btns[btns.length - 1];
  if (wnd.querySelector(`eplorer-modal-window__content input`) != null) firstItem = wnd.querySelector(`.explorer-modal-window__content input`);

  // обработчик tab для последней кнопки
  lastItem.addEventListener('keydown', (e)=>{
    if (e.keyCode == 9 && !e.shiftKey) {
        firstItem.focus();
        e.preventDefault();
      }
  });

  // обработчик tab для первой кнопки
  firstItem.addEventListener('keydown', (e)=>{
      if (e.keyCode == 9 && e.shiftKey) {
        lastItem.focus();
        e.preventDefault();
      }
    });

 // обработчик кнопки закрытия
    wnd.querySelector(`.explorer-modal__close`).addEventListener('click', ()=>{
      event.stopPropagation();
      closeWindow(modalId);
      // action(null);
    });
}
// =============================================================================================================
// =============================================================================================================

function explorerPopUp(text, time = 300, delay = 2000, id = 'explorer-popup-window') {
  let el = document.querySelector(`#${id}`);
  if (!el) {
    el = document.createElement('div');
    document.body.appendChild(el);
    el.classList.add('explorer-popup');
  }
  $(el).html(text).hide().fadeIn(time).delay(delay).fadeOut(time*2);
}