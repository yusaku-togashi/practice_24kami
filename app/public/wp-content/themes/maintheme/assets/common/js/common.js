$(document).ready(function(){
$('.multiple').slick({
    autoplay: true, 
    infinite: true, 
    dots: false, 
    slidesToShow: 3, 
    slidesToScroll: 1, 
    responsive: [{
    breakpoint: 768, 
    settings: {
        slidesToShow: 3, 
        slidesToScroll: 3, 
    }
    }, {
    breakpoint: 480, 
    settings: {
        slidesToShow: 2, 
        slidesToScroll: 2, 
    }
    }]
});
});