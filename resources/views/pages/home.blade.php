@extends('layouts/app')
@section('title') Accueil @endsection

@section('content')
<div class="p-4 bg-gray-200 align-center">
    <h1 class="p-8 mb-4 text-5xl font-extrabold leading-tight text-center text-black animated animation-delay-250 fadeInUp xl:text-6xl">
        Portail des <span class="text-primary">formations</span>
    </h1>
    <p class="max-w-xl mx-auto mb-8 text-xl text-center animated animation-delay-500 fadeInUp xl:max-w-2xl">
        #formations, #modulaire, #professionnelles, #thematiques, #marketplace #recherche, #presentiels, #online, #gratuit,
        #payants
    </p>

    <div class="w-full mt-5 md:mx-auto md:w-1/2 sm:px-8 xl:px-8">
        <form class="relative mb-5" action="/search" method="get">
            <svg width="20" height="20" fill="currentColor"
                class="absolute text-gray-400 transform -translate-y-1/2 left-3 top-1/2">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                </path>
            </svg>
            <input required="" value="" name="q" autocomplete="off" spellcheck="false" type="text"
                placeholder="Rerchercher une formation"
                class="z-0 w-full py-2 pl-10 text-xs md:text-sm focus:shadow focus:outline-none h-11">
            <div class="absolute top-1.5 right-2 hidden md:block">
                <select id="currency" name="currency"
                    class="h-full px-2 py-2 text-gray-500 bg-transparent border-transparent focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option disabled selected>Thématiques</option>
                    <option>Toutes</option>
                    <option>Informatique</option>
                    <option>Finances</option>
                    <option>Trading</option>
                    <option>Artisanat</option>
                    <option>Autres</option>
                </select>
            </div>
        </form>
    </div>
</div>

<div class="m-12 ">
    <h2 class="mb-4 text-xl font-extrabold text-left text-black">Thématiques (20)
    </h2>
    <div class="grid grid-cols-1 gap-6 pb-6 mb-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @for ($i = 0; $i < 12; $i++) <a href="{{ route('category.trainings', 'data-science') }}">
            <div
                class="relative flex items-center justify-center h-64 overflow-hidden font-medium text-white location w-100">
                <div
                    class="absolute inset-0 z-10 transition duration-300 ease-in-out transform scale-100 location__image">
                    <img src="https://res.cloudinary.com/typeeighty/image/upload/c_scale\,f_auto\,q_auto\,w_480/v1597890837/clinic-near-me/ang-mo-kio.jpg"
                        width="384" height="256" alt="Ang Mo Kio" loading="lazy" decoding="async"
                        srcset="https://res.cloudinary.com/typeeighty/image/upload/c_scale\,f_auto\,q_auto\,w_800/v1597890837/clinic-near-me/ang-mo-kio.jpg 2x, https://res.cloudinary.com/typeeighty/image/upload/f_auto\,q_auto/v1597890837/clinic-near-me/ang-mo-kio.jpg 3x"
                        class="object-cover w-full h-full">
                </div> <span class="z-20 uppercase">
                    Ang Mo Kio (17)
                </span>
            </div>
            </a>
            @endfor
    </div>
</div>

<div class="flex flex-col items-center px-4 py-8 mb-16 bg-right-bottom bg-no-repeat bg-cover bg-primary animated fadeIn sm:flex-row sm:py-16 sm:px-12"
    style="background-image: url('img/cta-illustration.svg')">
    <h2
        class="max-w-xs mx-auto mb-10 font-bold text-center text-white sm:text-xl sm:mr-4 sm:max-w-full sm:text-left sm:w-1/3 sm:mx-0 sm:mb-0 md:w-1/2 lg:w-7/12">
        Restez informer des nouvelles formations
    </h2>
    <div class="flex flex-grow w-full sm:w-2/3 md:w-1/2 lg:w-5/12">
        <form class="flex items-center w-full p-4 bg-white space-between" action="#">
            <input class="flex-grow text-gray-900 placeholder-gray-500 bg-white appearance-none focus:outline-none"
                type="text" placeholder="Entrer votre email" />
            <svg class="fill-current text-primary" width="16" height="12" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5H1c-.6 0-1 .4-1 1s.4 1 1 1h8v5l7-6-7-6v5z" fill="#0F6F54"></path>
            </svg>
        </form>
    </div>
</div>


@include('shared/modal')

@endsection