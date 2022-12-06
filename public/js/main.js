// Navbar Desktop Behaviour
$(document).ready(function () {
    // Transition effect for navbar
    $(window).scroll(function () {
        // checks if window is scrolled more than 200px, adds/removes classes
        if ($(this).scrollTop() > 200) {
            $("#navbarDesktop").addClass(
                "bg-white transition ease-in-out duration-300"
            );
            $("#navbarDesktop").removeClass("bg-transparent");
            $("#navbarDesktopMenu a").removeClass("text-white");
            $("#navbarDesktopMenu a").addClass("text-black");
            $("#consultationMenu a").removeClass("text-white");
            $("#consultationMenu a").removeClass("border-white");
            $("#consultationMenu a").addClass("text-black");
            $("#consultationMenu a").addClass("border-black");
            
        } else {
            $("#navbarDesktop").addClass("bg-transparent");
            $("#navbarDesktop").removeClass("bg-white");
            $("#navbarDesktopMenu a").addClass("text-white");
            $("#navbarDesktopMenu a").removeClass("text-black");
            $("#consultationMenu a").addClass("text-white");
            $("#consultationMenu a").removeClass("text-black");
            $("#consultationMenu a").addClass("border-white");
            $("#consultationMenu a").removeClass("border-black");
        }
    });
});

// Navbar Mobile Behaviour
$(document).ready(function () {
    // Transition effect for navbar
    $(window).scroll(function () {
        // checks if window is scrolled more than 200px, adds/removes classes
        if ($(this).scrollTop() > 200) {
            $("#navbarMobile").addClass(
                "bg-white transition text-black ease-in-out duration-300"
            );
            $("#navbarMobile").removeClass("bg-transparent");
            $("#dropdownTrigger").addClass("text-black");
            $("#dropdownTrigger").removeClass("text-white");
        } else {
            $("#navbarMobile").addClass("bg-transparent");
            $("#navbarMobile").removeClass("bg-white");
            $("#dropdownTrigger").addClass("text-white");
            $("#dropdownTrigger").removeClass("text-black");
        }
    });
});

$(document).ready(function () {
    var isOpen = false;

    function navbarTrigger() {
        if (isOpen == false) {
            $("#navMenu").removeClass("block");
            $("#navMenu").addClass("hidden");
        } else {
            $("#navMenu").removeClass("hidden");
            $("#navMenu").addClass("block md:hidden");
        }
    }

    navbarTrigger();

    $("#dropdownTrigger").on("click", function () {
        if (isOpen == true) {
            isOpen = false;
            navbarTrigger();
        } else {
            isOpen = true;
            navbarTrigger();
        }
    });
});

// GOOGLE MAPS
let map;
function initMap(id) {
    const icons = "/img/icon/marker.png"
    const iconsActive = "/img/icon/markeractive.png"
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 1.286920, lng: 103.854570 },
      zoom: 15,
      //id from google maps api
      mapId: 'c9176ce91c74ba37'
    });
}