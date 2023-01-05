@extends('layouts.comingsoon-layout')

@section('pageTitle', 'Make Consultation')

@section('content')
<header class="px-5 md:px-32 py-56 pb-20 bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.8)),url('./img/bookappointment/Book-Header.png'); height: 70vh;">
    <h1 class="font-bold text-4xl text-white text-center">
        @yield('pageTitle')
    </h1>
</header>
<main class="p-5 lg:p-20 container mx-auto font-light">
    <section class="grid md:grid-cols-4 gap-x-5 mx-auto">
        <!-- SELECT BOX -->
        <div class="col-span-2 justify-center">
            <h5 class="text-2xl py-3">DOCTOR</h5>
            <select
                class="form-select appearance-none block w-full h-14 px-3 py-1.5 text-lg font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-[#DBCAB7] transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label="Default select example">
                <option selected></option>
                <option value="1">Dr. Park Hye Won</option>
                <option value="2">Dr. Kwon Soon Hong</option>
                <option value="3">Dr. Kim Mu Hyun</option>
                <option value="3">Dr. Joo Kwon</option>
            </select>
        </div>
        <div class="justify-center">
            <h1 class="text-2xl py-3 ">TIME</h1>

            <select
                class="form-select appearance-none block w-full h-14 px-3 py-1.5 text-lg font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-[#DBCAB7] transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label="Default select example">
                <option selected></option>
                <option value="1">07:00</option>
                <option value="2">13:00</option>
                <option value="3">16:00</option>
            </select>

        </div>
        <div class="">
            <h1 class="invisible text-2xl py-3">CONFIRM</h1>
            <button class="bg-[#BDA06A] appearance-none block w-full h-14 px-3 py-1.5 lg:text-xl text-white">CHECK
                AVAILABILITY</button>
        </div>
    </section>

    <!-- CALENDAR -->
    <section class="mt-32">
        @include('components.calendar')
    </section>
    <!-- FORM -->

    <section class="mt-32">
        <h2 class="text-4xl uppercase font-normal">reservation now</h2>
        <div class="mt-10 grid md:grid-cols-2 gap-10 mx-auto">
            <div>
                <h6>FIRST NAME</h6>
                <input class="border w-full h-14 border-[#BDA06A]" type="text" name="name" value="">
            </div>
            <div>
                <h6>LAST NAME</h6>
                <input class="border w-full h-14 border-[#BDA06A]" type="text" name="email" value="">
            </div>
            <div>
                <h6>PHONE</h6>
                <input class="border w-full h-14 border-[#BDA06A]" type="text" name="name" value="">
            </div>
            <div>
                <h6>EMAIL</h6>
                <input class="border w-full h-14 border-[#BDA06A]" type="text" name="email" value="">
            </div>
        </div>
        <div class="mt-10 md:mt-5">
            <h6>MESSAGE</h6>
            <input class="border w-full h-44 border-[#BDA06A]" type="text" name="message" value="">
        </div>
        <div class="py-6">
            <button class="bg-[#BDA06A] px-12 py-3 text-md text-white">SEND</button>
        </div>
    </section>
</main>

@endsection