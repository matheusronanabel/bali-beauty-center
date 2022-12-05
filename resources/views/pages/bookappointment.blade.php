@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Make Consultation')

@section('content')
<header class="px-5 md:px-32 py-96 bg-black">
    <h1 class="font-bold text-4xl text-white text-center">
        @yield('pageTitle')
    </h1>
</header>
<main class="container mx-auto">
    <section>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </section>

    <section class="mt-32">
        <h2 class="text-4xl uppercase">reservation now</h2>
        <div class="mt-10 grid md:grid-cols-2 gap-10 mx-auto">
            <div>
                <h6>FIRST NAME</h6>
                <input class="border-2 w-full h-16 border-[#BDA06A]" type="text" name="name" value="">
            </div>
            <div>
                <h6>LAST NAME</h6>
                <input class="border-2 w-full h-16 border-[#BDA06A]" type="text" name="email" value="">
            </div>
            <div>
                <h6>PHONE</h6>
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
            <button class="bg-[#BDA06A] px-16 py-6 text-md text-white">SEND</button>
        </div>
    </section>
</main>

@endsection