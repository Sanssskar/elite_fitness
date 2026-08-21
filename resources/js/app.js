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

// Images finishing late (hero photos, gallery grid) shift section positions
// after AOS has already calculated its trigger offsets — refresh once
// everything has actually loaded so those offsets are accurate.
window.addEventListener('load', () => AOS.refresh());
