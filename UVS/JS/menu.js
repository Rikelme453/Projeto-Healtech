function menuShow(){
    let mobileMenu = document.querySelector('.menu-mobile');{
        if (mobileMenu.classList.contains('open')){
            mobileMenu.classList.remove('open');
        }else{
            mobileMenu.classList.add('open');
        }

    }
}