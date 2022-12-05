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
<div class="mt-16 md:mt-32">
    <button class="bg-[#BDA06A] px-16 py-6 text-md text-white">SUBMIT</button>
</div>
    </section>
</main>
@endsection