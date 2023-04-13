
const open = document.querySelector('.burger')
const close = document.querySelector('.close-menu')
const inner = document.querySelector('.header__wrapper-inner')
const overlay = document.querySelector('.overlay')
const body = document.querySelector('body')

open.addEventListener('click', () => {
    inner.classList.add('active')
    overlay.classList.add('active')
    body.classList.add('overflow-hidden')
})

close.addEventListener('click', () => {
    inner.classList.remove('active')
    overlay.classList.remove('active')
    body.classList.remove('overflow-hidden')
})

window.addEventListener("resize", () => {
    if(window.innerWidth > 767){
        overlay.classList.remove('active')
        inner.classList.remove('active')
        body.classList.remove('overflow-hidden')
    }
})

// smooth scroll
const links = document.querySelectorAll('.nav__list a');

for (const link of links) {
  link.addEventListener('click', clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute('href');
  const offsetTop = document.querySelector(href).offsetTop;
  
  window.scrollTo({
    top: offsetTop,
    behavior: 'smooth'
  });
}