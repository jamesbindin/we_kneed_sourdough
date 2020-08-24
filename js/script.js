$(document).ready(function(){
    var icon = $('.js--nav-icon');
    var nav = $('.js--nav-menu');
    

    // mobile nav
    $('.js--nav-icon').click(function(){
        nav.slideToggle(200);
        console.log(icon.attr('name'));
        if(icon.attr('name') == "menu-outline"){
            console.log("hello");
            icon.attr('name', 'close-outline');
        } else {
            icon.attr('name', 'menu-outline');
        }
    })

})