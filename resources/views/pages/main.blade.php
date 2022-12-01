@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Bali Beauty Clinic')

@section('content')
<main>
    <header class="px-5 md:px-32 py-96 bg-black">
        <h1 class="font-bold text-4xl text-white">
            @yield('pageTitle')
        </h1>
    </header>
    <section class="mt-5 p-5 container mx-auto w-full h-screen flex items-center text-center">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="tracking-tight text-6xl">
                    Bali Beauty Clinic Experience
                </h1>
                <h4 class="mt-10 px-52">
                    Lorem ipsum dolor sit amet. Eos ipsa perspiciatis et cumque quibusdam ex molestias consequatur ut
                    rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae iste. Eum
                    voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?
                </h4>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="mt-5">
        <div class="grid md:grid-cols-2 place-items-center text-4xl">
            <div>
                <h5 class="px-10">Female</h5>
                <img src="../img/grey2.png" class="w-screen">
            </div>
            <!-- <div>
                <h5 class="px-10">Male</h5>
                <img src="../img/grey2.png" class="w-screen">
            </div> -->
            <div>
                <h5 class="px-10">Non-Surgical</h5>
                <img src="../img/grey2.png" class="w-screen">
            </div>
    </section>
    <!-- BANNER BALI BEAUTY CLINIC -->
    <section class="mt-32 items-center bg-cover bg-full" id="homeBackground"
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
    </section>

    <!-- THE FUTURE OF PLASTIC SURGERY -->
    <section class="mt-32">
        <div class="grid md:grid-cols-2 gap-x-10 items-center">
            <div>
                <img src="../img/black.png" class="float-left mx-auto w-screen">
            </div>
            <div>
                <h1 class="uppercase text-5xl">the future of plastic surgery</h1>
                <div class="mt-5 pr-32 leading-relaxed">
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
    <section class="mt-32">
        <div class="flex items-center justify-center">
            <div class="absolute text-xl text-center ml-52 mr-52 py-32 px-32 bg-white">
                <h1 class="text-7xl uppercase">bring beauty to life</h1>
                <div class="px-5">
                    <p class="mt-10 text-justify leading-relaxed text-md">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                    <p class="mt-10 text-justify leading-relaxed text-md">Lorem ipsum dolor sit amet. Eos
                        ipsa perspiciatis et cumque quibusdam
                        ex molestias consequatur ut
                        rerum cupiditate ut assumenda aliquam. Et galisum deleniti ab ducimus voluptas non vitae
                        iste.
                        Eum
                        voluptate fugit ut velit minus non quisquam explicabo sit omnis laudantium?</p>
                    <p class="mt-10 text-justify leading-relaxed text-md">Lorem ipsum dolor sit amet. Eos
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
        <div class="grid grid-cols-2 gap-x-12">
            <div>
                <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="Herb">
            </div>
            <div>
                <h1 class="text-6xl uppercase font-semibold">bali beauty clinic founder</h1>
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

    <!--  -->
    <section class="mt-32 items-center bg-cover bg-full" id="balibeautyclinic2"
        style="background-image: url('./img/grey2.png'); height: 50vh;">
        <div class="container px-44 py-20 mx-auto">
            <div class="text-white text-center">
                <h1 class="pt-10 text-4xl">Bali Beauty Clinic</h1>
                <p class="pt-10 px-32 text-md text-justify">
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
    </section>

    <!--  -->
    <section class="mt-32">
        <div class="text-center">
            <h6 class="text-lg font-light">Bali Beauty Clinic</h6>
            <h1 class="text-4xl uppercase">meet our doctors</h1>
        </div>
        <div class="mt-10 px-24 grid grid-cols-3 gap-x-10 text-center">
            <div>
                <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="">
                <h2 class="mt-5 text-3xl">Dr. Park Hye Won</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="">
            <h2 class="mt-5 text-3xl">Dr. Kwon Soon Hong</h2>
                <p>Lorem ipsum dolor sit amet.</p></div>
            <div>
                <img src="../img/grey2.png" class="w-screen object-cover rounded-lg" alt="">
            <h2 class="mt-5 text-3xl">Dr. Kim Mu Hyun</h2>
                <p>Lorem ipsum dolor sit amet.</p></div>
        </div>
    </section>
</main>
@endsection