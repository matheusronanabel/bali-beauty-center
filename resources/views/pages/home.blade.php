@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Bali Beauty Clinic')

@section('content')
<header class="px-5 md:px-32 py-96 pb-20 bg-center bg-cover"
    style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.8)),url('./img/home/Header.png'); height: 100vh;">
    <h6 class="text-xl text-white">Welcome to</h6>
    <h1 class="py-5 font-bold text-white text-4xl">ᬩᬮᬶᬩᬶᬬᬸᬢᬶᬓ᭄ᬮᬶᬦᬶ​ᬓ᭄᭟​</h1>
    <h6 class="text-xl text-white">
        @yield('pageTitle')
        <div class="ml-3 mt-5 mb-6 flex items-center mx-auto">
            <a href="javascript:void(0)"
                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                    <path
                        d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
                </svg>
            </a>
            <a href="javascript:void(0)"
                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                        fill="white"></path>
                </svg>
            </a>
            <a href="javascript:void(0)"
                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                    <path
                        d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
                </svg>
            </a>
            <a href="javascript:void(0)"
                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                    <path
                        d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
                </svg>
            </a>
        </div>
    </h6>

</header>
<main class="p-5 lg:p-0">
    <section class="mt-5 container mx-auto md:w-full md:h-screen flex items-center text-center">
        <div class="grid md:grid-cols-12">
            <div class="md:col-span-12">
                <h1 class="tracking-tight text-4xl md:text-6xl">
                    Bali Beauty Clinic Experience
                </h1>
                <h4 class="mt-10 md:px-24 lg:px-52 text-justify md:text-center">
                    Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste. Eum
                    voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                </h4>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 place-items-center text-4xl">
            <div>
                <h5 class="mt-5 md:mt-0 md:px-10">Female</h5>
                <img src="../img/home/woman-having-scar-removed-in-beauty-clinic.png" class="w-screen h-3/4">
            </div>
            <!-- <div>
                <h5 class="px-10">Male</h5>
                <img src="../img/home/grey2.png" class="w-screen">
            </div> -->
            <div>
                <h5 class="mt-5 md:mt-0 md:px-10">Non-Surgical</h5>
                <img src="../img/home/cosmetologist-performing-cleansing-skincare-proced.png" class="w-screen h-3/4">
            </div>
    </section>
</main>

<!-- BANNER BALI BEAUTY CLINIC -->
<!-- DESKTOP -->
<section class="mt-20">
    <div class="hidden md:block">
        <a href="#">
            <div class="flex items-center justify-center">
                <div class="md:px-24 lg:px-52 absolute text-center text-white">
                    <img src="../img/home/black.png" class="float-left h-52 w-52" alt="logo">
                    <h1 class="mt-10 text-4xl">Bali Beauty Clinic</h1>
                    <p class="mt-5 text-md leading-relaxed">
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias
                        consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam.
                    </p>
                </div>
                <img src="../img/home/IntroSection.png" class="h-96 w-full object-cover" alt="balibeautyclinic">
            </div>
        </a>
    </div>
    <!-- MOBILE -->
    <div class="mt-32 block md:hidden">
        <a href="#">
            <div class="flex items-center justify-center">
                <div class="absolute text-center">
                    <h1 class="text-4xl">Bali Beauty Clinic</h1>
                    <img src="../img/home/black.png" class="mt-5 mx-auto h-52 w-52" alt="logo">
                    <p class="mt-5 text-md leading-relaxed">
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias
                        consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam.
                    </p>
                </div>
                <img src="../img/home/IntroSection.png" class="h-96 w-full object-cover" alt="balibeautyclinic">
            </div>
        </a>
    </div>
</section>


<!-- <section class="hidden mt-32 items-center bg-cover bg-full md:block" id="balibeautyclinic"
        style="background-image: url('./img/home/grey2.png'); height: 50vh;">
        <div class="container px-44 py-20 mx-auto">
            <div class="text-white text-center">
                <img src="../img/home/black.png" class="float-left mx-auto">
                <h1 class="pt-10 text-4xl">Bali Beauty Clinic</h1>
                <p class="pt-10 text-md">
                    Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam.
                </p>
            </div>
        </div>
    </section> -->

<!-- THE FUTURE OF PLASTIC SURGERY -->
<main class="p-5 lg:p-0">
    <section class="mt-32">
        <div class="grid lg:grid-cols-2 gap-x-10 items-center">
            <div class="hidden lg:block">
                <img src="../img/home/the-future-of-plastic-surgery.png" class="float-left mx-auto w-screen">
                <!-- DESKTOP -->
            </div>
            <div>
                <h1 class="uppercase text-3xl md:text-4xl lg:text-5xl">the future of plastic surgery</h1>
                <div class="block lg:hidden">
                    <img src="../img/home/the-future-of-plastic-surgery.png" class="py-5 float-left mx-auto w-screen">
                    <!-- MOBILE -->
                </div>
                <div class="lg:mt-5 lg:pr-32 text-justify md:text-left leading-relaxed">
                    <p>Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                    </p>
                    <br>
                    <p>Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- BRING BEAUTY TO LIFE -->
    <section class="mt-32 hidden md:block">
        <div class="flex items-center justify-center">
            <div
                class="absolute text-xl text-center mx-1 py-1 px-1 md:mx-32 md:py-16 md:px-16 lg:mx-52 lg:py-32 lg:px-32 bg-white">
                <h1 class="text-2xl md:text-3xl lg:text-6xl uppercase">bring beauty to life</h1>
                <div class="px-5">
                    <p class="mt-10 text-justify leading-relaxed text-sm md:text-md">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                    <p class="mt-10 text-justify leading-relaxed text-sm md:text-md">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                    <p class="mt-10 text-justify leading-relaxed text-sm md:text-md">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                </div>
            </div>
            <img src="../img/home/Frame.png" class="w-screen object-cover" alt="Bring Beauty to Life">
        </div>
    </section>

    <!-- BALI BEAUTY CLINIC FOUNDER -->
    <section class="mt-32 container mx-auto">
        <div class="grid md:grid-cols-2 gap-x-12 items-center">
            <div class="hidden md:block">
                <img src="../img/home/HerbMeiner.png" class="mx-auto rounded-lg" alt="Herb">
            </div>
            <div>
                <h1 class="text-3xl lg:text-5xl uppercase">bali beauty clinic founder</h1>
                <div class="pt-12 block md:hidden">
                    <img src="../img/home/HerbMeiner.png" class="mt-5 md:mt-0 rounded-lg mx-auto" alt="Herb">
                </div>
                <h4 class="pt-3 md:pt-0 text-center md:text-left mt-2 md:mt-5 lg:mt-10 text-2xl">Herb Meiner</h4>
                <p class="pt-6 md:pt-0 mt-2 lg:mt-5 text-md text-justify md:text-left leading-relaxed">Lorem ipsum dolor
                    sit amet.
                    Eos
                    ipsa perspiciatis et cumque quibusdam
                    ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                    iste.
                    Eum
                    voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                <p class="md:mt-3 lg:mt-5 text-md text-justify md:text-left leading-relaxed">Lorem ipsum dolor sit amet.
                    Eos
                    ipsa perspiciatis et cumque quibusdam
                    ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                    iste.
                    Eum
                    voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
            </div>
        </div>
    </section>
</main>

<!-- BALI BEAUTY CLINIC -->
<section class="mt-32" style="background-image: url('./img/home/IntroSection2.png'); height:50%;">
    <div class="py-20 grid grid-cols-3 text-center text-white">
        <div class="col-start-2">
            <h1 class="text-4xl leading-relaxed">Bali Beauty Clinic</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet. Eos
                ipsa perspiciatis et cumque quibusdam
                ex molestias consequatur ut
                rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                iste.
                Eum
                voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                <hr class="my-8 w-full h-1 bg-white rounded border-0">
        </div>
    </div>
</section>
<!-- <section class="mt-32">
    <div class="relative">
        <a href="#">
            <div class="flex items-center justify-center">
                <p class="px-5 md:px-44 lg:px-96 absolute text-4xl text-white text-center leading-relaxed">Bali Beauty
                    Clinic<br><span class="text-sm">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                        <hr class="my-4 md:ml-10 w-12 h-1 bg-black rounded border-0 md:my-10">
                    </span></p>
                <img src="../img/home/IntroSection2.png" class="h-96 w-full object-cover" alt="balibeautyclinic2">
            </div>
        </a>
    </div>
</section> -->
<!-- <section class="hidden mt-32 place-items-center bg-cover bg-full md:block" id="balibeautyclinic2"
        style="background-image: url('./img/home/grey2.png'); height: 50vh;">
        <div class="container mx-auto px-60 py-20">
            <div class="text-white text-center">
                <h1 class="text-4xl">Bali Beauty Clinic</h1>
                <p class="pt-1 text-md text-justify">
                    Lorem ipsum dolor sit amet. Eos
                    ipsa perspiciatis et cumque quibusdam
                    ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                    iste.
                    Eum
                    voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                </p>
            </div>
        </div>
    </section> -->

<!-- MEET OUR DOCTOR -->
<main class="p-5 lg:p-0">
    <section class="mt-32">
        <div class="text-center">
            <h6 class="text-lg font-light">Bali Beauty Clinic</h6>
            <h1 class="text-4xl uppercase">meet our doctors</h1>
        </div>
        <div class="mt-10 lg:px-24 grid md:grid-cols-3 gap-y-10 md:gap-y-0 gap-x-5 lg:gap-x-10 text-center">
            <div>
                <img src="../img/home/Dr-Park-Hye-Won.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Park Hye Won</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <img src="../img/home/Dr-Kwon-Soon-Hong.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Kwon Soon Hong</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <img src="../img/home/Dr-Kim-Mu-Hyun.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Kim Mu Hyun</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>
</main>

<!-- TESTIMONIALS -->
<main class="p-5">
    <section class="mt-32 container mx-auto">
        <h5 class="text-md text-[#7A7A7A]">BALI BEAUTY CLINIC</h5>
        <h1 class="mt-2 text-3xl">TESTIMONIALS</h1>
        <div class="my-12 px-12 container shadow-2xl">
            <div class="py-10 grid md:grid-cols-2 lg:grid-cols-4 items-center">
                <div class="lg:col-span-3 md:pr-12 justify-center">
                    <img src="../img/home/Testimonial.png" class="block md:hidden pb-5 w-full mx-auto rounded-sm"
                        alt="">
                    <h1 class="text-2xl md::text-3xl text-center">TATIANA JOVANSKA</h1>
                    <h6 class="mt-0 md:mt-2 text-[#404040] text-center">Influencer</h6>
                    <p class="mt-5 text-[#A8A8A8] text-justify md:text-center leading-relaxed">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="hidden md:block">
                    <img src="../img/home/Testimonial.png" class="w-full mx-auto rounded-sm" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<!-- <section class="mt-32">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <section class="bg-gray-100">
        <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
            <div class="grid grid-cols-1 gap-y-8 md::grid-cols-3 lg:items-center lg:gap-x-16">
                <div class="max-w-xl text-center sm:text-left">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                        Don't just take our word for it...
                        <br class="hidden sm:block lg:hidden" />
                        Read reviews from our customers
                    </h2>

                    <p class="mt-4 text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        veritatis illo placeat harum porro optio fugit a culpa sunt id!
                    </p>

                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button
                            class="prev-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
                            <span class="sr-only">Previous Slide</span>
                            <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>

                        <button
                            class="next-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
                            <span class="sr-only">Next Slide</span>
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="-mx-6 lg:col-span-2 lg:mx-0">
                    <div class="swiper-container !overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-green-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                                Stayin' Alive
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                No, Rose, they are not breathing. And they have no arms or
                                                legs … Where are they? You know what? If we come across
                                                somebody with no arms or legs, do we bother resuscitating
                                                them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-green-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                                Stayin' Alive
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                No, Rose, they are not breathing. And they have no arms or
                                                legs … Where are they? You know what? If we come across
                                                somebody with no arms or legs, do we bother resuscitating
                                                them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-green-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                                Stayin' Alive
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                No, Rose, they are not breathing. And they have no arms or
                                                legs … Where are they? You know what? If we come across
                                                somebody with no arms or legs, do we bother resuscitating
                                                them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4 lg:hidden">
                <button aria-label="Previous slide"
                    class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                    <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide"
                    class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
</section> -->
@endsection




<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: {
            delay: 8000,
        },
        breakpoints: {
            640: {
                centeredSlides: true,
                slidesPerView: 1.25,
            },
            1024: {
                centeredSlides: false,
                slidesPerView: 1.5,
            },
        },
        navigation: {
            nextEl: '.next-button',
            prevEl: '.prev-button',
        },
    })
})
</script>