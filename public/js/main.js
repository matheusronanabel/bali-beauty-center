// Navbar Desktop Behaviour
$(document).ready(function () {
    // Transition effect for navbar
    $(window).scroll(function () {
        // checks if window is scrolled more than 200px, adds/removes classes
        if ($(this).scrollTop() > 200) {
            $("#navbarDesktop").addClass(
                "bg-white transition text-black ease-in-out duration-300"
            );
            $("#navbarDesktopMenu a").addClass("text-black");
            $("#navbarDesktop").removeClass("bg-transparent");
            $("#navbarDesktopMenu").removeClass("text-white");
        } else {
            $("#navbarDesktop").addClass("bg-transparent");
            $("#navbarDesktop").removeClass("bg-black");
            $("#navbarDesktopMenu a").addClass("text-white");
            $("#navbarDesktopMenu a").removeClass("text-black");
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
            $("#navbarMobile").removeClass("bg-black");
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