import './bootstrap';

// ScreenSize

const handleHeight = window.innerHeight;
const handleWidth = window.innerWidth;

// navbar side + fade

const navbar = document.getElementById('sideNav');
const navContent = document.getElementById('navContent');
const fullHeight = document.documentElement.scrollHeight;


if (handleWidth >= 768) {
    if (fullHeight < handleHeight * 1.6) {
        navbar.classList.add('backdrop-blur-lg', 'w-40');
        navContent.classList.add('opacity-100');
        navContent.classList.remove('pointer-events-none');
    } else {
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
    }
} else {
    const burgerBtn = document.getElementById('burgerBtn');
    const overlay = document.getElementById('overlay');
    burgerBtn.addEventListener('click', () => {
        burgerBtn.classList.add('hidden');
        navbar.classList.remove('hidden');
        navbar.classList.add('w-40');
        navContent.classList.remove('opacity-0', 'pointer-events-none')
        overlay.classList.remove('hidden');
        overlay.classList.add('w-40');
    });

    overlay.addEventListener('click', () => {
        burgerBtn.classList.remove('hidden');
        navbar.classList.add('hidden');
        navbar.classList.remove('w-40');
        navContent.classList.add('opacity-0', 'pointer-events-none')
        overlay.classList.add('hidden');
        overlay.classList.remove('w-40');
    });
}