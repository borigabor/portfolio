let menuBtn = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');

}

window.onscroll = () =>{
    if(window.innerWidth < 991){
       menuBtn.classList.remove('fa-times');
       header.classList.remove('active');
       document.body.classList.remove('active');
    }
}