document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('product-slider');
    const dots = document.querySelectorAll('#slider-dots span');

    if (!slider || !dots.length) return;

    const slides = slider.children;

    const setActiveDot = (index) => {
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-white', i === index);
            dot.classList.toggle('bg-white/40', i !== index);
        });
    };

    const getActiveIndex = () => {
        let closestIndex = 0;
        let closestDistance = Infinity;

        [...slides].forEach((slide, index) => {
            const rect = slide.getBoundingClientRect();
            const center = rect.left + rect.width / 2;
            const viewportCenter = window.innerWidth / 2;
            const distance = Math.abs(center - viewportCenter);

            if (distance < closestDistance) {
                closestDistance = distance;
                closestIndex = index;
            }
        });

        return closestIndex;
    };

    slider.addEventListener('scroll', () => {
        setActiveDot(getActiveIndex());
    });

    // init
    setActiveDot(0);
});
