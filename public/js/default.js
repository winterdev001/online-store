// navigation

// add box shadow on scroll
$(document).scroll(function(){
    if($(this).scrollTop() > 2){
        $(".main-nav").addClass("scrolly");
    }else{
        $(".main-nav").removeClass("scrolly");
    }

});
// ...navigation
