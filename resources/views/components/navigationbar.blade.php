<nav id="navbarMobile" class="z-50 fixed top-0 right-0 w-full bg-transparent grid grid-cols-12 lg:hidden items-center">
    <div class="col-span-6 px-5 py-2">
        <a href="/">
            <img src="{{asset('/img/none.png')}}" alt="BBC Logo" class="text-white w-1/2">
        </a>
    </div>
    <div class="col-span-6 px-5 py-2">
        <svg id="dropdownTrigger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="ml-auto w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>
    <div id="navMenu"
        class="col-span-12 mt-3 space-y-4 border-b-[#BDA06A] border-collapse border-b-2 bg-white px-10 py-5 rounded-md">
        <a href="/home" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Home</a>
        <a href="/about" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">About</a>
        <a href="/services" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Services</a>
        <a href="/blog"
            class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Blog</a>
        <a href="/contact-us" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Contact Us</a>
    </div>
</nav>

<nav id="navbarDesktop"
    class="z-50 hidden w-full lg:grid grid-cols-12 items-center px-20 bg-transparent fixed top-0 right-0 drop-shadow-md">
    <div class="col-span-3">
        <a href="/">
            <img src="{{asset('/img/none.png')}}" class="w-32" alt="BBC Logo">
        </a>
    </div>
    <div id="navbarDesktopMenu" class="col-span-6 flex space-x-10 text-center mx-auto text-white">
    <a href="/home" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Home</a>
        <a href="/about" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">About</a>
        <a href="/services" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Services</a>
        <a href="/blog"
            class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Blog</a>
        <a href="/contact-us" class="block text-right hover:text-neutral-400 transition ease-in-out duration-300">Contact Us</a>
    </div>
    <div id="consultationMenu" class="col-span-3">
        <a href="/contact-us"
            class="block w-fit bg-transparent text-white border-white border-2 px-3 py-2 ml-auto transition ease-in-out duration-300 rounded-md hover:translate-x-4">Make Consultation</a>
    </div>
</nav>