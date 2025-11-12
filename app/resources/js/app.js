import './bootstrap';

// navbar side + fade

const navbar = document.getElementById('sideNav');
const navContent = document.getElementById('navContent');
const fadePoint = window.innerHeight * 0.4;

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (scrollY > fadePoint) {
        navbar.classList.add('backdrop-blur-lg', 'w-40');
        navContent.classList.add('opacity-100');
        navContent.classList.remove('pointer-events-none');
    } else {
        navbar.classList.remove('backdrop-blur-lg', 'w-40');
        navContent.classList.remove('opacity-100');
        navContent.classList.add('pointer-events-none');
    }
});