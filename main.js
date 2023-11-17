// плавные переходы по ссылке
const anchors = document.querySelectorAll('a[href*="#"]');

for (let anchor of anchors) {
    anchor.addEventListener("click", function(event) {
        event.preventDefault();
        const blockID = anchor.getAttribute('href')
        document.querySelector('' + blockID).scrollIntoView({
            behavior: "smooth",
            block: "start"
        })
    })
}

// Бургер
$(document).ready(function(){
    $('.header-burger').click(function (){
        $('.header-burger,.header-menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// Скролл header
$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $(".header").css("background-color", "#FFFFFF")
    } else {
        $(".header").css("background-color", "rgba(0, 0, 0, 0)")
    }
});
