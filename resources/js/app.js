import './bootstrap';
import './products';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.selectProduct = function (name, desc) {
    document.getElementById('product-title').innerText = name;
    document.getElementById('product-desc').innerText = desc;

    const variants = document.getElementById('product-variants');

    if (name === 'Paving Block') {
        variants.classList.remove('hidden');
    } else {
        variants.classList.add('hidden');
    }
};


window.changeImage = function (thumb) {
    const main = document.getElementById('mainImage');
    main.src = thumb.src;

    document
        .querySelectorAll('.product-thumbs img')
        .forEach(img => img.classList.remove('active'));

    thumb.classList.add('active');
};

window.switchSector = function (sector) {
    const manufaktur = document.getElementById('sector-manufaktur');
    const konstruksi = document.getElementById('sector-konstruksi');

    const buttons = document.querySelectorAll('.sector-btn');

    buttons.forEach(btn => btn.classList.remove('active'));

    if (sector === 'manufaktur') {
        manufaktur.classList.remove('hidden');
        konstruksi.classList.add('hidden');
    } else {
        konstruksi.classList.remove('hidden');
        manufaktur.classList.add('hidden');
    }

    document
        .querySelector(`.sector-btn[data-sector="${sector}"]`)
        ?.classList.add('active');
};

// ACCORDION
window.toggleAccordion = function (btn) {
    const content = btn.nextElementSibling;

    document
        .querySelectorAll('.accordion-content')
        .forEach(c => {
            if (c !== content) c.style.display = 'none';
        });

    content.style.display =
        content.style.display === 'block' ? 'none' : 'block';
};

function toggleAccordion(button) {
    const item = button.parentElement;
    item.classList.toggle('open');
}


document.addEventListener('DOMContentLoaded', () => {

    const slider = document.getElementById('product-slider');
    const dots = document.querySelectorAll('#slider-dots button');

    let currentIndex = 0;

    function getCardWidth() {
        const card = slider.querySelector('.snap-center');
        return card ? card.offsetWidth + 24 : 300;
    }

    function updateDots() {
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-white', i === currentIndex);
            dot.classList.toggle('bg-white/40', i !== currentIndex);
        });
    }

    window.slideProducts = function (direction) {
        currentIndex = Math.max(
            0,
            Math.min(currentIndex + direction, dots.length - 1)
        );

        slider.scrollTo({
            left: getCardWidth() * currentIndex,
            behavior: 'smooth'
        });

        updateDots();
    }

    window.goToSlide = function (index) {
        currentIndex = index;

        slider.scrollTo({
            left: getCardWidth() * index,
            behavior: 'smooth'
        });

        updateDots();
    }

    updateDots();
});

