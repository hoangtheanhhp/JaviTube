$(window).load(function () {
    $('#visual').pignoseLayerSlider({
        play: '.btn-play',
        pause: '.btn-pause',
        next: '.btn-next',
        prev: '.btn-prev'
    });
});
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});