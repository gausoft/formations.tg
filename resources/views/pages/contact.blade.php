@extends('layouts/app')
@section('title') Contactez-nous @endsection
@section('content')
<!-- component -->
<div class="relative flex justify-center min-h-screen bg-white items-top dark:bg-gray-900 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-800 sm:text-5xl dark:text-white">
                        Laissez-nous un message
                    </h1>
                    <p class="mt-2 text-lg font-medium text-gray-600 text-normal sm:text-2xl dark:text-gray-400">
                        Remplissez le formulaire pour entamer une conversation
                    </p>

                    <div class="flex items-center text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div class="w-40 ml-4 font-semibold tracking-wide text-md">
                            Acme Inc, Street, State,
                            Postal Code
                        </div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="w-40 ml-4 font-semibold tracking-wide text-md">
                            +44 1234567890
                        </div>
                    </div>

                    <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div class="w-40 ml-4 font-semibold tracking-wide text-md">
                            info@acme.org
                        </div>
                    </div>
                </div>

                <form class="flex flex-col justify-center p-6" autocomplete="off">
                    <div class="flex flex-col">
                        <input type="name" name="name" id="name" placeholder="Votre nom complet"
                            class="px-3 py-3 mt-2 font-semibold text-gray-800 w-100 focus:border-primary focus:outline-none">
                    </div>

                    <div class="flex flex-col mt-2">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="px-3 py-3 mt-2 font-semibold text-gray-800 w-100 focus:border-primary focus:outline-none">
                    </div>

                    <div class="flex flex-col mt-2">
                        <input type="tel" name="tel" id="tel" placeholder="Numéro de téléphone"
                            class="px-3 py-3 mt-2 font-semibold text -gray-800 w-100 focus:border-primary focus:outline-none">
                    </div>

                    <div class="flex flex-col mt-2">
                        <textarea rows="4" maxlength="210" x-model="maximum" x-ref="maximum"
                            class="block w-full px-3 py-2 mt-1 shadow-sm focus:outline-none"
                            placeholder="Entrer votre message"></textarea>
                    </div>

                    <button type="submit"
                        class="px-6 py-3 mt-3 font-bold text-white transition duration-300 ease-in-out bg-primary md:w-32 hover:bg-blue-dark hover:bg-primary">
                        Soumettre
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection