import './bootstrap';

// ScreenSize

const handleHeight = window.innerHeight;
const handleWidth = window.innerWidth;

// navbar side + fade

const fullHeight = document.documentElement.scrollHeight;
const navbar = document.getElementById('sideNav');
const navContent = document.getElementById('navContent');
const burgerBtn = document.getElementById('burgerBtn');

const overlayBoeking = document.getElementById('overlayBoeking');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');

overlayBoeking.addEventListener('click', () => {
    popup.classList.add('hidden');
    overlayBoeking.classList.add('hidden');
    burgerBtn.classList.remove('hidden')
});

closePopup.addEventListener('click', () => {
    popup.classList.add('hidden');
    overlayBoeking.classList.add('hidden');
    burgerBtn.classList.remove('hidden')
});

if (handleWidth >= 768) {
    if (fullHeight < handleHeight * 2) {
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