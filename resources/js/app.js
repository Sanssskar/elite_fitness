import './bootstrap';
import AOS from 'aos';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        offset: 60,
    });
});

window.addEventListener('load', () => AOS.refresh());
