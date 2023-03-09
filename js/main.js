document.addEventListener('DOMContentLoaded', () => {

    $(function () {
        $('.js-range-slider').ionRangeSlider({
            skin: 'round',
            min: 250,
            max: 2000,
            from: 250,
            max_postfix: '+',
            postfix: ' $.',
            grid: true,
            onStart: function (data) {
                $('#calcResult').text(Math.round((data.from * 0.88) + data.from) + ' $.');
            },
            onChange: function (data) {
                $('#calcResult').text(Math.round((data.from * 0.88) + data.from) + ' $.');
            },
        });
    });

    $('.scroll_top').click(function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $('#register__form').offset().top
        }, 1500);
    });

    const spanYear = document.querySelector('.current__year');
    let date = new Date();

    spanYear.innerHTML = date.getFullYear();

    function screenLock() {
        window.onload = function () {
            document.body.oncontextmenu = function () { return false; };
            window.addEventListener('selectstart', function (e) { e.preventDefault(); });
            document.addEventListener('keydown', function (e) {
                if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }, false);
        }
    }

})