@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Blog')

@section('content')

<header class="px-5 md:px-32 py-96 pb-20 bg-center bg-cover"
    style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.8)),url('./img/blogpost/Blogpost-Header.png'); height: 100vh;">
    <h2 class="text-2xl text-white">
        @yield('pageTitle')
    </h2>
    <h1 class="text-white text-4xl lg:py-10">Our Blogpost</h1>
</header>

<main class="p-5 container mx-auto text-gray-400">
    <!-- <section class="mt-32">
        <div
            class="grid md:grid-cols-2 gap-x-5 place-items-center overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 rounded-lg shadow drop-shadow-2xl">
            <div><img src="../img/grey2.png" class="w-screen h-80"></div>
            <div class="">
                <h2 class="py-5 md:py-0 text-xl text-gray-500">Blogpost Title</h2>
                <p class="py-5 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </section> -->

    <section class="mt-32">
        <div
            class="grid md:grid-cols-2 gap-x-5 place-items-center overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 hover:shadow hover:drop-shadow-2xl">
            <!-- @include('components.cards.card1') -->
            <div>
                <img src="{{ asset('/img/blogpost/cards/card1.png') }}" class="h-80 w-screen" alt="">
            </div>
            <div class="space-y-2 mt-2 px-4 py-4">
                <h2 class="font-bold text-lg">Blogpost Title</h2>
                <hr>
                <p class="text-sm text-justify leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                    non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                    labore eaque possimus.
                </p>
                <a href="#"
                    class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                    More</a>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="">
        <div class="mt-10 md:mt-0 md:py-20 grid gap-10 md:grid-cols-2 lg:grid-cols-3 items-center">
            {{-- Looping Database Blogpost --}}
            @include('components.cards.card2')
            @include('components.cards.card3')
            @include('components.cards.card4')
            @include('components.cards.card5')
            @include('components.cards.card6')
            @include('components.cards.card7')
        </div>
    </section>

    <!-- <section class="">
        <div class="grid gap-x-5 gap-y-5 md:gap-y-10 md:gap-x-14 grid-cols-12 py-20 items-center">
            {{-- Looping Database Blogpost --}}
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 rounded-lg shadow drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full"
                        alt="American Wave Machine">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 shadow rounded-lg drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full" alt="">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 shadow rounded-lg drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full" alt="Sirfin Blogpost">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 shadow rounded-lg drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full" alt="Sirfin Blogpost">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 shadow rounded-lg drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full" alt="Sirfin Blogpost">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 overflow-hidden bg-transparent hover:bg-white transition ease-in-out duration-300 shadow rounded-lg drop-shadow-2xl w-full">
                <div>
                    <img src="{{ asset('/img/grey2.png') }}" class="object-none h-44 w-full" alt="Sirfin Blogpost">
                </div>
                <div class="space-y-2 mt-2 px-4 py-4">
                    <h2 class="font-bold text-lg">Blogpost Title</h2>
                    <hr>
                    <p class="text-sm text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero fugiat, distinctio vel
                        non aperiam ab rem eius soluta porro culpa, similique, rerum eum deserunt provident? Ab
                        labore eaque possimus.
                    </p>
                    <a href="#"
                        class="block w-fit px-2 py-3 text-sm hover:scale-75 transition ease-in-out duration-300">Read
                        More</a>
                </div>
            </div>
        </div>
    </section> -->
</main>
@include('components.cta')
@endsection