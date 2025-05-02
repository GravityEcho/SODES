//player 1 active keys
document.addEventListener('keydown', function(event) {
    switch(event.key) {
        case 's':
            changeArrowImage('.down', true);
            break;
        case 'd':
            changeArrowImage('.right', true);
            break;
        case 'w':
            changeArrowImage('.up', true);
            break;
        case 'a':
            changeArrowImage('.left', true);
            break;
        default:
            break;
    }
});
//player 2 active keys
document.addEventListener('keydown', function(event) {
    switch(event.key) {
        case 'ArrowDown':
            changeArrowImage('.down2', true);
            break;
        case 'ArrowRight':
            changeArrowImage('.right2', true);
            break;
        case 'ArrowUp':
            changeArrowImage('.up2', true);
            break;
        case 'ArrowLeft':
            changeArrowImage('.left2', true);
            break;
        default:
            break;
    }
});
//player 1 inactive keys
document.addEventListener('keyup', function(event) {
    switch(event.key) {
        case 's':
            changeArrowImage('.down', false);
            break;
        case 'd':
            changeArrowImage('.right', false);
            break;
        case 'w':
            changeArrowImage('.up', false);
            break;
        case 'a':
            changeArrowImage('.left', false);
            break;
        default:
            break;
    }
});
//player 2 inactive keys
document.addEventListener('keyup', function(event) {
    switch(event.key) {
        case 'ArrowDown':
            changeArrowImage('.down2', false);
            break;
        case 'ArrowRight':
            changeArrowImage('.right2', false);
            break;
        case 'ArrowUp':
            changeArrowImage('.up2', false);
            break;
        case 'ArrowLeft':
            changeArrowImage('.left2', false);
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