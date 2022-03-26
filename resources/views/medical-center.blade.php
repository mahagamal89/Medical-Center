@extends('layouts.app')

@section('content')
<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="{{ route('medical-center.index') }}">
                Medical Center
            </a>
        </div>
        @auth
        <div>
            <button
                class="bg-blue-500 text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button" style="transition: all 0.15s ease 0s;">
                Welcome, {{ auth()->user()->name }}
            </button>
        </div>
        @else
        <div>
            <a href="{{ route('register.index') }}">
                <button
                    class="bg-blue-500 text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    type="button" style="transition: all 0.15s ease 0s;">
                    Login / Register
                </button>
            </a>
        </div>
        @endauth
    </div>
</nav>
<main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("data:image/jpeg;base64,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");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"> </span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            We're determined for your better life.
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            You can get the care you need 24/7 – be it online or in
                            person. You will be treated by caring specialist doctors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Awarded Agency</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Divide details about your product or agency work into parts.
                                A paragraph describing a feature will be enough.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Free Revisions</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Keep you user engaged by providing meaningful information.
                                Remember that by this time, the user is curious.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Verified Company</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Write a few lines about each one. A paragraph describing a
                                feature will be enough. Keep you user engaged!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Eye Care with Top Professionals and In Budget.
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        We've built a healthcare system that puts your needs first.
                        For us, there is nothing more important than the health of
                        you and your loved ones.
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                        <img alt="..."
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpK-19s4RvVeRoWz-c37N0_kWfmu0Arguu2Q&usqp=CAU"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Top Notch Services
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                The Arctic Ocean freezes every winter and much of the
                                sea-ice then thaws every summer, and that process will
                                continue whatever happens.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
                    <img alt="..." class="max-w-full rounded-lg shadow-lg"
                        src="https://media.gettyimages.com/photos/nurse-station-picture-id1295770471?s=612x612" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">A growing Center</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            The extension comes with three pre-built pages to help you get
                            started faster. You can change the text and images and you're
                            good to go.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="fas fa-fingerprint"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Carefully crafted components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="fab fa-html5"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Amazing page examples</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="far fa-paper-plane"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Dynamic components</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @auth
    {{-- Doctors section --}}
    <section class="pt-20 pb-48">
        <div class="px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Here are our Doctors</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-600">
                        These are the doctors affiliated to this medical center.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap px-5 items-center justify-center w-full mt-12 mb-4 lg:flex">
                @foreach ($associatedDoctors as $associatedDoctor)
                <div class="flex flex-col w-1/3 h-auto mb-12 lg:w-1/3 lg:mb-0 border border-gray-300 p-6 rounded-lg"
                    style="margin: 5px;">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-36 w-36 text-blue-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">{{ $associatedDoctor->name }}</h4>
                            <p class="text-gray-600">{{ $associatedDoctor->specialist }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endauth

    <section class="pb-20 relative block bg-gray-900">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Build something</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative bg-gray-300 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Find us on any of these platforms, we respond 1-2 business days.
                </h5>
                <div class="mt-6">
                    <button
                        class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button">
                        <i class="flex fab fa-twitter"></i></button><button
                        class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button">
                        <i class="flex fab fa-facebook-square"></i></button><button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button">
                        <i class="flex fab fa-dribbble"></i></button><button
                        class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button">
                        <i class="flex fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.creative-tim.com/presentation">About Us</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://blog.creative-tim.com">Blog</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.github.com/creativetimofficial">Github</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other Resources</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                                    License</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/privacy">Privacy Policy</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © 2019 Tailwind Starter Kit by
                    <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Creative Tim</a>.
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
</script>
@endsection