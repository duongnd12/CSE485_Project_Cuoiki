// Empty JS
// for your own code to be here
$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('#menuShow').toggleClass('showing');
        $('#menuShow ul').toggleClass('showing');
        // document.getElementsByClassName('menu').classList.toggle('showing');
        // alert('test');
    });
});


// function toogglemenu() {
//     document.getElementById('nav_head').classList.toggle('showing');
//}