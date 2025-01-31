var $$ = Dom7;


// Theme
var theme = 'ios';
if (document.location.search.indexOf('theme=') >= 0) {
    theme = document.location.search.split('theme=')[1].split('&')[0];
}
if (document.location.search.indexOf('mode=') >= 0) {
    const mode = document.location.search.split('mode=')[1].split('&')[0];
    if (mode === 'dark') document.documentElement.classList.add('dark');
}

// Init App
var app = new Framework7({
    el: '#app',
    theme,
});

//on page init
//dom document ready vanilla
document.addEventListener('DOMContentLoaded', function () {
    //do something
    //
    document.getElementById('logout-button').addEventListener('click',
        function () { window.location.href = './logout.php'; });

    document.getElementById('dashboard-button').addEventListener('click',
        function () { window.location.href = './dashboard.php'; });

});