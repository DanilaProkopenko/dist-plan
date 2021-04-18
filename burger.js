
const menuLink = document.querySelectorAll('.menu__link[data-goto]');
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');


//burger

if (iconMenu) {
    iconMenu.addEventListener("click", function (e) {
        console.log("click");
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}

//прокрутка на клик

if (menuLink.length > 0) {
    menuLink.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick)
    });

    function onMenuLinkClick(e) {
        const menuLink = e.target;
        console.log("clickkkk");
        if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
            const gotoBlock = document.querySelector(menuLink.dataset.goto);
            const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;


            if (iconMenu.classList.contains('_active')) {
                console.log("work");
                document.body.classList.remove('_lock');
                iconMenu.classList.remove('_active');
                menuBody.classList.remove('_active');
            }

            window.scrollTo({
                top: gotoBlockValue,
                behavior: "smooth"
            });
            e.preventDefault()
        }
    }
}
