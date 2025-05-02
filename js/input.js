document.addEventListener('keydown', function(event) {
    switch(event.key) {
        case 'ArrowDown':
            changeArrowImage('.down', true);
            break;
        case 'ArrowRight':
            changeArrowImage('.right', true);
            break;
        case 'ArrowUp':
            changeArrowImage('.up', true);
            break;
        case 'ArrowLeft':
            changeArrowImage('.left', true);
            break;
        default:
            break;
    }
});

document.addEventListener('keyup', function(event) {
    switch(event.key) {
        case 'ArrowDown':
            changeArrowImage('.down', false);
            break;
        case 'ArrowRight':
            changeArrowImage('.right', false);
            break;
        case 'ArrowUp':
            changeArrowImage('.up', false);
            break;
        case 'ArrowLeft':
            changeArrowImage('.left', false);
            break;
        default:
            break;
    }
});

function changeArrowImage(selector, isActive) {
    const arrow = document.querySelector(selector);
    arrow.style.backgroundImage = isActive ? "url('note/active.png')" : "url('note/inactive.png')"; // Change image
    if (isActive) {
        arrow.classList.add('active'); // Add class for animation
    } else {
        arrow.classList.remove('active'); // Remove class to stop animation
    }
}