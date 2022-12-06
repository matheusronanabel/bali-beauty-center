@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Bali Beauty Clinic')

@section('content')
<header class="px-5 md:px-32 py-96 bg-black">
    <h1 class="font-bold text-4xl text-white">
        @yield('pageTitle')
    </h1>
</header>
<main class="p-5 md:p-0">
    <section class="mt-5 p-5 container mx-auto md:w-full md:h-screen flex items-center text-center">
        <div class="grid md:grid-cols-12">
            <div class="md:col-span-12">
                <h1 class="tracking-tight text-4xl md:text-6xl">
                    Bali Beauty Clinic Experience
                </h1>
                <h4 class="mt-10 md:px-24 lg:px-52">
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
                <img src="../img/grey2.png" class="w-screen h-3/4">
            </div>
            <!-- <div>
                <h5 class="px-10">Male</h5>
                <img src="../img/grey2.png" class="w-screen">
            </div> -->
            <div>
                <h5 class="mt-5 md:mt-0 md:px-10">Non-Surgical</h5>
                <img src="../img/grey2.png" class="w-screen h-3/4">
            </div>
    </section>
</main>

<!-- BANNER BALI BEAUTY CLINIC -->
<!-- DESKTOP -->
<section class="mt-20">
    <div class="hidden md:block">
        <a href="#">
            <div class="flex items-center justify-center">
                <div class="md:px-24 lg:px-52 absolute text-center">
                    <img src="../img/black.png" class="float-left h-52 w-52" alt="logo">
                    <h1 class="mt-10 text-4xl">Bali Beauty Clinic</h1>
                    <p class="mt-5 text-md">
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias
                        consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam.
                    </p>
                </div>
                <img src="../img/grey2.png" class="h-96 w-full object-cover" alt="balibeautyclinic">
            </div>
        </a>
    </div>
    <!-- MOBILE -->
    <div class="mt-32 block md:hidden">
        <a href="#">
            <div class="flex items-center justify-center">
                <div class="absolute text-center">
                    <h1 class="text-4xl">Bali Beauty Clinic</h1>
                    <img src="../img/black.png" class="mt-5 mx-auto h-52 w-52" alt="logo">
                    <p class="mt-5 text-md">
                        Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias
                        consequatur
                        ut
                        rerum cupiditate ut assumenda aliquam.
                    </p>
                </div>
                <img src="../img/grey2.png" class="h-96 w-full object-cover" alt="balibeautyclinic">
            </div>
        </a>
    </div>
</section>


<!-- <section class="hidden mt-32 items-center bg-cover bg-full md:block" id="balibeautyclinic"
        style="background-image: url('./img/grey2.png'); height: 50vh;">
        <div class="container px-44 py-20 mx-auto">
            <div class="text-white text-center">
                <img src="../img/black.png" class="float-left mx-auto">
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
                <img src="../img/black.png" class="float-left mx-auto w-screen">
            </div>
            <div>
                <h1 class="uppercase text-3xl md:text-4xl lg:text-5xl">the future of plastic surgery</h1>
                <div class="block lg:hidden">
                    <img src="../img/black.png" class="float-left mx-auto w-screen">
                </div>
                <div class="lg:mt-5 lg:pr-32 leading-relaxed">
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
    <section class="mt-32 hidden md:block ">
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
            <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="Bring Beauty to Life">
        </div>
    </section>

    <!-- BALI BEAUTY CLINIC FOUNDER -->
    <section class="mt-32 container mx-auto">
        <div class="grid md:grid-cols-2 gap-x-12">
            <div class="hidden md:block">
                <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="Herb">
            </div>
            <div>
                <h1 class="text-3xl lg:text-6xl uppercase">bali beauty clinic founder</h1>
                <div class="block md:hidden">
                    <img src="../img/grey2.png" class="mt-5 md:mt-0 w-screen object-cover rounded-lg" alt="Herb">
                </div>
                <h4 class="mt-10 text-2xl">Herb Meiner</h4>
                <p class="mt-10 text-md">Lorem ipsum dolor sit amet. Eos
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
<section class="mt-32">
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
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</span></p>
                <img src="../img/grey2.png" class="h-96 w-full object-cover" alt="balibeautyclinic2">
            </div>
        </a>
    </div>
</section>
<!-- <section class="hidden mt-32 place-items-center bg-cover bg-full md:block" id="balibeautyclinic2"
        style="background-image: url('./img/grey2.png'); height: 50vh;">
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
        <div class="mt-10 lg:px-24 grid md:grid-cols-3 gap-x-5 lg:gap-x-10 text-center">
            <div>
                <img src="../img/grey2.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Park Hye Won</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <img src="../img/grey2.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Kwon Soon Hong</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <img src="../img/grey2.png" class=" w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-2xl lg:text-3xl">Dr. Kim Mu Hyun</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>
</main>

<!-- TESTIMONIALS -->
<section class="mt-32">
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
</section>
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