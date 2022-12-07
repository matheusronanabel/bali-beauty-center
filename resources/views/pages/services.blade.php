@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Service')

@section('content')

<header class="px-5 md:px-32 py-96 bg-black">
    <h1 class="font-light text-2xl text-white">
        @yield('pageTitle')
    </h1>
    <h3 class="text-4xl text-white">We're happy to serve you</h3>
</header>

<main class="p-5 md:p-0 container mx-auto text-gray-400">
    <section>
        <div class="mt-32 text-center">
            <h1 class="py-5 text-black text-3xl">Services</h1>
            <p class="leading-relaxed md:px-32 lg:px-48 xl:px-96 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do
                eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </section>

    <section class="my-32">
        <div class="grid md:grid-cols-2 gap-x-5 gap-y-5 md:gap-y-20 mx-auto items-center">
            <div class="hidden md:block">
                <img src="../img/grey2.png" class="mx-auto"> <!-- DESKTOP -->
            </div>
            <div>
                <h2 class="uppercase text-3xl text-black">female</h2>
                <div class="mt-5 block md:hidden">
                    <img src="../img/grey2.png" class="mx-auto">
                </div>
                <p class="mt-3 lg:mt-10 text-justify md:text-left leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <div class="mt-5 md:mt-3 lg:mt-5 grid grid-cols-2 md:gap-y-3 md:grid-cols-3 text-[#BDA06A]">
                    <a href="#" class="">Breast Surgery</a>
                    <a href="#" class="">Stem Cell</a>
                    <a href="#" class="">Rhinoplasty</a>
                    <a href="#" class="">Face Lifting</a>
                    <a href="#" class="">Eye Correction</a>
                    <a href="#" class="">Blepharoplasty</a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="../img/grey2.png" class="mx-auto">
            </div>
            <div>
                <h2 class="mt-10 md:mt-0 uppercase text-3xl text-black">non-surgical</h2>
                <div class="mt-5 block md:hidden">
                    <img src="../img/grey2.png" class="mx-auto">
                </div>
                <p class="mt-3 lg:mt-10 text-justify md:text-left leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <div class="mt-5 md:mt-3 lg:mt-5 grid grid-cols-2 md:gap-y-3 md:grid-cols-3 text-[#BDA06A]">
                    <a href="#" class="">Breast Surgery</a>
                    <a href="#" class="">Stem Cell</a>
                    <a href="#" class="">Rhinoplasty</a>
                    <a href="#" class="">Face Lifting</a>
                    <a href="#" class="">Eye Correction</a>
                    <a href="#" class="">Blepharoplasty</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection