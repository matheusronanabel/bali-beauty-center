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
            $("#navMenu").addClass("text-black")
            $("#navMenu").addClass("border-b-2")
        } else {
            $("#navMenu").removeClass("text-black")
            $("#navMenu").addClass("text-white")
            $("#navbarMobile").addClass("bg-transparent");
            $("#navbarMobile").removeClass("bg-white");
            $("#dropdownTrigger").addClass("text-white");
            $("#dropdownTrigger").removeClass("text-black");
            $("#navMenu").removeClass("border-b-2")
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
            $("#navMenu").addClass("block lg:hidden");

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