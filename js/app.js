$(window).scroll(function () {
    if ($(window).scrollTop() >= '80' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '80' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

document.getElementById("bttnCotiza").onclick = function() {
    var e = document.getElementById("selectSeguro");
    var strSeguro = e.options[e.selectedIndex].value;

    if(strSeguro == 'vida')
    {
        window.open('cotiza-vida.php');
    }
};