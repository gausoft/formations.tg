@extends('layouts/app')
@section('title') Toutes les formations @endsection

@section('content')
<div class="container">
    <div class="flex items-center justify-between h-20 px-4 py-16 mt-10 mb-4 text-sm bg-gray-200 top-20">
        <form class="relative w-full md:w-1/2" action="/search" method="get">
            <svg width="20" height="20" fill="currentColor"
                class="absolute text-gray-400 transform -translate-y-1/2 left-3 top-1/2">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                </path>
            </svg>
            <input required="" value="" name="q" autocomplete="off" spellcheck="false" type="text"
                placeholder="Rerchercher une formation"
                class="z-0 w-full py-2 pl-10 text-sm focus:shadow focus:outline-none h-11">
        </form>
        <div class="items-center flex-shrink-0 hidden lg:flex">
            <span class="mr-2 font-bold font-display">Trier par:</span>
            <label class="absolute hidden w-0 h-0 opacity-0" for="headerSort"></label>
            <select nam="footerSort" id="headerSort" class="h-10 p-0 py-1 pl-2 pr-0 text-sm"
                style="background-color: #FFFFFF">
                <option value="votes">Plus Consultées</option>
                <option value="votesDown">Moins Consultées</option>
                <option value="date">Nouvelles</option>
                <option value="dateDown">Anciennes</option>
                <option value="title">Nom A-Z</option>
                <option value="titleDown">Nom Z-A</option>
                <option value="random">Aléatoire</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-2 pb-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
        @for ($i = 0; $i < 6; $i++) 
        <div class="py-3">
            <div class="flex w-full overflow-hidden bg-white shadow-lg">
                <div class="relative w-1/3 bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                    @if (rand(0, 1))
                    <p class="absolute top-0 px-3 py-1 font-semibold text-gray-800 bg-secondary">
                        GRATUIT
                    </p>
                    @endif
                </div>
                <div class="w-2/3 px-4 pb-4">
                    <a href="{{ route('trainings.show', 'training-slug') }}">
                        <h1 class="text-xl font-bold text-black line-clamp-2">Libellé de la formation</h1>
                    </a>
                    <a href="">
                        <p class="text-base font-normal">Centre de formation</p>
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit In
                        odit exercitationem fuga id nam quia
                    </p>
                    <div class="my-4">
                        <div class="flex space-x-1">
                            <div class="flex items-center space-x-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mb-1.5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <p>{{ now()->addDays(rand(0, 4))->format('d/m/Y') }}</p>
                            </div>

                            <div class="flex items-center space-x-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mb-1.5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <p>{{ now()->addDays(rand(7, 20))->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <p>{{ rand(0, 1) ? 'En ligne' : 'Adidogomé Apédokoè' }}</p>
                        </div>
                    </div>
                    <div class="flex mt-3 item-center">
                        <button class="px-3 py-1 mr-1 text-xs font-bold text-white bg-primary">#coaching</button>
                        <button class="px-3 py-1 text-xs font-bold text-white bg-primary">#computer</button>
                    </div>
                </div>
            </div>
    </div>
    @endfor

    <!-- This is an example component -->
    <div class="flex items-center">
        <ul class="flex pl-0 my-2 list-none">
            <li
                class="relative block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-r-0 border-gray-300 hover:bg-gray-200">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li
                class="relative block px-3 py-2 leading-tight text-gray-500 bg-white border border-r-0 border-gray-300 hover:bg-gray-200">
                <a class="page-link" href="#">1</a>
            </li>
            <li
                class="relative block px-3 py-2 leading-tight text-gray-500 bg-white border border-r-0 border-gray-300 hover:bg-gray-200">
                <a class="page-link" href="#">2</a>
            </li>
            <li
                class="relative block px-3 py-2 leading-tight text-gray-500 bg-white border border-r-0 border-gray-300 hover:bg-gray-200">
                <a class="page-link" href="#">3</a>
            </li>
            <li
                class="relative block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-200">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
</div>
@endsection