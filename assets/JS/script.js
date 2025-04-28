document.addEventListener('DOMContentLoaded', function() {
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
});