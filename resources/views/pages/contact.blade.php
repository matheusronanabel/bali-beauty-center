@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Contact Us')

@section('content')
<header class="px-5 md:px-32 py-96 bg-black">
    <h1 class="font-light text-2xl text-white">
        @yield('pageTitle')
    </h1>
</header>

<main class="p-5 md:p-0 container mx-auto">
    <section class="mt-32">
        <h2 class="text-4xl">Contact Us</h2>
        <div class="mt-10 grid md:grid-cols-2 gap-10 mx-auto">
            <div>
                <h6>NAME</h6>
                <input class="border-2 w-full h-16 border-[#BDA06A]" type="text" name="name" value="">
            </div>
            <div>
                <h6>EMAIL</h6>
                <input class="border-2 w-full h-16 border-[#BDA06A]" type="text" name="email" value="">
            </div>
        </div>
        <div class="mt-10 md:mt-5">
            <h6>MESSAGE</h6>
            <input class="border-2 w-full h-44 border-[#BDA06A]" type="text" name="message" value="">
        </div>
        <div class="py-16 md:py-32">
            <button class="bg-[#BDA06A] px-16 py-6 text-md text-white">SUBMIT</button>
        </div>
    </section>

    <!-- LOCATION -->
    <section class="">
        <h1 class="text-3xl text-center">Location</h1>
        <div class="py-10 md:px-10 grid md:grid-cols-3 mx-auto gap-y-5 items-center">
            <div>
                <h5 class="text-2xl">Bali</h5>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <h6 class="ml-2">Address</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <h6 class="ml-2">Phone Number</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
            </div>
            <div>
                <h5 class="text-2xl">Jakarta</h5>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <h6 class="ml-2">Address</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <h6 class="ml-2">Phone Number</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
            </div>
            <div>
                <h5 class="text-2xl">Korea</h5>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <h6 class="ml-2">Address</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
                <div class="py-2 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <h6 class="ml-2">Phone Number</h6>
                </div>
                <p class="ml-8">Jl. Sunset Road, Gg. Meduri No. 5, Seminyak</p>
            </div>
        </div>
    </section>
</main>
@endsection