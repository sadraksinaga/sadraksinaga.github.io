const menu = document.getElementById('menu-label');
const slidebar = document.getElementsByClassName('slidebar')[0];

menu.addEventListener('click',function(){
    slidebar.classList.toggle('hide');
    console.log('ok');
})