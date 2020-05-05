// НАВИГАЦИЯ
    // Плавный скролл к разделам страницы и в начало
    $('[href*="#"], .up').click(function(e) {
        let id = $(this).attr('href');
        $('html, body').animate({
            scrollTop : $(id).offset().top
        }, 1000);
        e.preventDefault();
    });


    // Появление и скрытие иконки «В начало» только при прокрутке страницы на определенное расстояние
    $(window).scroll(function() {
        if ($(this).scrollTop()>=500) {
            // Появление
            $('.up').fadeIn(500);
        } else {
            // Скрытие
            $('.up').fadeOut(200);
        }
    });

    
    // Меню для экранов < 780px и преобразование иконки меню
    $('.menu-btn, nav a').click(function() {
        
        // Преобразование иконки
        $('.btn-lines:first-child').toggleClass('lineTop');
        $('.btn-lines:nth-child(2)').toggleClass('lineMiddle');
        $('.btn-lines:last-child').toggleClass('lineBottom');
    
        // Появление и скрытие меню
        $('nav').toggleClass('navActive');
    });
    
    $(window).resize(function () {
        if ($(window).width() < 780) {
            $('.btn-lines:first-child').removeClass('lineTop');
            $('.btn-lines:nth-child(2)').removeClass('lineMiddle');
            $('.btn-lines:last-child').removeClass('lineBottom');
    
            // Появление и скрытие меню
            $('nav').removeClass('navActive');
        }
    });





// СЛАЙДЕР НА ОТЗЫВЫ
    // Создание клона первого слайда и добавление его в массив
    let firstItem = $('.comment').eq(0).clone();
    $('.commentItems').append(firstItem);

    // Создание переменных на массив слайдов и кнопки влево / вправо
    let items = $('.comment');
    let arrowR = $('.rightArrow');
    let arrowL = $('.leftArrow');

    // Счетчик
    let i = 0;

    // Прокрутка вправо
    $(arrowR).click(function() {
        if (i == -(items.length - 2)) {
            $('.commentItems').animate({
                'left' : --i * 100 + '%'
            }, 1000, function() {
                $('.commentItems').css('left', 0);
            });
            i = 0;
        } else {
            $('.commentItems').animate({
                'left' : --i * 100 + '%'
            }, 1000);
        }
    });

    // Прокрутка влево
    $(arrowL).click(function() {
        if (i == 0) {
            $('.commentItems').animate({
                'left' : -(items.length - 1) * 100 + '%'
            }, 0, function(){
                $('.commentItems').animate({
                    'left' : -(items.length - 2) * 100 + '%'
                }, 1000);
            });
            i = -(items.length - 2);
        } else {
            $('.commentItems').animate({
                'left' : ++i * 100 + '%'
            }, 1000);
        }
    });





// ФОРМА

// Форма для отправки вопроса
    // Проверка на заполненность в момент отправки
    $("form.contactPage").submit(function(e) {
        let nameValue = $("[name=name]").val();
        let emailValue = $("[name=email]").val();
        let tellValue = $("[name=phonenumber]").val();
        let messageValue = $("[name=message]").val();

        if (nameValue == "" || emailValue == ""  || tellValue == "" || messageValue == "") {
            $("[name]").attr("placeholder", "Заполните поле");
            e.preventDefault();
        }
    });


// Форма для бронирования экскурсии
    // Появление формы при клике на «Забронировать» и добавление названия экскурсии в специально созданный для этого input
        $("a.reserve").click(function(event) {
            // Добавление названия экскурсии
            let routName = $(this).attr('data-name');
            // 1 сп.
            $('[name="routName"]').val(routName);
            // 2 сп.
            // $('[name="routName"]').attr('value', routName);

            // Блокировка input'а с названием экскурсии
            $('[name="routName"]').attr('readOnly', 1);
            
            // Это не сработает, т.к. setAttribute — читсый js, а здесь получается мешанина из js и jQuery:
            // $ — jQuery, setAttribute — js.
            // $('[name="routName"]').setAttribute('readonly', 1);
            
            // Эта блокировака не дает отправлять данные из поля на сервер
            // $('[name="routName"]').prop('disabled', 1);

            // Появление формы
            $(".formReserveWrapper").css("display", "flex");
            event.preventDefault();
        });

    // Закрыть форму при клике на иконку закрытия
        $(".closeForm").click(function(event) {
            $(".formReserveWrapper").slideUp(700);
            event.preventDefault();
        });

    // Закрыть форму через esc
        $(window).keyup(function(event) {
            if (event.keyCode == 27) {
                $(".formReserveWrapper").slideUp(700);
            }
        });

    // Проверка на заполненность в момент отправки
        $("form.routPage").submit(function(e) {
            let nameValue = $("[name=name]").val();
            let emailValue = $("[name=email]").val();
            let tellValue = $("[name=mobile]").val();

            if (nameValue == "" || emailValue == ""  || tellValue == "") {
                $("[name]").attr("placeholder", "Заполните поле");
                e.preventDefault();
            }
        });


    // Скрытие предупреждения о незаполненности поля — для всех форм
        $("[name=name], [name=email], [name=phonenumber], [name=mobile], [name=message]").focus(function() {
            $(this).removeAttr("placeholder");
            let inputlValue = $(this).val();
            if (inputlValue == "") {
                $(this).blur(function() {
                    $(this).attr("placeholder", "Заполните поле");
                });
            } else {
                $(this).removeAttr("placeholder");
            }
        });