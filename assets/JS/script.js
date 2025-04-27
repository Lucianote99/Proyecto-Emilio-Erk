document.addEventListener('DOMContentLoaded', function() {
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