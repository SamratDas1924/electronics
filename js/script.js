
/////////////// side-nav /////////////////

function cli1() {
    document.querySelector(".side-nav").classList.add("side-menu");
}

function cli2() {
    document.querySelector(".side-nav").classList.remove("side-menu");
}



/////////////////// carousel ///////////////////

$(document).ready(function(){
    $('#carousel').owlCarousel({
        items:1,
        loop:true,
        nav:true,
        autoplay: true,
        autoplayTimeout: 5000,
    });
})

/////////////// back-to-top onscroll  ///////////////////

let backtotop = document.getElementById("back-to-top");

// When the user scrolls down 100px from the top of the document, show the button

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 100) {
    backtotop.style.display = "block";
  } else {
    backtotop.style.display = "none";
  }
}


//////////////// mobile carousel ///////////////////

$(document).ready(function(){
    $('#mobcarousel').owlCarousel({
        stagePadding: 70,
        loop:true,
        margin:40,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            700:{
                items:3
            },
            900: {
                items:4
            },
            1100:{
                items:5
            }
        }
    });
})




//////////////// smart tv carousel ///////////////////

$(document).ready(function(){
    $('#tvcarousel').owlCarousel({
        stagePadding: 70,
        loop:true,
        margin:40,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            900:{
                items:3
            },
            1100:{
                items:4
            }
        }
    });
})






//////////////// Refrigerator carousel ///////////////////

$(document).ready(function(){
    $('#refcarousel').owlCarousel({
        stagePadding: 90,
        loop:true,
        margin: 60,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            700:{
                items:3
            },
            900: {
                items:4
            },
            1100:{
                items:5
            }
        }
    });
})






//////////////// washing machine carousel ///////////////////

$(document).ready(function(){
    $('#wmcarousel').owlCarousel({
        stagePadding: 90,
        loop:true,
        margin:60,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            700:{
                items:3
            },
            900: {
                items:4
            },
            1100:{
                items:5
            }
        }
    });
})





