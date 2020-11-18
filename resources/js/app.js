require('./bootstrap');

// Nav Bar Active

$(document).ready(function () {
    // Get current path
    var path = window.location.pathname.split("/").pop();
    console.log(path);
    // If Home Is Selected
    if (path == '') {
        path = '/';
    }
    // Get selected item
    var target = $('nav ul li a[href="' + path + '"]');
    // Add active class to target link
    target.addClass('active');
})

// Responsive Menu
$(document).ready(function () {

    $("#toggleButton").click(function () {
        $('#aside').toggle();

    });;
});
$(document).ready(function () {
    var clicked = true;
    $("#toggleButton").click(function () {

        if (clicked == true) {
            $("#toggleButton").text("✖");
            clicked = false;
            console.log(clicked);
        } else if (clicked == false) {
            $("#toggleButton").text("☰");
            clicked = true;
            console.log(clicked);
        }
    })
});
$(document).ready(function () {
    var resizeTimer;
    $(window).on('resize', function (e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if ($(window).width() > 900) {
                $('#aside').show();
            } else {
                $('#aside').hide();
            }
        }, 250);
    });



});


