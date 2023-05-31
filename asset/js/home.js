const header_logo = document.querySelector('#masthead .head-logo .logo');
const hover_rs = document.querySelector('#masthead .hover-logo');
const logo_rs = document.querySelector('#masthead .head-logo');

const mobile_logo = document.querySelector('#masthead .mobile-head-logo .mobile-logo');
const mobile_hover_rs = document.querySelector('#masthead .mobile-hover-logo');

header_logo.addEventListener('pointerenter', function(){
    hover_rs.classList.remove('none');
});

logo_rs.addEventListener('pointerleave', function(){
    hover_rs.classList.add('none');
});

mobile_logo.addEventListener('click', function(){
    if(mobile_hover_rs.classList.contains('none')){
        mobile_hover_rs.classList.remove('none');
    } else {
        mobile_hover_rs.classList.add('none');
    }
});


// Menu burger

const burger_logo = document.querySelector('#masthead .mobile');
const menu_burger = document.querySelector('#masthead .mobile-main-menu');
const cross = document.querySelector('#masthead .mobile-main-menu .mobile-close');

burger_logo.addEventListener('click', function(){
    menu_burger.classList.add('open');
})

cross.addEventListener('click', function(){
    menu_burger.classList.remove('open');
})
