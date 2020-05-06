// navigation

// add box shadow on scroll
$(document).scroll(function () {
    if ($(this).scrollTop() > 2) {
        $(".main-nav").addClass("scrolly");
    } else {
        $(".main-nav").removeClass("scrolly");
    }

});
// active link
$(function () {
    $('.main-menu li a').filter(function () { return this.href == location.href }).parent().addClass('active-menu').siblings().removeClass('active-menu')
    $('.main-menu li a').click(function () {
        $(this).parent().addClass('active-menu').siblings().removeClass('active-menu')
    })
    // $('.main-menu li a').click(function(){
    // 	$(this).parent().addClass('active-menu').siblings().removeClass('active-menu')
    // })
})


$(document).ready(function () {
    var pathname = window.location.pathname;

    if (pathname.indexOf("home/blog/") > 0) {

        if ($('.main-menu li').hasClass('active-menu')) {
            $('.main-menu li ').removeClass('active-menu');
            $('.main-menu li .blog').addClass('active-menu');
        }
    }

});

$(document).ready(function () {
    var pathname = window.location.pathname;
    //  console.log(pathname);

    if (window.location.href.indexOf('/home/product') > 0) {
        // alert('true');
        // console.log("The URL contains product");
        $('.main-menu li ').removeClass('productz');
    }

    if (window.location.href.indexOf('/home/product_details') > 0) {
        // alert('true');
        // console.log("The URL contains product");
        $('.main-menu li ').removeClass('productz');
        if ($('.main-menu li').hasClass('active-menu')) {
            $('.main-menu li ').removeClass('active-menu');
            $('.main-menu li .toproduct').addClass('active-menu');
        }
    }

});



// ...navigation

// product page
// $(document).ready(function(){
//     $('.filter_by_field').click(function(){
//         $(this).addClass('actives');
//     });

// });
// ...product page


// ===== Scroll to Top ====
$(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {      // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0                       // Scroll to top of body
    }, 500);
});

// ..scroll to top



