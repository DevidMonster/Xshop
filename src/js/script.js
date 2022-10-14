

$(document).ready(function(){
    $('.products').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow:
        "<button type='button' class='slick-prev slick-btn'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
        "<button type='button' class='slick-next slick-btn'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
    $('.category').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow:
        "<button type='button' class='slick-prev slick-btnCate'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
        "<button type='button' class='slick-next slick-btnCate'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"

    });
});

window.addEventListener("scroll", function() {
    var scroll_header = document.querySelector(".scroll-header")
    if( window.scrollY == 0) {
        scroll_header.classList.remove("show")
    } else {
        scroll_header.classList.add("show") 
    }
    
})





