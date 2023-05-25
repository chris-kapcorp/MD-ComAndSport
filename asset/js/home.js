const header_logo = document.querySelector('#masthead .head-logo .logo');
const hover_rs = document.querySelector('#masthead .hover-logo');
const logo_rs = document.querySelector('#masthead .head-logo');


header_logo.addEventListener('pointerenter', function(){
    hover_rs.classList.remove('none');
});

logo_rs.addEventListener('pointerleave', function(){
    hover_rs.classList.add('none');
});
