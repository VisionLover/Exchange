//-----------------------------slick slider--------------------------------//

$(document).on('ready', function () {

    $('.slick-content-slider').slick({
        centerMode: true,
        centerPadding: '20px',
        dots: true, /* Just changed this to get the bottom dots navigation */
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});


//----------------------------------product menu----------------------------------//

$(document).ready(function(){

    const navItems = Array.from(document.getElementsByClassName("nav-link1"));

    navItems.forEach(navItem => {
        navItem.addEventListener("click", onSelect);
    });

    function onSelect(e) {
        clearSelection();
        setActive(e.target, true);
    }

    function setActive(element, active) {
        active
            ? element.classList.add("active")
            : element.classList.remove("active");
    }

    function clearSelection() {
        navItems.forEach(navItem => setActive(navItem, false));
    }
});

$(document).ready(function(){

    const navItems = Array.from(document.getElementsByClassName("list_product"));

    navItems.forEach(navItem => {
        navItem.addEventListener("click", onSelect);
    });

    function onSelect(e) {
        clearSelection();
        setActive(e.target, true);
    }

    function setActive(element, active) {
        active
            ? element.classList.add("activate")
            : element.classList.remove("activate");
    }

    function clearSelection() {
        navItems.forEach(navItem => setActive(navItem, false));
    }
});

//-------------------------------------------------------------------------------------
$(document).ready(function () {
    $(".down").click(function () {
        $(".mojudi").slideToggle();
        $(".down").toggleClass("arrow");

    });



    $(".dokme").click(function () {
        $(".dokme").hide();
        $(".kharid").show();

    });

    $(".dokme2").click(function () {
        $(".dokme2").hide();
        $(".kharid1").show();

    });

    $(".li1").click(function () {

        $(".divIfo").show();
        $(".divComment").hide();

    });
    $(".li2").click(function () {

        $(".divIfo").hide();
        $(".divComment").show();
    });

    $(".moreMobile").click(function () {
        $(".fixedMoreInfo").fadeIn();
    });
    $(".moreMobileBack").click(function () {
        $(".fixedMoreInfo").fadeOut();
    });

    $(".aa").click(function(){
        $(".divIfo").hide();
        $(".divComment").show();

        $("#li1").removeClass("activate");
        $("#li2").addClass("activate");

    });
});
