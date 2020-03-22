$(document).ready(function () {
    $('.carousel').carousel();


    var descrip = $('#descripcion').val();
    $('#descrip').html(descrip);


    var map = L.map('map').setView([-35.430869, -71.662904], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-35.430869, -71.662904]).addTo(map)
        .bindPopup('Ballet cristiano Talita Cumi')
        .openPopup();

    $('.post-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),

    });

})

