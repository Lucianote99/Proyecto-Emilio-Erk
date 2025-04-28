document.addEventListener('DOMContentLoaded', function() {
<<<<<<< HEAD
  const navbar = document.querySelector('.tu-clase-de-la-navbar'); // Reemplaza '.tu-clase-de-la-navbar' con la clase real de tu navbar
  let lastScrollTop = 0;

  window.addEventListener('scroll', function() {
      let scrollTop = window.scrollY || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
          // Scrolling down
          navbar.style.transform = 'translateY(-100%)'; // Oculta la navbar moviéndola hacia arriba
      } else {
          // Scrolling up
          navbar.style.transform = 'translateY(0)'; // Muestra la navbar volviéndola a su posición original
      }

      lastScrollTop = scrollTop;
  });
=======
    var navbar = document.querySelector('.navbar');
    var lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > navbar.offsetHeight) {
            
            navbar.classList.add('navbar-hidden');
        } else if (scrollTop < lastScrollTop) {
            
            navbar.classList.remove('navbar-hidden');
        }
        lastScrollTop = scrollTop;
    });
});

let lastScrollTop = 0;
const footer = document.querySelector('.footer');

window.addEventListener('scroll', function() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // Scrolling down
    footer.classList.add('footer--hidden');
  } else {
    // Scrolling up
    footer.classList.remove('footer--hidden');
  }

  lastScrollTop = scrollTop;
>>>>>>> 57f11dafd88e26af66f51e566ea75ddea7a7e574
});