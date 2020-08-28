// NAVIGATION

// Smooth scroll to the page sections
$('[href^="#"], .up').click(function (e) {
    let id = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 1000);
    e.preventDefault();
});


// Show or hide button for scrolling to the top of the page
$(window).scroll(function () {
    if ($(this).scrollTop() >= 500) {
        // Show
        $('.up').fadeIn(500);
    } else {
        // Hide
        $('.up').fadeOut(200);
    }
});


// Menu and it's icon for screens < 780px
$('.menu-btn, nav a').click(function () {
    // Change icon
    $('.btn-lines:first-child').toggleClass('lineTop');
    $('.btn-lines:nth-child(2)').toggleClass('lineMiddle');
    $('.btn-lines:last-child').toggleClass('lineBottom');

    // Show or hide menu
    $('nav').toggleClass('navActive');
});

$(window).resize(function () {
    if ($(window).width() < 780) {
        $('.btn-lines:first-child').removeClass('lineTop');
        $('.btn-lines:nth-child(2)').removeClass('lineMiddle');
        $('.btn-lines:last-child').removeClass('lineBottom');
        $('nav').removeClass('navActive');
    }
});





// SLIDER
let firstItem = $('.comment').eq(0).clone();
$('.commentItems').append(firstItem);

let items = $('.comment');
let arrowR = $('.rightArrow');
let arrowL = $('.leftArrow');

let i = 0;

// Scroll to the right
$(arrowR).click(function () {
    if (i == -(items.length - 2)) {
        $('.commentItems').animate({
            'left': --i * 100 + '%'
        }, 1000, function () {
            $('.commentItems').css('left', 0);
        });
        i = 0;
    } else {
        $('.commentItems').animate({
            'left': --i * 100 + '%'
        }, 1000);
    }
});

// Scroll to the left
$(arrowL).click(function () {
    if (i == 0) {
        $('.commentItems').animate({
            'left': -(items.length - 1) * 100 + '%'
        }, 0, function () {
            $('.commentItems').animate({
                'left': -(items.length - 2) * 100 + '%'
            }, 1000);
        });
        i = -(items.length - 2);
    } else {
        $('.commentItems').animate({
            'left': ++i * 100 + '%'
        }, 1000);
    }
});





// FORM

// Form for communication
// Check form fullness when submit
$("form.contactPage").submit(function (e) {
    let nameValue = $("[name=name]").val();
    let emailValue = $("[name=email]").val();
    let tellValue = $("[name=phonenumber]").val();
    let messageValue = $("[name=message]").val();

    if (nameValue == "" || emailValue == "" || tellValue == "" || messageValue == "") {
        $("[name]").attr("placeholder", "Заполните поле");
        e.preventDefault();
    }
});


// Form to book an excursion
// Show form
$("a.reserve").click(function (event) {
    // Add name of excursion to special input
    let routName = $(this).attr('data-name');
    $('[name="routName"]').val(routName);

    $('[name="routName"]').attr('readOnly', 1);
    $(".formReserveWrapper").css("display", "flex");
    event.preventDefault();
});

// Close form by clicking on the button
$(".closeForm").click(function (event) {
    $(".formReserveWrapper").slideUp(700);
    event.preventDefault();
});

// Close form via esc
$(window).keyup(function (event) {
    if (event.keyCode == 27) {
        $(".formReserveWrapper").slideUp(700);
    }
});

// Check form fullness when submit
$("form.routPage").submit(function (e) {
    let nameValue = $("[name=name]").val();
    let emailValue = $("[name=email]").val();
    let tellValue = $("[name=mobile]").val();

    if (nameValue == "" || emailValue == "" || tellValue == "") {
        $("[name]").attr("placeholder", "Заполните поле");
        e.preventDefault();
    }
});


// Hide warning about form incompletion
$("[name=name], [name=email], [name=phonenumber], [name=mobile], [name=message]").focus(function () {
    $(this).removeAttr("placeholder");
    let inputlValue = $(this).val();
    if (inputlValue == "") {
        $(this).blur(function () {
            $(this).attr("placeholder", "Заполните поле");
        });
    } else {
        $(this).removeAttr("placeholder");
    }
});
