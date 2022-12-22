@extends('layouts.comingsoon-layout')

@section('pageTitle', 'About Us')

@section('content')


<header class="px-5 md:px-32 py-96 pb-20 bg-center bg-cover"
    style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.8)),url('./img/header/header.webp'); height: 100vh;">
    <h1 class="font-bold text-4xl text-white">
        @yield('pageTitle')
    </h1>
    <h2 class="text-white text-2xl lg:py-10">Where luxury and beauty is a lifestyle</h2>
</header>


<section class="p-5 md:p-0 md:pl-16 mt-32">
    <div class="grid md:grid-cols-2 items-center mx-auto">
        <div class="">
            <h1 class="md:pl-10 font-bold text-[#BDA06A] text-4xl">About Us</h1>
            <div>
                <img src="../img/grey2.png" class="my-5 block float-left mx-auto w-screen md:hidden">
            </div>
            <p class="mt-5 md:px-10 text-justify md:text-left leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr class="my-4 md:ml-10 w-24 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-[#BDA06A]">
        </div>
        <div>
            <img src="../img/grey2.png" class="hidden float-left mx-auto w-screen md:block"> <!-- DESKTOP -->
        </div>
    </div>
</section>
<main class="p-5 container mx-auto text-justify md:text-left text-gray-400">
    <section class="mt-32">
        <h1 class="uppercase text-center text-black text-4xl">history</h1>
        <div class="mt-20 grid grid-cols-1 gap-y-1">
            <div>
                <h2 class="my-2 text-3xl text-left">Since 1998</h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div>
                <h2 class="my-2 text-3xl text-left">Medical Korean Wave</h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div>
                <h2 class="my-2 text-3xl text-left">Five Most Popular Surgical Procedures</h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div>
                <h2 class="my-2 text-3xl text-left">Popular Surgical Product in Women</h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has
                    been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
            </div>
        </div>
        </div>
    </section>

    <!-- SERVICES WE PROVIDE -->
    <section class="py-32">
        <h1 class="text-4xl text-center text-black">SERVICES WE PROVIDE</h1>
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-2">
            <div>
                <h6 class="text-lg text-gray-500">Service 1</h6>
                <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut.</p>
                <hr class="my-1 w-1/2 h-px bg-gray-200 border-0 dark:bg-gray-400">
                <a href="#" class="text-sm">Read More</a>
            </div>
            <div>
                <h6 class="text-lg text-gray-500">Service 2</h6>
                <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut.</p>
                <hr class="my-1 w-1/2 h-px bg-gray-200 border-0 dark:bg-gray-400">
                <a href="#" class="text-sm">Read More</a>
            </div>
            <div>
                <h6 class="text-lg text-gray-500">Service 3</h6>
                <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut.</p>
                <hr class="my-1 w-1/2 h-px bg-gray-200 border-0 dark:bg-gray-400">
                <a href="#" class="text-sm">Read More</a>
            </div>
            <div>
                <h6 class="text-lg text-gray-500">Service 4</h6>
                <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut.</p>
                <hr class="my-1 w-1/2 h-px bg-gray-200 border-0 dark:bg-gray-400">
                <a href="#" class="text-sm">Read More</a>
            </div>
        </div>
    </section>

</main>
@include('components.cta')
@endsection