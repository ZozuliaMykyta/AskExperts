const iconMenu = document.querySelector('.burger');
const menuBody = document.querySelector('.header__nav');
const menuLinks = document.querySelectorAll('.header__list');
const headerLinks = document.querySelectorAll('.header__item');

if(iconMenu){
    iconMenu.addEventListener ("click", function () {
        document.body.classList.toggle('lock');
        iconMenu.classList.toggle('active');
        menuBody.classList.toggle('active');
    });
    for (let i = 0; i < headerLinks.length; i++) {
        headerLinks[i].addEventListener('click', function () {
            document.body.classList.remove('lock');
            iconMenu.classList.remove('active');
            menuBody.classList.remove('active');
      })};
};

// Animation
const animItems = document.querySelectorAll('.anim-items');

if(animItems.length > 0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(){
        for (let index = 0; index < animItems.length; index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;
            if(animItemHeight > window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('active');
            } else{
                if(!animItem.classList.contains("anim-no-hide")){
                    animItem.classList.remove('active');
                }
            }
        }
    };
    function offset(el){
        const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft};
    };

    setTimeout(() => {
        animOnScroll();
    }, 300);
}

// count animation
let counter = document.querySelectorAll('.counter');
if(counter.length > 0){
    (function(){
        let limit = 0; // Переменная, чтобы останавливать функцию, когда всё запустится.
        window.addEventListener("scroll", handleScroll);
        function handleScroll() {
            if( limit == counter.length ){ window.removeEventListener('scroll', handleScroll); }

            for(let i = 0; i < counter.length; i++){
              let pos = counter[i].getBoundingClientRect().top; //Позиция блока, считая сверху окна
              let win = window.innerHeight - 40; // На 40 пикселей меньше, чем высота окна
              if( pos < win && counter[i].dataset.stop === "0" ){
                counter[i].dataset.stop = 1; // Останавливаем перезапуск счета в этом блоке
                let x = 0;
                limit++; // Счетчик будет запущен, увеличиваем переменную на 1
                let int = setInterval(function(){
                  // Раз в 20 миллисекунд будет прибавляться 50-я часть нужного числа
                  x = x + Math.ceil(counter[i].dataset.to / 50); 
                  counter[i].innerText = x;
                  if( x > counter[i].dataset.to ){
                    //Как только досчитали - стираем интервал.
                    counter[i].innerText = counter[i].dataset.to;
                    clearInterval(int);
                  }
                }, 20);
              }
            };
        };
        setTimeout(() => {
            handleScroll();
        }, 300);
    })();
}

let feedbackSlider = document.querySelector('.feedback__slider');
if(feedbackSlider && document.documentElement.clientWidth > 520){
    new Swiper(feedbackSlider, {
        navigation: {
            nextEl: '.feedback__button-next',
            prevEl: '.feedback__button-prev'
        },
        simulateTouch: false,
        slidesPerView: 1,
        centeredSlides: true,
    });
}

let servicesSlider = document.querySelector('.services__slider');
if(servicesSlider){
    new Swiper(servicesSlider, {
        navigation: {
            nextEl: '.services__slider-next',
            prevEl: '.services__slider-prev'
        },
        simulateTouch: false,
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            320: {
                slidesPerView: 1.3,
            },
            400: {
                slidesPerView: 1.5,
            },
            640: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 3,
            }
        },
    });
}

let homeTwoFeedSlider = document.querySelector('.feedback__home-slider');
if(homeTwoFeedSlider){
    new Swiper(homeTwoFeedSlider, {
        navigation: {
            nextEl: '.feedback__home-next',
            prevEl: '.feedback__home-prev'
        },
        simulateTouch: false,
        slidesPerView: 3,
        spaceBetween: 42,
        breakpoints: {
            320: {
                slidesPerView: 1.2,
                spaceBetween: 30,
            },
            500: {
                slidesPerView: 1.5,
            },
            800: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 3,
            }
        },
    });
}

let radioBtns = document.querySelector('.plan__buttons');
if(radioBtns){
    let yearContent = document.querySelector('.plan__year');
    let monContent = document.querySelector('.plan__mon');
    radioBtns.addEventListener('click', function(e) {
        let btnId = e.target.id;
        if(btnId == 'Yearly'){
            yearContent.classList.remove('none');
            monContent.classList.add('none');
            yearContent.classList.add('active-f');
        } else if(btnId == 'Monthly'){
            yearContent.classList.add('none');
            monContent.classList.remove('none');
            monContent.classList.add('active-f');
        } else{
            return;
        }
    });
}

let projectionsSlider = document.querySelector('.projections__slider');
if(projectionsSlider){
    new Swiper(projectionsSlider, {
        navigation: {
            nextEl: '.projections__slider-next',
            prevEl: '.projections__slider-prev'
        },
        simulateTouch: false,
        slidesPerView: 3,
        spaceBetween: 43,
        breakpoints: {
            320: {
                slidesPerView: 1.2,
                spaceBetween: 30,
            },
            500: {
                slidesPerView: 1.5,
            },
            800: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 3,
            }
        },
    });
}
let acc = document.querySelectorAll(".questions__accordion-btn");
if(acc.length > 0){
    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
}

const casesList = document.querySelector('.cases__list');
if(casesList){
    let items = document.querySelectorAll('.cases__item');
    let listItems = document.querySelectorAll('.cases__list-item');

    function filter(){
        casesList.addEventListener('click', event => {
            const target = event.target;
            let targetId = event.target.dataset.id;

            if(target.classList.contains('cases__list-item')){
                listItems.forEach(listItem => listItem.classList.remove('active'));
                target.classList.add('active');
            }

            switch(targetId){
                case "all":
                    getItems('cases__item');
                    break;
                case "taxes":
                    getItems(targetId);
                    break;
                case "investment":
                    getItems(targetId);
                    break; 
                case "plan":
                    getItems(targetId);
                    break;    
                case "audit":
                    getItems(targetId);
                    break;  
            }
        })
    }
    filter();

    function getItems(className){
        items.forEach(item => {
            if(item.classList.contains(className)){
                item.style.display = 'block';
            } else{
                item.style.display = 'none';
            }
        })
    }
}

// Form
const form = document.getElementById('form');
if(form){
    form.addEventListener('submit', formSend);

    async function formSend(e){
        e.preventDefault();
        let error = formValidate(form);

        let formData = new FormData(form);

        if(error === 0){
            let response = await fetch('sendmail.php', {
                method: "POST",
                body: formData
            });
            if(response.ok){
                let result = await response.json();
                alert(result.message);
                form.reset();
            } else{
                alert("Error");
            }
        } else{
            alert('Fill in required fields');
        }
    }

    function formValidate(form){
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if(input.classList.contains('_email')){
                if(emailTest(input)){
                    formAddError(input);
                    error++;
                }
            } else if(input.classList.contains('_tel')){
                if(telTest(input)){
                    formAddError(input);
                    error++;
                }
            } else{
                if(input.value === ''){
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }

    function formAddError(input){
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }
    function formRemoveError(input){
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }
    function emailTest(input){
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
    function telTest(input){
        return !/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(input.value);
    }
}